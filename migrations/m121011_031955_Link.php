<?php

class m121011_031955_Link extends CDbMigration
{

    public function up()
    {
        $this->addColumn('notifyii', 'link', 'string');
    }

    public function down()
    {
        echo "m121011_031955_Link does not support migration down.\n";
        return false;
    }

}