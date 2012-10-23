<?php

class m121019_082633_RBAC extends CDbMigration
{

    public function up()
    {
        try {
            $this->createTable('AuthItem', array(
                'name' => 'string',
                'type' => 'integer',
                'description' => 'text',
                'data' => 'text',
            ));
        } catch (Exception $e) {
            // Nothing to do if table already exists
        }

        try {
            $this->createTable('AuthItemChild', array(
                'parent' => 'string',
                'child' => 'string',
            ));
        } catch (Exception $e) {
            // Nothing to do if table already exists
        }

        try {
            $this->createTable('AuthAssignment', array(
                'itemname' => 'string',
                'userid' => 'string',
                'bizrule' => 'text',
                'date' => 'text'
            ));
        } catch (Exception $e) {
            // Nothing to do if table already exists
        }
    }

    public function down()
    {
        echo "m121019_082633_RBAC does not support migration down.\n";
        return false;
    }

}
