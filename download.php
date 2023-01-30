<?php
error_reporting(0);
include('conn.php');

 // Fetch data from the table
 $query = "SELECT * FROM cpu";
 $result = mysqli_query($db, $query);
 if (!$result) {
    die("Error: " . mysqli_error($db));
}

 // Download the report as a CSV file
 header("Content-type: text/csv");
 header("Content-Disposition: attachment; filename=report.csv");
 header("Pragma: no-cache");
 header("Expires: 0");

 $output = fopen("php://output", "w");
 fputcsv($output, array("assetname","year", "qty","authorization","qty held as on date","surplus","deficiency","qtyprocured","total qty","cost of item", "totalcost"));

 while ($row = mysqli_fetch_assoc($result)) {
     fputcsv($output, $row);
 }

 fclose($output);

 // Close the connection
 mysqli_close($conn);
?>