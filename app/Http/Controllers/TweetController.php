<?php

namespace App\Http\Controllers;

use App\TweetFinderTrait;
use Illuminate\Support\MessageBag;
use Illuminate\View\View;

class TweetController extends Controller
{
    use TweetFinderTrait;


    public function index(): View
    {
        $results = $this->getTweets();
        $errors  = new MessageBag();
        if (count($results) === 0) {
            $errors->add('ERRORS', 'No tweets found...');
        }

        return view('tweets/index')->with('tweets', $results)->withErrors($errors);

    }


}
