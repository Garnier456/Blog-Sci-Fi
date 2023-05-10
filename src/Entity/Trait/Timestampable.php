<?php 

namespace App\Entity\Trait;

use DateTime;

trait Timestampable {

    private DateTime $createdAt;

    /**
     * Get the value of createdAt
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     */
    public function setCreatedAt(string|DateTime $createdAt): self
    {
        if (is_string($createdAt)) { // '2016-12-26'
            $createdAt = new DateTime($createdAt);
        }

        $this->createdAt = $createdAt;

        return $this;
    }
}