<?php
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}


function urls($value)
{
    return ($_SERVER['REQUEST_URI'] === $value) ? "bg-gray-950/50 text-white"  :   "text-gray-300 hover:bg-white/5 hover:text-white";
}
