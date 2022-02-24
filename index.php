<!DOCTYPE html>
<html lang="en">
<head>
  <title>Up To The Minute : CoVID-19 News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/5dd3399740.js" crossorigin="anonymous"></script>

</head><style>
    .jumbotron{
       background: rgb(108,0,0);
background: radial-gradient(circle, rgba(108,0,0,1) 0%, rgba(253,29,29,1) 50%, rgba(88,0,71,1) 100%);
    }
    h1, h3{
        text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.6);
        font-size: 72px;
    }
</style>
<body>

<div class="jumbotron text-white shadow text-center">
    <i class='fas fa-head-side-mask' style='font-size:72px;color:white;text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.6);'></i>

  <h1>CoVID-19 News</h1>
</div>
<div class="container" id="maincontain">
<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-news2.p.rapidapi.com/news",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-news2.p.rapidapi.com",
		"x-rapidapi-key: 1234567"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$json = json_decode($response, true);
$arr = json_decode(json_decode($curl, true),true);



 foreach ($json as $key => $value) {
    echo '<p>';
    echo $json[$key]['title'];
    echo '<a href="';
    echo $json[$key]['url'];
    echo '"><br><small>Read more </a> from ';
    echo $json[$key]['source'];
    echo '</small></p>';
    }
curl_close($curl);

?>
</div><!-- end maincontain -->
<div class="container-fluid" id="footer">
    <div class="col-sm-4 p-4">
        API is <a href="https://rapidapi.com/k4hming/api/covid-news2/">Covid News 2</a> found at <a href="http://rapidapi.com">Rapid API</a>
    </div>
    <div class="col-sm-4 p-4">
        Coded in PHP and PHP.
    </div>
    <div class="col-sm-4 p-4">
        
    </div>
    </div><!-- end footer -->
