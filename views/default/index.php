<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>

<div style="text-align: center;">
    <div class="span-14 box first">
        <h3 class="box">Show with Flash messages</h3>
        <?php foreach(Yii::app()->user->getFlashes() as $key => $message) : ?>
            <?php echo '<div class="flash-' . $key . ' info">' . $message . "</div>\n"; ?>
        <?php endforeach; ?>
    </div>
    <div class="span-7 box last">
       <h4>On the t you can see the list of notifications displayed as flash message.</h4>
    </div>
</div>

<div class="clear"></div>

<div style="text-align: center;">
    <div class="span-7 box first">
       <h4>On the right you can see the list of notifications. If you do not see any notification, just means that you have not already created notifications.</h4>
    </div>
    <div class="span-14 box last">
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
    </div>
</div>

<div class="clear"></div>

<div style="text-align: center;">
    <div class="span-14 box first">
        <a href="<?php echo $this->createUrl('addEndOfWorld'); ?>">create</a>
    </div>
    <div class="span-7 box last">
       <h4>On the right you can see the list of notifications. If you do not see any notification, just means that you have not already created notifications.</h4>
    </div>
</div>

<?php Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
); ?>
