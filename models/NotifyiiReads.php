<?php

/**
 * This is the model class for table "notifyii_reads".
 *
 * The followings are the available columns in table 'notifyii_reads':
 * @property integer $id
 * @property integer $username
 * @property integer $notification_id
 * @property integer $readed
 */
class NotifyiiReads extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return NotifyiiReads the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'notifyii_reads';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('username', 'required'),
            array('notification_id, readed', 'numerical', 'integerOnly' => true),
            array('id, username, notification_id, readed', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
           'notification' => array(self::BELONGS_TO, 'ModelNotifyii', 'notification_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'username' => 'User',
            'notification_id' => 'Notification',
            'readed' => 'Readed',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username);
        $criteria->compare('notification_id', $this->notification_id);
        $criteria->compare('readed', $this->readed);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}
