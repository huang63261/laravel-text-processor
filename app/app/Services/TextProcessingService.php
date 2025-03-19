<?php

namespace App\Services;

use App\Services\Operations\TextOperation;

class TextProcessingService
{
    protected array $operationClasses = [
        'reverse' => Operations\ReverseOperation::class,
        'uppercase' => Operations\UppercaseOperation::class,
        'remove_spaces' => Operations\RemoveSpacesOperation::class,
    ];

    public function processText(string $text, array $operations)
    {
        foreach ($operations as $operationName) {
            if (isset($this->operationClasses[$operationName])) {
                $operation = app($this->operationClasses[$operationName]);
                $text = $operation->apply($text);
            }
        }

        return $text;
    }
}
