<?php

/*
 *   Die and Dump
 */

function dd($data) {
    die(var_dump($data));
}

function ClubEntry($age) {
    if ($age < 18) {
        return 'Minor, go home!';
    } else {
        return 'Entry Access granted!';
    }
}
