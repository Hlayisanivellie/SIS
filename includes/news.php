
 <?php
$servername = "dedi262.jnb2.host-h.net";
$username = "cmsvok_1";
$password = "HZ8f4e1K45m67POyt30O";
$dbname = "cmsvok_db1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$customerID = 118;


$year = $_REQUEST["year"];
$start = $_REQUEST["start"];
$maxLimit= 10;
if ($start == "") { $start = 1; }

// Years

if ($year == "") {
	$query="
	SELECT distinct DATE_FORMAT(contentDate, '%Y') as contentDateYear
	FROM articles
	WHERE active = 'Y' AND customerID = $customerID
	ORDER BY contentDate";
$result = $conn->query($query);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	$contentDateYearNow=$row["contentDateYearNow"];

	}
}
} else {
	$contentDateYearNow = $year;
}




// Count News articles
$query="
SELECT count(articleID) as countArticles
FROM articles
WHERE active = 'Y'  AND customerID = $customerID
ORDER BY featured DESC, contentDate DESC";
$result = $conn->query($query);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	$countArticles=$row["countArticles"];

   }
}


// News articles
$query="
SELECT articleID, title, intro, document, externalLink, smallImage, largeImage, DATE_FORMAT(contentDate, '<nobr>%d %M %Y</nobr>') as contentDateDisplay,
creationDate, modifyDate, active, downloadFile, source, featured, archive, category, subcategory, customerID, disclaimer, DATE_FORMAT(contentDate, '%d') as contentDayDisplay, DATE_FORMAT(contentDate, '%b') as contentMonthDisplay
FROM articles
WHERE active = 'Y' AND customerID = $customerID AND category = 'Media releases' AND featured = 'Y'
ORDER BY featured DESC, contentDate DESC LIMIT 0,3";

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
	$contentDayDisplay=$row["contentDayDisplay"];
	$monthStart=$row["monthStart"];

	$count++;


	$intro = strip_tags($intro); 

	if (strlen($intro) > 100)
	$intro = substr($intro, 0, 50) . '...';


           if ($externalLink !="") {
            $resultsnew .= '

			<div class="news-link">
			<a href="'.$externalLink.'" target="_blank" class="" >
            <div class="row">
                <div class="col-lg-10">
                 <div class="news-title-home">'.$title.'</div>
                    <div class="news-date switch-dark-blue mb-0">'.$contentDate.'</div>
                 <div class="news-intro switch-dark-blue">'.$intro.'</div>
                </div>
                <div class="col-lg-2 align-self-end">
                <div class="reunert-button-img">
                        <img src="images/icons/get-in-toch-icon-blue.svg">
                </div>
                </div>
            </div>
            </a>
        </div>

           ';
        } else {
	    $resultsnew .= '
		
		
		<div class="news-link">
		<a href="media-release-article.php?articleID=' . $articleID . '" class="" >
		<div class="row">
			<div class="col-lg-10">
			 <div class="news-title-home">'.$title.'</div>
				<div class="news-date switch-dark-blue mb-0">'.$contentDate.'</div>
			 <div class="news-intro switch-dark-blue">'.$intro.'</div>
			</div>
			<div class="col-lg-2 align-self-end">
			<div class="reunert-button-img">
					<img src="images/icons/get-in-toch-icon-blue.svg">
			</div>
			</div>
		</div>
		</a>
	</div>

           ';
        }


   }
}

echo "$resultsnew";



?>

