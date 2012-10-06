<?php

/**
 * @author Simone Gentili <sensorario@gmail.com>
 */
class Notifyii extends CComponent
{
    private $expire;

    const ONE_DAY_AFTER = "+1 day";
    const ONE_WEEK_AFTER = "+1 week";
    const ONE_DAY_BEFORE = "-1 day";
    const ONE_WEEK_BEFORE = "-1 week";

    public function expire(DateTime $expire)
    {
        $this->expire = $expire;
    }

    public function getExpirationDate()
    {
        return $this->expire;
    }

    public function getExpirationDateTimestamp()
    {
        return $this->expire
                        ->getTimestamp();
    }

    public function getExpirationDateTimestampFormatted($format = "d/m/Y")
    {
        $timestamp = $this->getExpirationDateTimestamp();
        return date($format, $timestamp);
    }

    public function from($start)
    {
        $valid = array(
            Notifyii::ONE_DAY_BEFORE,
            Notifyii::ONE_WEEK_BEFORE,
        );

        if (!in_array($start, $valid)) {
            throw new Exception;
        }
    }

    public function to($end)
    {
        $valid = array(
            Notifyii::ONE_DAY_AFTER,
            Notifyii::ONE_WEEK_AFTER,
        );

        if (!in_array($end, $valid)) {
            throw new Exception;
        }
    }

    public function __toString()
    {
        $at = $this->expire->format('d/m/Y');
        $daysLeft = $this->getDaysLeft();

        return "This notification will expire at $at. In $daysLeft days.";
    }

    private function getDaysLeft()
    {
        $now = new DateTime();
        $seconds = ($this->expire->getTimestamp() - $now->getTimestamp());
        $minutes = $seconds / 60;
        $hours = $minutes / 60;
        return ceil($hours / 24);
    }

}