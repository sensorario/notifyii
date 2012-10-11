<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>

<a href="<?php echo $this->createUrl('addEndOfWorld'); ?>">create a notification for the end of the world</a>

<?php foreach ($notifiche as $notifica) : ?>
    <?php $readed = false; ?>
    <?php if (is_array($notifica->reads)) : ?>
        <?php foreach ($notifica->reads as $reads) : ?>
            <?php if ($reads->username === Yii::app()->user->id) : ?>
                <?php $readed = true; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (!$readed) : ?>
        <div class="box">
            <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->expire; ?></a> - 
            <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->content; ?></a> <br />
            <a href="<?php echo $this->createUrl('/notifyii/default/read', array('id' => $notifica->id)); ?>">segna questa notifica come letta</a>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
