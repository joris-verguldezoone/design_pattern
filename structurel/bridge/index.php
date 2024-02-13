<?php 
require_once('./DarkTheme.php');
require_once('./LightTheme.php');

require_once('./ContactPage.php');
require_once('./HomePage.php');


$lightTheme = new LightTheme();
$darkTheme = new DarkTheme();

$homePageLight = new HomePage($lightTheme);
$homePageDark = new HomePage($darkTheme);

$contactPageLight = new ContactPage($lightTheme);
$contactPageDark = new ContactPage($darkTheme);

echo $homePageLight->getContent() . '</br >';
echo $homePageDark->getContent() . '</br >';

echo $contactPageLight->getContent() . '</br >';
echo $contactPageDark->getContent() . '</br >';