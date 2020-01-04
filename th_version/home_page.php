<?php
error_reporting(0);
?>
<html lang="en-US">
<head>
  <title> บริการเวลาละหมาดจาก ไวท์แชนแนล </title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0"> 
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="green"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="shortcut icon" href="../icon/logo-white.ico"/>
    <link rel="apple-touch-icon" href="../icon/logo-white.png"/>
    <meta property="al:ios:url" content=""/>
    <meta property="al:ios:app_store_id" content=""/>
    <meta property="al:ios:app_name" content=""/>
    <meta property="al:android:url" content=""/>
    <meta property="al:android:package" content=""/>
    <meta property="al:android:app_name" content=""/>  
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../css/home_page.css">
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
<body>
  <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar  w3-light-green  w3-card w3-left-align w3-large">


  <a href="../en_version/home_page.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/united-kingdom.png' width="25"><span class="text"> English</span></a>
  <a href="../ar_version/home_page.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/saudi-arabia.png' width="25"><span class="text">  العربية </span></a>
  <a href="../th_version/home_page.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/thailand.png' width="25"><span class="text"> ไทย</span></a>  
  
    <a href="home_page.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img src='../icon/logo-white.png' width="29"></a>
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"><img src="../icon/time.png" width="25"><span class="text"> เวลาละหมาด รายวัน</span></a>
  <a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"> <img src="../icon/calendar.png" width="25"><span class="text"> เวลาละหมาด รายเดือน</span></a>

  </div>

 <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large"> <img src="images/time.png" width="25"> เวลาละหมาด รายวัน </a>
    <a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large"><img src="images/calendar.png" width="25"> เวลาละหมาด รายเดือน </a>
  </div>
</div>
<!-- Header -->
<header class="w3-container w3-center" style="padding:50px 16px">
  <h2 class="w3-margin w3-jumbo">เกี่ยวกับเวลาละหมาด</h2>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1> เวลาละหมาด</h1>
      <!-- <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5> -->

      <p class="w3-text-grey">ปฏิทินอิสลามอินไทยแลนด์ใช้สูตรการคำนวณเวลาซุบฮิและอิชาอฺคือ 17 องศา ซึ่งอยู่ปานกลางระหว่างสูตรของ ISNA แห่งสหรัฐอเมริกา(15) และอุมมุลกุรอกับสถาบันการคำนวณแห่งประเทศอียิปต์(ฮัยอะตุลมิซาฮะฮฺ )(20,19.5),
         สำหรับเวลามัฆริบได้คำนวณตามตำแหน่งที่ตั้งสำนักงานอิสลามอินไทยแลนด์ คือที่บางกอกน้อย (ตำแหน่ง latitude=13.7500 องศา N, longitude=100.4833 องศา E) โดยเผื่อเวลาให้แก่กรุงเทพมหานครและปริมณฑลประมาณ 1 นาที,
         สำหรับเวลาอัสริได้คำนวณตามมัซหับชาฟิอียฺ, และเวลาซุฮรฺได้คำนวณหลังเวลาซะวาล(เวลาตะวันคล้อยจากตำแหน่งตรงศีรษะ)ประมาณ 5 นาที</p>

         <p class="w3-text-grey">จึงขอให้พี่น้องที่ใช้ปฏิทินนี้ ได้โปรดเข้าใจข้อแตกต่างกับปฏิทินอื่น อันเกี่ยวกับสามปัจจัยสำคัญคือ 1-ตำแหน่งผู้คำนวณ 2-สูตรการคำนวณ 3-เวลาเผื่อ  ทั้งนี้ปฏิทินที่ใช้ในประเทศไทยมีข้อมูลที่ใช้ได้พอสมควร ยกเว้นเวลาซุบฮิ ที่ใช้สูตรคำนวณ 20 องศา ซึ่งมากกว่ามาตรฐานที่มีการตรวจสอบจากหลายสถาบัน</p>

         <p class="w3-text-grey">พี่น้องต่างจังหวัดที่ต้องการปฏิทินเวลาละหมาดตามการคำนวณของอิสลามอินไทยแลนด์ กรุณาส่งข้อมูลตำแหน่งที่ตั้งมาที่เรา (ติดต่อเรา) เพื่อคำนวณเวลาละหมาดให้ท่านต่อไป อินชาอัลลอฮฺ.</p>

      <p class="w3-text-grey">ข้อมูลเพิ่มเติมในเรื่องนี้ : <a href="http://www.ahlalhdeeth.com/vb/showthread.php?t=148076" target="blank">الفجر الصادق والفجر الكاذب، الشيخ  رضا أحمد صمدي</a></p>

<p class="w3-text-grey"><a href="http://www.icoproject.org/accut.html?&l=en" target="blank">ดาวน์โหลดโปรแกรม Accurate Times สำหรับติดตั้งบน PC</a> : การตั้งค่า Location – กำหนดที่ตั้ง, Preference – ตั้งค่าสำหรับการคำนวณเวลาละหมาด ตั้งค่าต่างๆ ตาม [ภาพ A – Custom, 17,17, Add 5 minutes to Dhohur, Add 1 Minutes to Maghreb], Prayer Alerts – กำหนดการเตือนเวลาละหมาด</p>
    </div>

    <div class="w3-third w3-center">
      <br>
      <br>
      <i class="w3-padding-64 w3-text-red"> <img src='../icon/calendar_time.png' width="150px"></i>
    </div>
  </div>
</div>
<br>

<!-- Second Grid -->
<!-- <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="w3-padding-64 w3-text-red w3-margin-right"><img src='https://image.flaticon.com/icons/svg/149/149313.svg' width="200px"></i>
    </div> -->

   <!--  <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5> -->
<!-- 
      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p> -->
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">ได้มีรายงานยืนยันแน่นอนว่า นบี   صلى الله عليه وسلم  อ่านดังในสองเราะกะอัตละหมาดซุบฮี และ สองเราะกะอัตแรกจากละหมาดมัฆริบและละหมาดอีชา ดังนั้น การอ่านดังในดังกล่าวนั้น เป็นสุนนะฮ และได้ถูกบัญญัติให้เป็นหน้าที่แก่อุมมะฮของท่านจะต้องปฏิบัติตามท่าน
       <p> <a href="http://www.moradokislam.org/modules.php?name=Forums&file=viewtopic&t=2043" target="blank">صلى الله عليه وسلم - { صلوا كما رأيتموني أصلي } رواه البخاري</p></a>
    </h1>
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

