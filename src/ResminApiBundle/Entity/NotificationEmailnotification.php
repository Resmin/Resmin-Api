<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationEmailnotification
 *
 * @ORM\Table(name="notification_emailnotification", indexes={@ORM\Index(name="notification_emailnotification_a6b50b9d", columns={"meta_id"})})
 * @ORM\Entity
 */
class NotificationEmailnotification
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
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="integer", nullable=false)
     */
    private $metaId;

    /**
     * @var string
     *
     * @ORM\Column(name="from_email", type="string", length=75, nullable=false)
     */
    private $fromEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_email", type="string", length=75, nullable=false)
     */
    private $recipientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body_txt", type="text", nullable=false)
     */
    private $bodyTxt;

    /**
     * @var string
     *
     * @ORM\Column(name="body_html", type="text", nullable=true)
     */
    private $bodyHtml;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sent", type="boolean", nullable=false)
     */
    private $isSent;



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
     * Set metaId
     *
     * @param integer $metaId
     *
     * @return NotificationEmailnotification
     */
    public function setMetaId($metaId)
    {
        $this->metaId = $metaId;

        return $this;
    }

    /**
     * Get metaId
     *
     * @return integer
     */
    public function getMetaId()
    {
        return $this->metaId;
    }

    /**
     * Set fromEmail
     *
     * @param string $fromEmail
     *
     * @return NotificationEmailnotification
     */
    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;

        return $this;
    }

    /**
     * Get fromEmail
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * Set recipientEmail
     *
     * @param string $recipientEmail
     *
     * @return NotificationEmailnotification
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;

        return $this;
    }

    /**
     * Get recipientEmail
     *
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return NotificationEmailnotification
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set bodyTxt
     *
     * @param string $bodyTxt
     *
     * @return NotificationEmailnotification
     */
    public function setBodyTxt($bodyTxt)
    {
        $this->bodyTxt = $bodyTxt;

        return $this;
    }

    /**
     * Get bodyTxt
     *
     * @return string
     */
    public function getBodyTxt()
    {
        return $this->bodyTxt;
    }

    /**
     * Set bodyHtml
     *
     * @param string $bodyHtml
     *
     * @return NotificationEmailnotification
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;

        return $this;
    }

    /**
     * Get bodyHtml
     *
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->bodyHtml;
    }

    /**
     * Set isSent
     *
     * @param boolean $isSent
     *
     * @return NotificationEmailnotification
     */
    public function setIsSent($isSent)
    {
        $this->isSent = $isSent;

        return $this;
    }

    /**
     * Get isSent
     *
     * @return boolean
     */
    public function getIsSent()
    {
        return $this->isSent;
    }
}
