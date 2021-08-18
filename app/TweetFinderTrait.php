<?php


namespace App;

use Thujohn\Twitter\Facades\Twitter;

trait TweetFinderTrait
{
    private function getTweets(): array
    {
        $results = [];
        $words = explode(', ', getenv('KEYWORDS'));
        if (is_array($words) === true && $words[0] !== '') {
            foreach ($words as $word) {
                $query = [
                    'q' => $word,
                    'count' => 100,
                    'result_type' => 'recent',
                ];
                $tweets = Twitter::getSearch($query);
                $results = array_merge($results, $tweets->statuses);
            }
            $results = array_slice($results, 0, 100);
        }
        return $results;

    }


}
