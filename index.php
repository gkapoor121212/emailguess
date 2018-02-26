<?php
$firstName = 'firstname';
$lastName = 'lastname';
$middleName = '';
$domain = 'example.com';
$firstInitial = '';
$lastInitial = '';
$middleInitial = '';
if($firstName != '')
	$firstInitial = substr($firstName,0,1);
if($lastName != '')
	$lastInitial = substr($lastName,0,1);
if($middleName != '')
	$middleInitial = substr($middleName,0,1);
$emails = array();
$emails[] = $firstName."@".$domain;
$emails[] = $lastName."@".$domain;
$emails[] = $firstName.$lastName."@".$domain;
$emails[] = $firstName.".".$lastName."@".$domain;
$emails[] = $firstInitial.$lastName."@".$domain;
$emails[] = $firstInitial.".".$lastName."@".$domain;
$emails[] = $firstName.$lastInitial."@".$domain;
$emails[] = $firstName.".".$lastInitial."@".$domain;
$emails[] = $firstInitial.$lastInitial."@".$domain;
$emails[] = $firstInitial.".".$lastInitial."@".$domain;
$emails[] = $lastName.$firstName."@".$domain;
$emails[] = $lastName.".".$firstName."@".$domain;
$emails[] = $lastName.$firstInitial."@".$domain;
$emails[] = $lastName.".".$firstInitial."@".$domain;
$emails[] = $lastInitial.$firstName."@".$domain;
$emails[] = $lastInitial.".".$firstName."@".$domain;
$emails[] = $lastInitial.$firstInitial."@".$domain;
$emails[] = $lastInitial.".".$firstInitial."@".$domain;
$emails[] = $firstInitial.$middleInitial.$lastName."@".$domain;
$emails[] = $firstInitial.$middleInitial.".".$lastName."@".$domain;
$emails[] = $firstName.$middleInitial.$lastName."@".$domain;
$emails[] = $firstName.".".$middleInitial.".".$lastName."@".$domain;
$emails[] = $firstName.$middleName.$lastName."@".$domain;
$emails[] = $firstName.".".$middleName.".".$lastName."@".$domain;
$emails[] = $firstName."-".$lastName."@".$domain;
$emails[] = $firstInitial."-".$lastName."@".$domain;
$emails[] = $firstName."-".$lastInitial."@".$domain;
$emails[] = $firstInitial."-".$lastInitial."@".$domain;
$emails[] = $lastName."-".$firstName."@".$domain;
$emails[] = $lastName."-".$firstInitial."@".$domain;
$emails[] = $lastInitial."-".$firstName."@".$domain;
$emails[] = $lastInitial-"-".$firstInitial."@".$domain;
$emails[] = $firstInitial.$middleInitial."-".$lastInitial."@".$domain;
$emails[] = $firstName."-".$middleInitial."-".$lastName."@".$domain;
$emails[] = $firstName."-".$middleName."-".$lastName."@".$domain;
$emails[] = $firstName."_".$lastName."@".$domain;
$emails[] = $firstInitial."_".$lastName."@".$domain;
$emails[] = $firstName."_".$lastInitial."@".$domain;
$emails[] = $firstInitial."_".$lastInitial."@".$domain;
$emails[] = $lastName."_".$firstName."@".$domain;
$emails[] = $lastName."_".$firstInitial."@".$domain;
$emails[] = $lastInitial."_".$firstName."@".$domain;
$emails[] = $lastInitial."_".$firstInitial."@".$domain;
$emails[] = $firstInitial.$middleInitial."_".$lastName."@".$domain;
$emails[] = $firstName."_".$middleInitial."_".$lastName."@".$domain;
$emails[] = $firstName."_".$middleName."_".$lastName."@".$domain;


foreach ($emails as $key => $value) {
	$ch = curl_init();
	$url = "http://apilayer.net/api/check?access_key=YOUR-ACCESS-KEY&email=".$value."&smtp=1&format=1";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	$data = json_decode(curl_exec($ch));
	curl_close($ch);

	echo $data;
	echo "<br>";
}
?>
