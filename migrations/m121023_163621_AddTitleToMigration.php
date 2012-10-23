<?php

class m121023_163621_AddTitleToMigration extends CDbMigration
{

    public function up()
    {
        $this->addColumn('notifyii', 'title', 'string');
    }

    public function down()
    {
        echo "m121023_163621_AddTitleToMigration does not support migration down.\n";
        return false;
    }

}