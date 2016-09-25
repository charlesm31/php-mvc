<?php


/*
*   Die and Dump
*/
function dd($data){
    echo '<pre>';
        die(var_dump($data));
    echo '</pre>';
}

function ClubEntry($age){
    if($age < 18){
        return 'Minor, go home!';
    }else{
        return 'Entry Access granted!';
    }
}
