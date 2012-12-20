<?php

/**
 * @author Simone Gentili <sensorario@gmail.com>
 */
class Notifyii extends CComponent
{
    /**
     * @var the moment whe a notification will expire
     */
    private $expire;

    /**
     * @var title of notifications
     */
    private $title;

    /**
     * @var message of notifications
     */
    private $message;

    /**
     * @var rola that can see this notification
     */
    private $role;

    /**
     * @var link to open in case of notification
     */
    private $link;

    /**
     * @var time before expire date, when you can see notitication
     */
    private $alert_after_date;

    /**
     * @var time after expire date, when you can see notitication
     */
    private $alert_before_date;

    const ONE_DAY_AFTER = "+1 day";
    const ONE_WEEK_AFTER = "+1 week";
    const ONE_DAY_BEFORE = "-1 day";
    const ONE_WEEK_BEFORE = "-1 week";

    /**
     * This method return the link of this notification
     *
     * @param null $link
     */
    public function link($link = null)
    {
        $this->link = $link;
    }

    /**
     * This message return the message of notification
     *
     * @param string $message
     */
    public function message($message = 'empty message')
    {
        $this->message = $message;
    }
    
    /**
     * This message return the title of notification
     *
     * @param string $title
     */
    public function title($title = 'empty title')
    {
        $this->title = $title;
    }

    /**
     * This method return role of user that can see this notification
     *
     * @param string $role
     */
    public function role($role = 'admin')
    {
        $this->role = $role;
    }

    /**
     * This method set the date of expiration of a notification.
     *
     * @param DateTime $expire
     */
    public function expire(DateTime $expire)
    {
        $this->expire = $expire;
    }

    /**
     * This method return DateTime of expiration date.
     *
     * @return DateTime $expire
     */
    public function getExpirationDate()
    {
        return $this->expire;
    }

    /**
     * This method return timestamp of expiration date.
     *
     * @return mixed
     */
    public function getExpirationDateTimestamp()
    {
        return $this->expire->getTimestamp();
    }

    /**
     * This method return expiration date and it's possible to define the format.
     *
     * @param string $format
     * @return string
     */
    public function getExpirationDateTimestampFormatted($format = "d/m/Y")
    {
        $timestamp = $this->getExpirationDateTimestamp();
        return date($format, $timestamp);
    }

    /**
     * This method define time to start to notify.
     *
     * @param $start
     * @throws Exception
     */
    public function from($start)
    {
        $valid = array(
            Notifyii::ONE_DAY_BEFORE,
            Notifyii::ONE_WEEK_BEFORE,
        );

        if (!in_array($start, $valid)) {
            throw new Exception;
        }

        $expire = clone $this->expire;
        $this->alert_after_date = $expire->modify($start);
    }

    /**
     * This method define time to end to show the notification
     *
     * @param $end
     * @throws Exception
     */
    public function to($end)
    {
        $valid = array(
            Notifyii::ONE_DAY_AFTER,
            Notifyii::ONE_WEEK_AFTER,
        );

        if (!in_array($end, $valid)) {
            throw new Exception;
        }

        $expire = clone $this->expire;
        $this->alert_before_date = $expire->modify($end);
    }

    /**
     * Define magic method to show this notification.
     *
     * @return string
     */
    public function __toString()
    {
        $at = $this->expire->format('d/m/Y');
        $daysLeft = $this->getDaysLeft();

        return "This notification will expire at $at. In $daysLeft days.";
    }

    /**
     * This method return days left
     *
     * @return integer
     */
    private function getDaysLeft()
    {
        $now = new DateTime();
        $seconds = ($this->expire->getTimestamp() - $now->getTimestamp());
        $minutes = $seconds / 60;
        $hours = $minutes / 60;
        return ceil($hours / 24);
    }

    /**
     * This method save notification.
     */
    public function save()
    {
        $expire = $this->expire->getTimestamp();
        $after = $this->alert_after_date->getTimestamp();
        $before = $this->alert_before_date->getTimestamp();

        $notifyii = new ModelNotifyii();
        $notifyii->expire = date('Y-m-d', $expire);
        $notifyii->alert_after_date = date('Y-m-d', $after);
        $notifyii->alert_before_date = date('Y-m-d', $before);
        $notifyii->title = $this->title;
        $notifyii->content = $this->message;
        $notifyii->role = $this->role;
        $notifyii->link = $this->link;
        $notifyii->save();
    }

}