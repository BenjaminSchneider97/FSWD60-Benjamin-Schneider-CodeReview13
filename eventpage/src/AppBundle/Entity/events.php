<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\eventsRepository")
 */
class events
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="eventName", type="string", length=255)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="eventImage", type="string", length=255)
     */
    private $eventImage;

    /**
     * @var string
     *
     * @ORM\Column(name="eventDescription", type="string", length=200)
     */
    private $eventDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="eventType", type="string", length=255)
     */
    private $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="eventAddress", type="string", length=255)
     */
    private $eventAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventStartDate", type="datetime")
     */
    private $eventStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventEndDate", type="datetime")
     */
    private $eventEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="eventContactEmail", type="string", length=255)
     */
    private $eventContactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="eventContactNumber", type="string", length=255)
     */
    private $eventContactNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="eventWebAddress", type="string", length=255)
     */
    private $eventWebAddress;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventName.
     *
     * @param string $eventName
     *
     * @return events
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventImage.
     *
     * @param string $eventImage
     *
     * @return events
     */
    public function setEventImage($eventImage)
    {
        $this->eventImage = $eventImage;

        return $this;
    }

    /**
     * Get eventImage.
     *
     * @return string
     */
    public function getEventImage()
    {
        return $this->eventImage;
    }

    /**
     * Set eventDescription.
     *
     * @param string $eventDescription
     *
     * @return events
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Get eventDescription.
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Set eventType.
     *
     * @param string $eventType
     *
     * @return events
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set eventAddress.
     *
     * @param string $eventAddress
     *
     * @return events
     */
    public function setEventAddress($eventAddress)
    {
        $this->eventAddress = $eventAddress;

        return $this;
    }

    /**
     * Get eventAddress.
     *
     * @return string
     */
    public function getEventAddress()
    {
        return $this->eventAddress;
    }

    /**
     * Set eventStartDate.
     *
     * @param \DateTime $eventStartDate
     *
     * @return events
     */
    public function setEventStartDate($eventStartDate)
    {
        $this->eventStartDate = $eventStartDate;

        return $this;
    }

    /**
     * Get eventStartDate.
     *
     * @return \DateTime
     */
    public function getEventStartDate()
    {
        return $this->eventStartDate;
    }

    /**
     * Set eventEndDate.
     *
     * @param \DateTime $eventEndDate
     *
     * @return events
     */
    public function setEventEndDate($eventEndDate)
    {
        $this->eventEndDate = $eventEndDate;

        return $this;
    }

    /**
     * Get eventEndDate.
     *
     * @return \DateTime
     */
    public function getEventEndDate()
    {
        return $this->eventEndDate;
    }

    /**
     * Set eventContactEmail.
     *
     * @param string $eventContactEmail
     *
     * @return events
     */
    public function setEventContactEmail($eventContactEmail)
    {
        $this->eventContactEmail = $eventContactEmail;

        return $this;
    }

    /**
     * Get eventContactEmail.
     *
     * @return string
     */
    public function getEventContactEmail()
    {
        return $this->eventContactEmail;
    }

    /**
     * Set eventContactNumber.
     *
     * @param string $eventContactNumber
     *
     * @return events
     */
    public function setEventContactNumber($eventContactNumber)
    {
        $this->eventContactNumber = $eventContactNumber;

        return $this;
    }

    /**
     * Get eventContactNumber.
     *
     * @return string
     */
    public function getEventContactNumber()
    {
        return $this->eventContactNumber;
    }

    /**
     * Set eventWebAddress.
     *
     * @param string $eventWebAddress
     *
     * @return events
     */
    public function setEventWebAddress($eventWebAddress)
    {
        $this->eventWebAddress = $eventWebAddress;

        return $this;
    }

    /**
     * Get eventWebAddress.
     *
     * @return string
     */
    public function getEventWebAddress()
    {
        return $this->eventWebAddress;
    }
}
