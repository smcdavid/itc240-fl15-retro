<?php
//beer_view.php - shows details of a single beer
?>

<?php include 'includes/config.php'; ?>
<?php

//process querystring here
if(isset($_GET['id'])){//process data
    //cast the data to an integer, for security purposes.
    $id = (int)$_GET['id'];

}else{//else redirect to safe page
    header('Location:beer_list.php');

}


$sql = "select * from Beers where BeerID = $id";


//we connect to the db here.
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn, $sql);

if(mysqli_num_rows($result) > 0){//show records

    while($row = mysqli_fetch_assoc($result)){
        
        $Brand = stripslashes($row['Brand']);
        $BeerName = stripslashes($row['Beername']);
        $BeerType = stripslashes($row['Beertype']);
        $Description = stripslashes($row['Description']);
        $title = "Title Page for " . $Brand;
        $pageID = $BeerName;
        $Feedback = '';
    
    }
    
}else{//inform there are no records
    $Feedback = '<p>This beer does not exist.</p>';

}


?>

<?php include 'includes/header.php'; ?>

<h1><?= $pageID; ?></h1>
<?php

if($Feedback == ''){//if data exists show it
    echo '<p>';
    
    echo '<img src="uploads/beer'. $id . '.jpg"><br>';
    echo 'Brand:<b>'. $Brand . '</b> ';
    echo 'Beer Name:<b>'. $BeerName . '</b> ';
    echo 'Beer Type:<b>'. $BeerType . '</b> ';
    echo 'Description:<b>'. $Description . '</b> ';
    
    //This is an example of how to add a picture as well.
    
    
    echo '</p>';
    
}else{//warn user no data
    echo $Feedback;

}

echo '<p><a href="beer_list.php">Go Back</a></p>';

//release web server resoures(@ symbol gets rid of error warning that could pop up)
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php'; ?>