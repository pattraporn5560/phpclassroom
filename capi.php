<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
  echo "ยอดผู้ป่วยวันนี้ :"$data[0]->new_case;
   echo "ยอดผู้ป่วยวันนี้ :"$data[0]->total_case;
?>
