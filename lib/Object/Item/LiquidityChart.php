<?php


namespace Covalent\Object\Item;


class LiquidityChart
{
    /**
     * dt field
     * @var \DateTime
     */
    public \DateTime $dt;

    /**
     * quote_currency field
     * @var string
     */
    public string $quote_currency;

    /**
     * liquidity_quote field
     * @var float
     */
    public float $liquidity_quote;

    /**
     * @param \DateTime $dt
     */
    public function setDt(\DateTime $dt): void
    {
        //new \DateTime(strstr($updated_at, '.', true)); if covalent can't fix the mirosecond to max 6 digit
        $this->dt = $dt;
    }
}