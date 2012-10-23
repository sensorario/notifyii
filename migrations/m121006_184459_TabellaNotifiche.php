<?php

class m121006_184459_TabellaNotifiche extends CDbMigration
{

    public function up()
    {
        $this->createTable('notifyii', array(
            'id' => 'pk',
            'expire' => 'date',
        ));
    }

    public function down()
    {
        echo "m121006_184459_TabellaNotifiche does not support migration down.\n";
        return false;
    }

}