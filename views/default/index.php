<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>

<a href="<?php echo $this->createUrl('addEndOfWorld'); ?>">create a notification for the end of the world</a>

<?php foreach ($notifiche as $notifica) : ?>
    <?php if ($notifica->isNotReaded()) : ?>
        <div class="box">
            <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->expire; ?></a> - 
            <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->content; ?></a> <br />
            <a href="<?php echo $this->createUrl('/notifyii/default/read', array('id' => $notifica->id)); ?>">segna questa notifica come letta</a>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
