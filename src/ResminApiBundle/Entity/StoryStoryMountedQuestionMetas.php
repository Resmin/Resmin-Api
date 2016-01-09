<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoryStoryMountedQuestionMetas
 *
 * @ORM\Table(name="story_story_mounted_question_metas", uniqueConstraints={@ORM\UniqueConstraint(name="story_id", columns={"story_id", "questionmeta_id"})}, indexes={@ORM\Index(name="story_story_mounted_question_metas_734ee247", columns={"story_id"}), @ORM\Index(name="story_story_mounted_question_metas_2bdf2328", columns={"questionmeta_id"})})
 * @ORM\Entity
 */
class StoryStoryMountedQuestionMetas
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
     * @ORM\Column(name="story_id", type="integer", nullable=false)
     */
    private $storyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="questionmeta_id", type="integer", nullable=false)
     */
    private $questionmetaId;



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
     * Set storyId
     *
     * @param integer $storyId
     *
     * @return StoryStoryMountedQuestionMetas
     */
    public function setStoryId($storyId)
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get storyId
     *
     * @return integer
     */
    public function getStoryId()
    {
        return $this->storyId;
    }

    /**
     * Set questionmetaId
     *
     * @param integer $questionmetaId
     *
     * @return StoryStoryMountedQuestionMetas
     */
    public function setQuestionmetaId($questionmetaId)
    {
        $this->questionmetaId = $questionmetaId;

        return $this;
    }

    /**
     * Get questionmetaId
     *
     * @return integer
     */
    public function getQuestionmetaId()
    {
        return $this->questionmetaId;
    }
}
