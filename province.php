<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

    echo "<center><b>รายงานสถานการณ์โควิด-19 แยกจังหวัด</b></center>";
    echo "<br><br>";


echo "<center><table border='1'>";
echo "<tr><td style= 'background-color:B0E0E6'>ลำดับ</td>
      <td style= 'background-color:4682B4'>จังหวัด</td>
      <td style= 'background-color:B0E0E6'>จำนวนผู้ป่วยใหม่</td>
      <td style= 'background-color:4682B4'>จำนวนผู้ป่วยสะสม</td>
      <td style= 'background-color:B0E0E6'>จำนวนผู้ป่วยใหม่(รวมต่างประเทศ)</td>
      <td style= 'background-color:4682B4'>จำนวนผู้ป่วยสะสม(รวมต่างประเทศ)</td>
      <td style= 'background-color:FFA07A'>จำนวนผู้เสียชีวิต</td>
      <td style= 'background-color:FFA07A'>จำนวนผู้เสียชีวิตสะสม</td>
      </tr>";
  
foreach($data as $key=>$val){
  echo "<tr>";
  echo "<td style= 'background-color:FFE4E1'>";
  echo ($key+1);
  echo "</td>";
  echo "<td style= 'background-color:FFFFFF'>";
  echo $val->province;
  echo "</td>";
  echo "<td style= 'background-color:FFE4E1'>";
  echo $val->new_case;
  echo "</td>";
  echo "<td style= 'background-color:FFFFFF'>";
  echo $val->total_case;
  echo "</td>";
  echo "<td style= 'background-color:FFE4E1'>";
  echo $val->new_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:FFFFFF'>";
  echo $val->total_case_excludeabroad;
  echo "</td>";
  echo "<td style= 'background-color:FFE4E1'>";
  echo $val->new_death;
  echo "</td>";
  echo "<td style= 'background-color:FFFFFF'>";
  echo $val->total_death;
  echo "</td>";
  echo "</tr>";
}


echo "<br><br>";
echo "<center>วันที่อัพเดต</center>";
echo "<center>$val->txn_date</center>";
echo "</table></center>";

?>
