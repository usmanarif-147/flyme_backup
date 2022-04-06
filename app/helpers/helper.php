<?php
use Carbon\Carbon;

function timeDayFormat($time_slot)
{
    $time = new Carbon($time_slot);
    return $time->format('g:i A');
}

function timeWithoutSecondsFormat($time_slot)
{
    $time = new Carbon($time_slot);
    return $time->format('H:i');
}
