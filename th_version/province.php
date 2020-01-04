<?php
$province = array(
	  array("กรุงเทพมหานคร","13.7500","100.4833"),
	  array("อำนาจเจริญ","15.8620327","104.6327143"),
	  array("อ่างทอง","14.5879548","100.4566079"),
	  array("บึงกาฬ","18.366023","103.650515"),
	  array("บุรีรัมย์","15.0025934","103.1003484"), 
	  array("ฉะเชิงเทรา","13.689391","101.0609637"),
	  array("ชัยนาท","15.1841967","100.1329459"),
	  array("ชัยภูมิ","15.8058805","102.0324969"),
	  array("จันทบุรี","12.6089225","102.1119839"),
	  array("เชียงใหม่","18.7905618","98.9880909"),
	  array("เชียงราย","19.9024103","99.8385395"),
	  array("ชลบุรี","13.3658434","100.9889619"),
	  array("ชุมพร","10.4981433","99.178168"),
	  array("กาฬสินธุ์","16.4320082","103.506929"),
	  array("กำแพงเพชร","16.4739502","99.525984"), 				
	  array("กาญจนบุรี","14.0249954","99.5333293"),
	  array("ขอนแก่น","16.4346313","102.844785"),
	  array("กระบี่","8.0610907","98.9161607"),
	  array("ลำปาง","18.2933646","99.4945253"),
	  array("ลำพูน","18.5776383","99.0069034"),
	  /*done*/
	  array("เลย","17.4932964","101.7177129"), 
	  array("ลพบุรี","14.7996631","100.6342069"),
	  array("แม่ฮ่องสอน","19.3007277","97.9649168"),
	  array("มหาสารคาม","16.1861887","103.2955401"),
	  array("มุกดาหาร","16.5429076","104.7255463"),
	  array("นครนายก","14.203647","101.2147087"),
	  array("นครปฐม","13.8198186","100.0583846"),
	  array("นครพนม","17.3952209","104.7880321"),
	  array("นครราชสีมา","14.9711601","102.0870812"),
	  array("นครสวรรค์","15.697411","100.1254381"),
	  array("นครศรีธรรมราช","8.4321444","99.9638643"),
	  array("น่าน","18.78463499","100.7773149"), 				
	  array("นราธิวาส","6.4294927","101.8008758"),
	  array("หนองบัวลำภู","17.2017817","102.4404314"), 				
	  array("หนองคาย","17.8812453","102.7490052"),	  
	  array("นนทบุรี","13.8608545","100.5133388"),
	  array("ปทุมธานี","14.0165371","100.5321597"),
	  array("ปัตตานี","6.8678652","101.2504538"),
	  array("พังงา","8.4439925","98.5270295"),
	  array("พัทลุง","7.6188786","100.0822175"),
	  /*done*/ 
	  array("พะเยา","19.1666313","99.9019423"),
	  array("เพชรบูรณ์","16.4165039","101.1595234"),
	  array("เพชรบุรี","13.1002026","99.9442519"),
	  array("พิจิตร","16.4384306","100.3708853"),
	  array("พิษณุโลก","16.818956","100.2568064"),
	  array("พระนครศรีอยุธยา","14.3560372","100.5722073"),
	  array("แพร่","18.1410396","100.1491249"),
	  array("ภูเก็ต","7.887994","98.3918736"),
	  array("ปราจีนบุรี","14.0549259","101.3713628"),
	  array("ประจวบคีรีขันธ์","11.813465","99.7988545"),
	  array("ระนอง","9.9600729","98.6238919"), 				
	  array("ราชบุรี","13.5407196","99.8178536"),	  
	  array("ระยอง","12.6816485","101.2777435"), 				
	  array("ร้อยเอ็ด","16.056247","103.653095"),
	  array("สระแก้ว","13.8038429","102.0878661"),
	  array("สกลนคร","17.1660016","104.1519383"),
	  array("สมุทรปราการ","13.5964801","100.5997041"),
	  array("สมุทรสาคร","13.5497782","100.2742813"),
	  array("สมุทรสงคราม","13.4086617","100.000494"), 
  	  array("สระบุรี","14.5249471","100.9160757"),
      /*done*/
	  array("สตูล","6.6217162","100.0719077"),
	  array("สิงห์บุรี","14.8918381","100.3987566"),
	  array("ศรีสะเกษ","15.116794","104.332348"),
	  array("สงขลา","7.1979038","100.5981483"),
	  array("สุโขทัย","17.0126541","99.8150671"),
	  array("สุพรรณบุรี","14.4684819","100.1160317"),
	  array("สุราษฎร์ธานี","9.1415643","99.329055"),
	  array("สุรินทร์","14.884901","103.493048"),
	  array("ตาก","16.8722576","99.1248355"),
	  array("ตรัง","7.5607389","99.6114944"), 				
	  array("ตราด","12.2452337","102.5117795"),	  	  
	  array("อุบลราชธานี","15.226428","104.8581711"), 				
	  array("อุดรธานี","17.3983097","102.7920407"),
	  array("อุทัยธานี","15.3660285","100.050465"),
	  array("อุตรดิตถ์","17.6333319","100.1020218"),
	  array("ยะลา","6.5420137","101.2788554"),
	  array("ยโสธร","15.7950547","104.1493458")
	  /*17*/
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