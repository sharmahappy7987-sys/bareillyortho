<meta name="title" content="Contact Jaipur Ortho & Maternity Center | Book an Appointment in Bareilly">

<meta name="description" content="Contact Jaipur Ortho & Maternity Center in Bareilly to book an appointment with our orthopedic and gynecology specialists. Get our address, phone number, timings, and directions.">

<meta name="keywords" content="Contact Jaipur Ortho & Maternity Center, Hospital Contact Bareilly, Orthopedic Hospital Bareilly, Gynecology Hospital Bareilly, Book Appointment Bareilly, Dr Praveen Agarwal Contact, Dr Swati Agarwal Contact, Hospital Address Bareilly">

<title>Contact Jaipur Ortho & Maternity Center | Book an Appointment in Bareilly</title>

<?php include "common/header.php"?>
<section class="hero-slider" style="padding:0px;">
    <div class="slide active">
        <img src="assets/img/banner/contact-banner.webp" alt="Banner">
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <!-- Top Contact Cards -->
        <div class="contact-cards">

            <div class="contact-card">
                <div class="icon-box">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Location</h3>
                <p><?php echo "$address"?></p>
            </div>

            <div class="contact-card">
                <div class="icon-box">
                    <i class="far fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p><?php echo "$email"?></p>
            </div>

            <div class="contact-card">
                <div class="icon-box">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Phone</h3>
                <p><?php echo "$phone"?></p>
            </div>

            <div class="contact-card">
                <div class="icon-box">
                    <i class="far fa-clock"></i>
                </div>
                <h3>Working Hours</h3>
                <p><span> OPD :</span> 11:00 am to 3:00 pm</p>
                <p><span> Evening :</span> 7:00 pm to 8:30 pm</p>
            </div>

        </div>

        <!-- Contact Area -->
        <div class="contact-wrapper">

            <!-- Left Image -->
            <div class="contact-image">
                <img src="assets/img/contact-us-img.jpeg" alt="">
            </div>

            <!-- Right Form -->
            <div class="contact-form">

                <span class="about-tag">Contact Us</span>

                <h2><span>Get </span> In Touch With Us</h2>

                <form class="contact" action=" " method="post">

                    <div class="form-row">
                        <div class="input-box">
                            <input type="text" class="form-control" name="cont_name" id="cont_name" placeholder="Enter Name">
                            <span id="usercontname" class="error"></span>
                        </div>

                        <div class="input-box">
                            <input type="email" class="form-control" name="cont_email" id="cont_email" placeholder="Enter Email">
                            <span id="usercontemail" class="error"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-box">
                            <input type="text" class="form-control" name="cont_phone" id="cont_phone" placeholder="Phone Number">
                            <span id="usercontphone" class="error"></span>
                        </div>

                        <div class="input-box">
                            <input type="text" class="form-control" name="cont_city" id="cont_city" placeholder="City">
                            <span id="usercontcity" class="error"></span>
                        </div>
                    </div>

                    <div class="form-row" >
                        <div class="input-box">
                            <textarea class="form-control" name="cont_message" id="cont_message" placeholder="Your Message"></textarea>
                            <span id="usercontmessage" class="error"></span>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn"  id="contact1" name="contact1">
                        Send Message
                        <span><i class="fas fa-arrow-right"></i></span>
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>

<section class="map-section">
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45711.54701112068!2d79.39964556823224!3d28.378218929595164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a007ab55176d87%3A0x332bc362299fee75!2sDr%20Praveen%20Agarwal%20(Jaipur%20Ortho%20and%20Maternity%20Centre)!5e0!3m2!1sen!2sin!4v1785304024681!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>
</section>

<?php include "common/footer.php"?>

<style>
    .map-section{
    width:100%;
    padding:0;
    margin:0;
}

.map-container{
    width:100%;
    overflow:hidden;
}

.map-container iframe{
    width:100%;
    height:600px;
    border:0;
    display:block;
}

/* Laptop */
@media (max-width:1199px){
    .map-container iframe{
        height:500px;
    }
}

/* Tablet */
@media (max-width:991px){
    .map-container iframe{
        height:400px;
    }
}

/* Mobile */
@media (max-width:767px){
    .map-container iframe{
        height:300px;
    }
}

/* Small Mobile */
@media (max-width:480px){
    .map-container iframe{
        height:250px;
    }
}
</style>