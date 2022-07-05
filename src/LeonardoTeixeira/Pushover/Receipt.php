<?php

namespace LeonardoTeixeira\Pushover;

class Receipt
{
    private $receipt;

    /**
     * @param $receipt
     */
    public function __construct($receipt = null)
    {
        $this->receipt = $receipt;
    }

    /**
     * @return mixed|null
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param $receipt
     * @return void
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;
    }

    /**
     * @return bool
     */
    public function hasReceipt(): bool
    {
        return ! is_null($this->receipt);
    }
}
