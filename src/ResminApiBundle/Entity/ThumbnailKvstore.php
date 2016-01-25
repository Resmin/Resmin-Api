<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ThumbnailKvstore
 *
 * @ORM\Table(name="thumbnail_kvstore")
 * @ORM\Entity(repositoryClass="ResminApiBundle\Repository\ThumbnailKvstoreRepository")
 */
class ThumbnailKvstore
{
    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=200, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;



    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return ThumbnailKvstore
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
