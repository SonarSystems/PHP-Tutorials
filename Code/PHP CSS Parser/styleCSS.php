<?php header( "Content-type: text/css; charset: UTF-8" ) ?>

<?php

$color = "blue";

if ( 5 === 5 )
{
	$color = "black";
}

?>


body
{
	background-color: <?= $color; ?>;
}