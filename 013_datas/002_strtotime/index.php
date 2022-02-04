<?php

$fiveDays = strtotime('5 days');

echo $fiveDays . "<br>";


$tenDays = strtotime("10 days");

echo $tenDays . "<br>";

$todayMoreFiveDays = date('d/m/y', $fiveDays);

echo $todayMoreFiveDays . "<br>";

$todayMoreTenDays = date('d/m/y', $tenDays);

echo $todayMoreTenDays . "<br>";

$twoMonths = strtotime("2 months");

echo $twoMonths . "<br>";

$todayMoretTwoMonths = date('d/m/Y', $twoMonths);

echo $todayMoretTwoMonths . "<br>";

$twelveYears = strtotime("12 years");
