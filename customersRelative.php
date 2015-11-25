<?php
//customers.php - shows a list of customer data
?>

<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/template.php';?>
<br />
<br />
<br />
<br />
<br />
<h1>Database stuff</h1>
<?php
$sql = "select * from test_Customers";  

//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
//we extract the data here
$result = mysqli_query($iConn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    echo '<p>';
    echo 'FirsName: <b>' . $row['FirstName'] . '</b>';
    echo 'LastName: <b>' . $row['LastName'] . '</b>';
    echo 'Email: <b>' . $row['Email'] . '</b>';
    
    echo '</p><br />';
    
    
}    
    
    
    
    
    
    
?>
<?php include 'includes/footer.php';?>
    