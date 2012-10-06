<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>


<?php
$notifyii = new Notifyii();
$notifyii->expire(new DateTime("21-12-2012"));
$notifyii->from("-1 week");
$notifyii->to("+1 day");

echo $notifyii;

