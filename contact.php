
<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{


require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'wibrahem85@gmail.com';                 // SMTP username
$mail->Password = '55555onoff';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('wibrahem85@gmail.com', 'موقع فيشه');     // Add a recipient
$mail->addAddress('');               // Name is optional
$mail->addReplyTo($_POST['email'], 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST[''];
$mail->Body    = $_POST['message'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 echo 'شكرا على اتصالك بنا. سنتصل بك في غضون ثلاثة أيام عمل.';
}



	
}



?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>موقع فيشة للتجارة الالكترونية</title>
    
    	<link rel="icon" type="image/png" href="http://fiisha.com/images/media/2020/03/FuDHg25712.png">
        <meta name="DC.title"  content="e-commerce, ecommerce, eshop, shopping, shopping cart"/>
    <meta name="description" content="موقع فيشة للتجارة الالكترونية"/>
    <meta name="keywords" content="e-commerce, ecommerce, eshop, shopping, shopping cart"/>
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700;800;900&display=swap" rel="stylesheet">
    
    
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="csrf-token" content="N9mzO8bskEvxxVCcXxJoFmk4WeFYMw9Be7GN5Jv1">

	<!-- Core CSS Files -->
	<link rel="stylesheet" type="text/css" href="http://fiisha.com/web/css/app.theme.1.css">
	<script src="http://fiisha.com/web/js/app.js"></script>
	
    <!---- onesignal ------>
    	<link rel="manifest" href="http://fiisha.com/onesignal/manifest.json" />
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
    var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
		  //push here
      });

	//onesignal
	OneSignal.push(["init", {
	  appId: "6053d948-b8f6-472a-87e4-379fa89f78d8",
	 // safari_web_id: oneSignalSafariWebId,
	  persistNotification: false,
	  notificationClickHandlerMatch: 'origin',
	  autoRegister: false,
	  notifyButton: {
	   enable: false
	  }
	 }]);

    </script>
    
    
  </head>
    <!-- dir="rtl" -->
    <body class="animation-s5 bodyrtl ">
      
      <div class="se-pre-con" id="loader" style="display: block">
        <div class="pre-loader">
          <div class="la-line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p>جار التحميل..</p>
        </div>
     
      </div>

            
      <!-- Header Sections -->

        <!-- Top Offer -->
        <div class="header-area">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <div class="container">
        <div class="pro-description">
          <div class="pro-info">
            اشتري <strong> كل اجهزة بيتك من مكان واحد </ strong>  و بالتقسيط حتى 36 شهر 
<div class = "pro-link-dropdown js-toppanel-link-dropdown">
<a href="/shop" class="pro-dropdown-toggle">
تسوق الآن
</a>
</div>          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>

    </div>
  </div>
          </div>

        
        <!-- End Top Offer -->
        
        <!-- Header Content -->
        <!-- //header style Seven -->
<header id="stickyHeader" class="header-area header-sticky d-none">
          <div class="header-sticky-inner  bg-sticky-bar">
            <div class="container">
    
                <div class="row align-items-center">
                    <div class="col-12 col-lg-2">
                        <div class="logo">
                          <a href="http://fiisha.com" class="logo" data-toggle="tooltip" data-placement="bottom" title="شعار">
                                                    
                                                        <img class="img-fluid" src="http://fiisha.com/images/media/2020/05/5rk2428804.png" alt="one">
                                                        </a>

                          </div>
                    </div>
                    <div class="col-12 col-lg-7" style="position: static;">
                      <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
                  
                        <div class="navbar-collapse">
                          <ul class="navbar-nav">
                            <li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/" >
                الرئيسية
                </a></li><li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/shop" >
                معرض فيشة
                </a></li><li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/news" >
                المجلة
                </a></li><li class="nav-item dropdown "><a class="nav-link  dropdown-toggle"  href="#" >
                معلومات
                </a><div class="dropdown-menu" >
                <div class="dropdown-submenu submenu1">
                <a class="dropdown-item"  href="http://fiisha.com/page?name=about-us">
                    عنا
                </a>
            </div>
                <div class="dropdown-submenu submenu1">
                <a class="dropdown-item"  href="http://fiisha.com/page?name=privacy-policy">
                    الخصوصية
                </a>
            </div></div></li><li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/contact" >
                اتصل بنا
                </a></li>
                                
                          </ul>
                        </div>
                      </nav>
                    </div>
                    <div class="col-12 col-lg-3">
                        <ul class="pro-header-right-options">
                          
                              <li class="dropdown search-field">
                                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-search"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                                    <form class="form-inline" action="http://fiisha.com/shop" method="get">
                                          <div class="search-field-module">
                                              <input type="text" class="form-control" id="inlineFormInputGroup0" name="search" placeholder="عايز تشتري ايه ؟...">
                                              <button class="btn" type="submit">
                                                  <i class="fas fa-search"></i>
                                              </button>
                                          </div>
                                        </form>
                                    
                                  </div>
                                </li>
                            <li class="dropdown profile-tags">
                              <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-user"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                                                                  <a class="dropdown-item" href="http://fiisha.com/login">تسجيل الدخول</a>                    
                                                                
                              </div>
                            </li>
                            <li>
                              <a href="http://fiisha.com/wishlist" class="btn btn-light" >
                                  <i class="far fa-heart"></i>
                                  <span class="badge badge-secondary total_wishlist">0</span>
                              </a>
                            </li>
          
                            <li class="dropdown head-cart-content-fixed">
                              <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <i class="fas fa-shopping-bag"></i>
                                <span class="badge badge-secondary">0</span>
                              </button> 

                              
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                                  <ul class="shopping-cart-items">
                                      <li> ليس لديك أي عناصر في سلة التسوق الخاصة بك.</li>
                                  </ul>
                              </div>
                                  
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div> 
        </header>
 
  <header id="headerSeven" class="header-area header-seven  header-desktop d-none d-lg-block d-xl-block">
    <div class="header-mini bg-top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            
            <nav id="navbar_0_6" class="navbar navbar-expand-md navbar-dark navbar-0">
              <div class="navbar-lang">
                 
                 
              </div>                   
              
              <div class="navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="nav-avatar nav-link">
                      <div class="avatar">
                                                
                      </div>
                      <span> </span>
                    </div>
                  </li>
                                        <li class="nav-item"><div class="nav-link">نورت فيشة!</div></li>
                      <li class="nav-item"> <a href="http://fiisha.com/login" class="nav-link -before"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;تسجيل الدخول</a> </li>                      
                                    </ul> 
              </div>   
            </nav>
          </div>
        </div>
      </div> 
    </div>
      <div class="header-maxi bg-header-bar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-lg-3">
              <a href="http://fiisha.com" class="logo">
                      
                                <img src="http://fiisha.com/images/media/2020/05/5rk2428804.png" alt="one">
                              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-9">
              <ul class="top-right-list">
                <li class="panel">
                  <h3 class="fas fa-truck"></h3>
                  <div class="block">
                      <h4 class="title">الشحن مجانا</h4>
                      <p>لحد باب البيت  </p>
                  </div>
                </li>
                  <li class="phone-header">
                      <a href="#">
                        <i class="fas fa-phone"></i>
                        <span class="block">
                          <span class="title">خدمة العملاء</span>                    
                          <span class="items">01211182222</span>
                        </span>                   
                      </a>
                    </li>
                    <li class="dropdown head-cart-content">
                      <button id="dropdownCartButton" class="btn dropdown-toggle" type="button" id="headerOneCartButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > 
    <div class="cart-left">
     <i class="fas fa-shopping-bag"></i>
     <span class="badge badge-secondary">0</span>
    </div>
 
       <div class="cart-right d-flex flex-column align-self-end ml-13">
         <span class="title-cart">عربة التسوق</span>
         <span class="cart-item"> العناصر</span>
       </div>
   </button> 
   
<div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <ul class="shopping-cart-items">
        <li> ليس لديك أي عناصر في سلة التسوق الخاصة بك.</li>
    </ul>
</div>

   <!--
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
--> 
                    </li>                    
              </ul>
            </div>
          </div>
        </div>
      </div> 
      <div class="header-navbar bg-menu-bar">
        <div class="container">
          <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
          
            <div class="navbar-collapse" >
              <ul class="navbar-nav">
                <li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/" >
                الرئيسية
                </a></li><li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/shop" >
                معرض فيشة
                </a></li><li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/news" >
                المجلة
                </a></li><li class="nav-item dropdown "><a class="nav-link  dropdown-toggle"  href="#" >
                معلومات
                </a><div class="dropdown-menu" >
                <div class="dropdown-submenu submenu1">
                <a class="dropdown-item"  href="http://fiisha.com/page?name=about-us">
                    عنا
                </a>
            </div>
                <div class="dropdown-submenu submenu1">
                <a class="dropdown-item"  href="http://fiisha.com/page?name=privacy-policy">
                    الخصوصية
                </a>
            </div></div></li><li class="nav-item dropdown "><a class="nav-link  "  href="http://fiisha.com/contact" >
                اتصل بنا
                </a></li>
                <li class="nav-item">
                  <form class="form-inline" action="http://fiisha.com/shop" method="get">
                    <div class="search-field-module">      
                      <div class="search-field-wrap">
                            <input  type="text" name="search" placeholder="عايز تشتري ايه ؟..." data-toggle="tooltip" data-placement="bottom" title="البحث عن المنتجات" alue="">
                            <button class="btn btn-secondary swipe-to-top" type="submit" data-toggle="tooltip" 
                            data-placement="bottom" title="البحث عن المنتجات">
                            <i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
        
        
        <!-- End Header Content -->
        <header id="headerMobile" class="header-area header-mobile d-lg-none d-xl-none">
    <div class="header-mini bg-top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">

            <nav id="navbar_0" class="navbar navbar-expand-md navbar-dark navbar-0">
              <div class="navbar-lang">

                                
                                    <!-- END  Currency LANGUAGE CODE SECTION -->                
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="header-maxi bg-header-bar ">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-2 pr-0">
              <div class="navigation-mobile-container">
                  <a href="javascript:void(0)" class="navigation-mobile-toggler">
                      <span class="fas fa-bars"></span>
                  </a>
                  <nav id="navigation-mobile">
                      <div class="logout-main">
                          <div class="welcome">
                            <span> </span>
                          </div>
                                                </div>

                      <a class="main-manu btn btn-primary"  href="http://fiisha.com/" >
                الرئيسية</a><a class="main-manu btn btn-primary"  href="http://fiisha.com/shop" >
                معرض فيشة</a><a class="main-manu btn btn-primary"  href="http://fiisha.com/news" >
                المجلة</a><a class="main-manu btn btn-primary"data-toggle="collapse" href="#shoppages1" role="button" aria-expanded="false" aria-controls="shoppages1"  href="#" >
                معلومات<span><i class="fas fa-chevron-down"></i></span>
                            <span><i class="fas fa-chevron-up"></i></span></a><div class="sub-manu collapse multi-collapse" id="shoppages1">
                        <ul class="unorder-list"><li class="">
                <div class="dropdown-submenu submenu1"><a class="main-manu btn btn-primary"  href="http://fiisha.com/page?name=about-us" >
            عنا</a>
                <div class="dropdown-submenu submenu1"><a class="main-manu btn btn-primary"  href="http://fiisha.com/page?name=privacy-policy" >
            الخصوصية</a></li></ul>
                        </div><a class="main-manu btn btn-primary"  href="http://fiisha.com/contact" >
                اتصل بنا</a>
                     
                                              <div class="nav-link">نورت فيشة!</div>
                         <a href="http://fiisha.com/login" class="main-manu btn btn-primary"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;تسجيل الدخول</a>
                                         </nav>
              </div>

          </div>



          <div class="col-8">
            <a href="http://fiisha.com" class="logo">
            
                        <img src="http://fiisha.com/images/media/2020/05/5rk2428804.png" alt="one">
                       </a>
          </div>

          <div class="col-2 pl-0">              
              <ul class="pro-header-right-options">
                <li class="dropdown">

              
    <button class="btn dropdown-toggle" type="button" id="headerOneCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
    <div class="cart-left">
      <i class="fas fa-shopping-bag"></i>
      <span class="badge badge-secondary">0</span>
    </div>
  
    </button> 
    
      
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
              <ul class="shopping-cart-items">
                  <li> ليس لديك أي عناصر في سلة التسوق الخاصة بك.</li>
              </ul>
          </div>
            
  
  
  
  
<!--
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
-->
                </ul> 
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="header-navbar bg-menu-bar">
      <div class="container">
        <form class="form-inline" action="http://fiisha.com/shop" method="get">
          <div class="search">
            <div class="select-control">
              <select class="form-control" name="category">
                <option value="">فئات</option><option value="electrical-appliances-1" >الأجهزة الكهربائية</option><option value="tv" >تلفزيونات</option><option value="n-a" >-شاشات</option><option value="1" >-رسيفير</option><option value="household-appliance" >الأجهزة المنزلية</option><option value="6" >-مكانس كهربائية</option><option value="5" >-مبرد مياه</option><option value="2" >-خلاطات وعجانات</option><option value="3" >-فلاتر مياه</option><option value="4" >-ميكرويف</option><option value="air-conditioners" >تكييفات</option><option value="test-category" >قسم تجريبي</option><option value="food-preparation" >أجهزة تحضير الطعام</option>              </select>
            </div>
            <input  type="search" placeholder="Search entire store here">
            <button class="btn btn-secondary" type="submit">
            <i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
</header>
      <!-- End of Header Sections -->
      
       <!-- NOTIFICATION CONTENT -->
         <style>
.top-alert {
  position: fixed;
  top: 0px;
  width: 100%;
  z-index: 100000;
  left: 0;
  padding: 20px;
  display: inline-block;
  text-align: center;
}
.top-alert .alert {
  width: auto !important;
  height: 100%;
  display: inline;
  position: relative;
  margin: 0;
}
.top-alert .alert .close {
  position: absolute;
  top: 11px;
  right: 10px;
  color: inherit;
}

</style>
  <div class="top-alert" id="alert-pro" style="display:none;">
    <div class="alert alert-success ">
      <i class="glyphicon glyphicon-exclamation-sign"></i>
       
      Product added successfully!      </button>
    </div>
  </div>
  <div class="top-alert" id="alert-exceed" style="display:none;">
    <div class="alert alert-danger ">
      <i class="glyphicon glyphicon-exclamation-sign"></i>
      Ops! Product is available in stock But Not Active For Sale. Please contact to the admin    </div>
  </div>
  <div class="top-alert" id="alert-compare" style="display:none;">
    <div class="alert alert-success ">
      <i class="glyphicon glyphicon-exclamation-sign"></i>
        Product Is Ready To Comapre!      </button>
    </div>
  </div>
  <div class="top-alert" id="alert-liked" style="display:none;">
    <div class="alert alert-success ">
      <i class="glyphicon glyphicon-exclamation-sign"></i>
        website.Product Is Liked!      </button>
    </div>
  </div>
  <div class="top-alert" id="alert-disliked" style="display:none;">
    <div class="alert alert-success ">
      <i class="glyphicon glyphicon-exclamation-sign"></i>
        website.Product Is DisLiked!      </button>
    </div>
  </div>
  <div class="top-alert" id="alert-login-first" style="display:none;">
    <div class="alert alert-success ">
      <i class="glyphicon glyphicon-exclamation-sign"></i>
        Please Login First      </button>
    </div>
  </div>
      <!-- END NOTIFICATION CONTENT -->
         <!-- contact Content -->

<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://fiisha.com">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
          </ol>
      </div>
    </nav>
</div> 

<section class="pro-content">
        
  <div class="container">
    <div class="page-heading-title">
        <h2> اتصل بنا 
        </h2>
     
        </div>
</div>

<section class="contact-content contact-us-new">
  <div class="container"> 
    <div class="row">
      <div class="col-12 col-sm-12">
          <div class="row">
            <div class="col-12 col-lg-3 col-md-6">
                <ul class="contact-info pl-0 mb-0"  >
                    <li> <i class="fas fa-mobile-alt"></i><span><a href="#">01211182222</a></span> </li>
                </ul>         
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <ul class="contact-info pl-0 mb-0"  >
                    <li> <i class="fas fa-map-marker"></i><span><a href="#">التجارة الإلكترونية<br>متجر تجريبي 3654123</a></span> </li>
                </ul>         
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <ul class="contact-info pl-0 mb-0"  >
                    <li> <i class="fas fa-envelope"></i><span> <a href="mailto:sales@fiisha.com">sales@fiisha.com</a> </span> </li>
                </ul>         
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <ul class="contact-info pl-0 mb-0"  >
                    <li> <i class="fas fa-tty"></i><span> <a href="#">01211182222</a> </span> </li>
                </ul>         
            </div>
            
          </div>
        <div class="row block-02-contact">
            <div class="col-12 col-lg-12">
                <div class="form-start">
                  
                  
                  <form enctype="multipart/form-data" action="http://fiisha.com/processContactUs" method="post">
                    <input name="_token" value="N9mzO8bskEvxxVCcXxJoFmk4WeFYMw9Be7GN5Jv1" type="hidden">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="first-label" for="email">الاسم الكامل</label>
                                    <div class="input-group"> 
                                        <input type="text" class="form-control" id="name" name="name" placeholder="الرجاء إدخال اسمك." aria-describedby="inputGroupPrepend" required>
                                        <div class="help-block error-content invalid-feedback" hidden>الرجاء إدخال اسمك.</div>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="email">البريد الإلكتروني</label>
                                    <div class="input-group">                     
                                        <input type="email"  name="email" class="form-control" id="validationCustomUsername" placeholder="Enter Email here.." aria-describedby="inputGroupPrepend" required>
                                        <div class="help-block error-content invalid-feedback" hidden> الرجاء إدخال عنوان بريدك الإلكتروني .</div>
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="first-label" for="email">رسالة</label>
                                    <textarea type="text" class="form-control" name="message"  placeholder="write your message here..." rows="4" cols="56"></textarea>
                                    <div class="help-block error-content invalid-feedback" hidden>الرجاء إدخال رسالتك.</div>
                                </div>
                                
                                <button type="submit" class="btn btn-secondary swipe-to-top">إرسال <i class="fas fa-location-arrow"></i>   
                            </div>
                        </div>
                    </form>
                </div>
          </div>     
        
            
            <div class="col-12 col-lg-12">
                <!--
                    <div id="map" style="height:400px; margin-top: 5px;">
                      
                    </div>
                    <script>
                      var map;
                      function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: -34.397, lng: 150.644},
                          zoom: 8
                        });
                      }
                    </script>
                                    -->
                    <p class="info">
                        احنا دايما موجودين في خدمتك

.                    </p>
            </div> 
            
          
        
        </div>
      </div>
    </div>
    
  </div>      
</section>

</section>


      <!-- Footer content -->
      <div class="notifications" id="notificationWishlist"></div>
      <!-- //footer style Six -->
 <footer id="footerSix"  class="footer-area footer-six footer-desktop d-none d-lg-block d-xl-block">
    
    <div class="container-fluid p-0">
      <div class="search-content">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="newsletter">
                        <h5>اشترك في النشرة الإخبارية</h5>
                        <div class="block">
                       
                <form class="form-inline mailchimp-form" action="http://fiisha.com/subscribeMail" >
                  <div class="search-field-module">  
                    <div class="search-field-wrap">
                        <input type="email" name="email" class="email" placeholder="عنوان بريدك الإلكتروني هنا ..." data-toggle="tooltip" data-placement="bottom" title="" data-original-title="عنوان بريدك الإلكتروني هنا ...">
                        <button class="btn btn-secondary swipe-to-top mailchimp-btn" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="الاشتراك!">
                          الاشتراك!</button>
                    </div>
                  </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="single-footer">
            <h5>حول متجر</h5>
            <div class="row">
              <div class="col-12 col-lg-8">
                <hr>
              </div>
            </div>
            <ul class="contact-list  pl-0 mb-0">
              <li> <i class="fas fa-map-marker"></i><span>online store ,  </span> </li>
              <li> <i class="fas fa-phone"></i><span>(01211182222)</span> </li>
              <li> <i class="fas fa-envelope"></i><span> <a href="mailto:sales@fiisha.com">sales@fiisha.com</a> </span> </li>

            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-block">
              <div class="single-footer single-footer-left">
                <h5>خدماتنا</h5>
                <div class="row">
                    <div class="col-12 col-lg-8">
                      <hr>
                    </div>
                  </div>
                <ul class="links-list pl-0 mb-0">
                <li> <a href="http://fiisha.com"><i class="fa fa-angle-right"></i>الصفحة الرئيسية</a> </li>
                <li> <a href="http://fiisha.com/shop"><i class="fa fa-angle-right"></i> معرض فيشة</a> </li>
                <li> <a href="http://fiisha.com/orders"><i class="fa fa-angle-right"></i>مشترياتي</a> </li>
                <li> <a href="http://fiisha.com/viewcart"><i class="fa fa-angle-right"></i>عربة التسوق</a> </li>
                <li> <a href="http://fiisha.com/wishlist"><i class="fa fa-angle-right"></i>مفضلتي</a> </li>
                </ul>
              </div>

          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="single-footer single-footer-right">
            <h5>المعلومات</h5>
            <div class="row">
                <div class="col-12 col-lg-8">
                  <hr>
                </div>
              </div>
            <ul class="links-list pl-0 mb-0">
                                                      <li> <a href="http://fiisha.com/page?name=refund-policy"><i class="fa fa-angle-right"></i>سياسة الاسترجاع</a> </li>
                                        <li> <a href="http://fiisha.com/page?name=privacy-policy"><i class="fa fa-angle-right"></i>سياسة خاصة</a> </li>
                                        <li> <a href="http://fiisha.com/page?name=term-services"><i class="fa fa-angle-right"></i>مصطلح والخدمات</a> </li>
                                        <li> <a href="http://fiisha.com/page?name=about-us"><i class="fa fa-angle-right"></i>معلومات عنا</a> </li>
                                                  <li> <a href="http://fiisha.com/contact"><i class="fa fa-angle-right"></i>اتصل بنا</a> </li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <div class="single-footer">
                          <div class="socials">
                  <h5>تابعنا</h5>
                  <div class="row">
                      <div class="col-12 col-lg-8">
                        <hr>
                      </div>
                    </div>
                  <ul class="list">
                    <li>
                                                  <a href="https://www.facebook.com/fiisha.online/" class="fab fa-facebook-f" target="_blank"></a>
                                                </li>
                      <li>
                                                <a href="https://www.facebook.com/fiisha.online/" class="fab fa-twitter" target="_blank"></a>
                      </li>
                      <li>
                                                <a href="https://www.facebook.com/fiisha.online/"  target="_blank"><i class="fab fa-google"></i></a>
                                            </li>
                      <li>
                                                <a href="https://www.facebook.com/fiisha.online/" class="fab fa-linkedin-in" target="_blank"></a>
                                            </li>
                  </ul>
                  <div class="footer-image">
                    <img class="img-fluid" src="http://fiisha.com/web/images/miscellaneous/payments.png">
                  </div>
              </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-0">
      <div class="copyright-content">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                  <div class="footer-info">
                    © GROUND FLOOR AGENCY .  <a href="http://fiisha.com/page?name=refund-policy">الإجمالية</a>&nbsp;&bull;&nbsp;<a href="http://fiisha.com/page?name=term-services">شروط</a>
                  </div>
                    
                </div>
            </div>
          </div>
        </div>
  </div>
</footer>

      <!-- End Footer content -->
      <footer id="footerMobile" class="footer-area footer-mobile d-lg-none d-xl-none">
  <div class="container-fluid p-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
            <div class="single-footer display-mobile">
                <h5>اشترك في النشرة الإخبارية</h5>
                <div class="row">
                  <div class="col-7 col-md-8">
                    <hr>
                  </div>
                </div>
              </div>
              
        </div>
        <div class="col-12 col-md-4">
          <div class="single-footer display-mobile">
              <h5>تابعنا</h5>
              <div class="row">
                <div class="col-7 col-md-8">
                  <hr>
                </div>
              </div>
            </div>
              <div class="socials">
                  <ul class="list">
                    <li>
                                                  <a href="https://www.facebook.com/fiisha.online/" class="fab fa-facebook-f" target="_blank"></a>
                                                </li>
                      <li>
                                                <a href="https://www.facebook.com/fiisha.online/" class="fab fa-twitter" target="_blank"></a>
                      </li>
                      <li>
                                                <a href="https://www.facebook.com/fiisha.online/"  target="_blank"><i class="fab fa-google"></i></a>
                                            </li>
                      <li>
                                                <a href="https://www.facebook.com/fiisha.online/" class="fab fa-linkedin-in" target="_blank"></a>
                                            </li>
                  </ul>
              </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-0  footer-inner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="single-footer">
            <h5>حول متجر</h5>
            <div class="row">
              <div class="col-7 col-md-8">
                <hr>
              </div>
            </div>
            <ul class="contact-list  pl-0 mb-0">
              <li> <i class="fas fa-map-marker"></i><span>online store ,  </span> </li>
              <li> <i class="fas fa-phone"></i><span>(01211182222)</span> </li>
              <li> <i class="fas fa-envelope"></i><span> <a href="mailto:sales@brandbychoice.com">sales@fiisha.com</a> </span> </li>

            </ul>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="footer-block">
            <div class="single-footer single-footer-left">
              <h5>Our Services</h5>
              <div class="row">
                  <div class="col-7 col-md-8">
                    <hr>
                  </div>
              </div>
              <ul class="links-list pl-0 mb-0">
                <li> <a href="http://fiisha.com"><i class="fa fa-angle-right"></i>Home</a> </li>
              <li> <a href="http://fiisha.com/shop"><i class="fa fa-angle-right"></i>Shop</a> </li>
              <li> <a href="http://fiisha.com/orders"><i class="fa fa-angle-right"></i>Orders</a> </li>
              <li> <a href="http://fiisha.com/viewcart"><i class="fa fa-angle-right"></i>Shopping Cart</a> </li>
              <li> <a href="http://fiisha.com/wishlist"><i class="fa fa-angle-right"></i>Wishlist</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 ">
          <div class="single-footer single-footer-right">
            <h5>المعلومات</h5>
            <div class="row">
              <div class="col-7 col-md-8">
                <hr>
              </div>
            </div>
            <ul class="links-list pl-0 mb-0">
                                                      <li> <a href="http://fiisha.com/page?name=refund-policy"><i class="fa fa-angle-right"></i>سياسة الاسترجاع</a> </li>
                                        <li> <a href="http://fiisha.com/page?name=privacy-policy"><i class="fa fa-angle-right"></i>سياسة خاصة</a> </li>
                                        <li> <a href="http://fiisha.com/page?name=term-services"><i class="fa fa-angle-right"></i>مصطلح والخدمات</a> </li>
                                        <li> <a href="http://fiisha.com/page?name=about-us"><i class="fa fa-angle-right"></i>معلومات عنا</a> </li>
                                                  <li> <a href="http://fiisha.com/contact"><i class="fa fa-angle-right"></i>اتصل بنا</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="copyright-content">
        <div class="container">
          <div class="row align-items-center">

              <div class="col-12 col-md-6">
                <div class="footer-info">
                  &copy;&nbsp;GROUND FLOOR AGENCY . <a href="http://fiisha.com/page?name=refund-policy">الإجمالية</a>&nbsp;&bull;&nbsp;<a href="http://fiisha.com/page?name=term-services">شروط</a>
                

                </div>

              </div>
              <div class="col-12 col-md-6">
                  <div class="footer-image">
                      <img class="img-fluid" src="http://fiisha.com/web/images/miscellaneous/payments.png">
                  </div>

              </div>
          </div>
        </div>
    </div>
  </div>

</footer>
      
      <!-- Button trigger modal -->
      
      

      <div class="mobile-overlay"></div>
      <!-- Product Modal -->


      <a href="web/#" id="back-to-top" class="btn-secondary swipe-to-top" title="عد إلى الأعلى">&uarr;</a>


      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  
                  <div class="container" id="products-detail">
                    
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
          </div>
        </div>
    </div>

      <!-- Include js plugin -->
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<script src="http://fiisha.com/web/js/scripts.js"></script>
<script>
/////////////////// default code ///////////////////


///////////////// old code ///////////////////


// jQuery(document).ready(function($){

// jQuery(document).on('click', '.btnrating', function(){
// 	var previous_value = jQuery("#selected_rating").val();
	
// 	var selected_value = jQuery(this).attr("data-attr");
// 	jQuery"#selected_rating").val(selected_value);
	
// 	jQuery(".selected-rating").empty();
// 	jQuery(".selected-rating").html(selected_value);
	
// 	for (i = 1; i <= selected_value; ++i) {
// 		jQuery("#rating-star-"+i).toggleClass('btn-warning');
// 		jQuery("#rating-star-"+i).toggleClass('btn-default');
// 	}
	
// 	for (ix = 1; ix <= previous_value; ++ix) {
// 		jQuery("#rating-star-"+ix).toggleClass('btn-warning');
// 		jQuery("#rating-star-"+ix).toggleClass('btn-default');
// 	}
// })




// }); 



//review ajax
jQuery(".mailchimp-form").submit(function(e) {

e.preventDefault(); // avoid to execute the actual submit of the form.

var form = jQuery(this);
var url = form.attr('action');
  jQuery.ajax({
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        type: "GET",
        url: "http://fiisha.com/subscribeMail",
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
			  jQuery('#newsletterModal').modal('hide');
			
          if(data == '1'){
              jQuery('.email').val('');
              notificationWishlist("لقد اشتركت بنجاح");
          }else if(data == '2'){
              notificationWishlist("لقد اشتركت بالفعل");
          }
          else{
              notificationWishlist("وجه الفتاة! هناك خطأ ما. الرجاء معاودة المحاولة في وقت لاحق.");
          }
        }
      });


});


jQuery(document).on('click', '.shipping_data', function(e){
    getZonesBilling();
  });
  
  function getZonesBilling() {
    var field_name = jQuery('.shipping_data:checked');
    var mehtod_name = jQuery(field_name).attr('method_name');
	var shipping_price = jQuery(field_name).attr('shipping_price');
    jQuery("#mehtod_name").val(mehtod_name);
    jQuery("#shipping_price").val(shipping_price);
  }
  

function notificationWishlist(param){
    jQuery('#notificationWishlist').html(param);
    jQuery('#notificationWishlist').show();
    setTimeout(function(){
        jQuery('#notificationWishlist').hide('slow');
      }, 2000);
}


jQuery(document).ready(function() {
	jQuery('#loader').hide();
});

jQuery(document).on('click','#allow-cookies', function(e){
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/setcookie',
		type: "get",
		success: function (res) {
			jQuery('.alert-cookie').removeClass('show');
			jQuery('.alert-cookie').addClass('hide');
		},
	});
});

	//default product cart
  jQuery(document).on('click', '.cart', function(e){
	var parent = jQuery(this);
	var products_id = jQuery(this).attr('products_id');
	var message ;
	
  jQuery(function ($) {
	jQuery.ajax({

		url: 'http://fiisha.com/addToCart',
    headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},

		type: "POST",
		data: '&products_id='+products_id,
		success: function (res) {
			if(res.status == 'exceed'){
				notificationWishlist("Ops! Product is available in stock But Not Active For Sale. Please contact to the admin");
			}
			else{
				jQuery('.head-cart-content').html(res);
				jQuery(parent).removeClass('cart');
				jQuery(parent).addClass('active');
				jQuery(parent).html("واضاف!");

				jQuery.ajax({

					url: 'http://fiisha.com/addToCartFixed',
					headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},

					type: "POST",
					data: '&products_id='+products_id,
					success: function (res) {            
						jQuery('.head-cart-content-fixed').html(res);
					},
				});

				notificationWishlist("تمت إضافة المنتج بنجاح");

				

			}

		},
	});
 });

 


});


  
  function cartPrice(){
    var i = 0;
    jQuery(".currentstock").each(function() {
      var value_price = jQuery('option:selected', this).attr('value_price');
      var attributes_value = jQuery('option:selected', this).attr('attributes_value');
      var prefix = jQuery('option:selected', this).attr('prefix');
      jQuery('#attributeid_' + i).val(value_price);
      jQuery('#attribute_sign_' + i++).val(prefix);

    });
  }

//ajax call for add option value
function getQuantity(){
	var attributeid = [];
	var i = 0;
	
	jQuery('.stock-cart').attr('hidden', true);

	jQuery(".currentstock").each(function() {
		var value_price = jQuery('option:selected', this).attr('value_price');
		var attributes_value = jQuery('option:selected', this).attr('attributes_value');
		jQuery('#function_' + i).val(value_price);
		jQuery('#attributeids_' + i++).val(attributes_value);
	});

	var formData = jQuery('#add-Product-form').serialize();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/getquantity',
		type: "POST",
		data: formData,
		dataType: "json",
		success: function (res) {
			var products_price = jQuery('#products_price').val();

			jQuery('#current_stocks').html(res.remainingStock);
			var min_level = 0;
			var max_level = 0;
			var inventory_ref_id = res.inventory_ref_id;
			

			if(res.minMaxLevel != '' && res.minMaxLevel > 0){
				min_level = res.minMax[0].min_level;
				max_level = res.minMax[0].max_level;
			}
			if(min_level != 0){
				jQuery('.qty').attr('value',min_level);
				jQuery('.qty').attr('min',min_level);
			}else{
				min_level = 1;
				jQuery('.qty').attr('value',min_level);
				jQuery('.qty').attr('min',min_level);

			}
			var final_pri = products_price * min_level;
			if(res.remainingStock>0){
				jQuery('#min_max_setting').html("&nbsp; الحد الأدنى للطلب:" + min_level);
				jQuery('.stock-cart').removeAttr('hidden');
				jQuery('.stock-out-cart').attr('hidden',true);
				var max_order = jQuery('#max_order').val();

				if(max_order.trim()!=0){
					if(max_order.trim()>=res.remainingStock){
						jQuery('.qty').attr('max',res.remainingStock);
					}else{
						jQuery('.qty').attr('max',max_order);
					}
				}else{
					jQuery('.qty').attr('max',res.remainingStock);
				}
			}else{
				jQuery('#min_max_setting').html("");
				jQuery('.stock-out-cart').removeAttr('hidden');
				jQuery('.stock-cart').attr('hidden',true);
				jQuery('.qty').attr('max',0);
				document.getElementById("myCheck").click();
			}

		},
	});
}
  
	// This button will increment the value
  jQuery(document).on('click', '.qtyplus', function(e){
		// Stop acting like a button
		e.preventDefault();
		// Get its current value
    var currentVal = parseInt(jQuery('.qty').val());
		var maximumVal =  jQuery('.qty').attr('max');
		// If is not undefined
		if (!isNaN(currentVal)) {
			if(maximumVal!=0){
				if(currentVal < maximumVal ){
					// Increment
					jQuery('.qty').val(currentVal + 1);
				}
			}

		} else {
      // Otherwise put a 0 there
      jQuery('.qty').val(0);
		}

		var qty = jQuery('.qty').val();
		var products_price = jQuery('#products_price').val();
		var total_price = parseFloat(qty) * parseFloat(products_price) * 1.00000000;
		jQuery('.total_price').html('LE'+total_price.toFixed(2)+'');
});


// This button will decrement the value till 0
jQuery(document).on('click', '.qtyminus', function(e){

    // Stop acting like a button
    e.preventDefault();

    // Get the field name
    //fieldName = jQuery(this).attr('field');
    var maximumVal =  jQuery('.qty').attr('max');
    var minimumVal =  jQuery('.qty').attr('min');

    // Get its current value
    var currentVal = parseInt(jQuery('.qty').val());
    // If it isn't undefined or its greater than 0
    if (!isNaN(currentVal) && currentVal > minimumVal) {
      // Decrement one
      jQuery('.qty').val(currentVal - 1);

    } else {
      // Otherwise put a 0 there
      jQuery('.qty').val(minimumVal);

    }

    var qty = jQuery('.qty').val();
    var products_price = jQuery('#products_price').val();
    var total_price = parseFloat(qty) * parseFloat(products_price) * 1.00000000;
    jQuery('.total_price').html('LE'+total_price.toFixed(2)+'');

});

// custome add to cart

//add-to-Cart with custom options
jQuery(document).on('click', '.add-to-Cart', function(e){
	var formData = jQuery("#add-Product-form").serialize();
 var url = jQuery('#checkout_url').val();
 var message;
 jQuery.ajax({
	 url: 'http://fiisha.com/addToCart',
	 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},

	 type: "POST",
	 data: formData,

	 success: function (res) {
		 if(res['status'] == 'exceed'){
		   notificationWishlist("Ops! Product is available in stock But Not Active For Sale. Please contact to the admin");
      }
		 else {
			 jQuery('.head-cart-content').html(res);
			 jQuery(parent).addClass('active');

			 jQuery.ajax({

			url: 'http://fiisha.com/addToCartFixed',
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},

				type: "POST",
				data: '&products_id='+'',
				success: function (res) {            
					jQuery('.head-cart-content-fixed').html(res);
				},
			});
		   	 notificationWishlist("تمت إضافة المنتج بنجاح شكرا.متابعة التسوق");
			 //alert("Congrates!", "Product Added Successfully Thanks.Continue Shopping", "success",{button: false});

		 }

		 }
 });
});


jQuery(document).ready(function() {
  
});

jQuery(".rating").click(function(e) {
  if(jQuery(this).prop('checked') == true){
    jQuery('#review_button').removeAttr('disabled');
  }
})


//review ajax
jQuery("#idForm").submit(function(e) {
  jQuery('#review-error').attr('hidden',true);

e.preventDefault(); // avoid to execute the actual submit of the form.

var form = jQuery(this);
var url = form.attr('action');
var reviews_text = jQuery('#reviews_text').val();
if(reviews_text != ''){
  jQuery('#review_button').attr('disabled', true);
  jQuery.ajax({
        headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "http://fiisha.com/reviews",
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
          if(data == 'done'){
              document.getElementById('idForm').reset();
              notificationWishlist("شكرا على وقتك والتفكير في تقديم FeedBack لهذا المنتج.");
          }else if(data == 'not_login'){
              notificationWishlist("من أجل إعطاء FeedBack ، يجب عليك تسجيل الدخول أولاً. شكر.");

          }
          else{
              notificationWishlist("لقد أعطيت التعليق بالفعل. شكر");

          }
          jQuery('#review_button').attr('disabled', false);
        }
      });
}else{
  jQuery('#review-error').removeAttr('hidden');
}

});



//cart item price

jQuery(".qtyminuscart").click(function(e) {

  // Stop acting like a button
  e.preventDefault();

  // Get the field name
  fieldName = jQuery(this).attr('field');

  // Get its current value
  var currentVal = parseInt(jQuery(this).parents('span').prev('.qty').val());
  var minimumVal =  jQuery(this).parents('span').prev('.qty').attr('min');
  // If it isn't undefined or its greater than 0
  if (!isNaN(currentVal) && currentVal > minimumVal) {
    // Decrement one
    jQuery(this).parents('span').prev('.qty').val(currentVal - 1);
  } else {
    // Otherwise put a 0 there
    jQuery(this).parents('span').prev('.qty').val(minimumVal);

  }
});

jQuery('.qtypluscart').click(function(e){
		e.preventDefault();
		// Get the field name
		//fieldName = jQuery(this).attr('field');
		// Get its current value
    var currentVal = parseInt(jQuery(this).parents('span').prev('.qty').val());   
		var maximumVal =  jQuery(this).parents('span').prev('.qty').attr('max');


		//alert(maximum);
		// If is not undefined
		if (!isNaN(currentVal)) {
			if(maximumVal!=0){
				if(currentVal < maximumVal ){
					// Increment
					jQuery(this).parents('span').prev('.qty').val(currentVal + 1);
				}
			}

		} else {
			// Otherwise put a 0 there
			jQuery(this).prev('.qty').val(0);
		}
});


	//update_cart
jQuery(document).on('click', '#update_cart', function(e){
	jQuery('#loader').css('display','block');
	jQuery("#update_cart_form").submit();
});


	//apply_coupon_cart
  jQuery(document).on('submit', '#apply_coupon', function(e){
		jQuery('#coupon_code').remove('error');
		jQuery('#coupon_require_error').hide();
		jQuery('#loader').show();

		if(jQuery('#coupon_code').val().length > 0){
			var formData = jQuery(this).serialize();
			jQuery.ajax({
				headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
				url: 'http://fiisha.com/apply_coupon',
				type: "POST",
				data: formData,
				success: function (res) {
					var obj = JSON.parse(res);
					var message = obj.message;
					jQuery('#loader').hide();
					if(obj.success==0){
						jQuery("#coupon_error").html(message).show();
						return false;
					}else if(obj.success==2){
						jQuery("#coupon_error").html(message).show();
						return false;
					}else if(obj.success==1){
						window.location.reload(true);
					}
				},
			});
		}else{
			jQuery('#loader').css('display','none');
			jQuery('#coupon_code').addClass('error');
			jQuery('#coupon_require_error').show();
			return false;
		}
		jQuery('#loader').hide();
		return false;
});
	//coupon_code
jQuery(document).on('keyup', '#coupon_code', function(e){
		jQuery("#coupon_error").hide();
		if(jQuery(this).val().length >0){
			jQuery('#coupon_code').removeClass('error');
			jQuery('#coupon_require_error').hide();
		}else{
			jQuery('#coupon_code').addClass('error');
			jQuery('#coupon_require_error').show();
		}

});



//validate form
jQuery(document).on('submit', '.form-validate', function(e){
var error = "";
jQuery(".field-validate").each(function() {
		if(this.value == '') {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).next(".error-content").attr('hidden', true);
		}
});
var check = 0;
jQuery(".password").each(function() {
		var regex = "^\\s+$";
		if(this.value.match(regex)) {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			if(check == 1){
				 var res = passwordMatch();

					if(res=='matched'){
						jQuery('.password').closest(".form-group").removeClass('has-error');
						jQuery('#re_password').closest('.re-password-content').children('.error-content-password').add('hidden');
					}else if(res=='error'){
						jQuery('.password').closest(".form-group").addClass('has-error');
						jQuery('#re_password').closest('.re-password-content').children('.error-content-password').removeAttr('hidden');
						error = "has error";
					}
				}else{
					jQuery(this).closest(".form-group").removeClass('has-error');
					jQuery(this).next(".error-content").attr('hidden', true);
				}
				 check++;
			}

});

jQuery(".number-validate").each(function() {
		if(this.value == '' || isNaN(this.value)) {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).next(".error-content").attr('hidden', true);
		}
});

jQuery(".email-validate").each(function() {
		var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if(this.value != '' && validEmail.test(this.value)) {
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).next(".error-content").attr('hidden', true);
		}else{
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}
});

jQuery(".checkbox-validate").each(function() {

		if(jQuery(this).prop('checked') == true){
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).closest('.checkbox-parent').children('.error-content').attr('hidden', true);
		}else{
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).closest('.checkbox-parent').children('.error-content').removeAttr('hidden');

			error = "has error";
		}

	});



	if(error=="has error"){

		return false;

	}
});
//focus form field
jQuery(document).on('keyup focusout change', '.field-validate', function(e){
	if(this.value == '') {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});
//focus form field
jQuery(document).on('keyup', '.number-validate', function(e){
	if(this.value == '' || isNaN(this.value)) {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});
//match password
jQuery(document).on('keyup focusout', '.password', function(e){
	var regex = "^\\s+$";
	if(this.value.match(regex)) {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});

jQuery(document).on('keyup focusout', '.email-validate', function(e){

	var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	if(this.value != '' && validEmail.test(this.value)) {
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}else{
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
		error = "has error";
	}

});


// paymentMethods();
function paymentMethods(){
	jQuery('#loader').show();
	var payment_method = jQuery(".payment_method:checked").val();
	jQuery(".payment_btns").hide();

	jQuery("#"+payment_method+'_button').show();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/paymentComponent',
		type: "POST",
		data: '&payment_method='+payment_method,
		success: function (res) {
			jQuery('#loader').hide();
		},
	});

	//midtrans transaction
	//jQuery(document).on('click', '#midtrans_button', function(e){

		if(payment_method == 'banktransfer'){
			jQuery('#payment_description').show();
		}else{
			jQuery('#payment_description').hide();
		}
		
		if(payment_method == 'midtrans'){
			jQuery('#loader').show();
			jQuery.ajax({
				headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
				url: 'http://fiisha.com/midtrans/transaction',
				type: "get",
				success: function (res) {
					jQuery('#loader').hide();
					jQuery('#payment_error').hide();
					
					var data = JSON.parse(res);
					var success = data.status;
					var message = data.message;
					var token = data.token;

					if(success==1){
						//var url = data.data.authorization_url;
						//window.location.href = url;
						jQuery('#midtransToken').val(token);
						

					}else{
						jQuery('#payment_error').show();
						jQuery('#payment_error-error-text').html(message);
					}

				},
			});
		}
		

	//});

}

function paymentSuccess(result){
	jQuery('#payment_error').hide();
	console.log(result);
	console.log(result.status_code);
	result = result.replace(/'/g, "\\'");
	//jQuery('#update_cart_form').prepend('<input type="hidden" name="nonce" value='+JSON.stringify(result)+'>');
	jQuery("#loader").show();
	jQuery("#update_cart_form").submit();
}


//paystack transaction
jQuery(document).on('click', '#paystack_button', function(e){
	jQuery('#loader').show();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/paystack/transaction',
		type: "get",
		success: function (res) {
			jQuery('#loader').hide();
			jQuery('#payment_error').hide();
			
			var data = JSON.parse(res);
			var success = data.status;
			var message = data.message;
			console.log(message);
			if(success==true){
				var url = data.data.authorization_url;
				window.location.href = url;
			}else{
				jQuery('#payment_error').show();
				jQuery('#payment_error-error-text').html(message);
			}

		},
	});

});


var resposne = jQuery('#hyperpayresponse').val();
if(typeof resposne  !== "undefined"){
	if(resposne.trim() =='success'){
		jQuery('#loader').show();
		jQuery("#update_cart_form").submit();
	}else if(resposne.trim() =='error'){
		jQuery.ajax({
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			url: 'http://fiisha.com/checkout/payment/changeresponsestatus',
			type: "POST",
			async: false,
			success: function (res) {
			},
		});
		jQuery('#paymentError').css('display','block');
	}
}


//pay_instamojo
jQuery(document).on('click', '#pay_instamojo', function(e){
	var formData = jQuery("#instamojo_form").serialize();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/pay-instamojo',
		type: "POST",
		data: formData,
		success: function (res) {
			var data = JSON.parse(res);

			var success = data.success;
			if(success==false){
				var phone = data.message.phone;
				var email = data.message.email;

				if(phone != null){
					var message = phone;
				}else if(email != null){
					var message = email;
				}else{
					var message = 'Something went wrong!';
				}

				jQuery('#insta_mojo_error').show();
				jQuery('#instamojo-error-text').html(message);

			}else{
				jQuery('#insta_mojo_error').hide();
				jQuery('#instamojoModel').modal('hide');
				jQuery('#update_cart_form').prepend('<input type="hidden" name="nonce" value='+JSON.stringify(data)+'>');
				jQuery("#update_cart_form").submit();
			}

		},
	});

});

function getZones() {
		jQuery(function ($) {
			jQuery('#loader').show();
			var country_id = jQuery('#entry_country_id').val();
			jQuery.ajax({
				beforeSend: function (xhr) { // Add this line
								xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				 },
				url: 'http://fiisha.com/ajaxZones',
				type: "POST",
				//data: '&country_id='+country_id,
				 data: {'country_id': country_id,"_token": "N9mzO8bskEvxxVCcXxJoFmk4WeFYMw9Be7GN5Jv1"},

				success: function (res) {
					var i;
					var showData = [];
					for (i = 0; i < res.length; ++i) {
						var j = i + 1;
						showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>";
					}
					showData.push("<option value='-1'>أخرى</option>");
					jQuery("#entry_zone_id").html(showData);
					jQuery('#loader').hide();
				},
			});
		});
};

function getBillingZones() {
	jQuery('#loader').show();
	var country_id = jQuery('#billing_countries_id').val();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/ajaxZones',
		type: "POST",
		 data: {'country_id': country_id},

		success: function (res) {
			var i;
			var showData = [];
			for (i = 0; i < res.length; ++i) {
				var j = i + 1;
				showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>";
			}
			showData.push("<option value='Other'>أخرى</option>");
			jQuery("#billing_zone_id").html(showData);
			jQuery('#loader').hide();
		},
	});

};

//change password
jQuery(document).on('submit', '#updateMyPassword', function(e){
  //passowrd-error
  var confirm_password = jQuery("#confirm_password").val();
  var new_password = jQuery('#new_password').val();
  var current_password = jQuery('#current_password').val();
  jQuery('#passowrd-error').attr('hidden', true);
      
  if(confirm_password !='' && new_password != '' && current_password !=''){
    if(new_password.length < 6){
      message = "الرجاء إدخال 6 أحرف على الأقل.";
      jQuery('#passowrd-error').text(message);
      jQuery('#passowrd-error').removeAttr('hidden');
      return false;
    }

    if(confirm_password == new_password){
      return true;
    }else{
      message = "كلمة المرور الجديدة وتأكيدها غير متطابقة.";
      jQuery('#passowrd-error').text(message);
      jQuery('#passowrd-error').removeAttr('hidden');
      return false;
    }
    
  }else{
    message = "يرجى ملء جميع حقول الإدخال.";
    jQuery('#passowrd-error').text(message);
    jQuery('#passowrd-error').removeAttr('hidden');
    return false;
  }

});
</script>


<script type="application/javascript">

//header categories
jQuery('.categories-list').on('click', function(e){     
    var category = jQuery(this).attr('value');
    var slug = jQuery(this).attr('slug');
    jQuery('.header-selection').text(category);
    jQuery('.category-value').val(slug);
    jQuery('.dropdown-menu-right').removeClass('show');

});

categoriesLoad();

function categoriesLoad(){  
  var category = jQuery('.selected').attr('value');     
  var slug = jQuery('.selected').attr('slug');
  if ( category !== undefined) {    
      jQuery('.header-selection').text(category);
      jQuery('.category-value').val(slug);
      jQuery('.dropdown-menu-right').removeClass('show');
  }
    
}



jQuery( document ).ready( function () {
	jQuery('#loader').hide();
	 OneSignal.push(function () {
	  OneSignal.registerForPushNotifications();
	  OneSignal.on('subscriptionChange', function (isSubscribed) {
	   if (isSubscribed) {
		OneSignal.getUserId(function (userId) {
		 device_id = userId;
		 //ajax request
		 jQuery.ajax({
			 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			url: 'http://fiisha.com/subscribeNotification',
			type: "POST",
			data: '&device_id='+device_id,
			success: function (res) {},
		});

		 //$scope.oneSignalCookie();
		});
	   }
	  });

	 });

	//load google map


//$.noConflict();
	//stripe_ajax
jQuery(document).on('click', '#stripe_ajax', function(e){
	jQuery('#loader').show();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/stripeForm',
		type: "POST",
		success: function (res) {
			if(res.trim() == "already added"){
			}else{
				jQuery('.head-cart-content').html(res);
				jQuery(parent).removeClass('cart');
				jQuery(parent).addClass('active');
			}
			message = " المنتج مضاف!";
			notification(message);
			jQuery('#loader').hide();
		},
	});
});

jQuery(document).on('click', '.modal_show', function(e){
	var parent = jQuery(this);
	var products_id = jQuery(this).attr('products_id');
	var message ;
  jQuery(function ($) {
	jQuery.ajax({
	url: 'http://fiisha.com/modal_show',
    headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},

		type: "POST",
		data: '&products_id='+products_id,
		success: function (res) {
			jQuery("#products-detail").html(res);
			jQuery('#myModal').modal('show');

		},
	});
 });
});

	//commeents
jQuery(document).on('focusout','#order_comments', function(e){
	jQuery('#loader').show();
	var comments = jQuery('#order_comments').val();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/commentsOrder',
		type: "POST",
		data: '&comments='+comments,
		async: false,
		success: function (res) {
			jQuery('#loader').hide();
		},
	});
});
		//hyperpayresponse
var resposne = jQuery('#hyperpayresponse').val();
console.log(resposne);
if(typeof resposne  !== "undefined"){
	if(resposne.trim() =='success'){
		jQuery('#loader').show();
		jQuery("#update_cart_form").submit();
	}else if(resposne.trim() =='error'){
		jQuery.ajax({
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			url: 'http://fiisha.com/checkout/payment/changeresponsestatus',
			type: "POST",
			async: false,
			success: function (res) {
			},
		});
		jQuery('#paymentError').css('display','block');
	}
}

	//shipping_mehtods_form
jQuery(document).on('submit', '#shipping_mehtods_form', function(e){
	jQuery('.error_shipping').hide();
	var checked = jQuery(".shipping_data:checked").length > 0;
	if (!checked){
		jQuery('.error_shipping').show();
		return false;
	}
});

	//shipping_data




	//billling method
jQuery(document).on('click', '#same_billing_address', function(e){
		if(jQuery(this).prop('checked') == true){
			jQuery("#billing_firstname").val(jQuery("#firstname").val());
			jQuery("#billing_lastname").val(jQuery("#lastname").val());
			jQuery("#billing_company").val(jQuery("#company").val());
			jQuery("#billing_street").val(jQuery("#street").val());
			jQuery("#billing_city").val(jQuery("#city").val());
			jQuery("#billing_zip").val(jQuery("#postcode").val());
			jQuery("#billing_countries_id").val(jQuery("#entry_country_id").val());
			jQuery("#billing_zone_id").val(jQuery("#entry_zone_id").val());

			jQuery(".same_address").attr('readonly','readonly');
			jQuery(".same_address_select").attr('disabled','disabled');
		}else{
			jQuery(".same_address").removeAttr('readonly');
			jQuery(".same_address_select").removeAttr('disabled');
		}
});


//wishlit
jQuery(document).on('click', '.is_liked', function(e){

var products_id = jQuery(this).attr('products_id');
var selector = jQuery(this);
var user_count = jQuery('#wishlist-count').html();
jQuery.ajax({
beforeSend: function (xhr) { // Add this line
    xhr.setRequestHeader('X-CSRF-Token', jQuery('[name="_csrfToken"]').val());
},
  url: 'http://fiisha.com/likeMyProduct',
  type: "POST",
  data: {"products_id":products_id,"_token": "N9mzO8bskEvxxVCcXxJoFmk4WeFYMw9Be7GN5Jv1"},

  success: function (res) {
    var obj = JSON.parse(res);
    var message = obj.message;

    if(obj.success==0){
    }else if(obj.success==2){
      jQuery(selector).children('span').html(obj.total_likes);
      jQuery('.total_wishlist').html(obj.total_wishlist);
      
    }else if(obj.success==1){
      jQuery(selector).children('span').html(obj.total_likes);
      jQuery('.total_wishlist').html(obj.total_wishlist);
    }
    
    notificationWishlist(message);


  },
});

});

//sortby
jQuery(document).on('change', '.sortby', function(e){
	jQuery('#loader').show();
	jQuery("#load_products_form").submit();
});

function validd() {
	var max = parseInt(document.detailform.quantity.max);
	var value = parseInt(document.detailform.quantity.value);

  if (value > max || value < 1) {

    jQuery('#alert-exceed').show();
     setTimeout(function() {
       jQuery('#alert-exceed').hide();
     }, 6000);
     document.detailform.quantity.focus();
     return false;
   }else{
		 var formData = jQuery("#add-Product-form").serialize();
	 	var url = jQuery('#checkout_url').val();
	 	var message;
	 	jQuery.ajax({
	 		url: 'http://fiisha.com/addToCart',
	 		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},

	 		type: "POST",
	 		data: formData,

	 		success: function (res) {
	 			if(res.trim() == "already added"){
	 				//notification
	 				message = 'Product is added!';
	 			}else{
	 				jQuery('.head-cart-content').html(res);
	 				message = 'Product is added!';
	 				jQuery(parent).addClass('active');
	 			}
	 				if(url.trim()=='true'){
	 					window.location.href = 'http://fiisha.com/checkout';
	 				}else{
	 					if(res == 'exceed'){
							swal("Something Happened To Stock", "Ops! Product is available in stock But Not Active For Sale. Please contact to the admin", "error");
	 					}
	 					else {
							swal("Congrates!", "Product Added Successfully Thanks.Continue Shopping", "success");

	 					}
	 				}
	 		},
	 	});
	 }
}

jQuery(document).on('click', '.add-to-Cart-from-detail', function(e){
	e.preventDefault();
			if(!validd()){ return false;}

});
//update-single-Cart with
jQuery(document).on('click', '.update-single-Cart', function(e){
	jQuery('#loader').show();
	var formData = jQuery("#add-Product-form").serialize();
	var url = jQuery('#checkout_url').val();
	var message;
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/updatesinglecart',
		type: "POST",
		data: formData,

		success: function (res) {
			if(res.trim() == "already added"){
				//notification
				message = 'Product is added!';
			}else{
				jQuery('.head-cart-content').html(res);
				message = 'Product is added!';
				jQuery(parent).addClass('active');
			}
				if(url.trim()=='true'){
					window.location.href = 'http://fiisha.com/checkout';
				}else{
					jQuery('#loader').css('display','none');
					//window.location.href = 'http://fiisha.com/viewcart';
					//message = " المنتج مضاف!";
					//notification(message);
				}
				jQuery('#loader').hide();
		},
	});
});

	
	// This button will increment the value




function cart_item_price(){

		var subtotal = 0;
		jQuery(".cart_item_price").each(function() {
			subtotal= parseFloat(subtotal) + parseFloat(jQuery(this).val()) * 1.00000000;
		});
		jQuery('#subtotal').html('LE'+subtotal+'');

		var discount = 0;
		jQuery(".discount_price_hidden").each(function() {
			discount =  parseFloat(discount) - parseFloat(jQuery(this).val());
		});

		jQuery('.discount_price').val(Math.abs(discount));

		jQuery('#discount').html('LE'+Math.abs(discount) * 1.00000000+'');

		//total value
		var total_price = parseFloat(subtotal) - parseFloat(discount) * 1.00000000;
		jQuery('#total_price').html('LE'+total_price+'');
};
	//default_address
jQuery(document).on('click', '.default_address', function(e){
		var address_id = jQuery(this).attr('address_id');
		jQuery.ajax({
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			url: 'http://fiisha.com/myDefaultAddress',
			type: "POST",
			data: '&address_id='+address_id,

			success: function (res) {
				 window.location = 'shipping-address?action=default';
			},

		});

});
	//deleteMyAddress
jQuery('.slide-toggle').on('click', function(event){
 jQuery('.color-panel').toggleClass('active');
});

// jQuery( function() {
// 	  var maximum_price = jQuery( ".maximum_price" ).val();
// 	  jQuery( "#slider-range" ).slider({
// 		range: true,
// 		min: 0,
// 		max: maximum_price,
// 		values: [ 0, maximum_price ],
// 		slide: function( event, ui ) {
// 			jQuery('#min_price').val(ui.values[ 0 ] );
// 			jQuery('#max_price').val(ui.values[ 1 ] );

// 			jQuery('#min_price_show').val( ui.values[ 0 ] );
// 			jQuery('#max_price_show').val( ui.values[ 1 ] );
// 		},
// 		create: function(event, ui){
// 			jQuery(this).slider('value',20);
// 		}
// 	   });
// 	   jQuery( "#min_price_show" ).val( jQuery( "#slider-range" ).slider( "values", 0 ) );
// 	   jQuery( "#max_price_show" ).val(jQuery( "#slider-range" ).slider( "values", 1 ) );
// 	   //jQuery( "#slider-range" ).slider( "option", "max", 50 );
// });
//tooltip enable
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
});

function initialize(location){

					var address = '';
		
		var map = new google.maps.Map(document.getElementById('googleMap'), {
			mapTypeId: google.maps.MapTypeId.TERRAIN,
			zoom: 13
		});
		var geocoder = new google.maps.Geocoder();
		geocoder.geocode({
			'address': address
		},
		function(results, status) {
			if(status == google.maps.GeocoderStatus.OK) {
			 new google.maps.Marker({
				position: results[0].geometry.location,
				map: map
			 });
			 map.setCenter(results[0].geometry.location);
			}
		});
	   }
	//default product cart

});


//ready doument end
jQuery('.dropdown-menu').on('click', function(event){
	// The event won't be propagated up to the document NODE and
	// therefore delegated events won't be fired
			event.stopPropagation();
		});

	function delete_cart_product(cart_id){
		jQuery('#loader').show();
		var id = cart_id;
		jQuery.ajax({
			headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
			url: 'http://fiisha.com/deleteCart',
			type: "GET",
			data: '&id='+id+'&type=header cart',
			success: function (res) {
				// window.location.reload(true);
			},
		});
		jQuery('#loader').hide();
};



function passwordMatch(){

	var password = jQuery('#password').val();
	var re_password = jQuery('#re_password').val();

	if(password == re_password){
		return 'matched';
	}else{
		return 'error';
	}
}




'use strict';
function showPreview(objFileInput) {
	if (objFileInput.files[0]) {
		var fileReader = new FileReader();
		fileReader.onload = function (e) {
			jQuery("#uploaded_image").html('<img src="'+e.target.result+'" width="150px" height="150px" class="upload-preview" />');
			jQuery("#uploaded_image").css('opacity','1.0');
			jQuery(".upload-choose-icon").css('opacity','0.8');
		}
		fileReader.readAsDataURL(objFileInput.files[0]);
	}
}

jQuery(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = jQuery(".floating-top");

  jQuery(window).scroll(function() {
    // declare variable
    var topPos = jQuery(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 150) {
      jQuery(scrollTop).css("opacity", "1");

    } else {
      jQuery(scrollTop).css("opacity", "0");
    }
});
  //Click event to scroll to top
jQuery(scrollTop).click(function() {
    jQuery('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  });
});

jQuery('body').on('mouseenter mouseleave','.dropdown.open',function(e){
  var _d=jQuery(e.target).closest('.dropdown');
  _d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');

  },300);
  jQuery('.dropdown-menu', _d).attr('aria-expanded',_d.is(':hover'));
});

jQuery('.nav-index').on('show.bs.tab', function (e) {
	  e.target // newly activated tab
	  e.relatedTarget // previous active tab
	  jQuery('.overlay').show();
})

jQuery('.nav-index').on('hidden.bs.tab', function (e) {
	  e.target // newly activated tab
	  e.relatedTarget // previous active tab
	  jQuery('.overlay').hide();
})

function cancelOrder() {
	if (confirm("هل أنت متأكد من أنك تريد إلغاء هذا الطلب؟")) {
		return true;
	} else {
		return false;
	}
}

function returnOrder() {
	if (confirm("هل أنت متأكد من أنك تريد إرجاع هذا الطلب؟")) {
		return true;
	} else {
		return false;
	}
}



	
function cartPrice(){
	var i = 0;
	jQuery(".currentstock").each(function() {
		var value_price = jQuery('option:selected', this).attr('value_price');
		var attributes_value = jQuery('option:selected', this).attr('attributes_value');
		var prefix = jQuery('option:selected', this).attr('prefix');
		jQuery('#attributeid_' + i).val(value_price);
		jQuery('#attribute_sign_' + i++).val(prefix);

	});
}

//ajax call for add option value
function getQuantity(){
	var attributeid = [];
	var i = 0;
	
	jQuery('.stock-cart').attr('hidden', true);

	jQuery(".currentstock").each(function() {
		var value_price = jQuery('option:selected', this).attr('value_price');
		var attributes_value = jQuery('option:selected', this).attr('attributes_value');
		jQuery('#function_' + i).val(value_price);
		jQuery('#attributeids_' + i++).val(attributes_value);
	});

	var formData = jQuery('#add-Product-form').serialize();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'http://fiisha.com/getquantity',
		type: "POST",
		data: formData,
		dataType: "json",
		success: function (res) {
			var products_price = jQuery('#products_price').val();

			jQuery('#current_stocks').html(res.remainingStock);
			var min_level = 0;
			var max_level = 0;
			var inventory_ref_id = res.inventory_ref_id;
			

			if(res.minMaxLevel != '' && res.minMaxLevel > 0){
				min_level = res.minMax[0].min_level;
				max_level = res.minMax[0].max_level;
			}
			if(min_level != 0){
				jQuery('.qty').attr('value',min_level);
				jQuery('.qty').attr('min',min_level);
			}else{
				min_level = 1;
				jQuery('.qty').attr('value',min_level);
				jQuery('.qty').attr('min',min_level);

			}
			var final_pri = products_price * min_level;
			if(res.remainingStock>0){
				//jQuery('.total_price').html('LE'+final_pri.toFixed(2)+'');
				jQuery('#min_max_setting').html("<b>الحد الأدنى للطلب:</b> &nbsp;" + min_level);
				jQuery('.stock-cart').removeAttr('hidden');
				jQuery('.stock-out-cart').attr('hidden',true);
				var max_order = jQuery('#max_order').val();

				if(max_order.trim()!=0){
					if(max_order.trim()>=res.remainingStock){
						jQuery('.qty').attr('max',res.remainingStock);
					}else{
						jQuery('.qty').attr('max',max_order);
					}
				}else{
					jQuery('.qty').attr('max',res.remainingStock);
				}

        jQuery('.variable-stock').text("في المخزن");
			}else{
				jQuery('#min_max_setting').html("");
				jQuery('.stock-out-cart').removeAttr('hidden');
				jQuery('.stock-cart').attr('hidden',true);
				jQuery('.qty').attr('max',0);
				// jQuery('.qty').attr('value',0);
				//jQuery('.total_price').html('LE'+0+'');
				document.getElementById("myCheck").click();
        jQuery('.variable-stock').text("غير متوفر");
        
			}

		},
	});
}







</script>


    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'sg2plcpnl0033'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
