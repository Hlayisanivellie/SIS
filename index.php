<?php
$pid = "index";
$pageTitle = "Home";
$section = "Home";
$section2 = "";
$sectionID = "one";
$sectionID2 = "";
$prevLink = "search";
$prevTitle = "Search";
$nextLink = "about-us";
$nextTitle = "About us";
$prevSection = "footer";
$nextSection = "About us";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/metadata.php'); ?>
    <?php include('includes/head.php'); ?>

    <style>
        .purpose-main-block {
            position: relative
        }

        .purpose-main-block:before {
            position: absolute;
            content: '';
            bottom: -48px;
            left: 0;
            background: linear-gradient(180deg, rgba(67, 169, 172, 1) 47%, rgba(16, 32, 67, 1) 90%);
            width: 100%;
            height: 50%;
            z-index: -1;
        }

        .porpose-block {
            background: #fff;
            border-radius: 25px;
            padding: 80px 40px 40px 40px;
            min-height: 70%;
            box-shadow: 1px 1px 14px 1px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 1px 1px 14px 1px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 1px 1px 14px 1px rgba(0, 0, 0, 0.3);
            text-align: center;
            position: relative;
            margin: 10px;
            margin-top: 100px;
        }

        .porpose-block h3 {
            color: #0F4D8D;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .porpose-block p {
            font-size: 20px;
            font-weight: 500;
        }

        .porpose-block img {
            position: absolute;
            top: -80px;
            left: 36%;
        }

        .txt-grad-blue {
            font-size: 38px !important;
            color: #231F20;
            line-height: 1;
            font-weight: 500 !important;
            background: -webkit-linear-gradient(45deg, #0F1E41, #43A9AC 60%);
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .reports-btn-btm {
            width: 100%;
            float: left;
        }

        .fw-800 {
            font-weight: 800;
        }

        .txt-dear-share {
            font-weight: 600;
        }

        .reports-btn-btm {
            display: block;
            padding: 10px 0;
            border-bottom: 2px solid #43A9AC;
            transition: all 0.8s ease-in-out;
            text-decoration: none;
        }

        .reports-btn-btm a {
            text-decoration: none;
        }


        .iframe-box {
            position: absolute;
            top: 0px;
            right: calc(50% - 200px);
            height: 100%;

        }


        .top-foot-bg {
            background-color: #43A9AC;
            padding: 30px 0;
            margin-top: 0px !important;
        }

        .frame-share {
            margin: 0 auto;
            position: relative;
            width: 100%;
            height: 125px;
        }

        .brd-rgt-top {
            text-align: center;
            margin: 0 auto;
            overflow: hidden;
        }

        .news-title-home {
            font-size: 17px;
            font-weight: 800;
            color: #0F1E41;
            margin-bottom: 10px;
        }

        .news-link {
            display: block;
            padding: 15px 0;
            border-bottom: 2px solid #43A9AC;
            transition: all 0.8s ease-in-out;
            text-decoration: none;
        }


        .reunert-button-img2,
        .reunert-button-img {
            float: right;
        }

        .background-quick-links {
            background: #E9E9E9;
            padding: 20px;
        }


        .reunert-btn-results-right {
            float: right;
        }

        .reunert-btn-results {
            background: #0F1E41;
            color: #fff;
            padding: 10px 10px 10px 45px;
            margin: 30px 0;
            text-decoration: none;
            border-radius: 0;
            position: relative;
            display: inline-block;
            font-weight: 700;
        }


        .our-purpose {
            background: #EAEAEA;
        }

        .intro-med-home {
            font-size: 23px !important;
            font-weight: 600;
        }



        .switch-green {
            color: #43A9AC
        }

        ul.list-green {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        ul.list-green li {
            position: relative;
            font-size: 18px;
            left: 25px;
            margin-bottom: 10px;
        }

        ul.list-green li:before {
            position: absolute;
            content: '';
            left: -25px;
            top: 7px;
            height: 15px;
            width: 15px;
            border-left: 0px solid transparent;
            border-right: 15px solid transparent;
            border-top: 20px solid #43A9AC
        }



        .home-block-immaged {
            border: 1px solid #000;
            position: relative;
            width: 100%;
            height: 100%;
            padding-bottom: 70px;
        }

        .homeblocked-link-bottom {
            position: absolute;
            bottom: 30px;
            left: 0;
            text-align: center;
            width: 100%;
            padding-left: 25px;
            padding-right: 25px;
        }

        .homeblocked-link-bottom .reunert-btn {
            background: #0F1E41;
            margin: auto;
            color: #fff;
            text-align: left;
            border-radius: 0px;
        }

        .homeblocked-link-bottom .reunert-btn:before {
            color: #fff;
            border: 2px solid #fff;
        }


        .homeblocked-link-bottom .reunert-btn:hover:before {

            color: #fff;
            border: 2px solid #fff;
        }

        .homeblocked-link-bottom .reunert-btn:hover {
            background: #43A9AC;
            color: #fff;
        }

        .home-block-immaged-img {
            position: relative;
            width: 100%;
        }

        .home-block-immaged-img1 {
            width: 100%;
        }

        .home-grad-1 {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
        }

        .home-block-immaged-hero-content {
            position: absolute;
            top: 20px;
            left: 20px;
            padding-left: 25px;
            padding-right: 25px;
            color: #fff;
            font-size: 25px;
            z-index: 1;
            line-height: 1.2;
        }

        .home-block-immaged-hero-content-img {
            position: absolute;
            left: 0;
            top: -5px;
            width: 21px;
            /*display: none;*/

        }

        .home-content-padboxed {
            padding: 25px;
        }

        .home-content-padboxed .link-bottom-border {
            position: relative;
            width: 100%;
            display: block;
            text-decoration: none;
            font-size: 20px;
            text-transform: uppercase;
            padding-bottom: 8px;
            margin-bottom: 20px;
            color: #0F1E41;
            margin-top: 11px;
            float: left;
        }

        .reunert-btn-wht:before {
            position: absolute;
            font-family: 'icomoon';
            content: '\e93c';
            width: 25px;
            height: 25px;
            top: 15px;
            left: 7px;
            border: 1px solid #0F1E41;
            border-radius: 50%;
            padding: 0px 6px;
            transition: all .5s linear;
            transition-timing-function: ease;
        }

        .reunert-btn-wht {
            background: #fff;
            color: #0F1E41;
            padding: 14px 20px 14px 45px;
            margin: 30px 0;
            text-decoration: none;
            position: relative;
            display: inline-block;
            font-weight: 800;
        }

        .reunert-btn-wht:hover {
            background: #43A9AC;
            color: #0F1E41;

        }

        .news-link a {
            text-decoration: none;
            cursor: pointer;
        }


        .reunert-btn-wht:before:hover {
            border: 1px solid #fff;

        }

        .qa-link a {
            color: #fff;
            font-weight: 700;
            margin-bottom: 10px;
            text-decoration: none;

        }

        .bdr-qa-links {
            border-bottom: #0F1E41 2px solid;
        }

        .txt-f-weight-3 {
            font-weight: 300;
        }

        .sens-btn-btm-lst {
            border-bottom: none !important;
        }

        .switch-dark-blue {
            color: #0F1E41;
        }

        .group-txt-results {
            font-weight: 600;
            font-size: 20px;
            color: #fff;
        }

        .group-txt-results span {
            display: block;
            font-size: 14px;
            color: #fff;
            font-weight: 400;
        }

        .bg-lblue-r-archive {
            background: #43A9AC;
            padding: 20px;
        }

        .banner-arrowleft-frst-slide img {
            max-width: 210px;
        }

        .banner-arrowleft-frst-slide {
            text-align: center;
        }

        .banner-arrowright-scnd-slide img {
            max-width: 210px;
        }

        .banner-arrowright-scnd-slide {
            text-align: center;
        }

        .banner-arrowright-frst-slide {
            position: absolute;
            left: 55%;
            width: 11%;
            top: 28%;
        }

        .banner-arrowleft-scnd-slide {
            position: absolute;
            left: 79%;
            width: 10%;
            top: 27%;
        }

        .switch-green-hdng {
            color: #EBF892 !important;
        }

        .txt-year-end {
            font-size: 26px;
            margin-bottom: 30px;
            color: #fff;
        }

        .home-results-btn {
            font-size: 16px;
            font-weight: 600;
            margin-right: 30px;
            z-index: 2;
        }

        .z-txt {
            z-index: 2;
        }

        /*Slider */
        .slider {
            position: relative;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            position: relative;
        }

        .slide {
            min-width: 100%;
            overflow: hidden;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        .slide-arrows {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            z-index: 99;
        }

        .slide-arrow {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .slide-arrow:hover {
            background-color: rgba(84, 184, 223, 0.5);
        }

        .slide-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            z-index: 999;
        }

        .slide-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fff;
            margin: 0 5px;
            cursor: pointer;
        }

        .active {
            background-color: #43A9AC
        }

        /*end slider */

        .bg-drk-blue {
            background: #0F1E41;
        }


        .time-banner-results {
            font-size: 21px;
        }

        .home-hero-section {
            background-image: url(images/hero-banner.png);
            min-height: 500px;
            display: flex;
            place-items: center;
            padding: 140px 0;
            background-repeat: no-repeat;
        }

        .hero-content {
            width: 40%;
            color: #fff;
        }

        h1.hero-title {
            font-size: 50px;
            margin-bottom: 20px;
        }

        h1.hero-title span {
            color: #54B8DF;
            font-size: 60px;
            line-height: .6;
        }

        h2 span {
            color: #43A9AC;
            font-size: 40px;
            font-weight: 300;
        }

        .counter-highlight {
            text-align: center;
        }

        .counter-highlight .number {
            font-size: 60px;
            font-weight: 700;
            color: #EBF892;
        }

        .counter-highlight p {
            margin-bottom: 0;
            line-height: 1.4;
            font-family: Ubuntu, sans-serif;
            font-style: normal;
            font-weight: 700;
            text-decoration: none;
            color: #FFFFFF;
            font-size: 22px;
            text-align: center;
        }

        .sens-btn-btm {
            display: block;
            padding: 15px 0;
            border-bottom: 2px solid #fff;
            transition: all 0.8s ease-in-out;
            text-decoration: none;

        }


        .pos-rel {
            position: relative;
        }

        .pos-rel iframe {
            position: absolute;
        }

        .parent-box a {
            color: rgb(31, 69, 79);
        }

        .parent-box-2 a {
            color: rgb(31, 69, 79);
        }

        .homebanner-image {
            position: relative;
        }

        .homebanner-text {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            color: #fff;
            height: 100%;
            z-index: 3;
            background: rgba(0, 0, 0, 0.1);

        }

        .homebanner-text p {
            font-size: 18px;
        }

        .sens-btn-btm a {
            text-decoration: none;
        }

        h1.hero-title {
            font-size: 45px;
            margin-bottom: 20px;
            line-height: 1.1;
            margin-top: 0px;
            font-style: normal;
            font-weight: 800;
            font-family: "Manrope", sans-serif;
            position: relative;
            margin-left: 50px;
        }

        h1.hero-title::before {
            content: '';
            top: 5px;
            left: -45px;
            position: absolute;
            width: 0;
            height: 0;
            border-left: 0px solid transparent;
            border-right: 20px solid transparent;
            border-top: 50px solid #fff;
        }

        .Section-padding-size {
            padding-top: 60px;
            padding-bottom: 30px;
        }

        .banner-arrowright {
            position: absolute;
            left: 55%;
            width: 11%;
            top: 28%;
            z-index: 8;
        }

        .secondslideheadingtext {
            line-height: 1.6 !important;
        }

        .banner-arrowleft {
            position: absolute;
            left: 79%;
            width: 10%;
            top: 27%;
            z-index: 8;
        }

        .mt-6 {
            margin-top: 4rem !important;
        }


        .mobilebtn-display {
            display: none;
        }

        .cal-blk-wht:hover .img-btm-add {
            display: inline;
            position: relative;
            display: none;
        }



		/*.main-heading h1:before{content: url(images/h1-chip.png); left: 0; top: -20px;  position: absolute;}*/
			
	
	
			
        @media screen and (max-width: 1400px) {
            .homebanner-text p {
                font-size: 12px;
            }

            .cal-blk-wht {
                min-height: 340px;
            }
            h1.hero-title {
                font-size: 36px;
                line-height: 1.3;
                margin-top: 0px;
                font-weight: 600;
                text-align: left;
            }
        }

        @media screen and (max-width: 1200px) {
            h1.hero-title {
                font-size: 28px;
                line-height: 1.3;
                margin-top: 0px;
                font-weight: 600;
                text-align: left;
            }


            .porpose-block p {
                font-size: 16px;
            }

            .time-banner-results {
                font-size: 18px;
            }

            h1.hero-title span {
                font-size: 1.3em;
                float: left;
                width: 100%;
                margin-bottom: 15px;
                margin-top: 5px;
                line-height: .8;

            }

            .homebanner-textbreak {
                display: none;
            }

            .homebanner-text p {
                font-size: 14px;
            }

            .cal-blk-wht {
                min-height: 340px;
            }
        }

        @media screen and (max-width: 991px) {

            .cal-blk-wht {
                min-height: 280px;
            }

            h1.hero-title {
                margin-top: 50px;
                margin-left: 0px;
            }

            .slide-sizesbox {
                padding-left: 40px;
                padding-right: 40px;
            }

            .home-block-immaged {
                height: auto;
                margin-bottom: 45px;
            }


            .banner-arrowleft {
                position: absolute;
                left: 76%;
                width: 10%;
                top: 16%;
            }

            .banner-arrowright {
                position: absolute;
                left: 62%;
                width: 11%;
                top: 16%;
            }

            .txt-year-end {
                font-size: 26px;
                margin-bottom: 50px;
                color: var(--primary-navy);
            }


            .slides {
                display: flex;
                transition: transform 0.5s ease-in-out;
                position: relative;
                height: 500px;
                text-align: center;
            }


            .homebanner-text {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                color: #fff;
                height: 100%;
                z-index: 0;
                background: #00000082;
            }

            .item-one {
                background-image: url("images/banners/results-banner-mobile.png");

            }

            .item-ones::after {
                background: rgba(0, 0, 0, 0.2);
                position: absolute;
                content: '';
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100%;
                z-index: 1;
            }

            .item-two::after {
                background: rgba(0, 0, 0, 0.2);
                position: absolute;
                content: '';
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100%;
                z-index: 1;
            }

            .item-two {
                background-image: url("images/banners/homepage-banner-mobile.png");
                background-repeat: no-repeat;
                background-position: center;
                position: relative;
                top: 0px;
                left: 0px;
                z-index: -1;
            }

            .image-slide-one,
            .image-slide-two {
                display: none;
            }


            .banner-arrowleft-frst-slide {
                position: absolute;
                left: 62%;
                width: 11%;
                top: 50%;
            }

            .banner-arrowright-scnd-slide {
                position: absolute;
                left: 76%;
                width: 10%;
                top: 50%;
            }

            .banner-arrowleft-frst-slide img {
                display: none;
            }

            .banner-arrowright-scnd-slide img {
                display: none;
            }

        }
    </style>

</head>

<body id="one">
    <?php include('includes/header.php'); ?>
    <?php include('includes/navigation.php'); ?>


    <div class="slider" onmouseenter="stopAutoSlide()" onmouseleave="startAutoSlide()">
        <div class="slides">
            <div class="slide item-one">
                <img src="images/banners/results-banner.png" alt="Image 1" class="image-slide-one">





                <div class="homebanner-text slide-sizesbox">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-5 col-lg-6 col-md-12">
                                <h1 class="hero-title font-w-light wow fadeInUp ">
                                    Intro ipsum may<br /> be used as a<br /> placeholder
                                </h1>


                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="slide item-two">
                <img src="images/banners/results-banner2.png" alt="Image 2" class="image-slide-two">



                <div class="homebanner-text slide-sizesbox">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-5 col-lg-6 col-md-12">
								
									<div class="main-heading">
										<h1 class="hero-title font-w-light wow fadeInUp ">
                                    Intro ipsum may<br /> be used as a<br /> placeholder
                                </h1>

									</div>
								
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="slide-arrows">
            <div class="slide-arrow" onClick="prevSlide()">&#10094;</div>
            <div class="slide-arrow" onClick="nextSlide()">&#10095;</div>
        </div>

        <div class="slide-dots">
            <span class="slide-dot" onClick="currentSlide(0)"></span>
            <span class="slide-dot" onClick="currentSlide(1)"></span>
        </div>
    </div>


    <div class="bg-grad-top">
        <div class="container">
            <div class="row justify-around mb-3 gx-5">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <p class="text-white  intro-small2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>



                <div class="col-lg-6 col-md-12">
				
			<p class="text-white  intro-small2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



                </div>

            </div>
        </div>
    </div>

    <div class="padding-60TB pb-0">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4">
                    <div class="home-block-immaged wow fadeInUp">
                        <div class="home-block-immaged-img">

                            <img src="images/home-grad-1.png" class="home-grad-1" alt="Electrical Engineering">

                            <img src="images/home-img-1.png" class="home-block-immaged-img1" alt="Electrical Engineering">
                            <div class="home-block-immaged-hero-content">H2 heading</div>
                        </div>

                        <div class="home-content-padboxed">
                         
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="homeblocked-link-bottom">
                            <a href="#" class="reunert-btn mb-0">Link here</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home-block-immaged wow fadeInUp">
                        <div class="home-block-immaged-img">

                            <img src="images/home-grad-2.png" class="home-grad-1" alt="Information Communication
Technologies (ICT)">

                            <img src="images/home-img-2.png" class="home-block-immaged-img1" alt="Electrical Engineering">
                            <div class="home-block-immaged-hero-content">H2 heading</div>
                        </div>

                        <div class="home-content-padboxed">
                         
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="homeblocked-link-bottom">
                            <a href="#" class="reunert-btn mb-0">Link here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home-block-immaged wow fadeInUp">
                        <div class="home-block-immaged-img">

                            <img src="images/home-grad-3.png" class="home-grad-1" alt="Applied Electronics">

                            <img src="images/home-img-3.png" class="home-block-immaged-img1" alt="Electrical Engineering">
                            <div class="home-block-immaged-hero-content">H2 heading</div>
                        </div>

                        <div class="home-content-padboxed">
                         
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="homeblocked-link-bottom">
                            <a href="#" class="reunert-btn mb-0">Link here</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





<div class="bg-grad-top mt-5">
        <div class="container">
            <div class="row justify-around mb-3 gx-5">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <p class="text-white  intro-small2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>



                <div class="col-lg-6 col-md-12">
				
			<p class="text-white  intro-small2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



                </div>

            </div>
        </div>
    </div>







    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Main headings</h2>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="background-quick-links h-100 wow fadeInLeft">

                                <div class="row">
                                    <div class="col-lg-7">
                                        <h3 class="switch-dark-blue fw-800"><strong>Latest reports</strong></h3>
                                    </div>
                                    <div class="col-lg-5">

                                        <a href="reporting-and-results.php" class="reunert-btn mb-0 mt-0 reunert-btn-results reunert-btn-results-right">Reports
                                            archive</a>


                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										


                                        <a href="#" class="reunert-btn mb-0 mt-0 reunert-btn-results reunert-btn-results-right">Link here</a>
										
										
                                    </div>
                                    
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="background-quick-links h-100 wow fadeInRight">



                                <div class="row mb-4">

                                    <div class="col-lg-12">


                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										


                                        <a href="#" class="reunert-btn mb-0 mt-0 reunert-btn-results reunert-btn-results-right">Link here</a>

                                    </div>

                                </div>


                          


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>










    <div class="our-purpose pt-5 mt-5 pb-5">
        <div class="container ">



            <div class="row">

                <div class="col-lg-4">

                    <h2 class="mt-3 switch-dark-blue">Main heading</h2>

                </div>

                <div class="col-lg-5">


               <p class="intro-med-home mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                </div>

                <div class="col-lg-3">

                    <a href="#" target="_blank" class="reunert-btn mb-0" style="float: right;">Link here</a>

                </div>


            </div>





        </div>

    </div>



    <style>
        .pop-up-const {
            position: fixed;
            width: 100%;
            height: 100vh;
            display: none;
            justify-content: center;
            place-items: center;
            background-color: rgba(0, 0, 0, 0.393);
            backdrop-filter: blur(10px);
            z-index: 9999;
            top: 0;
            left: 0;
        }

        .pop-up-const .inner-holder {
            position: relative;
            max-width: 500px;
            padding: 30px;
            /* background-color: #fff; */
            background-image: url(images/banners/results-banner.png);
            background-repeat: no-repeat;
            background-size: cover;
            /* border-radius: 10px; */
            border: 2px solid #fff;
        }

        .pop-up-const .inner-holder::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            top: 0;
            left: 0;
        }

        .pop-up-const .inner-holder p {
            font-weight: 800;
            font-size: 20px;
            line-height: 1.2;
            color: #fff;
        }

        .pop-up-const .inner-holder p.content {
            font-size: 17px;
            font-weight: 600;
        }

        .pop-up-const button {
            border: none;
            padding: 10px 30px;
            background-color: #43A9AC;
            color: #fff;
            font-weight: 700;
        }


        .pop-up-const a {
            color: #fff;
        }

        button.close {
            background-color: transparent;
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2;
        }


        .cont {
            position: relative;
            z-index: 1;
        }
    </style>


    <!--<div class="pop-up-const">
        <div class="inner-holder">

            <button class="close" onClick="submitButton()">X</button>
            <div class="cont">
                <p class="title-message"><strong>Notice: Site Under Construction</strong></p>
                <p class="content">Just a heads up: our website is currently a work in progress. If you're looking for something that's not here yet, feel free to drop us a line at <a class="switch-green" href="mailto:Karens@reunert.co.za">Karens@reunert.co.za</a> <br>
                    <br>
                    Thanks for your patience!
                </p>

                <label for="remember" class="d-flex mb-3">
                    <input type="checkbox" name="remember" id="remember" class="checkbox mr-2" onClick="rememberToggle()">
                    <span class="ps-2 switch-white"><em>Don't show this message again</em></span>
                </label>

                <button onClick="submitButton()">Got it</button>
            </div>
        </div>
    </div>-->


    <script>
        let slideIndex = 0;
        let autoSlideInterval;

        function showSlides() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slide-dot');
            slides.forEach((slide, index) => {
                if (index === slideIndex) {
                    slide.style.display = 'block';
                    dots[index].classList.add('active');
                } else {
                    slide.style.display = 'none';
                    dots[index].classList.remove('active');
                }
            });
        }

        function currentSlide(n) {
            slideIndex = n;
            showSlides();
        }

        function prevSlide() {
            if (slideIndex > 0) {
                slideIndex--;
            } else {
                slideIndex = document.querySelectorAll('.slide').length - 1;
            }
            showSlides();
        }

        function nextSlide() {
            const slides = document.querySelectorAll('.slide');
            if (slideIndex < slides.length - 1) {
                slideIndex++;
            } else {
                slideIndex = 0;
            }
            showSlides();
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                if (slideIndex < document.querySelectorAll('.slide').length - 1) {
                    slideIndex++;
                } else {
                    slideIndex = 0;
                }
                showSlides();
            }, 30000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        showSlides();
        startAutoSlide();
    </script>

    <script>
        var numbers_values = document.querySelectorAll('.number .value.full');
        var decimal_values = document.querySelectorAll('.number .value.decimal');
        gsap.from(numbers_values, {
            textContent: 0,
            opacity: 0,
            duration: 1,
            ease: "power1.inOut",
            snap: {
                textContent: 1
            },
            stagger: 0.3,
            scrollTrigger: {
                trigger: numbers_values[0],
                start: 'top 90%',
            },
        });

        gsap.from(decimal_values, {
            textContent: 0.0,
            opacity: 0,
            duration: 1,
            ease: "power1.inOut",
            snap: {
                textContent: 0.23
            },
            scrollTrigger: {
                trigger: numbers_values[0],
                start: 'top 90%',
            },
        });
    </script>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom-scripts.php'); ?>


    <script>
        var showGuide = true;
        var remember = false;

        const pop_up = document.querySelector('.pop-up-const')

        function initial() {
            if (window.localStorage.getItem('construction') == null || window.localStorage.getItem('construction') == 'N') {
                pop_up.style.display = "flex"
                window.localStorage.setItem('construction', 'N')
            } else {
                pop_up.style.display = "none"
                window.localStorage.setItem('construction', 'Y')

            }
        }

        function rememberToggle() {
            if (this.remember) {
                this.remember = false
            } else {
                this.remember = true
            }
        }

        function submitButton() {
            if (this.remember) {
                window.localStorage.setItem('construction', 'Y')
                pop_up.style.display = "none"
            } else {
                window.localStorage.setItem('construction', 'N')
                pop_up.style.display = "none"
            }
        }

        initial()
    </script>
    <script>
        new WOW().init();
    </script>
</body>

</html>