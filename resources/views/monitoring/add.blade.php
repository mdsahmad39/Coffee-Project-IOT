@extends('layouts.app')
@include('connect')

@section('content')
<?php
   	
   	$link=Connection();

	$temp1=$_POST["temp1"];
	$hum1=$_POST["hum1"];

	$query = "INSERT INTO `tempLog` (`temperature`, `humidity`) 
		VALUES ('".$temp1."','".$hum1."')"; 
   	
   	mysql_query($query,$link);
	mysql_close($link);

   	header("Location: index");
?>
@endsection