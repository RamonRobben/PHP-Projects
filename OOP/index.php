<?php

require_once 'category.php';
require_once 'time.php';
require_once 'track.php';
require_once 'collection.php';
require_once 'tracklist.php';

require_once 'audiodevice.php';
require_once 'memorecorder.php';
require_once 'cddiscman.php';


$discman = new CdDiscMan(1000);
$discman->setMake("JVC");
$discman->setModel("HG-410");
$discman->setPriceExBtw(149.00);
$discman->setDisplayWidth(320);
$discman->setDisplayHeigth(160);
$discman->setCreationDate(new DateTime("2019/3/9"));

echo $discman->DisplayIdentity(true, true);
echo '</br>';
echo "Opslag capacity: " . $discman->DisplayStorageCapacity();
echo '</br>';
echo "Display resolution pixels: " . $discman->getTotalPixels();
echo '</br>';
echo $discman->GetResolutionInfo();
echo '</br>';
echo "Consumer price: " . $discman->getConsumerPrice(); 
echo '</br>';
echo $discman->GetDeviceLifeTime(); 
echo '</br>';
echo "Eject status: " . $discman->getIsEjected();
$discman->Eject(); 
echo '</br>';
echo "Eject status: " . $discman->getIsEjected();


?>