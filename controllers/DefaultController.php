<?php

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $criteria = new CDbCriteria(array(
                    'condition' => ':now >= t.alert_after_date AND :now <= t.alert_before_date',
                    'params' => array(
                        ':now' => date('Y-m-d')
                    )
                ));

        $notifiche = ModelNotifyii::model()
                ->findAll($criteria);

        $this->render('index', array(
            'notifiche' => $notifiche
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