<?php
  include_once 'db_sql.php';

    if(isset($_POST["Export"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=exported.csv');  
      $output = fopen("exported.csv", "w");  
      fputcsv($output, array('id', 'name', 'SSN'));  
      $query = "SELECT id, name, SSN from pretendw2 ORDER BY id DESC";  
      $result = mysqli_query($init, $query); 
      
      while($row = mysqli_fetch_assoc($result))  
      {  $row['id'] . '"' . $row['name'] . '"' . $row['SSN'];
        fputcsv($output, $row, $delimiter = ",", $enclosure = '"');  
    }  
    fclose($output); 

    //   while($row = mysqli_fetch_assoc($result))  
    //   {  
    //     fputcsv($output, $row, $delimiter = ",", $enclosure = '"');  
    //   }  
    //   fclose($output); 
    // $value = mysqli_query($init, $query);   
    // function encodeFunc($value) {
    //     $row1 = mysqli_fetch_assoc($value['id']);
    //     $row2 = mysqli_fetch_assoc($value['name']);
    //     $row3 = mysqli_fetch_assoc($value['SSN']);
       ///remove any ESCAPED double quotes within string.
    //    $value = str_replace('\\"','"',$value);
       //then force escape these same double quotes And Any UNESCAPED Ones.
    //    $value = str_replace('"','\"',$value);
       //force wrap value in quotes and return
//        return $row1 . '"'.$row2.'"'. $row3;
//    }
   
//    $fp = fopen("exported.csv", 'w');
//    foreach($value as $row){
//        fputs($fp, implode(",", array_map("encodeFunc", $row))."\r\n");
//    }
//    fclose($fp);
 }

?>