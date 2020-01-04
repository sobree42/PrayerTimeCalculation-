<?php
error_reporting(0);
?>
<html lang="ar">
<head>
<title> خدمة مواقيت الصلاة </title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0"> 
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="green"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="shortcut icon" href="icon/logo-white.ico"/>
    <link rel="apple-touch-icon" href="icon/logo-white.png"/>
    <meta property="al:ios:url" content=""/>
    <meta property="al:ios:app_store_id" content=""/>
    <meta property="al:ios:app_name" content=""/>
    <meta property="al:android:url" content=""/>
    <meta property="al:android:package" content=""/>
    <meta property="al:android:app_name" content=""/>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../css/home_page.css">
<!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
@font-face {
  font-family: WhiteFont;
  src: url(../WhiteTHIN.ttf);
}  
*{font-family: WhiteFont;}
.f-white{font-family: WhiteFont!important;}
  
  body,h1,h2,h3,h4,h5,h6 {font-family: "WhiteFont", sans-serif}
.w3-bar,h1,button {font-family: "WhiteFont", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.w3-hover-white{color: white;}

@media only screen and (max-width: 900px) {
  .text{display: none;}  
  .menu{padding-bottom:16px!important;}
}

@media only screen and (max-width: 600px) {
  #timetable>tbody>tr>td{max-width:60px!important; font-size: 10px!important; color: black;}
  .w3-padding-large{padding:8px!important;}
  .menu{padding:10px 3px 10px 3px!important;}
}

  </style>
<body dir="rtl">
  <!-- Navbar -->
<div class="w3-top" >
  <div class="w3-bar  w3-light-green  w3-card w3-left-align w3-large">

  <a href="../en_version/home_page.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/united-kingdom.png' width="25"><span class="text"> English</span></a>
  <a href="../ar_version/home_page.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/saudi-arabia.png' width="25"><span class="text">  العربية </span></a>
  <a href="../th_version/home_page.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/thailand.png' width="25"><span class="text"> ไทย</span></a> 
  
    <a href="home_page.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img src='../icon/logo-white.png' width="29"></a>
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"><img src="../icon/time.png" width="25"><span class="text"> أوقات الصلاة اليومية </span></a>
  <a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"> <img src="../icon/calendar.png" width="25"><span class="text"> أوقات الصلاة الشهرية </span></a>


</div>


 <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large"> <img src="images/time.png" width="25"> أوقات الصلاة اليومية </a>
    <a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large"><img src="images/calendar.png" width="25"> اوقات الصلاة الشهرية </a>
  </div>
</div>
<div>
<!-- Header -->
<header class="w3-container w3-center" style="padding:50px 16px">
  <h1 class="f-white w3-jumbo-50"> عن أوقات الصلاة </h1>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-45 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 style="float: right"> وقت الصلاة </h1>
      <h5 class="w3-padding-25" style="float: right"> يستخدم التقويم الإسلامي في تايلاند معادلة حساب وقت صبحي و العشاء ، وهي 17 درجة ، وهي معتدلة بين صيغ ISNA الأمريكية (15)
       وأم القرآن مع المعهد المصري للحوسبة ( هوي أول ميساهو) (20،19.5) ، بالنسبة لعصر مرابعي ، يتم حسابها وفقًا لموقع المكتب الإسلامي في تايلاند ،
       هو بانكوك نوي (خط عرض الموضع = 13.7500 درجة شمالا ، خط الطول = 100.4833 درجة شرقا) عن طريق إتاحة الوقت لبانكوك ضواحيها لمدة دقيقة 
      واحدة تقريبًا ، وللحساب الذي تم احتسابه على عصري وفقًا لوقت مذهب شافعي و
       ظهري المحسوب بعد وقت زوال (وقت شروق الشمس من موضع الرأس) لمدة 5 دقائق تقريبًا </h5>

      <h5 class="w3-padding-30" style="float: right"> لذلك اسأل الأخوة الذين يستخدمون هذا التقويم ، يرجى فهم الاختلافات مع التقويمات الأخرى. حول ثلاثة عوامل مهمة
       1 - موقف الحاسبة    2 - صيغة الحساب ، بدل 3 مرات. يحتوي التقويم المستخدم في تايلاند على معلومات كافية.
 ما عدا عند ضرب الذي يستخدم صيغة لحساب 20 درجة ، وهو أكثر من المعيار الذي تم فحصه من قبل العديد من المؤسسات </h5>
 <p style="float: right"> الإخوة والأخوات في المحافظات الذين يريدون تقويم وقت الصلاة وفقًا للحسابات الإسلامية في تايلاند. يرجى إرسال معلومات الموقع إلينا (اتصل بنا) لحساب وقت صلاتك. إن شاء الله </p>
 <p style="float: right"> مزيد من المعلومات حول هذا الموضوع :  <a href="http://www.ahlalhdeeth.com/vb/showthread.php?t=148076" target="blank">لفجر الصادق والفجر الكاذب، الشيخ  رضا أحمد صمدي  </a></p>

</div>

    <div class="w3-third w3-center">
      <br>
      <br>
      <i class="w3-padding-64 w3-text-red"> <img src='../icon/calendar_time.png' width="150px"></i>
    </div>
  </div>
</div>
<!-- Second Grid -->
<!-- <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div> -->
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">
 كيفية صلاة النبي صلى الله عليه وسلم : ما من عبادة إلا ولها صفة وكيفية، قد تكفل الله سبحانه ببيانها، أو بينها رسوله - صلى الله عليه وسلم -، وفي هذه الرسالة بيان لصفة صلاة النبي - صلى الله عليه وسلم - قال مصنفها في مقدمته « فهذه كلمات موجزة في بيان صفة صلاة النبي - صلى الله عليه وسلم - أردت تقديمها إلى كل مسلم ومسلمة ليجتهد كل من يطلع عليها في التأسي به - صلى الله عليه وسلم - في ذلك لقوله - صلى الله عليه وسلم - { صلوا كما رأيتموني أصلي } رواه البخاري »</h1>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
</html>

