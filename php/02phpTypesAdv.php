<?php
// Created by "Darius Schell"
// Date: 12/19/15
// Time: 9:37 AM

class example
{
    function generateRandomNumber($userVar)
    {
        $random = mt_rand(1, 3);
        $userVar += $random;
        return $userVar;
    }
}

var_dump((new example()) -> generateRandomNumber(8));
