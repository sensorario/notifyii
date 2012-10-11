<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>

<a href="<?php echo $this->createUrl('addEndOfWorld'); ?>">create a notification for the end of the world</a>

<?php foreach ($notifiche as $notifica) : ?>
    <div class="box">
        <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->expire; ?></a> - 
        <a href="<?php echo $notifica->link; ?>"><?php echo $notifica->content; ?></a>
    </div>
<?php endforeach; ?>
