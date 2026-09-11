<a href="https://wa.me/9012333198" 
   class="whatsapp-float" 
   target="_blank">

    <i class="fa-brands fa-whatsapp"></i>

</a>

<footer class="footer-section">

    <div class="footer-container">

        <div class="footer-grid">

            <!-- Logo Content -->
            <div class="footer-box">
                <a href="index.php">
                    <img src="assets/img/logo/ortho_logo.png" alt="Logo" class="footer-logo">
                </a>
                <p>
                    We understand that injuries and acute pain can happen
                    unexpectedly. Our emergency physiotherapy services help
                    you recover quickly and safely.
                </p>

                <div class="footer-social">

                    <a href="#"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fab fa-twitter"></i></a>

                    <a href="#"><i class="fab fa-linkedin-in"></i></a>

                    <a href="https://www.instagram.com/drpraveenagorthobareilly?igsh=MWc5aTI1ZnBobGxmZA=="><i class="fab fa-instagram"></i></a>

                    <a href="https://youtube.com/@drpraveenagarwalbareilly?si=bW6J1TZDKDzVmg2W"><i class="fa-brands fa-youtube"></i></a>
                </div>

            </div>

            <!-- Quick Links -->
            <div class="footer-box">

                <h3>Quick Links</h3>

                <ul>

                    <li><a href="index.php">Home</a></li>

                    <li><a href="profile.php">Profile</a></li>

                    <li><a href="about.php">About Us</a></li>

                    <li><a href="services.php">Services</a></li>

                    <li><a href="blog.php">Blog</a></li>

                    <li><a href="gallery.php">Gallery</a></li>

                    <li><a href="contact.php">Contact Us</a></li>

                </ul>

            </div>

            <!-- Contact -->
            <div class="footer-box">

                <h3>Contact Us</h3>

                <ul class="contact-list">

                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <?php echo $phone; ?>
                    </li>

                    <li>
                        <i class="fa-regular fa-envelope"></i>
                        <?php echo $email; ?>
                    </li>

                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <?php echo $address; ?>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <p>
                © 2026 Designed and developed by <a href="https://worldomania.com/"> Worldomania</a>
            </p>
        </div>

    </div>

</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- ===============banner slider js================= -->
<script>
    const slides = document.querySelectorAll(".slide");

let index = 0;

function showSlide(i){

    slides.forEach(slide => slide.classList.remove("active"));

    slides[i].classList.add("active");
}

document.querySelector(".next").onclick = () => {

    index++;

    if(index >= slides.length){
        index = 0;
    }

    showSlide(index);

};

document.querySelector(".prev").onclick = () => {

    index--;

    if(index < 0){
        index = slides.length - 1;
    }

    showSlide(index);

};

setInterval(() => {

    index++;

    if(index >= slides.length){
        index = 0;
    }

    showSlide(index);

},5000);
</script>

<!-- =================rewiew slider js====================  -->
<script>
new Swiper(".reviewSwiper", {

    loop:true,
    speed:1000,

    autoplay:{
        delay:3000,
        disableOnInteraction:false
    },

    pagination:{
        el:".swiper-pagination",
        clickable:true
    },

    breakpoints:{

        0:{
            slidesPerView:1,
            spaceBetween:20
        },

        768:{
            slidesPerView:2,
            spaceBetween:25
        },

        1200:{
            slidesPerView:3,
            spaceBetween:30
        }
    }

});
</script>

<!-- ===================about page counter js ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".counter");

    const observer = new IntersectionObserver((entries, observer)=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                const counter = entry.target;

                const target = Number(counter.dataset.target);
                const suffix = counter.dataset.suffix || "";

                let count = 0;

                const timer = setInterval(()=>{

                    count += Math.ceil(target / 100);

                    if(count >= target){

                        count = target;
                        clearInterval(timer);

                    }

                    counter.innerHTML = count + suffix;


                },30);


                observer.unobserve(counter);

            }

        });


    },{
        threshold:0.5
    });


    counters.forEach(counter=>{
        observer.observe(counter);
    });

});
</script>

<!-- =========================gallery js==================== -->
<script>

const galleryImages=document.querySelectorAll('.gallery-item img');
const lightbox=document.querySelector('.lightbox');
const lightboxImg=document.getElementById('lightboxImg');
const closeBtn=document.querySelector('.close-btn');
const prevBtn=document.querySelector('.prev-btn');
const nextBtn=document.querySelector('.next-btn');

let currentIndex=0;

galleryImages.forEach((img,index)=>{

    img.addEventListener('click',()=>{

        currentIndex=index;
        showImage();

        lightbox.classList.add('active');

    });

});

function showImage(){

    lightboxImg.src=galleryImages[currentIndex].src;

}

nextBtn.addEventListener('click',()=>{

    currentIndex++;

    if(currentIndex>=galleryImages.length){
        currentIndex=0;
    }

    showImage();

});

prevBtn.addEventListener('click',()=>{

    currentIndex--;

    if(currentIndex<0){
        currentIndex=galleryImages.length-1;
    }

    showImage();

});

closeBtn.addEventListener('click',()=>{

    lightbox.classList.remove('active');

});

lightbox.addEventListener('click',(e)=>{

    if(e.target===lightbox){
        lightbox.classList.remove('active');
    }

});

document.addEventListener('keydown',(e)=>{

    if(!lightbox.classList.contains('active')) return;

    if(e.key==="ArrowRight"){
        nextBtn.click();
    }

    if(e.key==="ArrowLeft"){
        prevBtn.click();
    }

    if(e.key==="Escape"){
        lightbox.classList.remove('active');
    }

});

</script>


<script type="text/javascript">
$("#contact1").click(function(event) {
    event.preventDefault();

    var user = $("#cont_name").val().trim();
    var cont_email = $("#cont_email").val().trim();
    var cont_phone = $("#cont_phone").val().trim();
    var cont_city = $("#cont_city").val().trim();
    var cont_message = $("#cont_message").val().trim();

    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $("#usercontname").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (cont_email == "") {
        $("#usercontemail").html("Please fill the email").show();
        errorMsg += "• Please fill the email\n";
        error = true;
    }

    // Phone validation
    if (cont_phone == "") {
        $("#usercontphone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(cont_phone)) {
        $("#usercontphone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (cont_phone.length != 10) {
        $("#usercontphone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // city validation
    if (cont_city == "") {
        $("#usercontcity").html("Please fill the city").show();
        errorMsg += "• Please fill the city\n";
        error = true;
    }

    // address validation
    if (cont_message == "") {
        $("#usercontmessage").html("Please fill the message").show();
        errorMsg += "• Please fill the message\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "send-quary.php",
        data: {user,cont_email,cont_phone,cont_city,cont_message},
        dataType: 'json',
        success: function(data) {
            if (data.msg) {
                $('.contact')[0].reset();
                
                alert("Your query has been sent successfully!");
            
            } else {
                alert("Something went wrong!");
            }
        }
    });

});

$("#closePopup").click(function(){
    $("#popupSuccess").fadeOut();
});
</script>

<!-- ==========================header js====================== -->
<script>

let lastScrollTop = 0;

const header = document.querySelector("header");
const navbar = document.querySelector(".navbar");


window.addEventListener("scroll", function(){

    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;


    // Sticky add
    if(scrollTop > 100){

        navbar.classList.add("sticky");

    }else{

        navbar.classList.remove("sticky");

    }



    // Down scroll = hide header
    if(scrollTop > lastScrollTop && scrollTop > 150){

        header.classList.add("hide-header");

    }

    // Up scroll = show header
    else{

        header.classList.remove("hide-header");

    }


    lastScrollTop = scrollTop;


});

</script>

<!-- ============================vedio section=========================== -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>

<script>

const swiper = new Swiper('.reelsSwiper', {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    speed: 15000,

    autoplay: {
        delay: 0,
        disableOnInteraction: false
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        992: {
            slidesPerView: 4
        }
    }
});

let players = [];

/* YouTube Players Create */
function onYouTubeIframeAPIReady() {

    document.querySelectorAll('.yt-player').forEach((el, index) => {

        el.id = "player-" + index;

        players[index] = new YT.Player(el.id, {
            videoId: el.dataset.video,

            playerVars: {
                autoplay: 1,
                mute: 1,
                controls: 0,
                rel: 0,
                loop: 1,
                playlist: el.dataset.video,
                playsinline: 1,
                enablejsapi: 1
            },

            events: {
                onReady: function(event) {
                    event.target.mute();
                    event.target.playVideo();
                }
            }
        });

    });

}

card.addEventListener("mouseenter", function () {

    // Slider completely stop
    swiper.autoplay.stop();
    swiper.allowTouchMove = false;

    // Transition bhi stop karo
    swiper.wrapperEl.style.transitionDuration = "0ms";

    players.forEach(player => {
        if (player && typeof player.mute === "function") {
            player.mute();
        }
    });

    if (players[index] && typeof players[index].unMute === "function") {
        players[index].unMute();
        players[index].setVolume(100);
    }

});

card.addEventListener("mouseleave", function () {

    if (players[index] && typeof players[index].mute === "function") {
        players[index].mute();
    }

    swiper.wrapperEl.style.transitionDuration = "";
    swiper.allowTouchMove = true;

    swiper.autoplay.start();

});
</script>
</html>

