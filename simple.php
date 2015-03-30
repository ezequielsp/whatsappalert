<?php 


require 'src/whatsprot.class.php';

$wa = new WhatsProt('919865237431', 'Mohammed Talha', false);
$wa->connect();
$wa->loginWithPassword('nKhcLDvr05p0wX8x8jKZjpNgdcE=');
$to = '919788179303';



//Convert to date
$datestr="2015-04-28 10:00:00";//Your date
$date=strtotime($datestr);//Converted to a PHP date (a second count)

//Calculate difference
$diff=$date-time();//time returns current time in seconds
$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
$hours=round(($diff-$days*60*60*24)/(60*60));

//Report
$msg =  "You have only $days days $hours hours left to prepare for M 3 exam ";


//$msg = 'Hi';


$wa->sendMessage($to, $msg);
 
