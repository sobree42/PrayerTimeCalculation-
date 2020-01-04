<?php
$province = array(
	  array ("بانكوك","13.7500","100.4833"),
	  array ("أمنات تشاروين" , "15.8620327","104.6327143"),
	  array ("آنج ثونغ", "14.5879548" , "100.4566079") ,
	  array ("بوينج كان","18.366023","103.650515"),
	  array ( "بوريرام", "15.0025934", "103.1003484"),
	  array ( "شاشوينجساو", "13.689391", "101.0609637"),
	  array ("تشاياف" , "15.8058805" , "102.0324969"),
	  array ("تشاي نات" ,"15.1841967", "100.1329459") ,
	  array ( "تشايافوم","10.4981433", "99.178168"),
	  array ( "شانثابوري","12.6089225", "102.1119839"),
	  array ("شيانغ ماي" ,"18.7905618", "98.9880909") ,
	  array ("شيانغ راي" , "19.9024103", "99.8385395"),
	  array ( "تشونبوري", "13.3658434", "100.9889619"),
	  array ( "شومفون", "10.4981433", "99.178168"),
	  array ( "كالاسين", "16.4320082", "103.506929"),
	  array ("كامبينغ فيت", "16.4739502", "99.525984") ,
	  array ( "كانشانابوري ","14.0249954", "99.5333293"),
	  array (" خون كاين ","16.4346313", "102.844785"),
	  array ("كرابي", "8.0610907", "98.9161607"),
	  array ("امبانج","18.2933646", "99.4945253"),
		/*done*/
	  array ("امفون","18.5776383", "99.0069034"),
	  array ("ويي","17.4932964","101.7177129"),
      array ("بورى","14.7996631","100.6342069"),
	  array ("ماي هونغ سون","19.3007277","97.9649168"),
	  array ("مها ساراخام","16.1861887","103.2955401"),
	  array ("موكداهان","16.5429076","104.7255463"),
	  array ("ناخون نايوك","14.203647","101.2147087"),
	  array ("ناخون باثوم","13.8198186","100.0583846"),
	  array ("ناخون فانوم" , "17.3952209","104.7880321"),
	  array ("ناخون راتشاسيما","14.9711601","102.0870812"),
	  array ("ناخون ساوان","15.697411","100.1254381"),
	  array (" ناخون سي ثامارات ","8.4321444","99.9638643"), 
	  array ("نان","18.78463499","100.7773149"),
	  array ("ناراثيوات","6.4294927","101.8008758"),
	  array ("نونغ بوا لام فو","17.2017817","102.4404314"),
	  array ("نونغ خاي","17.8812453","102.7490052"),
	  array ("نونثابوري","13.8608545","100.5133388"),
	  array ("باثوم ثاني" , "14.0165371","100.5321597"),
	  array ( "فطاني", "6.8678652","101.2504538"),
	  array ("فانغ نغا" , "8.4439925","98.5270295") ,
      /*done*/
	  array ( "فاتهالونج","7.6188786","100.0822175"),
	  array ( "فاياو", "19.1666313","99.9019423"),
	  array ( "فيتشابون","16.4165039","101.1595234"),
	  array ( "فيتشابوري", "13.1002026","99.9442519"),
	  array ("فيشيت","16.4384306","100.3708853"),
	  array ( "فيتسانولوك", "16.818956","100.2568064"),
	  array ("فرا ناخون سي أيوثايا" ,"14.3560372","100.5722073") ,
	  array ( "فراى","18.1410396","100.1491249"),
	  array ( "فوكيت", "7.887994","98.3918736"),
	  array ( "براتشينبورى", "14.0549259","101.3713628"),
	  array ("براشواب خيري خان" ,"11.813465","99.7988545") ,
	  array ( "رانونج", "9.9600729","98.6238919"),
	  array ( "راتشابوري", "13.5407196","99.8178536"),
	  array ( "رايونج", "12.6816485","101.2777435"),
	  array ("روي إت" , "16.056247","103.653095") ,
	  array ("سا كايو","13.8038429","102.0878661"),
	  array ("ساكون ناخون" , "17.1660016","104.1519383") ,
	  array ("ساموت براكان","13.5964801","100.5997041"),
	  array ("ساموت سخون","13.5497782","100.2742813"),
	  array ("ساموت سونغخرام","13.4086617","100.000494"),
	  /*done*/
	    array ("سارابوري","14.5249471","100.9160757"),
		array ("ساتون","6.6217162","100.0719077"),
		array ("سنغ بوري","14.8918381","100.3987566"),
		array ("سيساكيت","15.116794","104.332348"),
		array ("سونغكلا","7.1979038","100.5981483"),
		array ("سوخوثاي","17.0126541","99.8150671"),
		array ("سوفان بوري","14.4684819","100.1160317"),
		array ("سورة ثاني","9.1415643","99.329055"),
		array ("سورين","14.884901","103.493048"),
		array ("تاك","16.8722576","99.1248355"),
		array ("ترانج","7.5607389","99.6114944"),
		array ("ترات","12.2452337","102.5117795"),
		array ("أوبون راتشاثاني","15.226428","104.8581711"),
		array ("أودون ثاني","17.3983097","102.7920407"),
		array ("يوثاي ثاني","15.3660285","100.050465"),
		array ("أوتاراديت","17.6333319","100.1020218"),
		array ("يالا","6.5420137","101.2788554"),
		array ("ياسوثون","15.7950547","104.1493458")
		 /*18*/

					);

function _province_Option($var){
	$count = count($var);
	$x=0;
	while($x <= $count) {
		$num = $x;
    	$x++;
  	 	$name_province = $var[$num][0];
	 	$latitude = $var[$num][1];
	 	$longitude = $var[$num][2];
	 	if ($x <= $count) {
	 		echo "<option value='latitude=$latitude&longitude=$longitude&Country=$name_province'>$name_province</option>";
	 	}
	 	
	}
}


 

?>
