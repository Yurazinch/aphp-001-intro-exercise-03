<?php

declare(strict_types=1);

require_once(__DIR__ . '/human/Student.php');
require_once(__DIR__ . '/transport/Auto.php');
require_once(__DIR__ . '/householdAppliances/Tv.php');

//include 'autoload.php';

$student = new Student('Иван', 'Иванов', 18, 'Экономика', 1, true);
$tivi = new Tv('Samsung', 'UE32F6000FUXRU', 32, '1920 x 1080', 'HDR', true, 60, 733, 452, 20000);
$auto = new Auto('SsangYong', 'Action', 'АИ95', 147, 57, 2013, 300000);

echo $student->age."\n";
echo $tivi->screen_resolution."\n";
echo $auto->brand."\n";