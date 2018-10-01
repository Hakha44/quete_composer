<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 01/10/18
 * Time: 15:35
 */

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$objet1 = new Hello();
echo $objet1->talk();

$objet2 = new SayHello();
echo $objet2->world();