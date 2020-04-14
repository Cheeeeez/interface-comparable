<?php
include "ComparableCircle.php";

$circleOne = new interface_comparable\Circle\ComparableCircle('circleOne', 8);
$circleOTwo = new interface_comparable\Circle\ComparableCircle('circleTwo', 5);

var_dump($circleOne->compareTo($circleOTwo));
