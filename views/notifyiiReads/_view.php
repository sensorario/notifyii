<?php
/* @var $this NotifyiiReadsController */
/* @var $data NotifyiiReads */
?>

<div class="view">
    <strong><?php echo $data->username; ?></strong> has read notification <strong><?php echo $data->notification->content; ?></strong> that expire at <strong><?php echo $data->notification->expire; ?></strong>.
</div>
