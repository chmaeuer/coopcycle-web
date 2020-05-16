<?php

namespace AppBundle\OpeningHours;

use Doctrine\Common\Collections\Collection;

interface OpenCloseInterface
{
    /**
     * @return array
     */
    public function getOpeningHours($method = 'delivery');

    /**
     * @return bool
     */
    public function isOpen(\DateTime $now = null): bool;

    /**
     * @return \DateTime|null
     */
    public function getNextOpeningDate(\DateTime $now = null);

    /**
     * @return \DateTime|null
     */
    public function getNextClosingDate(\DateTime $now = null);

    /**
     * @return Collection
     */
    public function getClosingRules();

    /**
     * @param \DateTime|null $now
     * @return boolean
     */
    public function hasClosingRuleForNow(\DateTime $now = null): bool;

    public function setShippingOptionsDays(int $shippingOptionsDays);

    public function getOrderingDelayMinutes();
}