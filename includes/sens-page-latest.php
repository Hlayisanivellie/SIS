 <?php include('db-connect.php'); ?>


<?php
$query="
SELECT articleID, title, intro, document, externalLink, smallImage, largeImage, DATE_FORMAT(contentDate, '%d %M %Y') as contentDateDisplay,
creationDate, modifyDate, active, downloadFile, source, featured, archive, category, subcategory, customerID, disclaimer,fileSize, DATE_FORMAT(contentDate, '%Y') as contentDateDisplayYear,
DATE_FORMAT(contentDate, '%d') as dayStart,DATE_FORMAT(contentDate, '%b') as monthStart,
DATE_FORMAT(contentDate, '%Y') as yearStart,DATE_FORMAT(contentDate, '%W') as dayNameStart
FROM articles
WHERE active = 'Y' AND category = 'SENS' AND customerID = $customerID $categorySQL 
ORDER BY contentDate DESC LIMIT 4";
$result = $conn->query($query);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	$articleID=$row["articleID"];
	$title=$row["title"];
	$intro=$row["intro"];
	$document=$row["document"];
	$externalLink=$row["externalLink"];
	$smallImage=$row["smallImage"];
	$largeImage=$row["largeImage"];
	$contentDate=$row["contentDateDisplay"];
	$creationDate=$row["creationDate"];
	$modifyDate=$row["modifyDate"];
	$active=$row["active"];
	$downloadFile=$row["downloadFile"];
	$source=$row["source"];
	$featured=$row["featured"];
	$archive=$row["archive"];
	$category=$row["category"];
	$subcategory=$row["subcategory"];
	$customerID=$row["customerID"];
	$disclaimer=$row["disclaimer"];
	$fileSize=$row["fileSize"];
	$contentDateDisplayYear=$row["contentDateDisplayYear"];

	$dayStart=$row["dayStart"];
	$monthStart=$row["monthStart"];
	$yearStart=$row["yearStart"];
	$dayNameStart=$row["dayNameStart"];

echo '


    <div class="col-lg-3 col-md-6">
        <div class="cal-blk-wht wow fadeInLeft">

        

            <div class="full-date">'.$contentDate.'</div>
            <div class="event-discrpt block-results">' . $title . '</div>

            <div class="add-cal-btn"><a href="sens-article.php?articleID=' . $articleID . '" >  Read more
                <img src="images/icons/add-to-calendar.svg" class="mw-100 ms-2" alt="add to calendar icon">
                <img src="images/icons/add-to-calendar-green.svg" class="mw-100  img-btm-add ms-3" alt="add to calendar icon"></a>
        </div>

        </div>
       

    </div>';
	}

}
   
?>
