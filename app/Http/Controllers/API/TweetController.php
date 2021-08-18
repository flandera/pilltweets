<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\TweetFinderTrait;
use Illuminate\Http\JsonResponse;

class TweetController extends Controller
{
    use TweetFinderTrait;


    public function index(): JsonResponse
    {
        $results  = $this->getTweets();
        $response = new JsonResponse('No data found', 204);
        if (count($results) > 0) {
            $response->setData($results);
            $response->setStatusCode(200);
        }

        return $response;

    }


}
