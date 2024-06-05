<?php
$pid = "overview";
$pageTitle = "Overview";
$section = "ABOUT US";
$section2 = "";
$sectionID = "two";
$sectionID2 = "";
$prevLink = "index";
$prevTitle = "Home";
$nextLink = "our-strategy";
$nextTitle = "Group strategy";
$prevSection = "HOME";
$nextSection = "ABOUT US";
?><!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('includes/metadata.php'); ?>
    <?php include ('includes/head.php'); ?>
    <style>
        .custom-pad-t{
            padding-top: 13px;
        }
        .bg-lgrey-investor {
            background: #EAEAEA;
        }

        .top-foot-bg {
            background-color: #43A9AC;
            padding: 30px 0;
            margin-top: 0px !important;
        }

        .dark-blue-bg {
            background: #0F1E41;
            position: relative;
            z-index: 999;
        }

        .center-this-image {
            display: block;
            margin: 0 auto;
        }


        .hide-text-on-wow-icon {
            position: relative;
            z-index: 999;
            background: #fff;
            min-height: 130px;
        }

        .even-padding-around {
            padding: 40px 0;
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border: 0 !important;
        }

        button.accordion-button.collapsed {
            background: #0F1E41;
            color: #fff;
            font-weight: 700;
            font-size: 22px;
        }

        .accordion-item {
            border-bottom: 2px solid #43A9AC !important;
            border: 0;
            border-radius: 0;
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .accordion-body {
            background: #0F1E41;
            color: #fff;
        }

        .accordion-button:not(.collapsed) {
            font-weight: 700;
            font-size: 22px;
            color: #fff;
            background-color: #0F1E41;
            box-shadow: none !important;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: none !important;
            outline: 0;
            box-shadow: none;
        }

        .accordion-button {
            position: relative;
        }

        .accordion-button::before {
            content: url(images/plus-sign.png);
            position: absolute;
            right: 0;
            top: 20px;
        }

        .accordion-button:not(.collapsed)::before {
            content: url(images/minus-sign.png);
            transition: all 500ms ease-in-out;
        }

        .accordion-button::after {
            display: none !important;
        }

        .accordion-body h4 {
            font-size: 20px;
        }

        .wow.slideInUp .center-this-image {
            border-radius: 50%;
        }

        .wow.slideInUp .center-this-image:hover {
            background: rgba(67, 169, 172, 0.10);
            border-radius: 50%;
            transition: all 480ms ease-in-out;
        }

        @media screen and (max-width:991px) {
            .hide-text-on-wow-icon {
                min-height: 80px;
            }
        }
    </style>
</head>

<body id="two">
    <?php include ('includes/header.php'); ?>
    <?php include ('includes/navigation.php'); ?>

    <div class="banner-main">
        <img src="images/banners/page-banner.png" alt="" class="banner-img">
        <div class="container">
            <div class="main-heading">
                <h1 class="font-w-light"><span class="font-w-bold"><?php echo ucfirst(strtolower($section)); ?></span><?php echo $pageTitle ?>
                </h1>
            </div>
        </div>
    </div>

    <?php include ('includes/breadcrumb.php'); ?>
    <div class="bg-grad-top">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-white intro-small2">Reunert manages a portfolio of businesses in the fields of
                        Electrical Engineering, Information Communication
                        Technologies (ICT) and Applied Electronics.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mt-5">Overview</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/established.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>Established
                                    in 1888 by
                                    Theodore Reunert
                                    and Otto Lenz</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/jse-listed.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>Listed on the JSE on
                                    1 January 1948</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/headquaters.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>Corporate
                                    headquarters in
                                    Woodmead,
                                    Sandton,
                                    South Africa</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/international-ops.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>International
                                    operations and
                                    offices in Australia,
                                    India, Lesotho,
                                    Mauritius, USA and
                                    Zambia</strong></p>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/fin-year-30-sep.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center hide-slide-image"><strong>Financial year-end
                                    30 September</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/revenue-fy22.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>Revenue:
                                    FY22 R11,1 billion</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/ops-profit.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>Operating profit:
                                    FY22 R1,2 billion</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="wow slideInUp">
                            <img src="images/number-of-employees.png" alt="" class="mw-100 center-this-image">
                        </div>
                        <div class="hide-text-on-wow-icon">
                            <p class="switch-dblue text-center"><strong>Number of
                                    employees
                                    5 503</strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dark-blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="even-padding-around">
                        <h2 class="switch-white text-center">Explore our business operations</h2>

                        <div class="row">
                            <div class="col-lg-4">
                                <p class="switch-white custom-pad-t"><strong>Reunert has three operating segments:
                                        Electrical Engineering, ICT and Applied Electronics.</strong></p>

                                <p class="switch-white mt-4 mb-4">The segments are defined by their core competencies,
                                    technology, products and services, markets and
                                    customer segmentation. Businesses are grouped into
                                    clusters if they are vertically integrated or if they
                                    operate in similar markets.</p>

                                <img src="images/about-us-overview.png" alt="" class="mw-100 mb-3">
                            </div>
                            <div class="col-lg-8">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                ELECTRICAL ENGINEERING
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h4 class="switch-blue">Power Cables</h4>
                                                <p>Power Cables designs and manufactures a comprehensive range of low, medium and high-voltage electrical conductors, cables and accessories up to 275 kilovolts (kV). The power installations division specialises in the turnkey installation, testing and maintenance of medium and high&#8209;voltage cable systems up to 400 kV.</p>

                                                <p>It also designs and manufactures oxygen-free copper rod according to ASTM-49.</p>

                                                <h4 class="switch-blue">Circuit Breakers</h4>
                                                <p>Circuit Breakers supply low-voltage electrical distribution, protection and control equipment and customer-specific solutions. Circuit breakers has operations in Africa, Asia, Australia, Europe and the USA. On average, 60% of its specialised precision protection products are exported to global niche markets. It produces the Astute Range of smart IoT products used for energy monitoring, management and control.</p>

                                                <h4 class="switch-blue">Renewable Energy</h4>
                                                <p>The Renewable Energy cluster offers customers turnkey engineering solutions and training. This cluster delivers start-to-end solutions, encompassing strategy development, project implementation, support and maintenance, as well as the building and ownership of renewable assets focusing on commercial-scale rooftop, parking and ground-mount solar photovoltaic systems. This includes distributed generation supported by energy storage solutions, focusing on Lithium Iron Phosphate (LiFePo4) chemistry. The installation of solar panels in African markets supplies green energy and provides software that creates transparency in energy consumption.</p>

                                                <p>Wheeled renewable energy done through Apollo Africa helps customers reduce electricity spend and hedge against electricity price increases.</p>
                                                <a href="electical-engineering.php" class="reunert-btn mb-0 teal-bkr">Electrical
                                                    engineering in depth</a>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                ICT
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h4 class="switch-blue">BUSINESS COMMUNICATION</h4>
                                                <p>The Business Communication cluster houses both the largest
                                                    independent next-generation communications solutions provider and
                                                    one of the largest independent wireless network and solutions
                                                    providers in South Africa; and last mile broadband connectivity.</p>

                                                <h4 class="switch-blue">TOTAL WORKSPACE PROVIDER</h4>
                                                <p>Nashua is a Total Workspace Provider that offers a range of solutions
                                                    and services that facilitate and enable its customers’ business
                                                    outcomes.</p>

                                                <h4 class="switch-blue">RENTAL-BASED FINANCE</h4>
                                                <p>Quince Capital provides rental-based finance solutions to the ICT
                                                    business units.</p>


                                                <h4 class="switch-blue">SOLUTIONS AND SYSTEMS INTEGRATION CLUSTER
                                                    (ESTABLISHED IN 2020)</h4>
                                                <p>+OneX and IQbusiness offer digital integration solutions. +OneX is a
                                                    digital integration solutions partner comprising a complete suite of
                                                    digital consulting, software and application development, cloud,
                                                    data, security and managed services. IQbusiness is a technology and
                                                    management consulting firm offering research and insights,
                                                    artificial intelligence, digital integration solutions and culture
                                                    and change management capabilities.</p>

                                                <a href="ict.php" class="reunert-btn mb-0 teal-bkr">ICT in depth</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                APPLIED ELECTRONICS
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h4 class="switch-blue">SECURE COMMUNICATIONS</h4>
                                                <p>Secure Communications specialises in secure communication systems for
                                                    tactical airborne, land and naval-based platforms; and secure
                                                    network-centric solutions for command and control, forward
                                                    observation link and messaging services. A specialised production
                                                    facility populates and assembles highly complex military-grade
                                                    printed circuit board assemblies and also designs, develops and
                                                    industrialises cryptographic products and solutions to meet
                                                    cybersecurity requirements.</p>


                                                <h4 class="switch-blue">FUZES</h4>
                                                <p>This cluster provides advanced electronic fuze technology.
                                                    Capabilities include electronic and precision mechanical design and
                                                    high-volume production of electro-mechanical assemblies. Small fuzes
                                                    containing sophisticated miniaturised mechanical and electronic
                                                    systems are also developed and manufactured.</p>

                                                <h4 class="switch-blue">RADARS</h4>
                                                <p>Radars develops and manufactures search and tracking radar systems,
                                                    subsystems, safety radars and mining surveillance radars used to
                                                    detect movement in open-pit mine slopes’ subsurface profilers.</p>


                                                <a href="applied-electronics.php" class="reunert-btn mb-0 teal-bkr">Applied
                                                    electronics in depth</a>







                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div class="container">
            <div class="overview-box">
                <p class="overview-intro text-center"><span><strong>Find everything you need to know about us, a
                            136-year-old business,
                            including our strategy, history and leadership structure.</strong></span></p>
            </div>

            <div class="row g-0 pt-2">
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="our-strategy.php" class="overview-btn">
                        <div class="overview-block">
                            <div class="overview-box"><img src="images/investor-overview/reporting-and-results.png">
                            </div>
                            <div class="overview-box">
                                <p class="overview-intro"><span>STRATEGY</span>
                                    Reunert’s strategy is centred on
                                    driving sustainable growth,
                                    increasing our diversified
                                    revenue streams and scaling our
                                    growth businesses.</p>

                            </div>
                            <div class="readmore-btn">Strategy<i class="icon-arrow-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="our-history.php" class="overview-btn">
                        <div class="overview-block">
                            <div class="overview-box"><img src="images/our-history-img-holder.png"></div>
                            <div class="overview-box">
                                <p class="overview-intro"><span>OUR HISTORY</span>Theodore Reunert and Otto Lenz
                                    establish Reunert & Lenz in 1888.
                                    The agency business quickly
                                    becomes South Africa’s leading
                                    specialists in the new fields of
                                    electric lighting and power
                                    transmission, importing and
                                    installing engineering
                                    equipment.</p>

                            </div>
                            <div class="readmore-btn">Our history<i class="icon-arrow-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="leadership.php" class="overview-btn">
                        <div class="overview-block">
                            <div class="overview-box"><img src="images/investor-overview/presentation.png">
                            </div>
                            <div class="overview-box">
                                <p class="overview-intro"><span>LEADERSHIP</span>Our Board members possess the
                                    requisite collective skills,
                                    experience and diversity to carry
                                    out their responsibilities in
                                    realising the Group’s growth
                                    objectives.</p>

                            </div>
                            <div class="readmore-btn">Leadership<i class="icon-arrow-right"></i></div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <?php include ('includes/footer.php'); ?>
    <?php include ('includes/bottom-scripts.php'); ?>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>