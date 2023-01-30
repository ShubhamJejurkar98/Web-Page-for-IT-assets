<html>
 <style>
.downloadbtn {
  /* button styling */
  background-color: #4CAF50; 
  color: white; 
  padding: 10px 20px; /* Some padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Display as inline block element */
  font-size: 16px; /* Set font size */
  margin: 4px 2px; /* Add some margin */
  cursor: pointer; /* Add cursor pointer */
  border-radius: 5px; /* Add rounded corners */
}

.downloadbtn:hover {
  background-color: #3e8e41; /* Change background color on hover */
}
.container{
    width: 80%;
    margin: 0 auto;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
    </style>
<body>
    <div class="container" style="text-align: center;">
  <table  style="margin: 0 auto;">
            <tr>
                <th>Type of Asset</th>
                <th>Vintage of equipment(8 yrs of life span for being outlived)</th>
                <th>Qty</th>
                <th>Authorization</th>
                <th>Qty held as on date</th>
                <th>Surplus</th>
                <th>Deficiency</th>
                <th>Qty to be procured as per life cycle of the eqpt</th>
                <th>Total qty to be procure</th>
                <th>Cost of the items as on date</th>
                <th>Total cost of the items</th>
            </tr>
    
<?php
    include('conn.php');

     // Fetch data from the table
     $query = "SELECT * FROM cpu";

     $result = mysqli_query($db, $query);
     if (!$result) {
        die("Error: " . mysqli_error($db));
    }
 
 
     while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
         echo "<td>" . $row["assetname"] . "</td>";
         echo "<td>" . $row["year"] . "</td>";
         echo "<td>" . $row["qty"] . "</td>";
         echo "<td>" . $row["authorization"] . "</td>";
         echo "<td>" . $row["qtyheld"] . "</td>";
         echo "<td>" . $row["surplus"] . "</td>";
         echo "<td>" . $row["deficiency"] . "</td>";
         echo "<td>" . $row["qtyprocured"] . "</td>";
         echo "<td>" . $row["totalqty"] . "</td>";
         echo "<td>" . $row["cost"] . "</td>";
         echo "<td>" . $row["totalcost"] . "</td>";
         echo "</tr>";
     }
  
?>
</table>
 <a class="downloadbtn" href='download.php'>Download as Excel</a>
</div>
    </body>
</html>