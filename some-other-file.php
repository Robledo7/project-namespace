<?php
/**include_once "Foo.php"; (forma de reemplzar esto es:)*/
require "Foo.php";

use Acme\Tools\Foo;
$foo = new Foo();
$foo->doAwesomeThings();