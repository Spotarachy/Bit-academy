<?php


if ($argv < 2) {
    echo "No time durations provided\n";
    return 1;
}

$tijden = array_slice($argv, 1);


$total_seconds = 0;

for ($j = 0; $j < $argc - 1; $j++) {

    $duration_seconds = 0;

    for ($k = 0; $k < strlen($tijden[$j]); $k++) {

        $part_seconds = 0;

        $unit_count = 0;
        for ($l = $k; $l < strlen($tijden[$j]); $l++) {
            if (is_numeric($tijden[$j][$l])) {
                $unit_count = 10 * $unit_count + $tijden[$j][$l];
            } else {
                break;
            }
        }

        switch ($tijden[$j][$k + strlen($unit_count)]) {
            case 'd':
                $part_seconds = $unit_count * 86400;
                break;
            case 'u':
                $part_seconds = $unit_count * 3600;
                break;
            case 'm':
                $part_seconds = $unit_count * 60;
                break;
            case 's':
                $part_seconds = $unit_count;
                break;
        }

        $duration_seconds += $part_;
    }
}
?>