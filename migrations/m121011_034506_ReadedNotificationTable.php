<?php

class m121011_034506_ReadedNotificationTable extends CDbMigration
{

    public function up()
    {
        $this->createTable('notifyii_reads', array(
            'id' => 'pk',
            'username' => 'string',
            'notification_id' => 'integer',
            'readed' => 'boolean',
        ));
    }

    public function down()
    {
        echo "m121011_034506_ReadedNotificationTable does not support migration down.\n";
        return false;
    }

}