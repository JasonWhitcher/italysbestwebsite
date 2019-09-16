<!--
Site        : Italy's Best
Description : Portfolio site.
Author      : Jason Whitcher
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Italy's Best - Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <!-- jquery cdn -->
        <!--<script src="http://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>-->
        
        <!-- Local copy of jquery for off-line use. -->
        <script src="js/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
        
    </head>
    <body>
        <header>
            <nav class="ib-menu-main">
                <a id="ib-menu-mobile-button-open-anchor" href="#ib-menu-container">
                    <div class="ib-menu-mobile-button">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </a>
                <div id="ib-menu-container">
                    <a id="ib-menu-mobile-button-close-anchor" href="#">x</a>
                    <ul>
                        <li><a href="index.html"><div class="ib-logo">Italy's Best</div></a></li>
                        <li class="ib-menu-item-parent">
                            <a href="#">Menu</a>
                            <nav class="ib-menu-sub">
                                <ul>
                                    <li><a href="menu-lunch.html">Lunch</a></li>
                                    <li><a href="">Dinner</a></li>
                                    <li><a href="">Kids</a></li>
                                    <li><a href="">Appetizers</a></li>
                                    <li><a href="">Beverages</a></li>
                                </ul>
                            </nav>
                        </li>
                        <li><a href="">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <article>
            <h1>Italy's Best</h1>
            <h2>Contact Us</h2>
            <div class="ib-contact-part ib-contact-address">
                <address>
                    Italy's Best
                    123 Main St.
                    Sometown, IA 55555
                    (555)555-5555
                </address>
            </div>
            <div class="ib-contact-part ib-contact-contact-form">
                <form id="ib-contact-form" method="get" action="process-contact-form.php">
                    <label for="ib-contact-name">Your name</label>
                    <input type="text" id="ib-contact-name" name="ib-contact-name" />
                    <label for="ib-contact-email">Your Email</label>
                    <input type="email" id="ib-contact-email" name="ib-contact-email" />
                    <label for="ib-contact-subject">Subject</label>
                    <input type="text" id="ib-contact-subject" name="ib-contact-subject" />
                    <label for="ib-contact-message">Message</label>
                    <textarea id="ib-contact-message" name="ib-contact-message"></textarea>
                    
                    <input type="submit" id="ib-contact-submit" value="Send Message" />
                    <div id="ib-contact-loader-message"></div>
                    <div id="ib-contact-ajax-message"></div>
                </form>
            </div>
            <div id="ib-map" class="ib-contact-part ib-contact-google-map">
                Google Map goes here.
            </div>
        </article>
        <footer>
            <div class="ib-dinning-award-container">
                <div class="ib-dinning-award"></div>
                <div class="ib-dinning-award"></div>
                <div class="ib-dinning-award"></div>
            </div>
            <nav class="ib-menu-footer">
                <ul>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                </ul>
            </nav>
        </footer>
        <script>
            /* Script for Google map API */
            function initMap() {
                var ib_location = {lat: 41.700010, lng: -93.054210}; //'101 1st St N, Newton, IA 50208';
                var ib_map = new google.maps.Map(document.getElementById('ib-map'),{
                    zoom: 17,
                    center: ib_location
                });
                var ib_marker = new google.maps.Marker({
                    position: ib_location,
                    map: ib_map
                });
            }
        </script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYAQhRYvT5pm_cR7sF0H3B00hiXnrY0zc&callback=initMap">
        </script>
    </body>
</html>
