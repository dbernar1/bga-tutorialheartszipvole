<?php

namespace BgaHelpers;

class CardCreationSpec
{
    private string $type;
    private int $typeArg;
    private int $howManyInDeck;

    public function __construct(string $type,
                                int    $typeArg,
                                int    $howManyInDeck)
    {
        $this->type = $type;
        $this->typeArg = $typeArg;
        $this->howManyInDeck = $howManyInDeck;
    }

    public function toArray(): array
    {
        return [
            "type" => $this->type,
            "type_arg" => $this->typeArg,
            "nbr" => $this->howManyInDeck,
        ];
    }
}
