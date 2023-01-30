<?php
 if(isset($_POST['submit'])){

include("conn.php");

$assetname = $_POST['assetname'];
$year = $_POST['year'];
$qty = $_POST['qty'];
$authorization = $_POST['authorization'];
$qtyheld = $_POST['qtyheld'];
$surplus = $_POST['surplus'];
$deficiency = $_POST['deficiency'];
$qtyprocured = $_POST['qtyprocured'];
$totalqty = $_POST['totalqty'];
$cost = $_POST['cost'];
$totalcost = $_POST['totalcost'];

if(empty($year) || empty($qty)) {
    echo '<script type="text/javascript">alert("Please add a row and enter the values to generate report");</script>';
} else {

$sql = "INSERT INTO `inventory_system`.`cpu` (`assetname`, `year`, `qty`, `authorization`, `qtyheld`, `surplus`, `deficiency`, `qtyprocured`, 
`totalqty`, `cost`, `totalcost`) VALUES ('$assetname', '$year', '$qty', '$authorization', '$qtyheld', '$surplus', '$deficiency', 
'$qtyprocured', '$totalqty', '$cost', '$totalcost');";
// echo $sql;

if($db->query($sql)==true){
    // echo "successfully inserted";
}
else{
    echo "ERROR: $sql <br> $db->error";
}
$db->close();
}
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
    <!-- Navbar HTML -->
<nav>
  <ul>
    <li><h2>Inventory Management</h2></li>
    <li><a href="#home">Dashboard</a></li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Inventory</a>
      <div class="dropdown-content">
    <a href="#">CPU</a>
    <a href="#">Printer</a>
  </div>
    </li>
    <li><a href="#reports">Reports</a></li>
    <li><a href="#about">About</a></li>
  </ul>
</nav>
    <title>Inventory Management</title>
</head>

<body>
   
    <div class="container">
        <h1></h1>
        <form action="index.php" method="post" onsubmit="return validateForm()" >
        <table id="inventory-table">
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
            <!-- <tr>
                <td><input type='text' name='assetname' size='10'/></td>
                <td><input type='text' name='year' size='5'/></td>
                <td><input type='text' name='qty' size='5'/></td>
                <td><input type='text' name='authorization' size='5'/></td>
                <td><input type='text' name='qtyheld' size='5'/></td>
                <td><input type='text' name='surplus' size='5'/></td>
                <td><input type='text' name='deficiency' size='5'/></td>
                <td><input type='text' name='qtyprocured' size='5'/></td>
                <td><input type='text' name='totalqty' size='5'/></td>
                <td><input type='text' name='cost' size='5'/></td>
                <td><input type='text' name='totalcost' size='5'/></td>

            </tr> -->
        </table>
        <br>
        <div class="btn" >
            <button name="submit">Submit</button>
        </div>
    </form>
    <br>
    <div class='reportbtn'>
        <button class="btn" onclick="addRow()">Add Row</button>
    
        <a  name="report" href="display.php">Generate Report</a>
    </div>
    </div>
    <script src="index.js"></script>
    
</body>
</html>



