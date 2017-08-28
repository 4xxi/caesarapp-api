<?php

namespace AppBundle\Document;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @MongoDB\Document(collection="message")
 */
class Message
{
    /**
     * @MongoDB\Id(strategy="UUID", type="string")
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    private $encryptedMessage;

    /**
     * @MongoDB\Field(type="date")
     * @MongoDB\Index(expireAfterSeconds="0")
     * @Assert\NotBlank()
     */
    private $expires;

    /**
     * @MongoDB\Field(type="int")
     * @Assert\NotBlank()
     */
    private $queriesLimit;

    /**
     * Get id.
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set encryptedMessage.
     *
     * @param string $encryptedMessage
     *
     * @return $this
     */
    public function setEncryptedMessage($encryptedMessage)
    {
        $this->encryptedMessage = $encryptedMessage;

        return $this;
    }

    /**
     * Get encryptedMessage.
     *
     * @return string $encryptedMessage
     */
    public function getEncryptedMessage()
    {
        return $this->encryptedMessage;
    }

    /**
     * Set expires.
     *
     * @param date $expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires.
     *
     * @return date $expires
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set queriesLimit.
     *
     * @param int $queriesLimit
     *
     * @return $this
     */
    public function setQueriesLimit($queriesLimit)
    {
        $this->queriesLimit = $queriesLimit;

        return $this;
    }

    /**
     * Get queriesLimit.
     *
     * @return int $queriesLimit
     */
    public function getQueriesLimit()
    {
        return $this->queriesLimit;
    }
}
