<?php
App::uses('AppModel', 'Model');
/**
 * Admin Model
 *
 */
class Admin extends AppModel {

    public $name = 'Admin';
//    public function beforeSave($options = array()) {
//        if (!$this->id) {
//            $this->data['Admin']['password'] = AuthComponent::password($this->data['Admin']['password']);
//        }
//        return true;
//    }
}
