<?php

// debug
error_reporting(E_ALL);
ini_set('display_errors', true);

require '../src/AfriCC/autoload.php';

use AfriCC\EPP\Frame\Command\Create\Contact as CreateContact;

$frame = new CreateContact;
$frame->setId('CONTACT1');
$frame->setName('Günter Grodotzki');
$frame->setName('Peter Fütterer');
$frame->setOrganization('weheartwebsites UG');
$frame->addStreet('Rönskenstraße 23');
$frame->addStreet('Around the Corner');
$frame->setCity('Cape Town');
$frame->setProvince('WC');
$frame->setPostalCode('8001');
$frame->setCountryCode('ZA');
$frame->setVoice('+27.844784784');
$frame->setFax('+1.844784784');
$frame->setEmail('foo');

echo $frame;
