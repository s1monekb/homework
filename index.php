<?

$date = array (
    rand(1, time()),
    rand(1, time()),
    rand(1, time()),
    rand(1, time()),
    rand(1, time()),
);

$minday = min(date('d', $date[0]),
        date('d', $date[1]),
        date('d', $date[2]),
        date('d', $date[3]),
        date('d', $date[4])
);
echo 'Минимальный день '. $minday. "<br>";

$maxmon = max(date('m', $date[0]),
        date('m', $date[1]),
        date('m', $date[2]),
        date('m', $date[3]),
        date('m', $date[4])
);
echo 'Максимальный месяц '. $maxmon. "<br>";

sort($date);

$selected = array_pop($date);

echo date("d-m-Y : H:i:s", $selected)."<br>";

date_default_timezone_set('America/New_York');
echo 'Время в Нью-Йорке - '.date("d-m-Y : H:i:s", $selected);
