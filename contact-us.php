<?php
$pid = "contact-us";
$pageTitle = "Contact us";
$section = "Contact us";
$section2 = "";
$sectionID = "seven";
$sectionID2 = "";
$prevLink = "register-for-alerts";
$prevTitle = "Register for alerts";
$nextLink = "search-results";
$nextTitle = "Search results";
$prevSection = "MEDIA CENTRE";
$nextSection = "search results";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/metadata.php'); ?>
    <?php include('includes/head.php'); ?>
</head>

<body id="seven">
    <?php include('includes/header.php'); ?>
    <?php include('includes/navigation.php'); ?>

    <div class="banner-main">
        <img src="images/banners/page-banner.png" alt="" class="banner-img">
        <div class="container">
            <div class="main-heading">
                <h1 class="font-w-light"><span class="font-w-bold"><?php echo ucfirst(strtolower($section)); ?></span>
                </h1>
            </div>
        </div>
    </div>

    <?php include('includes/breadcrumb.php'); ?>

    <div class="container">
        <style>
            ul.tabs li {
                margin-bottom: 10px;
            }

            .blue-box-with-pad {
                padding: 12px;
                background: #43A9AC;
                height: 100%;
                position: relative;
                z-index: 1;
                margin-bottom: 10px;
            }

            .blue-box-with-pad p strong {
                color: #0F1E41;
                font-size: 700;
                font-size: 20px;
            }

            .blue-box-with-pad p a {
                text-decoration: underline;
                color: #fff;
            }

            .solid-white-line {
                margin-bottom: 20px;
                margin-top: 10px;
                border-bottom: 3px solid #fff;
            }

            .solid-blue-divider {
                margin: 25px 0;
                border-bottom: 3px solid #43A9AC;
            }



            .set-div-h100 {
                height: 100%;
            }

            .set-div-h100 iframe {
                width: 100%;
            }

            @media screen and (max-width:991px) {
                .set-div-h100 {
                    margin-top: 20px;
                    padding-bottom: 20px;
                }

                .tab-drawer-heading {
                    background: #0F1E41;
                }
            }
        </style>



        <div class="accordion-tabs group">
            <ul class="tabs">
                <li class="active" rel="tab1">Reunert Limited</li>
                <li rel="tab2">Electrical engineering</li>
                <li rel="tab3">ICT</li>
                <li rel="tab4">Applied electronics</li>
                <li rel="tab5">Reunert learning institute</li>

            </ul><!--/.tabs-->
            <div class="tab-container">
                <h4 class="d-active tab-drawer-heading" rel="tab1">Reunert Limited</h4>
                <div id="tab1" class="tab-drawer-content">
                    <div class="first-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blue-box-with-pad">
                                    <p class="mb-0"><strong>Reunert Limited</strong></p>
                                    <div class="solid-white-line"></div>
                                    <p class="switch-white mb-0">Telephone: +27 11 517 9000</p>
                                    <p class="switch-white mb-0">Fax: +27 11 517 9035</p>
                                    <p class="switch-white ">E-mail: <a href="mailto:info@reunert.co.za">info@reunert.co.za</a></p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Physical address:</strong></p>
                                            <p class="switch-white mb-0">Reunert, Nashua Building</p>
                                            <p class="switch-white mb-0">Woodmead North Office Park,</p>
                                            <p class="switch-white mb-0">54 Maxwell Drive,</p>
                                            <p class="switch-white mb-0">Woodmead</p>
                                            <p class="switch-white mb-0">2191</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Postal address:</strong></p>
                                            <p class="switch-white mb-0">PO Box 784391</p>
                                            <p class="switch-white mb-0">Sandton</p>
                                            <p class="switch-white mb-0">2146</p>
                                            <p class="switch-white mb-0">South Africa</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="set-div-h100 wow slideInLeft">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14338.73192403314!2d28.0976088!3d-26.0439268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95726e4d314f21%3A0xee99cb33900c6137!2sREUNERT%20LIMITED!5e0!3m2!1sen!2sza!4v1715846441690!5m2!1sen!2sza" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="d-active tab-drawer-heading" rel="tab2">Electrical engineering</h4>
                <div id="tab2" class="tab-drawer-content">
                    <div class="second-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blue-box-with-pad">
                                    <p class="mb-0"><strong>CBI-Electric: African Cables</strong></p>
                                    <div class="solid-white-line"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="switch-white mb-0">Telephone: +27 16 430 6000</p>
                                            <p class="switch-white mb-0">Fax: +27 16 423 6103</p>
                                            <p class="switch-white ">E-mail: <a href="mailto:africancables@cbi-electric.com">africancables@cbi-electric.com</a>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="switch-white mb-0"><a href="https://www.africancables.com/" target="_blank">www.africancables.com</a></p>
                                            <p class="switch-white"><a href="https://www.cbi-electric.com/" target="_blank">www.cbi-electric.com</a></p>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Physical address:</strong></p>
                                            <p class="switch-white mb-0">Steel Road,</p>
                                            <p class="switch-white mb-0">Peacehaven,</p>
                                            <p class="switch-white mb-0">Vereeniging,</p>
                                            <p class="switch-white mb-0">1939</p>
                                            <p class="switch-white">South Africa</p>

                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Postal address:</strong></p>
                                            <p class="switch-white mb-0">PO Box 172</p>
                                            <p class="switch-white mb-0">Vereeniging</p>
                                            <p class="switch-white mb-0">1930</p>
                                            <p class="switch-white">South Africa</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="set-div-h100 wow slideInLeft">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.6881147759027!2d27.947848599999997!3d-26.6584666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e94f78b1252fd05%3A0xebbd1e7f1ea345a4!2sSteel%20Rd%2C%20Peacehaven%2C%20Vereeniging%2C%201939!5e0!3m2!1sen!2sza!4v1715846671864!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                        <div class="solid-blue-divider"></div>

                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="blue-box-with-pad">
                                    <p class="mb-0"><strong>CBI-Electric: Telecom Cables</strong></p>
                                    <div class="solid-white-line"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="switch-white mb-0">Telephone: +27 12 381 1400</p>
                                            <p class="switch-white">Fax: +27 12 250 3089</p>

                                        </div>
                                        <div class="col-lg-6">
                                            <p class="switch-white mb-0"><a href="https://weinert-industries.com/en/" target="_blank">www.cbitele.com</a></p>
                                            <p class="switch-white"><a href="https://weinert-industries.com/en/contact/" target="_blank">www.cbitele.com/contact-us/contacts</a>
                                            </p>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Physical address:</strong></p>
                                            <p class="switch-white mb-0">3 Marthinus Ras Street,</p>
                                            <p class="switch-white mb-0">Industrial Sites,</p>
                                            <p class="switch-white mb-0">Brits,</p>
                                            <p class="switch-white">0250</p>


                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Postal address:</strong></p>
                                            <p class="switch-white mb-0">PO Box 663</p>
                                            <p class="switch-white mb-0">Brits</p>
                                            <p class="switch-white mb-0">0250</p>
                                            <p class="switch-white">South Africa</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="set-div-h100 wow slideInLeft">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14387.185902176736!2d27.8049637!3d-25.6448795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebe2e1f9cf8a905%3A0x7691f36f291f624f!2sCBI%20Electric%20Telecom%20Cables%20(Pty)%20Ltd%20-%20Brits!5e0!3m2!1sen!2sza!4v1715846740529!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="solid-blue-divider"></div> -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blue-box-with-pad">
                                    <p class="mb-0"><strong>CBI-Electric: Low Voltage</strong></p>
                                    <div class="solid-white-line"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="switch-white">E-mail: <a href="mailto:cbi@cbi-electric.com">cbi@cbi-electric.com</a></p>

                                        </div>
                                        <div class="col-lg-6">
                                            <p class="switch-white mb-0"><a href="https://www.cbi.co.za/" target="_blank">www.cbi.co.za</a></p>

                                            <p class="switch-white mb-0"><a href="https://www.cbibreakers.com/" target="_blank">www.cbibreakers.com</a></p>


                                            <p class="switch-white"><a href="https://www.cbi-electric.com/" target="_blank">www.cbi-electric.com</a></p>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Physical address:</strong></p>
                                            <p class="switch-white mb-0">1 Tripswitch Drive,</p>

                                            <p class="switch-white mb-0">Gauteng</p>
                                            <p class="switch-white mb-0">1429</p>
                                            <p class="switch-white">South Africa</p>


                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Postal address:</strong></p>
                                            <p class="switch-white mb-0">Private Bag 2016</p>
                                            <p class="switch-white mb-0">Isando</p>
                                            <p class="switch-white mb-0">1600</p>
                                            <p class="switch-white">South Africa</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="set-div-h100 wow slideInLeft">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14324.514653456701!2d28.193736!3d-26.1599389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9513e4c90442e5%3A0xa842e5ab7f8a6c88!2sCBI-electric%3A%20low%20voltage!5e0!3m2!1sen!2sza!4v1715846828280!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="solid-blue-divider"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blue-box-with-pad">
                                    <p class="mb-0"><strong>Zamefa</strong></p>
                                    <div class="solid-white-line"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="switch-white mb-0">Telephone: +260 211 274300</p>
                                            <p class="switch-white">E-mail: <a href="Lusaka.sales@zamefa.com">
                                                    Lusaka.sales@zamefa.com</a></p>

                                        </div>
                                        <div class="col-lg-6">
                                            <p class="switch-white"><a href="https://zamefa.com/" target="_blank">www.zamefa.com</a></p>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Physical address:</strong></p>
                                            <p class="switch-white mb-0">20996, Kafue Road,</p>
                                            <p class="switch-white mb-0">Makeni,</p>
                                            <p class="switch-white mb-0">Lusaka,</p>
                                            <p class="switch-white">Zambia</p>


                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-0"><strong>Postal address:</strong></p>
                                            <p class="switch-white mb-0">Box 30035</p>
                                            <p class="switch-white mb-0">Lusaka</p>
                                            <p class="switch-white mb-0">10101</p>
                                            <p class="switch-white">Zambia</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="set-div-h100 wow slideInLeft">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15382.621629378069!2d28.269018!3d-15.449139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f31a141336fd%3A0xb902e7e935089873!2sZAMEFA!5e0!3m2!1sen!2sza!4v1715846889727!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="d-active tab-drawer-heading" rel="tab3">ICT</h4>
                <div id="tab3" class="tab-drawer-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>NASHUA PTY LTD</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 11 232 8000</p>
                                        <p class="switch-white">Fax: +27 11 232 8400</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.nashua.co.za/" target="_blank">www.nashua.co.za/</a></p>

                                        <p class="switch-white mb-0"><a href="https://www.nashua.co.za/contact/" target="_blank">www.nashua.co.za/contact-us/</a>
                                        </p>



                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">Nashua Pty Ltd</p>

                                        <p class="switch-white mb-0">Woodmead North Office Park</p>
                                        <p class="switch-white mb-0">54 Maxwell Drive, Woodmead,</p>

                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">P.O. BOX 39524</p>
                                        <p class="switch-white mb-0">Bramley</p>
                                        <p class="switch-white mb-0">2018</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.6808726893646!2d28.095018176161844!3d-26.043995757469762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957249d96d9759%3A0x9d32d94c8deed2c1!2sNashua%20Head%20Office!5e0!3m2!1sen!2sza!4v1715846247917!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>ECN</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 10 590 0000</p>
                                        <p class="switch-white">E-mail: <a href="mailto:sales@ecn.co.za">sales@ecn.co.za</a></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.ecn.co.za/" target="_blank">www.ecn.co.za</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">42 James Crescent</p>

                                        <p class="switch-white mb-0">Halfway House</p>
                                        <p class="switch-white mb-0">1685</p>

                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">Private Bag X223</p>
                                        <p class="switch-white mb-0">Halfway House</p>
                                        <p class="switch-white mb-0">1685</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14343.678130499296!2d28.1256831!3d-26.0034532!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e086c2ea93d%3A0x57a5f51e99ca328!2sECN%20-%20Midrand!5e0!3m2!1sen!2sza!4v1715847116808!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>SKYWIRE</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27(0)87 110 0000</p>
                                        <p class="switch-white">E-mail: <a href="mailto:sales@skywire.co.za">sales@skywire.co.za</a></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://skywire.co.za/" target="_blank">www.skywire.co.za</a></p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">Block C Palm Office Court</p>

                                        <p class="switch-white mb-0">924 Kudu Avenue</p>
                                        <p class="switch-white mb-0">Allens Nek Extention 27</p>
                                        <p class="switch-white mb-0">Roodepoort</p>
                                        <p class="switch-white mb-0">1709</p>
                                        <p class="switch-white">South Africa</p>


                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14328.199542453316!2d27.9107733!3d-26.1299164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950a9ba1d66c2b%3A0xe7c01cdb7a026386!2sSkywire%20(Pty)%20Ltd!5e0!3m2!1sen!2sza!4v1715847214244!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>





                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>+ONEX</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 10 001 3000</p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.plusonex.com/" target="_blank">www.plusonex.com</a></p>
                                        <p class="switch-white"><a href="https://www.plusonex.com/contact-us" target="_blank">www.plusonex.com/contact-us</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">Reunert Park</p>

                                        <p class="switch-white mb-0">628 James Crescent</p>
                                        <p class="switch-white mb-0">Midrand</p>

                                        <p class="switch-white">1685</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">Private Bag X223</p>
                                        <p class="switch-white mb-0">Halfway House</p>
                                        <p class="switch-white mb-0">1685</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14343.426297959306!2d28.1256978!3d-26.0055153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e084075e0c1%3A0x4cb30b5c56d14d22!2sReunert%20Park!5e0!3m2!1sen!2sza!4v1715847359365!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>






                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>QUINCE CAPITAL </strong>
                                </p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 11 232 8000</p>
                                        <p class="switch-white mb-0">Fax: +27 11 232 8500</p>
                                        <p class="switch-white">E-mail: <a href="mailto:enquiries@quincecapital.co.za">enquiries@quincecapital.co.za
                                            </a></p>

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">Nashua Building</p>

                                        <p class="switch-white mb-0">Woodmead Northt</p>
                                        <p class="switch-white mb-0">Office Park</p>
                                        <p class="switch-white mb-0">54 Maxwell Drive</p>
                                        <p class="switch-white mb-0">Woodmead</p>
                                        <p class="switch-white mb-0">2191</p>

                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 897</p>
                                        <p class="switch-white mb-0">Halfway House</p>
                                        <p class="switch-white mb-0">1685</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14338.787336182122!2d28.0986495!3d-26.0434737!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95726e4d314f21%3A0x266c00e8fc33de18!2sQuince%20Capital!5e0!3m2!1sen!2sza!4v1715847490773!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>






                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>IQbusiness</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 11 259 4000</p>
                                        <p class="switch-white">E-mail: <a href="mailto:info@iqbusiness.net">info@iqbusiness.net</a></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0 pr-1"><a href="https://iqbusiness.net/" target="_blank">www.iqbusiness.net</a></p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">IQbusiness Park</p>

                                        <p class="switch-white mb-0">No 3 3rd Ave</p>
                                        <p class="switch-white mb-0">Rivonia</p>

                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">P.O Box 4435</p>
                                        <p class="switch-white mb-0">Rivonia</p>
                                        <p class="switch-white mb-0">2128</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14336.30380615026!2d28.0611018!3d-26.0637741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573aa6b65d38b%3A0x358d4564e772e567!2sIQbusiness!5e0!3m2!1sen!2sza!4v1715847582679!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>








                </div>



                <h4 class="d-active tab-drawer-heading" rel="tab4">Applied electronics</h4>
                <div id="tab4" class="tab-drawer-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>REUTECH COMMUNICATIONS</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 31 719 5917</p>
                                        <p class="switch-white">Fax: +27 31 719 5800</p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.reutechcomms.com/" target="_blank">www.reutechcomms.com/</a></p>

                                        <p class="switch-white"><a href="https://www.reutechcomms.com/secure-military-communications-systems/" target="_blank">www.reutechcomms.com/secure-military-communications-systems/</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">9 Valley View Road,</p>
                                        <p class="switch-white mb-0">New Germany,</p>
                                        <p class="switch-white mb-0">3610</p>
                                        <p class="switch-white mb-0">KwaZulu-Natal</p>
                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 2308</p>
                                        <p class="switch-white mb-0">Pinetown</p>
                                        <p class="switch-white mb-0">3600</p>
                                        <p class="switch-white mb-0">KwaZulu-Natal</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.0371113225056!2d30.879396099999994!3d-29.805472199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef6fe119cdd9349%3A0x469375d8025e75c8!2s9%20Valley%20View%20Rd%2C%20Falcon%20Industrial%20Park%2C%20New%20Germany%2C%203610!5e0!3m2!1sen!2sza!4v1715848027448!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>




                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>REUTECH RADAR SYSTEMS</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 21 880 1150</p>
                                        <p class="switch-white mb-0">Fax: +27 21 880 1842</p>
                                        <p class="switch-white">E-mail: <a href="mailto:radarsystems@reutech.co.za">radarsystems@reutech.co.za</a>
                                        </p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.reutechradar.com/" target="_blank">www.rrs.co.za</a></p>

                                        <p class="switch-white"><a href="https://www.reutechradar.com/contact/" target="_blank">www.rrs.co.za/contact/general</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">35 Elektron Road,</p>
                                        <p class="switch-white mb-0">Technopark,</p>
                                        <p class="switch-white mb-0">Stellenbosch,</p>

                                        <p class="switch-white">7600</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 686</p>
                                        <p class="switch-white mb-0">Stellenbosch</p>
                                        <p class="switch-white mb-0">7599</p>

                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13236.45484232362!2d18.8344535!3d-33.9639167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc505b07bb14bb%3A0x5a714abe6fed1657!2sReutech%20Radar%20Systems!5e0!3m2!1sen!2sza!4v1715848135414!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>




                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>REUTECH SOLUTIONS</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 11 652 5555</p>
                                        <p class="switch-white mb-0">Fax: +27 11 805 5507</p>
                                        <p class="switch-white">E-mail: <a href="mailto:info.reutechsolutions@reutech.co.za">info.reutechsolutions@reutech.co.za</a>
                                        </p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.reutechsolutions.com/" target="_blank">www.reutechsolutions.com/</a>
                                        </p>

                                        <p class="switch-white"><a href="https://www.reutechsolutions.com/contact-us.php" target="_blank">www.reutechsolutions.com/contact</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">628 James Crescent,</p>
                                        <p class="switch-white mb-0">Halfway House,</p>
                                        <p class="switch-white mb-0">Midrand,</p>

                                        <p class="switch-white">1685</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 897</p>
                                        <p class="switch-white mb-0">Halfway House</p>
                                        <p class="switch-white mb-0">1685</p>

                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14343.631260596258!2d28.1270864!3d-26.003837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e085e3182d1%3A0xd995983271bb3935!2sReutech%20Solutions!5e0!3m2!1sen!2sza!4v1715848375317!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>FUCHS ELECTRONICS</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 11 389 4200</p>
                                        <p class="switch-white mb-0">Fax: +27 11 389 4300</p>
                                        <p class="switch-white">E-mail: <a href="mailto:info@fuchs.co.za">info@fuchs.co.za</a></p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.fuchs.co.za/" target="_blank">www.fuchs.co.za</a></p>

                                        <p class="switch-white"><a href="https://www.fuchs.co.za/contact.html" target="_blank">www.fuchs.co.za/contact.html</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">15 Combrinck Street,</p>
                                        <p class="switch-white mb-0">Alrode,</p>
                                        <p class="switch-white mb-0">Alberton,</p>
                                        <p class="switch-white ">1451</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 57</p>
                                        <p class="switch-white mb-0">Alberton</p>
                                        <p class="switch-white mb-0">1450</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14308.038288678998!2d28.1335795!3d-26.2937897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e951ac2462dc7f5%3A0x44d1fe6b4d9c805f!2sFuchs%20Electronics%20(Pty)%20Ltd!5e0!3m2!1sen!2sza!4v1715848460695!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>







                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>OMNIGO</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 12 803 8218</p>
                                        <p class="switch-white mb-0">Fax: +27 12 803 6423</p>
                                        <p class="switch-white">E-mail: <a href="mailto:sales@omnigo.co.za">sales@omnigo.co.za</a></p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://omnigo.co.za/" target="_blank">www.omnigo.co.za</a></p>

                                        <p class="switch-white"><a href="https://omnigo.co.za/contact-us/" target="_blank">www.omnigo.co.za/contact_us</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">320 Kuit St,</p>
                                        <p class="switch-white mb-0">Waltloo,</p>
                                        <p class="switch-white mb-0">Pretoria,</p>
                                        <p class="switch-white mb-0">0184</p>

                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 363</p>
                                        <p class="switch-white mb-0">Silverton</p>
                                        <p class="switch-white mb-0">0127</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14377.558038454134!2d28.3249424!3d-25.7246296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e955f94f0bde13f%3A0x36e5e7a1fc23e067!2sOmnigo%20(Pty)%20Ltd!5e0!3m2!1sen!2sza!4v1715848581642!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>NANOTEQ</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 12 672 7000</p>
                                        <p class="switch-white mb-0">Fax: +27 12 665 1343</p>
                                        <p class="switch-white">E-mail: <a href="mailto:info@nanoteq.com">info@nanoteq.com</a></p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.nanoteq.com/" target="_blank">www.nanoteq.com</a></p>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">Unit C01,</p>
                                        <p class="switch-white mb-0">66 Corporate Office Park,</p>
                                        <p class="switch-white mb-0">269 Von Willich Ave. Centurion,</p>
                                        <p class="switch-white mb-0">0157</p>
                                        <p class="switch-white">South Africa</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 7991</p>
                                        <p class="switch-white mb-0">Centurion, 0046</p>
                                        <p class="switch-white mb-0">Gauteng</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14361.834484283343!2d28.1949634!3d-25.8543789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95642ff65eb9e9%3A0x388d94bcc98d1eee!2sNanoteq!5e0!3m2!1sen!2sza!4v1715848709925!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>




                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>TERRA FIRMA SOLUTIONS</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 (0)21 300 1620</p>
                                        <p class="switch-white mb-0">Fax: +27 (0)21 300 1621</p>
                                        <p class="switch-white">E-mail: <a href="mailto:info@terrafirma-solutions.com">info@terrafirma-solutions.com</a>
                                        </p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.terrafirma.africa/" target="_blank">www.terrafirma-solutions.com</a>
                                        </p>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">4 Silverwood Close,</p>
                                        <p class="switch-white mb-0">Steenberg Office Park,</p>
                                        <p class="switch-white mb-0">Westlake,</p>

                                        <p class="switch-white">7945</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">4 Silverwood Close,</p>
                                        <p class="switch-white mb-0">Steenberg Office Park,</p>
                                        <p class="switch-white mb-0">Westlake,</p>

                                        <p class="switch-white">7945</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14336.962654539142!2d28.0846789!3d-26.0583901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95725f1320c9fb%3A0xe1e2c2fe2538e11f!2sTerra%20Firma%20Solutions%20And%20Terra%20Firma%20Academy!5e0!3m2!1sen!2sza!4v1715848802810!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>




                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>LUMIKA</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.terrafirma.africa/" target="_blank">www.terrafirma-solutions.com</a>
                                        </p>
                                        <p class="switch-white mb-0"><a href="https://www.terrafirma.africa/contact/" target="_blank">www.terrafirma-solutions.com/contact-us/</a>
                                        </p>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Western Cape Office:</strong></p>
                                        <p class="switch-white mb-0">4 Silverwood Close</p>
                                        <p class="switch-white mb-0">Steenberg Office Park</p>
                                        <p class="switch-white mb-0">Westlake</p>

                                        <p class="switch-white">7945</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Gauteng Office:</strong></p>
                                        <p class="switch-white mb-0">Building 25</p>
                                        <p class="switch-white mb-0">Woodlands Office Park</p>
                                        <p class="switch-white mb-0">20 Woodlands Drive</p>
                                        <p class="switch-white mb-0">Johannesburg</p>
                                        <p class="switch-white">2191</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13218.240588530432!2d18.4346202!3d-34.0807881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc41e6a3feaa69%3A0x9f323dc7edbbf2b3!2sSteenberg%20Office%20Park%20Properties!5e0!3m2!1sen!2sza!4v1715848948340!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>





                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>ETION CREATE</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 (0)12 678 9740</p>
                                        <p class="switch-white mb-0">Fax: +27 (0)21 300 16213</p>
                                        <p class="switch-white">E-mail: <a href="mailto:sales@etioncreate.co.za">sales@etioncreate.co.za</a></p>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://etioncreate.co.za/" target="_blank">www.etioncreate.co.za</a></p>


                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">76 Regency drive,</p>
                                        <p class="switch-white mb-0">Route 21 Corporate Park</p>
                                        <p class="switch-white mb-0">Irene</p>
                                        <p class="switch-white mb-0">Centurion</p>
                                        <p class="switch-white mb-0">Pretoria</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 67499</p>
                                        <p class="switch-white mb-0">Highveld</p>
                                        <p class="switch-white mb-0">0169</p>
                                        <p class="switch-white">South Africa</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14361.251448051848!2d28.2551865!3d-25.8591784!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9560d6fba51a75%3A0xd1984cd38f18fc3d!2sEtion%20Create!5e0!3m2!1sen!2sza!4v1715849399922!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>




                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>BLUE NOVA</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Office: +27 (0)21 205 2000</p>
                                        <p class="switch-white mb-0">E-mail: <a href="mailto:info@bluenova.co.za">info@bluenova.co.za</a></p>
                                        <p class="switch-white">Sales: +27 (0)21 205 2000</p>
                                        <p class="switch-white mb-0">E-mail: <a href="mailto:sales@bluenova.co.za">sales@bluenova.co.za</a></p>

                                        <p class="switch-white">Technical Support: <a href="mailto:support@bluenova.co.za">support@bluenova.co.za</a></p>
                                    </div>
                                    <div class="col-lg-6">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Western Cape Office:</strong></p>
                                        <p class="switch-white mb-0">17 Blend Crescent</p>
                                        <p class="switch-white mb-0">Firgrove Industrial Park</p>
                                        <p class="switch-white mb-0">Firgrove</p>
                                        <p class="switch-white">7130</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Gauteng Office:</strong></p>
                                        <p class="switch-white mb-0">Unit 3-4,</p>
                                        <p class="switch-white mb-0">Gateway House</p>
                                        <p class="switch-white mb-0">129 Rooiberg Street</p>
                                        <p class="switch-white mb-0">N4 Gateway East, Willow Park Manor</p>
                                        <p class="switch-white">Pretoria East</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13220.047897060014!2d18.7714127!3d-34.0692073!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcdcaa9b7e554c3%3A0x64291387e00c31a0!2sBlueNova!5e0!3m2!1sen!2sza!4v1715849474189!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="solid-blue-divider"></div>





                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>APOLLO AFRICA</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="switch-white mb-0">Umhlanga</p>
                                        <p class="switch-white mb-0">Ncondo Place</p>
                                        <p class="switch-white mb-0">Ridgeside</p>
                                        <p class="switch-white mb-0">Umhlanga Ridge</p>
                                        <p class="switch-white mb-0">Durban</p>
                                        <p class="switch-white">4320</p>


                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0"><a href="https://www.apolloafrica.co.za/" target="_blank">www.apolloafrica.co.za</a></p>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13858.922325989299!2d31.0708178!3d-29.7275625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7075b7b438e2b%3A0xcb5a423e5e6a86bd!2sApollo%20Africa!5e0!3m2!1sen!2sza!4v1715849549785!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>







                </div>


                <h4 class="d-active tab-drawer-heading" rel="tab5">Reunert learning institute</h4>
                <div id="tab5" class="tab-drawer-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blue-box-with-pad">
                                <p class="mb-0"><strong>Reunert learning institute</strong></p>
                                <div class="solid-white-line"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0">Telephone: +27 11 914 1700</p>
                                        <p class="switch-white mb-0">Fax: +27 11 914 2791</p>
                                        <p class="switch-white">E-mail: <a href="mailto:ria@reunert-edu.co.za">ria@reunert-edu.co.za</a></p>
                                        <p class="switch-white">E-mail: <a href="mailto:elsabe@reunert-edu.co.za">elsabe@reunert-edu.co.za</a></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="switch-white mb-0 pr-1"><a href="https://www.reunertcollege.co.za/" target="_blank">www.ReunertLearningInstitute</a>
                                        </p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Physical address:</strong></p>
                                        <p class="mb-0 "><strong class="switch-white">Alrode Campus:</strong></p>
                                        <p class="switch-white mb-0">15 Combrink Street</p>

                                        <p class="switch-white mb-0">Alrode</p>
                                        <p class="switch-white mb-3">Alberton</p>


                                        <!-- <p class="mb-0"><strong class="switch-white">Boksburg Campus:</strong></p>
                                        <p class="switch-white mb-0">1 West Street</p>

                                        <p class="switch-white mb-0">Boksburg Industrial Sites</p>
                                        <p class="switch-white mb-0">Boksburg</p> -->



                                    </div>

                                    <div class="col-lg-6">
                                        <p class="mb-0"><strong>Postal address:</strong></p>
                                        <p class="switch-white mb-0">PO Box 2964</p>
                                        <p class="switch-white mb-0">Alberton</p>
                                        <p class="switch-white mb-0">1450</p>
                                        <p class="switch-white">South Africa</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="set-div-h100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14317.914747630743!2d28.2765763!3d-26.2136315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9517c01d96665d%3A0xc1c89b9823ddde67!2sReunert%20College!5e0!3m2!1sen!2sza!4v1715849623748!5m2!1sen!2sza" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>














    </div>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom-scripts.php'); ?>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $('.tab-drawer-content').hide();
        $('.tab-drawer-content:first').show();
        $('ul.tabs li').click(function() {
            $('.tab-drawer-content').hide();
            var activeTab = $(this).attr('rel');
            $('#' + activeTab).fadeIn();
            $('ul.tabs li').removeClass('active');
            $(this).addClass('active');
            $('.tab-drawer-heading').removeClass('d-active');
            $('.tab-drawer-heading[rel^=\'' + activeTab + '\']').addClass('d-active');
        });

        lastTabClicked = "";
        $('.tab-drawer-heading').click(function() {
            $('.tab-drawer-content').hide();
            d_activeTab = $(this).attr('rel');
            if (d_activeTab != lastTabClicked) {
                $('#' + d_activeTab).fadeIn();
                $('.tab-drawer-heading').removeClass('d-active');
                $(this).addClass('d-active');
                $('ul.tabs li').removeClass('active');
                $('ul.tabs li[rel^=\'' + d_activeTab + '\']').addClass('active');
                lastTabClicked = d_activeTab;
            } else {
                $('#' + d_activeTab).fadeOut();
                $(this).removeClass('d-active');
                lastTabClicked = "";
            }
        });
        $('ul.tabs li').last().addClass('tab-last');
    </script>

</body>

</html>