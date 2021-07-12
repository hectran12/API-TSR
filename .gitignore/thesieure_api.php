<?php
$cookie = $_GET["cookie"];
$tele = $_GET["tele_code"];
$code = $_GET["code"];
$serial = $_GET["serial"];
$menh_gia = $_GET["gia"];
if($cookie == false){
$error_array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => 100,
        "message" => "Vui lòng thêm cookie tsr!",
        ),
        ); 
$encode = json_encode($error_array);
print($encode);
        die();
}
if($tele == false){
$error_array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => 100,
        "message" => "Vui lòng thêm nhà mạng!",
        ),
        );
$encode = json_encode($error_array); print($encode);
        die();
}
if($code == false){
$error_array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => 100,
        "message" => "Vui lòng thêm mã thẻ!",
        ),
        ); 
        $encode = json_encode($error_array); print($encode);
        die();
}
if($serial == false){
$error_array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => 100,
        "message" => "Vui lòng thêm serial thẻ!",
        ),
        ); 
        $encode = json_encode($error_array); print($encode);
        die();
}
if($menh_gia == false){
$error_array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => 100,
        "message" => "Vui lòng thêm mệnh giá!",
        ),
        ); 
        $encode = json_encode($error_array); print($encode);
        die();
}
$mz = [10000,20000,30000,50000,100000,200000,300000,500000];
$mz_zing_vt = [10000,20000,30000,50000,100000,200000,300000,500000,1000000];
$mz_gate = [10000,20000,30000,50000,100000,200000,300000,500000,1000000,2000000,5000000,10000000];
if($tele == 1){
  $nha_mang = "VIETTEL";
  for($v = 0;$v <= count($mz_zing_vt);$v++){
    if($mz_zing_vt[$v] == $menh_gia){
    $on_vt = "on";
    break;}
  }
  if(!$on_vt == "on"){
    $array_push = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "tele" => $nha_mang,
        "error" => "yes",
        "status_code" => 301,
        "message" => "Mệnh giá vượt giới hạn!",
        "overcome" => "Sửa lại mênh giá trong pham vi 10000,20000,30000,50000,100000,200000,300000,500000,1000000",
        ),
      );
      $encode_p = json_encode($array_push);
      print($encode_p);
      die();
  }
}elseif($tele == 2){
  $nha_mang = "VINAPHONE";
for($v = 0;$v <= count($mz_zing_vt);$v++){
    if($mz[$v] == $menh_gia){
    $on_vt = "on";
    break;}
  }
  if(!$on_vt == "on"){
    $array_push = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "tele" => $nha_mang,
        "error" => "yes",
        "status_code" => 301,
        "message" => "Mệnh giá vượt giới hạn!",
        "overcome" => "Sửa lại mênh giá trong pham vi 10000,20000,30000,50000,100000,200000,300000,500000",
        ),
      );
      $encode_p = json_encode($array_push);       print($encode_p);die();}
}elseif($tele == 3){
  $nha_mang = "MOBIFONE";
for($v = 0;$v <= count($mz_zing_vt);$v++){
    if($mz[$v] == $menh_gia){
    $on_vt = "on";
    break;}
  }
  if(!$on_vt == "on"){
    $array_push = array(
      "tele" => $nha_mang,
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "error" => "yes",
        "status_code" => 301,
        "message" => "Mệnh giá vượt giới hạn!",
        "overcome" => "Sửa lại mênh giá trong pham vi 10000,20000,30000,50000,100000,200000,300000,500000",
        ),
      );
      $encode_p = json_encode($array_push);       print($encode_p);die();
}
}elseif($tele == 4){
  $nha_mang = "VNMOBI";
for($v = 0;$v <= count($mz_zing_vt);$v++){
    if($mz[$v] == $menh_gia){
    $on_vt = "on";
    break;}
  }
  if(!$on_vt == "on"){
    $array_push = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "tele" => $nha_mang,
        "error" => "yes",
        "status_code" => 301,
        "message" => "Mệnh giá vượt giới hạn!",
        "overcome" => "Sửa lại mênh giá trong pham vi 10000,20000,30000,50000,100000,200000,300000,500000",
        ),
      );
      $encode_p = json_encode($array_push);       print($encode_p);die();}
}elseif($tele == 5){
  $nha_mang = "ZING";
for($v = 0;$v <= count($mz_zing_vt);$v++){
    if($mz_zing_vt[$v] == $menh_gia){
    $on_vt = "on";
    break;}
  }
  if(!$on_vt == "on"){
$array_push = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "tele" => $nha_mang,
        "error" => "yes",
        "status_code" => 301,
        "message" => "Mệnh giá vượt giới hạn!",
        "overcome" => "Sửa lại mênh giá trong pham vi 10000,20000,30000,50000,100000,200000,300000,500000,1000000",
        ),
      );
      $encode_p = json_encode($array_push);       print($encode_p);die();}
}elseif($tele == 6){
  $nha_mang = "GATE";
  for($v = 0;$v <= count($mz_gate);$v++){
    if($mz[$v] == $menh_gia){
    $on_vt = "on";
    break;}
  }
  if(!$on_vt == "on"){
$array_push = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "tele" => $nha_mang,
        "error" => "yes",
        "status_code" => 301,
        "message" => "Mệnh giá vượt giới hạn!",
        "overcome" => "Sửa lại mênh giá trong pham vi 10000,20000,30000,50000,100000,200000,300000,500000,1000000,2000000,5000000,10000000",
        ),
      );
      $encode_p = json_encode($array_push);       print($encode_p);die();}
}
$get_token = main($cookie);
if($get_token == false){
$error_array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => 150,
        "message" => "Cookie die hoạc không hợp lệ!",
        ),
        ); 
$encode = json_encode($error_array); print($encode);
        die();
}

$tsr = doithe($cookie,$nha_mang,$code,$serial,$menh_gia,$get_token);
print_r($tsr);
function doithe($ck,$a,$b,$c,$d,$e){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://thesieure.com/doithecao");
$head[] = "Host:thesieure.com";
$head[] = "content-length:113";

$head[] = "origin:https://thesieure.com";
$head[] = "referer:https://thesieure.com/";
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $ck);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$data = array(
  "telco[]" => $a,
  "code[]" => $b,
  "serial[]" => $c,
  "amount[]" => $d,
  "_token" => $e,
  );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
$exp_1 = explode("<li>",$access)[26];
$result = explode("</li>",$exp_1)[0];
if(strpos($result,"Xử lý") == true){
$connect = doithecao($ck);
$explode = explode("<tr>",$connect)[20];
if(strpos($explode,"Thành công") == true){
  $code_st = 200;
  $result = "Nạp thành công!";
}
}else{
$code_st = 400;
}
$array = array(
      "Author_API" => "Trần Trọng Hòa",
      "Facebook" => "fb.com/tronghoa.tran.547",
      "data" => array(
        "status_code" => $code_st,
        "tele" => $a,
        "ma_the" => $b,
        "serial" => $c,
        "gia" => $d,
        "message" => $result,
        ),
  );
return(json_encode($array));
}
function main($ck){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://thesieure.com/doithecao");
$head[] = "Host:thesieure.com";
$head[] = "content-length:113";

$head[] = "origin:https://thesieure.com";
$head[] = "referer:https://thesieure.com/";
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $ck);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
$exp_1 = explode('name="_token" type="hidden" value="',$access)[2];
$exp_2 = explode('">',$exp_1)[0];
return $exp_2;
}
function doithecao($ck){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://thesieure.com/doithecao");
$head[] = "Host:thesieure.com";
$head[] = "content-length:113";

$head[] = "origin:https://thesieure.com";
$head[] = "referer:https://thesieure.com/";
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $ck);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return $access;
}
