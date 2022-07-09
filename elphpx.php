$canal = $_GET['c'];
$key = 'blckghost';
$token = 'blacghost';
$url = 'http://bgapp.live/play/totalp2s-707.php?k='.$key.'&tokenn='.$token.'&c='.$canal;
$error = 'http://regioplay.xyz/noexiste.php';

$handler = curl_init($url);
curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handler, CURLOPT_HEADER, true);  
curl_setopt($handler, CURLOPT_NOBODY, true);    
$re = curl_exec($handler);
$httpcdd = curl_getinfo($handler, CURLINFO_HTTP_CODE);
curl_close($handler);

if ($httpcdd == 200) {
     header("Location: $url");
     exit();
}
else { header("Location: $error");
          exit();
}

