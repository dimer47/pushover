<?php

namespace LeonardoTeixeira\Pushover;

use LeonardoTeixeira\Pushover\Exceptions\InvalidArgumentException;

class Status
{
    const ACKNOWLEDGED = 'acknowledged';
    const ACKNOWLEDGED_AT = 'acknowledged_at';
    const ACKNOWLEDGED_BY = 'acknowledged_by';
    const ACKNOWLEDGED_BY_DEVICE = 'acknowledged_by_device';
    const LAST_DELIVERED_AT = 'last_delivered_at';
    const EXPIRED = 'expired';
    const EXPIRED_AT = 'expires_at';
    const CALLED_BACK = 'called_back';
    const CALLED_BACK_AT = 'called_back_at';
    
    private $status = [
            self::ACKNOWLEDGED => null,
            self::ACKNOWLEDGED_AT => null,
            self::ACKNOWLEDGED_BY => null,
            self::ACKNOWLEDGED_BY_DEVICE => null,
            self::LAST_DELIVERED_AT => null,
            self::EXPIRED => null,
            self::EXPIRED_AT => null,
            self::CALLED_BACK => null,
            self::CALLED_BACK_AT => null
        ];

    /**
     * @param $status
     *
     * @throws \LeonardoTeixeira\Pushover\Exceptions\InvalidArgumentException
     */
    public function __construct($status = null)
    {
        if(!is_null($status)) {
            if(!is_array($status))
                throw new InvalidArgumentException('The status \'' . $status . '\' is invalid.');
            
            foreach($status as $key => $value) {
                if(array_key_exists($key, $this->status)) {
                    $this->status[$key] = $value;
                }
            }
        }
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setAcknowledged($value)
    {
        $this->status[self::ACKNOWLEDGED] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setAcknowledgedAt($value)
    {
        $this->status[self::ACKNOWLEDGED_AT] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setAcknowledgedBy($value)
    {
        $this->status[self::ACKNOWLEDGED_BY] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setAcknowledgedByDevice($value)
    {
        $this->status[self::ACKNOWLEDGED_BY_DEVICE] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setLastDeliveredAt($value)
    {
        $this->status[self::LAST_DELIVERED_AT] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setExpired($value)
    {
        $this->status[self::EXPIRED] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setExpiredAt($value)
    {
        $this->status[self::EXPIRED_AT] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setCalledBack($value)
    {
        $this->status[self::CALLED_BACK] = $value;
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setCalledBackAt($value)
    {
        $this->status[self::CALLED_BACK_AT] = $value;
    }

    /**
     * @return null
     */
    public function getAcknowledged()
    {
        return $this->status[self::ACKNOWLEDGED];
    }

    /**
     * @return null
     */
    public function getAcknowledgedAt()
    {
        return $this->status[self::ACKNOWLEDGED_AT];
    }

    /**
     * @return null
     */
    public function getAcknowledgedBy()
    {
        return $this->status[self::ACKNOWLEDGED_BY];
    }

    /**
     * @return null
     */
    public function getAcknowledgedByDevice()
    {
        return $this->status[self::ACKNOWLEDGED_BY_DEVICE];
    }

    /**
     * @return null
     */
    public function getLastDeliveredAt()
    {
        return $this->status[self::LAST_DELIVERED_AT];
    }

    /**
     * @return null
     */
    public function getExpired()
    {
        return $this->status[self::EXPIRED];
    }

    /**
     * @return null
     */
    public function getExpiredAt()
    {
        return $this->status[self::EXPIRED_AT];
    }

    /**
     * @return null
     */
    public function getCalledBack()
    {
        return $this->status[self::CALLED_BACK];
    }

    /**
     * @return null
     */
    public function getCalledBackAt()
    {
        return $this->status[self::CALLED_BACK_AT];
    }

    /**
     * @return bool
     */
    public function hasAcknowledged(): bool
    {
        return !is_null($this->status[self::ACKNOWLEDGED]);
    }

    /**
     * @return bool
     */
    public function hasAcknowledgedAt(): bool
    {
        return !is_null($this->status[self::ACKNOWLEDGED_AT]);
    }

    /**
     * @return bool
     */
    public function hasAcknowledgedBy(): bool
    {
        return !is_null($this->status[self::ACKNOWLEDGED_BY]);
    }

    /**
     * @return bool
     */
    public function hasAcknowledgedByDevice(): bool
    {
        return !is_null($this->status[self::ACKNOWLEDGED_BY_DEVICE]);
    }

    /**
     * @return bool
     */
    public function hasLastDeliveredAt(): bool
    {
        return !is_null($this->status[self::LAST_DELIVERED_AT]);
    }

    /**
     * @return bool
     */
    public function hasExpired(): bool
    {
        return !is_null($this->status[self::EXPIRED]);
    }

    /**
     * @return bool
     */
    public function hasExpiredAt(): bool
    {
        return !is_null($this->status[self::EXPIRED_AT]);
    }

    /**
     * @return bool
     */
    public function hasCalledBack(): bool
    {
        return !is_null($this->status[self::CALLED_BACK]);
    }

    /**
     * @return bool
     */
    public function hasCalledBackAt(): bool
    {
        return !is_null($this->status[self::CALLED_BACK_AT]);
    }
}
