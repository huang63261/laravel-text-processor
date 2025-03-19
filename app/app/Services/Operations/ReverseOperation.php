<?php

namespace App\Services\Operations;

class ReverseOperation implements TextOperation
{
    public function apply(string $text): string
    {
        return strrev($text);
    }
}
