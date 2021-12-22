<?php
$json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<center><b>รายงานสถานการโควิด-19 แยกจังหวัด</b></center>";
  echo "<table border='1px'>";
  echo "<tr align='center'><td bgcolor='#FFE4E1'><b>ลำดับ</b></td><td bgcolor='#FFDEAD'><b>จังหวัด</b></td><td bgcolor='#FFE4E1'><b>ยอดผู้ป่วยใหม่</b></td><td bgcolor='#FFDEAD'><b>ยอดผู้ป่วยรวม</b></td><td bgcolor='#FF66CC'><b>ยอดผู้ป่วยใหม่ภายในประเทศ</b></td><td bgcolor='#CCCCFF'><b>ยอดผู้ป่วยรวมในประเทศ</b></td>
  <td bgcolor='#FFE4E1'><b>ยอดผู้เสียชีวิตใหม่</b></td><td bgcolor='#FFDEAD'><b>ยอดผู้เสียชีวิตรวม</b></td><td bgcolor='#FFE4E1'><b>วันที่</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#FFE4E1'>";
    echo ($key+1);
    echo "</td>";
    echo "<td bgcolor='#FFDEAD'>";
    echo $val->province;
    echo "</td>";
    echo "<td bgcolor='#FFE4E1'>";
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#FFDEAD'>";
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#FFE4E1'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FFDEAD'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FFE4E1'>";
    echo $val->new_death;
    echo "</td>";
    echo "<td bgcolor='#FFDEAD'>";
    echo $val->total_death;
    echo "</td>";
    echo "<td bgcolor='#FFE4E1'>";
    echo $val->txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>"; 
?>
