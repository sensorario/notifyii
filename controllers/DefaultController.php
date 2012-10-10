<?php

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->render('index', array(
            'notifiche' => ModelNotifyii::getAllNotifications()
        ));
    }

    public function actionAddEndOfWorld()
    {
        $notifyii = new Notifyii();
        $notifyii->message('The end of the world');
        $notifyii->expire(new DateTime("21-12-2012"));
        $notifyii->from("-1 week");
        $notifyii->to("+1 day");
        $notifyii->save();

        $url = $this->createUrl('index');
        $this->redirect($url);
    }

}