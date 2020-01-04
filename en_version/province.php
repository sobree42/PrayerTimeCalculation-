<?php
$province = array(
          array("Bangkok","13.7500","100.4833"),
          array("Amnat Charoen","15.8620327","104.6327143"),
          array("Ang Thong","14.5879548","100.4566079"),
          array("Bueng Kan","18.366023","103.650515"),
          array("Buriram","15.0025934","103.1003484"), 
          array("Chachoengsao","13.689391","101.0609637"),
          array("Chaiyaphum ","15.8058805","102.0324969"),
          array("Chainat","15.1841967","100.1329459"),
          array("Chanthaburi","12.6089225","102.1119839"),
          array("Chiang Mai","18.7905618","98.9880909"),
          array("Chiang Rai","19.9024103","99.8385395"),
          array("Chonburi","13.3658434","100.9889619"),
          array("Chumphon","10.4981433","99.178168"),
          array("Kalasin","16.4320082","103.506929"),
          array("Kamphaeng Phet","16.4739502","99.525984"),         
          array("Kanchanaburi","14.0249954","99.5333293"),
          array("Khon Kaen","16.4346313","102.844785"),
          array("Krabi","8.0610907","98.9161607"),
          array("Lampang","18.2933646","99.4945253"),
          array("Lamphun","18.5776383","99.0069034"),
           /*done*/
          array("Loei","17.4932964","101.7177129"), 
          array("Lopburi","14.7996631","100.6342069"),
          array("Mae Hong Son","19.3007277","97.9649168"),
          array("Maha Sarakham","16.1861887","103.2955401"),
          array("Mukdahan","16.5429076","104.7255463"),
          array("Nakhon Nayok","14.203647","101.2147087"),
          array("Nakhon Pathom","13.8198186","100.0583846"),
          array("Nakhon Phanom","17.3952209","104.7880321"),
          array("Nakhon Ratchasima","14.9711601","102.0870812"),
          array("Nakhon Sawan","15.697411","100.1254381"),
          array("Nakhon Si Thammarat","8.4321444","99.9638643"),
          array("Nan","18.78463499","100.7773149"),         
          array("Narathiwat","6.4294927","101.8008758"),
          array("Nong Bua Lam Phu","17.2017817","102.4404314"),         
          array("Nong Khai","17.8812453","102.7490052"),
          array("Nonthaburi","13.8608545","100.5133388"),
          array("Pathum Thani","14.0165371","100.5321597"),
          array("Pattani","6.8678652","101.2504538"),
          array("Phang Nga","8.4439925","98.5270295"),
          array("Phatthalung","7.6188786","100.0822175"), 
          /*done*/
          array("Phayao","19.1666313","99.9019423"),
          array("Phetchabun","16.4165039","101.1595234"),
          array("Phetchaburi","13.1002026","99.9442519"),
          array("Phichit","16.4384306","100.3708853"),
          array("Phitsanulok","16.818956","100.2568064"),
          array("Phra Nakhon Si Ayutthaya","14.3560372","100.5722073"),
          array("Phrae","18.1410396","100.1491249"),
          array("Phuket","7.887994","98.3918736"),
          array("Prachinburi","14.0549259","101.3713628"),
          array("Prachuap Khiri Khan","11.813465","99.7988545"),
          array("Ranong","9.9600729","98.6238919"),         
          array("Ratchaburi","13.5407196","99.8178536"),
          array("Rayong","12.6816485","101.2777435"),         
          array("Roi Et","16.056247","103.653095"),
          array("Sa Kaeo","13.8038429","102.0878661"),
          array("Sakon Nakhon","17.1660016","104.1519383"),
          array("Samut Prakan","13.5964801","100.5997041"),
          array("Samut Sakhon","13.5497782","100.2742813"),
          array("Samut Songkhram","13.4086617","100.000494"), 
          array("Saraburi","14.5249471","100.9160757"),
          /*done*/
          array("Satun","6.6217162","100.0719077"),  
          array("Sing Buri","14.8918381","100.3987566"),
          array("Sisaket","15.116794","104.332348"),
          array("Songkhla","7.1979038","100.5981483"),
          array("Sukhothai","17.0126541","99.8150671"),
          array("Suphan Buri","14.4684819","100.1160317"),
          array("Surat Thani","9.1415643","99.329055"),
          array("Surin","14.884901","103.493048"),
          array("Tak","16.8722576","99.1248355"),
          array("Trang","7.5607389","99.6114944"),        
          array("Trat","12.2452337","102.5117795"),
          array("Ubon Ratchathani","15.226428","104.8581711"),        
          array("Udon Thani","17.3983097","102.7920407"),
          array("Uthai Thani","15.3660285","100.050465"),
          array("Uttaradit","17.6333319","100.1020218"),
          array("Yala","6.5420137","101.2788554"),
          array("Yasothon","15.7950547","104.1493458")
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
