<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\TextProcessingService;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function __construct(protected TextProcessingService $service) {}

    /**
     * Process text
     */
    public function process(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required|string|max:500',
            'operations' => 'required|array',
            'operations.*' => 'required|string|in:reverse,uppercase,remove_spaces'
        ]);

        $result = $this->service->processText(
            $validated['text'],
            $validated['operations']
        );

        return response()->json([
            'original_text' => $validated['text'],
            'processed_text' => $result,
        ]);
    }
}
