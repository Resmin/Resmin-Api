<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjceleryCrontabschedule
 *
 * @ORM\Table(name="djcelery_crontabschedule")
 * @ORM\Entity
 */
class DjceleryCrontabschedule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="minute", type="string", length=64, nullable=false)
     */
    private $minute;

    /**
     * @var string
     *
     * @ORM\Column(name="hour", type="string", length=64, nullable=false)
     */
    private $hour;

    /**
     * @var string
     *
     * @ORM\Column(name="day_of_week", type="string", length=64, nullable=false)
     */
    private $dayOfWeek;

    /**
     * @var string
     *
     * @ORM\Column(name="day_of_month", type="string", length=64, nullable=false)
     */
    private $dayOfMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="month_of_year", type="string", length=64, nullable=false)
     */
    private $monthOfYear;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set minute
     *
     * @param string $minute
     *
     * @return DjceleryCrontabschedule
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * Get minute
     *
     * @return string
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Set hour
     *
     * @param string $hour
     *
     * @return DjceleryCrontabschedule
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set dayOfWeek
     *
     * @param string $dayOfWeek
     *
     * @return DjceleryCrontabschedule
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Get dayOfWeek
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Set dayOfMonth
     *
     * @param string $dayOfMonth
     *
     * @return DjceleryCrontabschedule
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;

        return $this;
    }

    /**
     * Get dayOfMonth
     *
     * @return string
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * Set monthOfYear
     *
     * @param string $monthOfYear
     *
     * @return DjceleryCrontabschedule
     */
    public function setMonthOfYear($monthOfYear)
    {
        $this->monthOfYear = $monthOfYear;

        return $this;
    }

    /**
     * Get monthOfYear
     *
     * @return string
     */
    public function getMonthOfYear()
    {
        return $this->monthOfYear;
    }
}
