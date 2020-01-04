<?php
error_reporting(0);

if (isset($_GET["latitude"])) {$latitude = $_GET["latitude"];} /*  For latitude*/
else{ $latitude = "13.736717";  }


if (isset($_GET['longitude']))    /*for longitude*/
  { $longitude = $_GET['longitude'];  }

else{ $longitude = "100.523186";      }

if (isset($_GET['Country']))    /*for longitude*/
  { $Country = $_GET['Country'];  }

else{ $Country = "بانكوك";  }

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
<link rel="stylesheet" type="text/css" href="../css/daily_css.css">
<link rel="stylesheet" type="text/css" href="../css/daily_style.css">

<style type="text/css">
  .Fajr{  
    background: url(../icon/Fajr.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }
  .Sunrise{  
    background: url(../icon/Sunrise.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }
  .Dhuhr{  
    background: url(../icon/Dhuhr.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }

  .Asr{  
    background: url(../icon/Asr.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }

  .Sunset{  
    background: url(../icon/Sunset.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }

  .Maghrib{  
    background: url(../icon/Maghrib.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }

  .Isha{  
    background: url(../icon/Isha.png);
  background-repeat: no-repeat;
  background-size: 30px 30px;
  background-position: 5;
  }



.Fajr {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Fajr::after {
  content: "الفجر";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}


.Sunrise {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Sunrise::after {
  content: "الشروق";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}

.Dhuhr {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Dhuhr::after {
  content: "الظهر";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}

.Asr {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Asr::after {
  content: "العصر";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}
.Sunset {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Sunset::after {
  content: "الغروب";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}

.Maghrib {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Maghrib::after {
  content: "المغرب";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}

.Isha {
  text-indent: -9999px;
  line-height: 0; /* Collapse the original line */
}

.Isha::after {
  content: "العشاء";
  text-indent: 0;
  display: block;
  line-height: initial; /* New content takes up original line height */
}
tr:nth-child(6){display: none;}
#MyPrayTime{ max-width: 300px; }


.w3-hover-white{color: white;}


@font-face {
  font-family: WhiteFont;
  src: url(../WhiteTHIN.ttf);
}  
*{font-family: WhiteFont;}
.f-white{font-family: WhiteFont!important;}

select#Country {
   color: #FFFDEE;
   background-color: #748825!important;
   padding: 1px 0px 10px !important;
   text-align: center;
   text-align-last: center;
   font-size: 20px;
}
#Country>option{background-color: #a1b736;}

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
</head>

<body dir="rtl">

  <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-green w3-card w3-left-align w3-large">

  <a href="../en_version/daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/united-kingdom.png' width="25"><span class="text"> English</span></a>
  <a href="../ar_version/daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/saudi-arabia.png' width="25"><span class="text">  العربية </span></a>
  <a href="../th_version/daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/thailand.png' width="25"><span class="text"> ไทย</span></a> 
  
    <a href="home_page.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img src='../icon/logo-white.png' width="29"></a>
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"><img src="../icon/time.png" width="25"><span class="text"> أوقات الصلاة اليومية </span></a>
  <a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"> <img src="../icon/calendar.png" width="25"><span class="text"> أوقات الصلاة الشهرية </span></a>

  </div>

 <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large"> <img src="images/time.png" width="25"> أوقات الصلاة اليومية </a>
    <a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large"> <img src="images/calendar.png" width="25"> اوقات الصلاة الشهرية  </a>
  </div>
</div>
<br>
<br>
<br>
<h2 class="f-white w3-jumbo-50"> أختر مقاطعة الولاية الخاصة بك: </h2>
<br>
 <center>
  <select id="Country" onchange="CountryGET()">
    <option>---</option>
    <?php
      require 'province.php';
      _province_Option($province);
    ?>
  </select>



    <div id="MyPrayTime">
    <br>
    <div align="center" id="table"></div>
    <script type="text/javascript" src="../js/PrayTime2.js"></script>
    <script type="text/javascript">
      
      var date = new Date(); // today
      var times = prayTime.getPrayerTimes(date, <?php echo $latitude; ?>, <?php echo $longitude; ?>, +7);

      var str = '<table id="timetable">';
      str += '<tr><th colspan="2">'+ date.toLocaleDateString()+ '</th></tr>';
      for(var i = 0; i < times.length; i++)
      {
        str += '<tr><td class='+prayTime.timeNames[i]+'>'+ prayTime.timeNames[i] + '</td>';
        str += '<td>'+ times[i]+ '</td></tr>';

      }

      str += '</table>';
      document.getElementById('table').innerHTML = str;

    </script>
    <br>
  </div> 
</center>



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

<script type="text/javascript">

function CountryGET(){
   var x = document.getElementById("Country").value;
   location.href = "daily_prayer_time.php?"+x;
}
  
function setSelectedIndex(s, v) {
    for ( var i = 0; i < s.options.length; i++ ) {

        if ( s.options[i].text == v ) {

            s.options[i].selected = true;

            return;

        }

    }

}
setSelectedIndex(document.getElementById('Country'),"<?php echo $Country;?>");

</script>
</body>
</html>

