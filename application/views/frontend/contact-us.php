<!doctype html>
        <!-- contact area start -->
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="<?= base_url()?>" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> contact</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="googleMap"></div>
                    </div>
                    <div class="col-sm-6">
                         <div class="contact-info"> 
                            <div class="contact-details">
                                <div class="contact-title">
                                    <h3>Contact us</h3>
                                </div>
                                <ul class="service-info">
                                    <li style="padding: 10px 0px;">
                                        <h3 class="fa fa-building-o">&nbsp;Address:</h3>
                                        <p>Munjeri, Bebwewadi, Pune 411037</p>
                                    </li>
                                    <li style="padding: 10px 0px;">
                                        <h3 class="fa fa-phone">&nbsp;Phone Number:</h3>
                                        <p>+91 989 098 7861<p>
                                    </li>
                                    <li style="padding: 10px 0px;">
                                        <h3 class="fa fa-envelope-o">&nbsp;Email:</h3>
                                        <p>info@chappalvala.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-info"> 
                            <div class="contact-details">
                                <div class="contact-title">
                                    <h3>Get In Touch</h3>
                                </div>
                                <div class="contact-form">
                                    <div class="form-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-box">
                                                        <div class="form-name">
                                                            <label>Name <em>*</em> </label>
                                                            <input type="text" class="form-control" name="name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box">
                                                        <div class="form-name">
                                                            <label>Email <em>*</em> </label>
                                                            <input type="email" class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box">
                                                        <div class="form-name">
                                                            <label>Phone Number</label>
                                                            <input type="text" class="form-control" name="number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box">
                                                        <div class="form-name">
                                                            <label>Subject</label>
                                                            <input type="text" class="form-control" name="subject">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box">
                                                        <div class="form-name">
                                                            <label>Message <em>*</em> </label>
                                                            <textarea cols="5" rows="3" class="form-control" name="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
                                    </div>
                                </div>
                                <div class="buttons-set">
                                    <center>
                                        <button type="submit" class="btn btn-danger">submit</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
        <!-- google map
        ============================================ -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(23.81033, 90.41252)
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                                              mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/contact/map-marker.png',
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>