<?php

$date = new DateTime(null, new DateTimeZone('America/Managua'));
$zone = $date->getTimezone();
echo $zone->getName();
