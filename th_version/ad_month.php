<?php

if (isset($_GET["latitude"])) {$latitude = $_GET["latitude"];} /*  For latitude*/
else{	$latitude = "13.736717";	}


if (isset($_GET['longitude']))    /*for longitude*/
	{	$longitude = $_GET['longitude'];	}

else{	$longitude = "100.523186";			}

if (isset($_GET['Country']))    /*for longitude*/
	{	$Country = $_GET['Country'];	}

else{	$Country = "กรุงเทพมหานคร";	}

?>

<html>
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

<link rel="stylesheet" type="text/css" href="../css/daily_css.css">
<link rel="stylesheet" type="text/css" href="../css/daily_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<style type="text/css">   /*Change language on Month*/

#timetable>tbody>tr:nth-child(1)>td:nth-child(1){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(1)::after{
  content: "วันที่";
  text-indent: 0;
  display: block;
  line-height: initial;
}
#timetable>tbody>tr:nth-child(1)>td:nth-child(2){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(2)::after{
  content: "ศุบฮิ";
  text-indent: 0;
  display: block;
  line-height: initial;
}
#timetable>tbody>tr:nth-child(1)>td:nth-child(3){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(3)::after{
  content: "ชูรุก";
  text-indent: 0;
  display: block;
  line-height: initial;
}

#timetable>tbody>tr:nth-child(1)>td:nth-child(4){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(4)::after{
  content: "ซุฮฺริ";
  text-indent: 0;
  display: block;
  line-height: initial;
}

#timetable>tbody>tr:nth-child(1)>td:nth-child(5){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(5)::after{
  content: "อัศริ";
  text-indent: 0;
  display: block;
  line-height: initial;
}

#timetable>tbody>tr:nth-child(1)>td:nth-child(6){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(6)::after{
  content: "ฆูรูบบฺ";
  text-indent: 0;
  display: block;
  line-height: initial;
}

#timetable>tbody>tr:nth-child(1)>td:nth-child(7){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(7)::after{
  content: "มัฆริบ";
  text-indent: 0;
  display: block;
  line-height: initial;
}

#timetable>tbody>tr:nth-child(1)>td:nth-child(8){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(8)::after{
  content: "อิชาอฺ";
  text-indent: 0;
  display: block;
  line-height: initial;
}

#timetable>tbody>tr:nth-child(1)>td:nth-child(9){	text-indent: -9999px;	line-height: 0;}
#timetable>tbody>tr:nth-child(1)>td:nth-child(9)::after{
  content: "วันที่อาหรับ";
  text-indent: 0;
  display: block;
  line-height: initial;
}

td:nth-child(6){display: none;}

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


@media print
{
	.w3-top,br,h2,.arrow,.TimeFormat01{display: none;}
	td{font-size: 12px;}
	#timetable td{    padding: 4px;}

	select#Country {
		-webkit-appearance: none;
	   color: black;
	   background-color: white!important;
	   padding: 1px 0px 5px !important;
	   text-align: center;
	   text-align-last: center;
	   font-size: 30px;
	   border:0px;
	   outline:0px;   
	}	
	select::-ms-expand {
	    display: none;
	}	

}

  </style>

<body>
<br>
<br>
  <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-green w3-card w3-left-align w3-large">

	<a href="../en_version/ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/united-kingdom.png' width="25"><span class="text"> English</span></a>
	<a href="../ar_version/ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/saudi-arabia.png' width="25"><span class="text">  العربية </span></a>
	<a href="../th_version/ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu" style="float: right;"> <img src='../icon/thailand.png' width="25"><span class="text"> ไทย</span></a>	
  
    <a href="home_page.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img src='../icon/logo-white.png' width="29"></a>
    <a href="daily_prayer_time.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"><img src="../icon/time.png" width="25"><span class="text"> เวลาละหมาด รายวัน</span></a>
	<a href="ad_month.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white menu"> <img src="../icon/calendar.png" width="25"><span class="text"> เวลาละหมาด รายเดือน</span></a>

  </div>
  </div>
</div>
<br>
<h2 class="w3-margin w3-jumbo-50 f-white"> เลือกจังหวัดของคุณ </h2>
<center>
	<select id="Country" onchange="CountryGET()">
		<option>--</option>
		<?php
			require 'province.php';
			_province_Option($province);
		?>
	</select>
</center>
<br>
<center><form class="form" action="javascript:viewMonth(0);" hidden="">
	Latitude: 
	<input  type="text" value="<?php echo $latitude ?>" id="latitude" size="10" >
	Longitude: 
	<input type="text" value="<?php echo $longitude ?>" id="longitude" size="10">
	Time Zone: 
	<input type="text" value="+7" id="timezone" size="5"> &nbsp;
	<input type="submit" class="w3-light-green" value=" Go " onclick="viewMonth(0);">
</form></center>

<table align="center">
<tbody>
<tr>
<td><a href="javascript:viewMonth(-1)" class="arrow">&lt;&lt;</a></td>
<td id="table-title" class="caption"></td>
<td><a href="javascript:viewMonth(+1)" class="arrow">&gt;&gt;</a></td>
</tr>
</tbody>
</table>

<br>
<table id="timetable" align="center">
<tbody></tbody>
</table>

<div align="center" style="margin-top: 7px" class="TimeFormat01">
รูปแบบเวลา: <a id="time-format" href="javascript:switchFormat(1)" class="command"></a>
</div>
<script type="text/javascript" src="../js/PrayTime4.js"></script>

<script type="text/javascript">
function add_zeroes(number, length) {
    var my_string = '' + number;
    while (my_string.length < length) {
        my_string = '0' + my_string;
    }
    return my_string;
}


	var currentDate = new Date();
	var timeFormat = 0;
	switchFormat(0);

	function viewMonth(offset)
	{
		var lat = document.getElementById('latitude').value;
		var lng = document.getElementById('longitude').value;
		var timeZone = document.getElementById('timezone').value;

		currentDate.setMonth(currentDate.getMonth()+ 1* offset);
		var month = currentDate.getMonth();
		var year = currentDate.getFullYear();
		var title = monthFullName(month)+ ' '+ year;
		document.getElementById('table-title').innerHTML = title;
		makeTable(year, month, lat, lng, timeZone);		


/*-----------------------------------------------------------------------------------------------------------------*/

	var month2 = add_zeroes(month+1, 2);
	jQuery(function($) {
		 /*$.getJSON('https://muslimsalat.com/london/daily.json?key=API_KEY&jsoncallback=?', function (times)*/
		 var i;
		 $.getJSON('hijri-json.php?month='+month2+'&year='+year+'', function (times)
		 {
		 	for (i = 0; i < 40; i++) {
			 	$('#timetable tr:nth-child('+i+') td:nth-child(9)')
			 	.append(times[i]);
	  			/*.append(' / '+times.data[i].date.hijri.date);*/
			}
			 /*.append(' hijri date : '+times.data[1].date.hijri.date);*/
		 });
	});	
/*-----------------------------------------------------------------------------------------------------------------*/	

	}

	// make monthly timetable
	function makeTable(year, month, lat, lng, timeZone)
	{
		var table = document.getElementById('timetable'); 
		var tbody = document.createElement('tbody');
		
		var timeTags = prayTime.timeNames.slice(0);
		timeTags.unshift('Day');
		tbody.appendChild(makeTableRow(timeTags, 'head-row'));

		var date = new Date(year, month, 1);
		var endDate = new Date(year, month+ 1, 1);

		while (date < endDate)
		{
			var times = prayTime.getPrayerTimes(date, lat, lng, timeZone);
			times.unshift(date.getDate()); // add day number
			var today = new Date(); 
			var isToday = (date.getMonth() == today.getMonth()) && (date.getDate() == today.getDate());
			tbody.appendChild(makeTableRow(times, isToday ? 'today-row' : ''));
			date.setDate(date.getDate()+ 1);  // next day
		}
		removeChildrenOfNode(table);
		table.appendChild(tbody);
	}

	// make a table row
	function makeTableRow(items, id)
	{
		var row = document.createElement('tr');
		for (var i=0; i< items.length; i++)
		{
			var cell = document.createElement('td');
			cell.innerHTML = items[i];
			cell.setAttribute('id', id);
			cell.width = i==0 ? 25 : 40;
			row.appendChild(cell);
		}
		return row;		
	}

	// remove all children of a node
	function removeChildrenOfNode(node)
	{
		if (node == undefined || node == null)
			return;

		while (node.firstChild)
			node.removeChild(node.firstChild);
	}

	// switch time format
	function switchFormat(offset)
	{
		var formats = new Array('24-hour', '12-hour');
		timeFormat = (timeFormat+ offset)% 2;
		document.getElementById('time-format').innerHTML = formats[timeFormat];
		prayTime.setTimeFormat(timeFormat == 0 ? prayTime.Time24 : prayTime.Time12NS);
		viewMonth(0);
	}

	// return month full name
	function monthFullName(month)
	{
		var monthName = new Array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
						'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
		return monthName[month];
	}
</script>
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
   location.href = "ad_month.php?"+x;
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

<script type="text/javascript">

</script>

</body>
</html>