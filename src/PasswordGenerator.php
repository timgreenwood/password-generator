<?php

namespace Timgreenwood\PasswordGenerator;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PasswordGenerator
{
    /**
     * returns a string containing a number of random words from wordlist.txt using a separator
     *
     * @param int count of the number of words required
     * @param string seperator string
     * @return string 
     */
    public function generate(int $count = 4, string $separator = '-'): string
    {
        $phraseWords = collect();
        $words = $this->getWords();
        $max = count($words) - 1;

        foreach (range(1, $count) as $iter) {
            $phraseWords->push($words[random_int(0, $max)]);
        }

        return Str::lower($phraseWords->implode($separator));
    }

    private function getWords()
    {
        return Cache::rememberForever('timgreenwood-password-generator-wordlist', fn () => explode("\n", file_get_contents(dirname(__FILE__) . '/wordlist.txt')));
    }
}
