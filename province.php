<php

  $js = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($js);
     
  var_dump($data);

?>
