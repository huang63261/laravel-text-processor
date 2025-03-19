<?php

namespace App\Services\Operations;

class UppercaseOperation implements TextOperation
{
    public function apply(string $text): string
    {
        return strtoupper($text);
    }
}
