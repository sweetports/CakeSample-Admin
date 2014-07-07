<?php
App::uses('AppController', 'Controller');
/**
 * Adminss Controller
 *
 * @property User $User
 */
class AdminsController extends AppController {

    public $layout = 'admin';

    public
        $uses = Array('Admin'),
	    $components = array('Paginator','Session','Cookie');
 
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('login');
    }
 
    public function index()
    {
        $this->set('title_for_layout', 'Sample Management System');

        $pagenate = array(
            'conditions' => array(
            'Admin.del_flg' => '0'
            )
        );

        //データ抽出
        $data = $this->paginate('Admin',array(
                'Admin.del_flg' => '0'
            )                        
        );
        $this->set('admins',$data);
    }
 
    public function login() {
        $this->layout = 'login';
        if($this->request->is('post')) {
            // Cookie login
            if($this->Auth->login()) {
                $this->Cookie->write('Auth.Admin.id', $this->request->data['Admin']['id'], false, '+4 weeks');
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }
    }
/**
 * view method
 *
 * @param string $id
 * @return void
 */
    public function view($id = null) {
            $this->Admin->id = $id;
            if (!$this->Admin->exists()) {
                    throw new NotFoundException(__('Invalid %s', __('admin')));
            }
            $this->set('admin', $this->Admin->read(null, $id));
    }
 
    public function logout($id = null){
        $this->Cookie->delete('Auth.Admin.id'); //delete cookie
        $this->Session->destroy();
        $this->Session->delete('Auth.Admin');
        $this->redirect($this->Auth->logout('/admin/login'));
    }
 
    public function add() {
        if($this->request->is('post')) {
            $this->Admin->create();

            //パスワードとパスチェックの値をハッシュ値変換
            if ($this->Admin->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Admin->id = $id;
		if (!$this->Admin->exists()) {
			throw new NotFoundException(__('Invalid %s', __('admin')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

            /* パスワードがないときはセットしない */
            if (empty($this->data['Admin']['password'])) {
                unset($this->request->data['Admin']['password']);
            }else{
                $this->request->data['Admin']['password'] = AuthComponent::password($this->request->data['Admin']['password']);
            }
 
            // userのidとusernameを定義しないと暗号化されない hashing need both username and password
            $this->data['Admin'] += array(
                'id' => $id,
                'username' => $this->request->data['Admin']['username'],
            );
             
            if ($this->Admin->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('admin')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('admin')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Admin->read(null, $id);
		}
        $select_status = array('0' => 'On','1'=>'Off');
        $this->set(compact('select_status'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
            if (!$this->request->is('post')) {
                    throw new MethodNotAllowedException();
            }
            $this->Admin->id = $id;
            if (!$this->Admin->exists()) {
                    throw new NotFoundException(__('Invalid %s', __('admin')));
            }
            if ($this->Admin->delete()) {
                    $this->Session->setFlash(
                            __('The %s deleted', __('admin')),
                            'alert',
                            array(
                                    'plugin' => 'TwitterBootstrap',
                                    'class' => 'alert-success'
                            )
                    );
                    $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                    __('The %s was not deleted', __('admin')),
                    'alert',
                    array(
                            'plugin' => 'TwitterBootstrap',
                            'class' => 'alert-error'
                    )
            );
            $this->redirect(array('action' => 'index'));
    }    
}
