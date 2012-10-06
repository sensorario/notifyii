<?php $this->breadcrumbs = array($this->module->id); ?>

<h1>Notifyii</h1>

<a href="<?php echo $this->createUrl('addEndOfWorld'); ?>">create a notification for the end of the world</a>

<?php foreach ($notifiche as $notifica) : ?>
    <div class="box">
        <?php echo $notifica->expire; ?> - <?php echo $notifica->content; ?>
    </div>
<?php endforeach; ?>
