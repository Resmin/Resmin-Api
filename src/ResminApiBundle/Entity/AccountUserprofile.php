<?php

namespace ResminApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountUserprofile
 *
 * @ORM\Table(name="account_userprofile")
 * @ORM\Entity
 */
class AccountUserprofile
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="string", length=255, nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=200, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=64, nullable=true)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="like_count", type="integer", nullable=true)
     */
    private $likeCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="story_count", type="integer", nullable=false)
     */
    private $storyCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="follower_count", type="integer", nullable=false)
     */
    private $followerCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="following_count", type="integer", nullable=false)
     */
    private $followingCount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=100, nullable=true)
     */
    private $avatar;



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
     * Set userId
     *
     * @param integer $userId
     *
     * @return AccountUserprofile
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return AccountUserprofile
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return AccountUserprofile
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return AccountUserprofile
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set likeCount
     *
     * @param integer $likeCount
     *
     * @return AccountUserprofile
     */
    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;

        return $this;
    }

    /**
     * Get likeCount
     *
     * @return integer
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * Set storyCount
     *
     * @param integer $storyCount
     *
     * @return AccountUserprofile
     */
    public function setStoryCount($storyCount)
    {
        $this->storyCount = $storyCount;

        return $this;
    }

    /**
     * Get storyCount
     *
     * @return integer
     */
    public function getStoryCount()
    {
        return $this->storyCount;
    }

    /**
     * Set followerCount
     *
     * @param integer $followerCount
     *
     * @return AccountUserprofile
     */
    public function setFollowerCount($followerCount)
    {
        $this->followerCount = $followerCount;

        return $this;
    }

    /**
     * Get followerCount
     *
     * @return integer
     */
    public function getFollowerCount()
    {
        return $this->followerCount;
    }

    /**
     * Set followingCount
     *
     * @param integer $followingCount
     *
     * @return AccountUserprofile
     */
    public function setFollowingCount($followingCount)
    {
        $this->followingCount = $followingCount;

        return $this;
    }

    /**
     * Get followingCount
     *
     * @return integer
     */
    public function getFollowingCount()
    {
        return $this->followingCount;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return AccountUserprofile
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
