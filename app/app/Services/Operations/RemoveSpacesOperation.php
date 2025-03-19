<?php

namespace App\Services\Operations;

class RemoveSpacesOperation implements TextOperation
{
    public function apply(string $text): string
    {
        return str_replace(' ', '', $text);
    }
}
