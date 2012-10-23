<?php

class m121006_192253_AlertAfterAndBefore extends CDbMigration
{

    public function up()
    {
        $this->addColumn('notifyii', 'alert_after_date', 'date');
        $this->addColumn('notifyii', 'alert_before_date', 'date');
    }

    public function down()
    {
        echo "m121006_192253_AlertAfterAndBefore does not support migration down.\n";
        return false;
    }

}