<?php
App::uses('AppController', 'Controller');
/**
 * Userss Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    public $layout = 'admin';

    public
        $uses = Array('User'),
	    $components = array('Paginator','Session');
 
    public function beforeFilter()
    {
        parent::beforeFilter();
    }
 
    public function index()
    {
        $this->set('title_for_layout', 'Sample Management System');

        $pagenate = array(
            'conditions' => array(
            'User.del_flg' => '0',
            ),
        );
        $this->paginate = array(
            'User'=>array(
                'page'=>'1',
                'limit'=>'50',
                'order'=>'User.created desc'
            )
        );

        //データ抽出
        $data = $this->paginate('User',array(
                'User.del_flg' => '0',
            )
        );
        $this->set('users',$data);
    }
 
/**
 * view method
 *
 * @param string $id
 * @return void
 */
    public function view($id = null) {
            $this->User->id = $id;
            if (!$this->User->exists()) {
                    throw new NotFoundException(__('Invalid %s', __('user')));
            }
            $this->set('user', $this->User->read(null, $id));
    }
  
    public function add() {
        if($this->request->is('post')) {
            $this->User->create();

            //パスワードとパスチェックの値をハッシュ値変換
            if ($this->User->save($this->request->data)) {
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid %s', __('user')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

            /* パスワードがないときはセットしない */
            if (empty($this->data['User']['password'])) {
                unset($this->request->data['User']['password']);
            }else{
                $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
            }
 
            // userのidとusernameを定義しないと暗号化されない hashing need both username and password
            $this->data['User'] += array(
                'id' => $id,
                'username' => $this->request->data['User']['username'],
            );
             
            if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('user')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('user')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
                throw new NotFoundException(__('Invalid %s', __('user')));
        }
        if ($this->User->delete()) {
                $this->Session->setFlash(
                        __('The %s deleted', __('user')),
                        'alert',
                        array(
                                'plugin' => 'TwitterBootstrap',
                                'class' => 'alert-success'
                        )
                );
                $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(
                __('The %s was not deleted', __('user')),'alert'
        );
        $this->redirect(array('action' => 'index'));
    }    
}
