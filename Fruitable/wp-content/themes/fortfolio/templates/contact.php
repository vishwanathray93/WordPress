<?php
/*
Template Name: Contact
*/
?>
<?php
get_header();

?>
 <!--================ Start Banner Area =================-->
 <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <?php custom_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <!-- <h6>Mohali, Punjab</h6>
                            <p>Sahimazara, Punjab</p> -->
                        <?php echo get_field('conatct_address'); ?>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="tel:<?php echo get_field('contact_no'); ?>"><?php echo get_field('contact_no'); ?> </a></h6>
                            <p>24/7 available</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="mailto:<?php echo get_field('contact_email'); ?>"> <?php echo get_field('contact_email'); ?> </a></h6>
                            <p> <?php echo get_field('contact_heading'); ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="error_message"></div>
                    <!-- div#success_message -->
                    <div id="success_message"></div>
                    <form class="row contact" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="6" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                        <!-- Load Leaflet CSS and JS -->
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

                <!-- Map container with data attributes -->
                <div id="mapBox" class="mapBox" 
                    data-lat="30.7046" 
                    data-lon="76.7179" 
                    data-zoom="13" 
                    data-info="Sahimazara, Punjab, Mohali 160059, Sahibzada Ajit Singh Nagar, India." 
                    data-mlat="30.7046" 
                    data-mlon="76.7179"
                    style="height: 400px;"></div>

                <!-- Leaflet init script -->
                <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const mapBox = document.getElementById("mapBox");
                    const lat = parseFloat(mapBox.getAttribute("data-lat"));
                    const lon = parseFloat(mapBox.getAttribute("data-lon"));
                    const zoom = parseInt(mapBox.getAttribute("data-zoom"));
                    const info = mapBox.getAttribute("data-info");
                    const mlat = parseFloat(mapBox.getAttribute("data-mlat"));
                    const mlon = parseFloat(mapBox.getAttribute("data-mlon"));

                    const map = L.map(mapBox).setView([lat, lon], zoom);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                    }).addTo(map);

                    const marker = L.marker([mlat, mlon]).addTo(map);
                    marker.bindPopup(`<strong>${info}</strong>`).openPopup();
                });
                </script>

        </div>
    </section>

<?php 
get_footer();
?>