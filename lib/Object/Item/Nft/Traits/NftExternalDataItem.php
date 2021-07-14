<?php


namespace Covalent\Object\Item\Nft\Traits;


class NftExternalDataItem
{
    use Name,
        Description,
        Image,
        ExternalUrl,
        Owner;

    /**
     * attributes field
     * @var Attributes[]
     */
    public array $attributes;
}