
<?php
include("database.php");
echo"<p><br><p>";
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from information ORDER BY time_inserted DESC limit 5";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="0">
        <tr>
            <th>information ID</th>
            <th>Tank ID</th>
            <th>Current Water Level</th>
            <th>Time inserted</th>
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$data['Id_info']."</td>
          <td>".$data['tankID']."</td>
          <td>".$data['tank_level']."</td>
          <td>".$data['time_inserted']."</td>

   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>


