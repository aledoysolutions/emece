<?php 
require_once('fns.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Contact | Emece Solutions</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/css/bootstrap.css">

<link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

<link rel="icon" href="./dist/images/fav.png" />

<link href="dist/css/animate.css" rel="stylesheet">

<link href="dist/css/owl.carousel.css" rel="stylesheet">

<link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
<script src="dist/js/jquery.3.4.1.min.js"></script>
    
<script src="dist/js/popper.js" type="text/javascript"></script>
    
<script src="dist/js/bootstrap.js" type="text/javascript"></script>

<script src="dist/js/owl.carousel.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Main Stylesheet -->

<link href="dist/style.css" rel="stylesheet" type="text/css" media="all">
    
<script src="dist/js/wow.min.js"></script>
<script>
new WOW().init();
</script>
</head>
<body>

<?php include 'inc/header.php'; ?>


<div class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="inner-banner-sub">Contact</div>
                <div class="banner-head">Your Partner in Growth and Excellence!</div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="about-crumbs">
        <a href="./">Home  |   <span>Contact</span></a>
    </div>
</div>   

<div class="container">
    <div class="contactNav">
        <div class="row">
            <!-- <div class="col-md-4">
                <div class="contactNav-row">
                    <div class="contactNav-row1">
                        <img src="./dist/images/contact-icon1.png" class="img-fluid">
                    </div>
                    <div class="contactNav-row2">
                        One Lyric Square, Hammersmith, London W6 0NB
                    </div>
                </div>
            </div> -->
            <div class="col-md-6">
                <div class="contactNav-row">
                    <div class="contactNav-row1">
                        <img src="./dist/images/contact-icon2.png" class="img-fluid">
                    </div>
                    <div class="contactNav-row2">
                        01506368958
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contactNav-row">
                    <div class="contactNav-row1">
                        <img src="./dist/images/contact-icon3.png" class="img-fluid">
                    </div>
                    <div class="contactNav-row2">
                    info@emecesolutions.com 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="contactForm">
        <div class="row">
            <div class="col-md-6">
                <div class="contactForm_left">
                    <div class="contactForm_left-head">Get In Touch</div>
                    <p>Ready to elevate your team's performance and enhance your learning experience?</p>
                    <p>Get in touch with Emece Solutions today! Whether you have questions about our training programs or need a customized learning solution, our team is here to help.</p>
                    <!-- <div class="contactForm-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.082804898811!2d-0.22901459284979214!3d51.49344269466853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f88f751e07b%3A0x7d868abadfb24386!2sFora%20-%20One%20Lyric%20Square!5e0!3m2!1sen!2sng!4v1738552668047!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="contactForm_right">
                    <div class="input-container">
                        <input type="text" id="firstName" name="firstName" placeholder="First Name">
                        <span class="placeholder-asterisk">*</span>
                    </div>
                    <div class="input-container">
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                        <span class="placeholder-asterisk">*</span>
                    </div>
                    <div class="input-container">
                        <input type="text" id="jobName" name="jobName" placeholder="Job Title">
                    </div>
                    <div class="input-container">
                        <input type="text" id="companyName" name="companyName" placeholder="Company">
                    </div>
                    <div class="input-container">
                        <input type="email" id="emailName" name="emailName" placeholder="Email Address">
                        <span class="placeholder-asterisk" style="left: 110px;">*</span>
                    </div>
                    <div class="input-container">
                        <input type="text" id="phoneName" name="phoneName" placeholder="Phone" inputmode="numeric">
                        <span class="placeholder-asterisk" style="left: 60px;">*</span>
                    </div>
                    <select class="form-select red-toggle" name="country">
                        <option selected>Country*</option>
                        <?php country()?>
                    </select>
                    <div class="input-container">
                        <textarea id="messageName" name="messageName" rows="5" placeholder="Comments"></textarea>
                    </div>
                    <div class="secondary-button">
                        <a href=""><button>SUBMIT </button></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
















<?php include 'inc/footer.php'; ?>

</body>
</html>