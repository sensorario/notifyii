<?php

class NotifyiiModule extends CWebModule
{
    public function init()
    {
        $this->setImport(array(
            'notifyii.models.*',
            'notifyii.components.*',
        ));
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        }

        return false;
    }

}
