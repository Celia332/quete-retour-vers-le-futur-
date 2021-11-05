<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('20-08-2021 2:45');
$interval = $presentTime->diff($destinationTime);



echo 'interval' . ' ' .  $interval->format('%m months %d days %Y years %h minutes.') . '<br>';
echo 'presentTime' . ' ' . $presentTime->format('m-d-Y H:i:s') . '<br>';
echo 'destinationTime' . ' ' . $destinationTime->format('m-d-Y H:i:s');






