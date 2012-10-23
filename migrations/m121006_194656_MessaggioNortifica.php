<?php

class m121006_194656_MessaggioNortifica extends CDbMigration
{

    public function up()
    {
        $this->addColumn('notifyii', 'content', 'text');
    }

    public function down()
    {
        echo "m121006_194656_MessaggioNortifica does not support migration down.\n";
        return false;
    }

}