<?php 

$presentTime = new DateTime();
$destinationTime =  new DateTime('2025-07-15 21:00');
$interval = $presentTime->diff($destinationTime);

echo $presentTime->format('M-d-Y A H:i') . "\n";
echo $destinationTime->format('M-d-Y A H:i') . "\n";
echo $interval->format('%Y years %m month %d days %H hours %i minutes') . "\n";

$intervalHeures = $interval->format('%H');
$intervalMinutes = $interval->format('%i');
$intervalDay = $interval->format('%a');
$totalInt = $intervalDay * 24 * 60 + $intervalHeures * 60 + $intervalMinutes;

$fuel = 0;
for ($i = 0; $i < $totalInt; $i += 10000) {
    $fuel++;
}
echo 'Il faudra ' . $fuel . ' litres de carburant.';
