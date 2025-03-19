<?php

namespace App\Services\Operations;

interface TextOperation
{
    public function apply(string $text): string;
}
