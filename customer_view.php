<?php
//customer_view.php - shows a list of customer data
?>
<?php include 'config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id']; 
}else{//redirect to safe page
    header('Location:customer_list.php');
}


$sql = "select * from test_Customers where CustomerID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $FirstName = stripslashes($row['FirstName']);
        $FirstName = stripslashes($row['LastName']);
        $FirstName = stripslashes($row['Email']);
        $title = "Title for " . $FirstName;
        $pageID = $FirstName;
        $Feedback = '';//no feedback necessary

    }
}else{//inform there are no records
        $Feedback = '<p> This customer does not exist</p>';
}

?>

<?php include 'header.php';?>
<h1><?=$pageID?></h1>
<?php

echo '<p>';
echo 'FirstName: <b>' . $FirstName . '</b>';
echo 'LastName: <b>' . $LastName . '</b>';
echo 'Email: <b>' . $Email . '</b>';

//echo '<a href="customer_view.php?id='. $row['CustomerID'] . '">' . $row['FirstName'] . '</a>;

echo '</p>';

echo'<p><a href="customer_list.php">Go Back</a></p>';
    

//release web server resources
@mysql_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'footer.php';?>