<?php
App::uses('EmailTemplateAppController', 'EmailTemplate.Controller');

class EmailTemplatesController extends EmailTemplateAppController {

    var $name = 'EmailTemplates';
    var $helpers = array('Html', 'Form', 'Javascript');
    //email constants array with one line description for where we can use them.
    var $emailconstantsdescr = array(
        '[COMHEADING]' => 'Common Constants',
        '[USERNAME]' => 'This will be replaced by Username',
        '[PASSWORD]' => 'This will be replaced with your password',
        '[FIRSTNAME]' => 'This will be replaced by first name',
        '[LASTNAME]' => 'This will be replace by last name',
        '[WEBURL]' => 'This will be replaced by site url',
        '[ADMINMESSAGE]' => 'this will be replaced with admin users reject text',
        '[REGARDTEXT]' => 'This will be replaced by regarding greeting text',
        '[APPNAME]' => 'This will be replaced by application name',
        '[TODAYDATE]' => 'this will be replaced by todays date',
        '[VERIHEADING]' => 'Email Verification Constants',
        '[ACTIVATIONLINK]' => 'This will be replaced by activation or verification link',
        '[FORHEADING]' => 'Forgot Password Constants',
        '[RESETPASSWORDLINK]' => 'This will be replaced by reset password link',
        '[CONTACTHEADING]' => 'Contact Us Email Constants',
        '[CONTACTDATA]' => 'this will be used to replace contact data adde by contact person',
        '[CONTACTNAME]' => 'This will be replaced by persons name who is contacting',
        '[ADMINGREETING]' => 'This will be replaced by Admin greeting name'
    );

    function beforeFilter() {
        parent::beforeFilter();
    }

    function beforeRender() {

        parent::beforeRender();
    }

    function index() {
        $this->EmailTemplate->recursive = 0;
        $emailManagements = $this->EmailTemplate->find('all');
        $this->set(compact('emailManagements'));
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid email management', true));
            $this->redirect(array('action' => 'index'));
        }
        $emailManagement = $this->EmailTemplate->read(null, $id);
        $this->set(compact('emailManagement'));
    }

    function add() {
        if (!empty($this->data)) {
            $this->EmailTemplate->create();
            if ($this->EmailTemplate->save($this->data)) {
                $this->Session->setFlash(__('The email management has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The email management could not be saved. Please, try again.', true));
            }
        }
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid email management', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->EmailTemplate->save($this->data)) {
                $this->Session->setFlash(__('The email management has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The email management could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->EmailTemplate->read(null, $id);
        }
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for email management', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->EmailTemplate->delete($id)) {
            $this->Session->setFlash(__('Email management deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Email management was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    function emailconstant() {
        $this->layout = false;
        $emailconstnt = $this->emailconstantsdescr;
        $this->set(compact('emailconstnt'));
    }

    function getEmailTemplateAndReplaceConstant($emailSlug='welcome_email', $repladeData = array()) {


        $emailTemplateData = $this->EmailTemplate->getEmailTemplate($emailSlug);
        //assign value to canstant which you have to replace with data. otherwise it will replace with blank
        if (!empty($repladeData)) {
            $this->emailconstants['[FIRSTNAME]'] = $repladeData['first_name'];
            $this->emailconstants['[LASTNAME]'] = $repladeData['last_name'];
        }
        //replace constants with there values
        foreach ($this->emailconstants as $key => $value) {
            $emailTemplateData['EmailTemplate']['email_subject'] = str_replace($key, $value, $emailTemplateData['EmailTemplate']['email_subject']);
            $emailTemplateData['EmailTemplate']['email_body'] = str_replace($key, $value, $emailTemplateData['EmailTemplate']['email_body']);
        }
        return $emailTemplateData;
       
    }

}

?>
