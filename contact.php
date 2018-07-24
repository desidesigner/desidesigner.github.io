<?php 
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "neeraj@thetreepie.com";
    $email_subject = "New Enquiry";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
//    if(!isset($_POST['name']) ||
//        !isset($_POST['mobileno']) ||
        !isset($_POST['email']) ||
//        !isset($_POST['location']) ||
//		 !isset($_POST['grade']) ||
//        !isset($_POST['time'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }

    

//    $name = $_POST['name']; // required
//    $mobileno = $_POST['mobileno']; // required
    $email_from = $_POST['email']; // required
//    $location = $_POST['location']; // not required
//    $grade = $_POST['grade'];
//    $time = $_POST['time'];	// required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  

  if(strlen($location) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";

    
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    

//    $email_message .= "Name: ".clean_string($name)."\n";
//    $email_message .= "Mobile No.: ".clean_string($mobileno)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
//    $email_message .= "Location: ".clean_string($location)."\n";
//    $email_message .= "Grade: ".clean_string($grade)."\n";
//	$email_message .= "Good time to schedule a home demo: ".clean_string($time)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!-- include your own success html here -->

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MarkSharks</title>
    <meta name="description" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#2c6ba3">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="100">



<!--==============================================================
Header
==================================================================-->

<header id="header">
    <div class="container">

        <nav class="navbar navbar-expand-lg  main-nav " id="main-nav">
            <a class="navbar-brand p-0" href="index.html"><img src="img/logo.png" alt="" width="200"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<span class="visible-xs hidden-sm hidden-md hidden-sm hidden-lg"><a href=""><img src="img/Omaxe-Logo.jpg"  class="logo" alt=""></a></span>-->


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-expanded="false">Why MarkSharks?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<!--==============================================================
Slider
==================================================================-->
<section class="slider" id="slider">
    <div class="hero-bg thank-you" >
        <div class="row">
            <div class="col-md-12">
              <h2>Thank You</h2>
			  <a href="/index.html"> Back To Home</a>

            </div>
        </div>
    </div>
</section>

<!--<section class="answers" id="answers">-->
<!--    <div class="container">-->
<!--        <div class="col-md-12">-->
<!--            <div class="result">-->
<!--                <div class="answers-block">-->
<!--                    <h4>The sum of two consecutive multiples of 10 is 230. The smaller of the multiples is:</h4>-->
<!--                    <p>a.	112</p>-->
<!--                    <p>b.	110</p>-->
<!--                    <p>c.	109</p>-->
<!--                    <p>d.	106</p>-->
<!--                    <p><strong>Answer: 2</strong></p>-->
<!--                </div>-->
<!---->
<!--                <div class="answers-block">-->
<!--                    <h4>The probability of choosing a consonant from the English alphabets is:</h4>-->
<!--                    <p>a. <span class="fraction">27/26</span></p>-->
<!--                    <p>b. <span class="fraction">22/26</span></p>-->
<!--                    <p>c. <span class="fraction">21/26</span></p>-->
<!--                    <p>d. <span class="fraction">-21/26</span></p>-->
<!--                    <p><strong>Answer: 3</strong></p>-->
<!--                </div>-->
<!---->
<!--                <div class="answers-block">-->
<!--                    <h4>Amit bought a second hand scooter for Rs.15000. He spent another Rs. 1000 on its service and sold it for Rs. 20000. His loss or gain per cent is:</h4>-->
<!--                    <p>a.	25%</p>-->
<!--                    <p>b.	30%</p>-->
<!--                    <p>c.	35%</p>-->
<!--                    <p>d.	40%</p>-->
<!--                    <p><strong>Answer: 1</strong></p>-->
<!--                </div>-->
<!---->
<!--                <div class="answers-block">-->
<!--                    <h4>In an examination, one requires 45% marks to pass. Geeta secured 230 marks in all subjects and fails by 22 marks. The maximum marks are:</h4>-->
<!--                    <p>a.	500</p>-->
<!--                    <p>b.	560</p>-->
<!--                    <p>c.	600</p>-->
<!--                    <p>d.	660</p>-->
<!--                    <p><strong>Answer: 2</strong></p>-->
<!--                </div>-->
<!---->
<!--                <div class="answers-block">-->
<!--                    <h4>The product of two expressions is x <sup>4</sup> + 2 x <sup>3</sup> . If one of them is x + 1 then the other is:</h4>-->
<!--                    <p>a.&nbsp; x<sup>2</sup>(x + 1)</p>-->
<!--                    <p>b.&nbsp; x<sup>2</sup>(x - 1)</p>-->
<!--                    <p>c.&nbsp; x(x + 1)</p>-->
<!--                    <p>d.&nbsp; (x + 1)</p>-->
<!--                    <p><strong>Answer: 1</strong></p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--==============================================================
Footer
==================================================================-->
<!--<footer class="footer clearfix" id="footer">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <p>-->
<!--                    <a href="">Home</a>-->
<!--                    <a href="">About Us   </a>-->
<!--                    <a href="">Why Markshsarks?</a>-->
<!--                    <a href="">Testimonials   </a>-->
<!---->
<!--                    <a href="" class="icon facebook">-->
<!--                        <img src="img/svg-icons/facebook-f.svg" alt="">-->
<!--                    </a>-->
<!---->
<!--                    <a href="" class="icon twitter">-->
<!--                        <img src="img/svg-icons/twitter.svg" alt="">-->
<!--                    </a>-->
<!---->
<!--                    <a href="" class="icon instagram">-->
<!--                        <img src="img/svg-icons/instagram.svg" alt="" >-->
<!--                    </a>-->
<!--                </p>-->
<!--            </div>-->
<!--        </div><!--end row-->-->
<!--    </div><!--end container-->-->
<!--</footer>-->

<!--<section class="hidden-lg hidden-sm hidden-md">-->
<!--    <div class="button-wrap">-->
<!--        <a href="tel:011-39589595" data-toggle="modal" data-target="#request-a-callback" class="trigger  btn request-callback"><i class="fa fa-phone"></i>&nbsp;&nbsp; Call Now-->
<!--        </a>-->
<!--    </div>-->
<!--</section>-->

<a href="#0" class="cd-top js-cd-top">Top</a>


<script src="js/vendor/jquery-3.3.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>

<script src="js/main.js"></script>

<script>
    $('.quiz-slide').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dots: false,
        navText: ["<img src='img/left-angle.png'>","<img src='img/right-angle.png'>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>

<script type="text/javascript">



</script>


<!-- Google Code for http://www.marksharks.in/ Conversion Page --> 
<script type="text/javascript"> 
/* <![CDATA[ */ 
var google_conversion_id = 952327676; 
var google_conversion_label = "MxGCCJPT7IQBEPy7jcYD"; 
var google_remarketing_only = false; 
/* ]]> */ 
</script> 
<script type="text/javascript" 
src="//www.googleadservices.com/pagead/conversion.js"> 
</script> 
<noscript> 
<div style="display:inline;"> 
<img height="1" width="1" style="border-style:none;" alt="" 
src="//www.googleadservices.com/pagead/conversion/952327676/?label=MxGCCJPT7IQBEPy7jcYD&amp;guid=ON&amp;script=0"/> 
</div> 
</noscript> 


</body>
</html>


<?php

}
?>