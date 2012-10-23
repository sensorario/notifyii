<?php

/**
 * This is the model class for table "notifyii".
 *
 * The followings are the available columns in table 'notifyii':
 * @property integer $id
 * @property string $title
 * @property string $expire
 * @property string $alert_after_date
 * @property string $alert_before_date
 * @property string $content
 * @property string $role
 * @property string $link
 */
class ModelNotifyii extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Notifyii the static model class
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
        return 'notifyii';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('expire, content, title', 'required'),
            array('alert_after_date, alert_before_date, role, link', 'safe'),
            array('id, expire, alert_after_date, alert_before_date, content, role, link, title', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'reads' => array(self::HAS_MANY, 'NotifyiiReads', 'notification_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'expire' => 'Expire',
            'alert_after_date' => 'Alert After Date',
            'alert_before_date' => 'Alert Before Date',
            'content' => 'Content',
            'role' => 'Role',
            'link' => 'Link',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('expire', $this->expire, true);
        $criteria->compare('alert_after_date', $this->alert_after_date, true);
        $criteria->compare('alert_before_date', $this->alert_before_date, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('role', $this->role, true);
        $criteria->compare('link', $this->link, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public static function getAllNotifications()
    {
        $criteria = new CDbCriteria(array(
                    'condition' => ':now >= t.alert_after_date AND :now <= t.alert_before_date',
                    'params' => array(
                        ':now' => date('Y-m-d')
                    )
                ));

        $notifiche = ModelNotifyii::model()
                ->findAll($criteria);

        return $notifiche;
    }

    public static function getAllRoledNotifications($role = 'admin')
    {
        $criteria = new CDbCriteria(array(
                    'condition' => ':now >= t.alert_after_date AND :now <= t.alert_before_date AND t.role = :role',
                    'params' => array(
                        ':now' => date('Y-m-d'),
                        ':role' => $role,
                    )
                ));

        $notifiche = ModelNotifyii::model()
                ->findAll($criteria);

        return $notifiche;
    }

    public function isNotReaded()
    {
        return !$this->isReaded();
    }

    public function isReaded()
    {
        if(is_array($this->reads)) {
            foreach ($this->reads as $reads) {
                if($reads->username === Yii::app()->user->id) {
                    return true;
                }
            }
        }

        return false;
    }

    public function beforeSave()
    {
        if($this->alert_after_date === "") {
            $this->alert_after_date = $this->expire;
        }

        if($this->alert_before_date === "") {
            $this->alert_before_date = $this->expire;
        }

        return parent::beforeSave();
    }

}
