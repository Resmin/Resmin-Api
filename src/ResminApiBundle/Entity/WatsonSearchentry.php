<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WatsonSearchentry
 *
 * @ORM\Table(name="watson_searchentry", indexes={@ORM\Index(name="watson_searchentry_73b72838", columns={"engine_slug"}), @ORM\Index(name="watson_searchentry_37ef4eb4", columns={"content_type_id"}), @ORM\Index(name="watson_searchentry_33b489b4", columns={"object_id_int"})})
 * @ORM\Entity
 */
class WatsonSearchentry
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
     * @ORM\Column(name="engine_slug", type="string", length=200, nullable=false)
     */
    private $engineSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     */
    private $contentTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="text", nullable=false)
     */
    private $objectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_id_int", type="integer", nullable=true)
     */
    private $objectIdInt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=1000, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=1000, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_encoded", type="text", nullable=false)
     */
    private $metaEncoded;



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
     * Set engineSlug
     *
     * @param string $engineSlug
     *
     * @return WatsonSearchentry
     */
    public function setEngineSlug($engineSlug)
    {
        $this->engineSlug = $engineSlug;

        return $this;
    }

    /**
     * Get engineSlug
     *
     * @return string
     */
    public function getEngineSlug()
    {
        return $this->engineSlug;
    }

    /**
     * Set contentTypeId
     *
     * @param integer $contentTypeId
     *
     * @return WatsonSearchentry
     */
    public function setContentTypeId($contentTypeId)
    {
        $this->contentTypeId = $contentTypeId;

        return $this;
    }

    /**
     * Get contentTypeId
     *
     * @return integer
     */
    public function getContentTypeId()
    {
        return $this->contentTypeId;
    }

    /**
     * Set objectId
     *
     * @param string $objectId
     *
     * @return WatsonSearchentry
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set objectIdInt
     *
     * @param integer $objectIdInt
     *
     * @return WatsonSearchentry
     */
    public function setObjectIdInt($objectIdInt)
    {
        $this->objectIdInt = $objectIdInt;

        return $this;
    }

    /**
     * Get objectIdInt
     *
     * @return integer
     */
    public function getObjectIdInt()
    {
        return $this->objectIdInt;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return WatsonSearchentry
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return WatsonSearchentry
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return WatsonSearchentry
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return WatsonSearchentry
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set metaEncoded
     *
     * @param string $metaEncoded
     *
     * @return WatsonSearchentry
     */
    public function setMetaEncoded($metaEncoded)
    {
        $this->metaEncoded = $metaEncoded;

        return $this;
    }

    /**
     * Get metaEncoded
     *
     * @return string
     */
    public function getMetaEncoded()
    {
        return $this->metaEncoded;
    }
}
