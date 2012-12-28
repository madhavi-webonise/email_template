<?php
App::uses('EmailTemplateAppModel', 'EmailTemplate.Model');

class EmailTemplate extends EmailTemplateAppModel {

    var $name = 'EmailTemplate';
    var $actsAs = array(
        'EmailTemplate.Sluggable' => array(
            'label' => 'email_template_name',
            'slug' => 'slug',
            'separator' => '_',
            'overwrite' => true,
            'length' => '255',
            'translation' => 'utf-8'),
        'EmailTemplate.NamedScope' => ''
    );

    /**
     * function to get email template data like email from , from name, subject, email body replace constants value and return.
     * @param string $emailtype
     * @return array
     */
    function getEmailTemplate($emailSlug) {
        
        $emailtemplatedata = $this->find('first', array('conditions' => array('EmailTemplate.slug' => $emailSlug)));
        return $emailtemplatedata;
    }

}

?>
