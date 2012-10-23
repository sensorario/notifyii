<?php

class m121010_123408_AddRolesToNotification extends CDbMigration
{

    public function up()
    {
        $this->addColumn('notifyii', 'role', 'string');
    }

    public function down()
    {
        echo "m121010_123408_AddRolesToNotification does not support migration down.\n";
        return false;
    }

}