<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>

<p>In this page you can see the list of notifications. If you do not see any notification, just means that you have not already created notifications.</p>

<h3 class="box">Show from database ($notifiche)</h3>
<?php foreach ($notifiche as $notifica) : ?>
    <?php if ($notifica->isNotReaded()) : ?>
        <div class="box">
            <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->expire; ?></a> - 
            <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->content; ?></a> <br />
            <a href="<?php echo $this->createUrl('/notifyii/default/read', array('id' => $notifica->id)); ?>">segna questa notifica come letta</a>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

<h3 class="box">Show with Flash messages</h3>
<?php foreach(Yii::app()->user->getFlashes() as $key => $message) : ?>
    <?php echo '<div class="flash-' . $key . ' info">' . $message . "</div>\n"; ?>
<?php endforeach; ?>

<h3 class="box">Create notification for the end of the world</h3>
<a href="<?php echo $this->createUrl('addEndOfWorld'); ?>">create</a>

<?php Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
); ?>
