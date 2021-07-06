<?php


namespace Covalent\Object;

class Healt extends DefaultObject
{
    /**
     * items field
     * @var Item\Healt[]
     */
    public array $items;

    /**
     * @return Item\Healt[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Healt[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}