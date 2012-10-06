notifyii
========

Run mugrations
--------------

    /var/www/Notifyii/protected$ ./yiic migrate --migrationPath=webroot.modules.notifyii.migrations

Notify the end of the world
---------------------------

    $notifyii = new Notifyii();
    $notifyii->message('The end of the world');
    $notifyii->expire(new DateTime("21-12-2012"));
    $notifyii->from("-1 week");
    $notifyii->to("+1 day");
    $notifyii->save();