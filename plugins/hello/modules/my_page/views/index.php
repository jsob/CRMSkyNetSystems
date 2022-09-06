<h1 class="page-title">
	<?php 
		echo 'Плагин';
		//echo TEXT_PLUGIN_HELLO_WORLD 		
	?> 
</h1>

<?php
$url = 'https://zakupki.gov.ru/epz/order/extendedsearch/rss.html?searchString=разработка+программ&morphology=on&search-filter=Дате+обновления&pageNumber=4&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&savedSearchSettingsIdHidden=&sortBy=UPDATE_DATE&fz44=on&fz223=on&af=on&placingWayList=&selectedLaws=&priceFromGeneral=&priceFromGWS=&priceFromUnitGWS=&priceToGeneral=&priceToGWS=&priceToUnitGWS=&currencyIdGeneral=-1&publishDateFrom=&publishDateTo=&applSubmissionCloseDateFrom=&applSubmissionCloseDateTo=&customerIdOrg=&customerFz94id=&customerTitle=&okpd2Ids=&okpd2IdsCodes=' ;
//$url = 'https://zakupki.gov.ru/epz/order/extendedsearch/rss.html' ;
/*
$headers = []; // создаем заголовки

$curl = curl_init(); // создаем экземпляр curl

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1); 
curl_setopt($curl, CURLOPT_POST, false);
curl_setopt($curl, CURLOPT_URL, $url);
*/
$ch=curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/rss+xml;charset=UTF-8', 'Content-Language=ru'));
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Отключить ошибку "SSL certificate problem, verify that the CA cert is OK"
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Отключить ошибку "SSL: certificate subject name 'hostname.ru' does not match target host name '123.123'"
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_POST, false);

$result=curl_exec($ch);

curl_close($ch);

//$result = curl_exec($curl);

//$xmlData=simplexml_load_file($url);

//$xmlDoc = new DOMDocument();
//$xmlDoc->load($url);


echo '<a class="btn btn-primary" href="javascript: open_dialog(\'' . url_for('hello/my_page/form') . '\')">' . TEXT_PLUGIN_SEND_MESSAGE. '</a>';

echo '<hr>';

echo  my_class::get_user_info();
echo '<hr>';

echo '<br><br>';

echo '<br><br>';
echo $result;	
 //echo var_dump($xmlData);
