<?php
/**include_once "Foo.php"; (forma de reemplzar esto es:)*/
require "Foo.php";

use Acme\Tools\Foo as SomeFooClass;
$foo = new SomeFooClass();
$foo->doAwesomeThings();