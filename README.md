notifyii
========

To install notifyii, navigate to the forlder "protected/modules" of your project.
If your project does not have any "modules" folder, just create id. Then, run the
command:

    $ git clone git@github.com:sensorario/notifyii

Now you just need to add module to confi file:

    'modules'=>array(
        'notifyii',
    ),

And try to load these routes:

    index.php?r=notifyii
    index.php?r=notifyii/modelNotifyii

The first one show you a sample page that create a sample notification. The second
one show you a crud to alter notifications.

If you want you can add these items to views/layouts/main.php file:

    array('label'=>'Notifyii', 'url'=>array('/notifyii')),
    array('label'=>'ModelNotifyii', 'url'=>array('/notifyii/modelNotifyii')),

Run migrations
--------------

    /var/www/YOUR_APP_NAME/protected$ ./yiic migrate --migrationPath=webroot.modules.notifyii.migrations

Notify the end of the world
---------------------------

    $notifyii = new Notifyii();
    $notifyii->message('The end of the world');
    $notifyii->expire(new DateTime("21-12-2012"));
    $notifyii->from("-1 week");
    $notifyii->to("+1 day");
    $notifyii->save();

Get all notifications
---------------------

    ModelNotifyii::getAllNotifications()