Notifyii
========

    If you want to use notifyii with roles, extensions like "rights" or RBAC are required.

    Be shure to have the same 'db' configuratiion in these files:
    protected/config/main.php
    protected/config/console.php

To install notifyii, navigate to the forlder "protected/modules" of your project. If your project does not have any "modules" folder, just create id. Then, run the command:

    $ git clone git@github.com:sensorario/notifyii

Now you just need to add module to confi file:

    'modules'=>array(
        'notifyii',
    ),

And try to load these routes:

    index.php?r=notifyii
    index.php?r=notifyii/modelNotifyii
    index.php?r=notifyii/notifyiiReads

The first one show you a sample page that create a sample notification. The second one show you a crud to alter notifications.

If you want you can add these items to views/layouts/main.php file:

    array('label'=>'Notifyii', 'url'=>array('/notifyii')),
    array('label'=>'ModelNotifyii', 'url'=>array('/notifyii/modelNotifyii')),
    array('label'=>'NotifyiiReads', 'url'=>array('/notifyii/notifyiiReads')),

Run migrations
--------------

    /var/www/YOUR_APP_NAME/protected$ ./yiic migrate --migrationPath=webroot.modules.notifyii.migrations

Notify the end of the world
---------------------------

    $notifyii = new Notifyii();
    $notifyii->title('News from Mayans!');
    $notifyii->message('The end of the world');
    $notifyii->expire(new DateTime("21-12-2012"));
    $notifyii->from("-1 week");
    $notifyii->to("+1 day");
    $notifyii->role("admin");
    $notifyii->link($this->createUrl('/site/index'));
    $notifyii->save();

Get all notifications
---------------------

    ModelNotifyii::getAllNotifications()
    ModelNotifyii::getAllRoledNotifications()

Usage
-----

Suppose to load all notifications in your controller:

    public function actionIndex()
    {
        $this->render('index', array(
            'notifiche' => ModelNotifyii::getAllNotifications()
        ));
    }

In the view, you can load all notifications

    <?php $number = 1; ?>
    <?php while (Yii::app()->user->hasFlash('success' . ($number))) : ?>
        <?php $message = Yii::app()->user->getFlash('success' . ($number)); ?>
        <div class="flash-success info">
            <h3><?php echo $message['title']; ?></h3>
            <div><?php echo $message['message']; ?></div>
        </div>
        <?php $number = $number + 1; ?>
    <?php endwhile; ?>