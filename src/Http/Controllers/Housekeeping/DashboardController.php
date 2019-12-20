<?php

namespace Torralbodavid\DuckFunkCore\Http\Controllers\Housekeeping;

use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Collection;

class DashboardController
{
    private string $url;
    private string $wallContent;

    public function __construct()
    {
        $this->url = 'https://raw.githubusercontent.com/torralbodavid/duck-funk-core/master/CHANGELOG.md';
    }

    public function index()
    {
        return view('housekeeping::dashboard');
    }


    public function getUpdateWall(Request $request): JsonResponse
    {
        $this->wallContent = Markdown::parse($request->input('content'));

        $elementsToReplace = collect([
            'h3'    => 'h6',
            'h2'    => 'h5',
            'h1'    => 'h4',
            '<pre>' => '<pre class=\'text-success\'>',
        ]);

        return response()->json([
            'success' => true,
            'response' => (string) $this->replacer($elementsToReplace)
        ], 200);
    }

    private function replacer(Collection $elements)
    {
        $elements->each(function ($item, $key) {
            $this->wallContent = str_replace($key, $item, $this->wallContent);
        });

        return $this->wallContent;
    }

    /*private function getUpdateWall(): JsonResponse
    {
        $client = new Client();
        $response = $client->request('GET', 'https://raw.githubusercontent.com/torralbodavid/duck-funk-core/master/CHANGELOG.md');

        return ($response->getStatusCode() === 200)
            ? response()->json([
                'success' => true,
                'response' => (string) Markdown::parse($response->getBody())
            ], 422)
            : response()->json([
                'success' => false,
                'response' => "We couldn't serve the wall"
            ], 422);
    }*/
}