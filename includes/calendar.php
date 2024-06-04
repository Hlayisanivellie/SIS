 <?php include('db-connect.php'); ?>
 <?php


$yesterday = mktime(0,0,0,date("m"),date("d")-1,date("Y"));
$yesterday2 = date("Y-m-d", $yesterday);

$class = 'class="white-calendar"';
// All Events
$query= "SELECT calendarEventID,title,dateAdded,eventStart,eventEnd,DATE_FORMAT(eventStart, '%d') as dayStart,DATE_FORMAT(eventEnd, '%d') as dayEnd,DATE_FORMAT(eventStart, '%b') as monthStart,
DATE_FORMAT(eventStart, '%Y') as yearStart,DATE_FORMAT(eventStart, '%W') as dayNameStart, fullAbstract
FROM calendarEvent WHERE customerID=$customerID AND active = 'Y' AND featured = 'Y' AND eventStart >= DATE_FORMAT(now(),'%Y-%m-%d')  ORDER by eventStart ASC LIMIT 4";
$result = $conn->query($query);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {


$calendarEventID=$row['calendarEventID'];
$title=$row['title'];
$dateAdded=$row['dateAdded'];
$dateUpdated=$row['dateUpdated'];
$eventStart=$row['eventStart'];
$eventEnd=$row['eventEnd'];
$dayStart=$row['dayStart'];
$dayEnd=$row['dayEnd'];
$monthStart=$row['monthStart'];
$yearStart=$row['yearStart'];
$dayNameStart=$row['dayNameStart'];
$fullAbstract=$row['fullAbstract'];
$featured=$row['featured'];
$dayStartDBvalueDay=$row['dayStart'];

$dateStart = explode("-", $eventStart);
$dateEnd = explode("-", $eventEnd);


$dates = "$dayStart $dateMonth $dateStart[0] to $dayEnd $dateendMonth $dateEnd[0]";
if ($eventStart == $eventEnd) {
$dates = "$dayStart $monthStart $dateStart[0]";
} else {
if($dateMonth == $dateendMonth & $dateStart[2] != $dateEnd[2]){
$dates = "$dayStart-$dayEnd $dateMonth $dateStart[0]";
}
}



if($eventStart > $yesterday2){
$class = ($class == 'class="white-calendar"') ? 'class="grey-calendar"' : 'class="white-calendar"';

$eventICSLink = 'action.php?action=1&eventID='.$calendarEventID;
if ($calendarEventID == 978) {
$eventICSLink = 'eventss978.ics';
}

if($dayStart == $dayEnd)
{
$dayStart=$dayStart;
}
else{
$dayStart= 'TBC';
//$dayStart=$dayStart;
}




if($dayStart == 'TBC'){
    $fullMonth = strtotime($monthStart);

    $fullMonth = date("F", $fullMonth);
	$dayStart=$dayStartDBvalueDay.' &ndash; '.$dayEnd;
    $fullDate = $dayStart.' '.$fullMonth.' '.$yearStart;

}

else{

$fullDate = $dayStart.''.$monthStart.''.$yearStart;

$fullDate = strtotime($fullDate);

$fullDate = date("d F Y", $fullDate);

$fullDate = ucwords ($fullDate);

}
if($bluedate==0)
{
 $bluedateBox='';
}
else
{
 $bluedateBox='';
}
$events .= '

    <div class="col-lg-3 col-md-6">
        <div class="cal-blk-wht '.$bluedateBox.'">

            <div class="cal-icon"> 
                 <img src="images/icons/calendar-dates.svg" class="mw-100 " alt="calendar icon blue"> 
                 <img src="images/icons/calendar-dates-wht.svg" class="img-top" alt="calendar icon blue">
            </div>

            <div class="full-date">'.$fullDate.',</div>
			<div class="full-day">'.$dayNameStart.'</div>
            <div class="event-discrpt">'.$title.'</div>

            <div class="add-cal-btn"><a href="' . $eventICSLink . '">  Add&nbsp;to&nbsp;calendar 
                <img src="images/icons/add-blue-dark.svg" class="mw-100 ms-2" alt="add to calendar icon">
                <img src="images/icons/add-blue-dark.svg" class="mw-100  img-btm-add ms-3" alt="add to calendar icon"></a>
        </div>

        </div>
       

    </div>

    









';
$bluedate++;

}
}
}
?>
<?php
// Calendar table

echo "$events";
?>
