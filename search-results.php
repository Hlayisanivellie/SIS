<?php
$pid = "search-results";
$pageTitle = "Search this site";
$section= "SEARCH";
$section2= "";
$sectionID= "nine";
$sectionID2= "";
$prevLink = "paia-manual";
$prevTitle = "PAIA manual";
$nextLink = "index";
$nextTitle = "Home";
$prevSection = "FOOTER";
$nextSection = "Home";
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/metadata.php'); ?>
    <?php include('includes/head.php'); ?>

    <style>
		
.zoom_searchbox {width: 36%;background: #fff;color: #a3a3a3;font: inherit;box-shadow: 0 6px 10px 0 rgb(0 0 0 / 10%);border: 0;outline: 0;padding: 22px 18px;border: 1px solid #0F1E41;transition:all 1s ease-in-out;}
.zoom_button {
    background: #0F1E41;
    color: #fff;
    box-shadow: 2px 8px 10px 0px rgb(0 0 0 / 44%);
    /* border-radius: 20px; */
    padding: 12px 54px;
    margin-left: -80px;
    background-image: url(images/Group%201088.png);
    border: 1px solid #0F1E41;
    outline:none;
    transition:all 3s ease-in-out;
    /* ; */
    margin-right: 57px;    margin-bottom: 20px;  
    }
.zoom_button:hover{  transition:all 1s ease-in-out;margin-left: -41px;    padding: 12px 65px;}
.zoom_searchbox:hover.zoom_button{  transition:all 2s ease-in-out;margin-left: -41px;     padding: 12px 58px; }
.zoom_searchbox:hover,.zoom_button:hover .zoom_searchbox{width:40%;transition:all 0.5s ease-in-out;}
select {word-wrap: normal;outline: 0;padding: 10px 18px;border: 2px solid #e1e5e5;border-radius: 19px;transition: all 1s ease-in-out;/* width: 10%; */}
small{display:none;}
input[type=radio] {    box-sizing: border-box;    padding: 0;    margin-right: 11px;}
label {    display: inline-block;    margin-bottom: .5rem;    color: #0F1E41;    font-size: 20px;    font-weight: bold;    margin-right: 21px;}
input[type='radio'] {	margin-top: -30px;}
input[type='radio'] {-webkit-font-smoothing: antialiased;text-rendering: optimizeSpeed;width: 13px;height: 13px;margin: 0;margin-right: 1px;display: inline-block;/* float: left; */position: relative;cursor: pointer;border-radius:10px;margin-right: 9px;}
input[type='radio']:after {	content: "";	vertical-align: middle;	text-align: center;	line-height: 13px;	position: absolute;	cursor: pointer;	height: 17px;	width: 17px;	left: -2px;	top: -2px;	font-size: 10px;	background: #fff;	border:1px solid #0F1E41;	border-radius:10px;}
input[type='radio']:before {	content: "";	vertical-align: middle;	text-align: center;	line-height: 13px;	position: absolute;	cursor: pointer;	height: 17px;	width: 17px;	left: -2px;	top: -2px;	font-size: 10px;		background: #fff;	border:1px solid #0F1E41;	border-radius:10px;}
input[type='radio']:hover:after, input[type='radio']:checked:hover:after {	background: #0F1E41;	content: '\2714';	color: #fff;animation: toRightFromLeft 0.3s ease-in-out forwards;}
input[type='radio']:checked:after {	background:#0F1E41;	content: '\2714';	color: #fff;animation: toRightFromLeft 0.5s forwards;}

@keyframes gradient {
  0% {
     padding: 12px 54px;
  }
  100% {
   padding: 12px 75px;
  }
}
	
	@media screen and (max-width: 974px){label{display: block}.zoom_searchbox {width: 56%;}}
	@media screen and (max-width: 800px){.zoom_searchbox{width: 71%;}}
	@media screen and (max-width: 600px){.zoom_searchbox{width:100%;}.zoom_button {    margin-top: 20px;margin-left: 0px;}}
</style>
</head>

<body id="nine">
    <?php include ('includes/header.php'); ?>
    <?php include ('includes/navigation.php'); ?>

    <div class="banner-main">
        <img src="images/banners/page-banner.png" alt="" class="banner-img">
        <div class="container">
            <div class="main-heading">
                <h1 class="font-w-light"><span class="font-w-bold"><?php echo ucfirst(strtolower($section)); ?></span><?php echo $pageTitle ?></h1>
            </div>
        </div>
    </div>

    <?php include ('includes/breadcrumb.php'); ?>
    
    <div class="container">
        <?php include ("search.php"); ?>
        
    </div>

    <?php include ('includes/footer.php'); ?>
    <?php include('includes/bottom-scripts.php'); ?>

</body>

</html>
