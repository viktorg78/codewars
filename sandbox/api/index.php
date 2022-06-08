<?

use api\DTOApi;


include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');
echo 'json!<br>';

$j = DTOApi::create('Viktor', 12);
//echo json_encode($j->jsonSerialize());
echo '<br>';

// создание запроса
//$requst =[
//    'trackingId'=> 'UCB-1000001575',
//    'type' => 'statusChanged',
//
//        ];


//$res =  \api\SendRequestJson::create('http://test.loc/sandbox/api/respons.php', $requst);
//echo  $res;

$data = ["name" => "John Smith", "age" => 35];
$data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
$curl = curl_init('http://test.loc/sandbox/api/respons.php');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
// Принимаем в виде массива. (false - в виде объекта)
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($curl);
curl_close($curl);
echo '<pre>';
print_r($result);



