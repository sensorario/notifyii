<?php
/* @var $this NotifyiiController */
/* @var $data Notifyii */
?>

<?php if(!(trim($data->role) === "")) : ?>
    <div class="view">
        <b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
        <?php echo CHtml::encode($data->role); ?>
        <br />
        <hr />
        <?php $items = ModelNotifyii::model()->findAll(new CDbCriteria(array(
            'condition' => 'role=:role',
            'params' => array(
                ':role' => $data->role
            )
        ))); ?>
        <?php if (count($items)) : ?>
            <ul>
                <?php foreach ($items as $item) : ?>
                    <li><?php echo $item->content; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php endif; ?>

