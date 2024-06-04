<?php

//https://irhosted.profiledata.co.za/multichoice/2021_feeds/T04_intraday.xml

$xml = simplexml_load_file("https://df.marketdata.feeds.iress.com/feed/191/?token=eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJzZWNJRCI6MTU0LCJpYXQiOjE3MDkyNzY0MDYsImF1ZCI6ImlyZXNzLmNvLnphIiwiaXNzIjoiYWNjb3VudHMuaXJlc3MuY28uemEifQ.kncTLJIoi9D09Oc-_88by1KfBHjzLidYVVYvP-OGFY8dUbSqD4hLXaVoA2h2OCMk8hj8-tVYZVHeA49QwVpcfQ");
foreach($xml->children() as $key => $children) {
  $DateStampValue1=($children->fd_date); 
 	$LastTradedPriceValue=($children->eyld); 
  $MovePercentageValue=($children->offer); 
	$LastUpdateTimeValue=($children->LastUpdateTime); 
	$MarketStatusValue=($children->div); 
	$MoveValue=($children->Movement); 
	$LastTradedTimeValue=($children->LastUpdateTime); 
	
	$LastTradedTimeValue1=($children->LastTradedTime); 
	 
}

$DateStampValue2= substr($DateStampValue1, 3); 
$LastTradedTimeValue= substr($LastTradedTimeValue1, 0,-3); 
$DateStampValue3=strtotime($DateStampValue2);
$DateStampValue3=date('d M y', $DateStampValue3)." ";

$DateStampValueShareprice=$DateStampValue3." ";
//echo $DateStampValue1;echo " DateStamp<br>";
//echo $LastTradedPriceValue;echo " LastTradedPrice<br>";
//echo $MoveValue;echo " Move<br>";
//echo $MovePercentageValue;echo " MovePercentage<br>";
//echo $LastUpdateTimeValue;echo " LastTradedTime<br>";
//echo $MarketStatusValue;echo " MarketStatus<br>";


echo '<strong>Share price</strong>: Altron ('.$MovePercentageValue.') ('.$MarketStatusValue.') ('.$MoveValue.')  <span>15 minutes delayed</span>';
?>

