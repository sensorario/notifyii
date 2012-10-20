<?php

class DefaultController extends Controller
{
    public function actionRead($id)
    {
        $reads = new NotifyiiReads();
        $reads->username = Yii::app()->user->id;
        $reads->notification_id = $id;
        $reads->readed = true;
        
        $reads->save(false);
        
        $this->redirect($this->createUrl('/notifyii'));
    }

    public function actionIndex()
    {
        $notifiche = ModelNotifyii::getAllNotifications();
        foreach ($notifiche as $notifica) {
            if($notifica->isNotReaded()) {
                Yii::app()->user->setFlash('success', $notifica->content);
            }
        }

        $this->render('index', array(
            'notifiche' => $notifiche,
        ));
    }

    public function actionAddEndOfWorld()
    {
        $notifyii = new Notifyii();
        $notifyii->message('The end of the world');
        $notifyii->expire(new DateTime("21-12-2012"));
        $notifyii->from("-1 week");
        $notifyii->to("+1 day");
        $notifyii->role("admin");
        $notifyii->link($this->createUrl('/site/index'));
        $notifyii->save();

        $url = $this->createUrl('index');
        $this->redirect($url);
    }

}
