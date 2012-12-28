<?php

class CreateEmailTemplateTable extends CakeMigration {

    /**
     * Migration description
     *
     * @var string
     * @access public
     */
    var $description = '';
    /**
     * Actions to be performed
     *
     * @var array $migration
     * @access public
     */
    var $migration = array(
        'up' => array(
            'create_table' => array(
                'email_templates' => array(
                    'id' => array('type' => 'integer', 'length ' => '11', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'email_template_name' => array('type' => 'string', 'length ' => '255', 'null' => false, 'default' => NULL),
                    'from_name' => array('type' => 'string', 'length ' => '255', 'null' => false, 'default' => NULL),
                    'from_email' => array('type' => 'string', 'length ' => '255', 'null' => false, 'default' => NULL),
                    'email_subject' => array('type' => 'string', 'length ' => '255', 'null' => false, 'default' => NULL),
                    'email_body' => array('type' => 'text', 'null' => false),
                    'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
                    'slug' => array('type' => 'string', 'length ' => '255', 'null' => false),
                    'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
                    'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array(
                'email_templates'
            ),
        ),
    );

    /**
     * Before migration callback
     *
     * @param string $direction, up or down direction of migration process
     * @return boolean Should process continue
     * @access public
     */
    function before($direction) {
        return true;
    }

    /**
     * After migration callback
     *
     * @param string $direction, up or down direction of migration process
     * @return boolean Should process continue
     * @access public
     */
    function after($direction) {
        if ($direction == 'up') {

            $SettingModel = $this->generateModel('EmailTemplate');
            //add data to the settings model
            $settings = array(array('email_template_name' => 'Welcome email', 'from_name' => 'Team Email Test', 'from_email' => 'support@example.com', 'email_subject' => 'test', 'email_body' => 'test','slug'=>'welcome_email'),
                              
            );
            $SettingModel->saveAll($settings);
        }
        return true;
    }

}

?>
