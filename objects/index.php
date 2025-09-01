<?php

declare(strict_types=1);

use Human\Student;
use Transport\Auto;
use HouseholdAppliances\Televisor;

//require_once('Human\Student.php');
//require_once('Transport\Auto.php');
//require_once('HouseholdAppliances\Tv.php');

include 'autoload.php';

$student = new Student('Иван', 'Иванов', 18, 'Экономика', 5, true);
$televisor = new Televisor('Samsung', 'UE32F6000FUXRU', 32, '1920 x 1080', 'HDR', true, 60, 733, 452, 20000);
$auto = new Auto('SsangYong', 'Action', 'АИ95', 147, 57, 2013, 300000);

echo $student->age."\n";
$student->incrementAge();
$student->incrementCourse();
$student->changeFaculty('Юридический');
echo $televisor->screen_resolution."\n";
//echo $televisor->getQhd();
echo $auto->brand."\n";
$auto->setMileage(20000);
echo $auto->mileage."\n";
echo $auto->getStatus();