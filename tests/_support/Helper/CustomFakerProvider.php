<?php

namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    private $creditCardNumbers = [
        "1234 4567 1234 7588",
        "2234 4567 1234 7588",
        "3234 4567 1234 7588",
        "4234 4567 1234 7588",
    ];

    public function getRandomCreditCardNumber()
    {
        return $this->creditCardNumbers[array_rand($this->creditCardNumbers)];
    }
}
