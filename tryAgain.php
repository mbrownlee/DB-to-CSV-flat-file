<?php
include_once 'db_sql.php';

if (isset($_POST["Export"])) {
    // file to write to
    $fh = fopen("exported.csv", "w");
    //headers_list
    $stringData = "id,name,SSN";
    fwrite($fh, $stringData);

    $query = "SELECT id, name, SSN from pretendw2 ORDER BY id DESC";
    $data2 = mysqli_query($init, $query);

    while ($row = mysqli_fetch_array($data2)) {

        $stringData = "\r\n";

        $stringData .= '' . $row['id'] . ',';
        $stringData .= '"' . $row['name'] . '",';
        $stringData .= '' . $row['SSN'];

        fwrite($fh, $stringData);
    }
    fclose($fh); 
}
