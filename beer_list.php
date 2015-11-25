<?php
//beer_list.php - shows a list of beers
?>

<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<h1><?= $pageID; ?></h1>
<?php

$sql = "select * from Beers";


//we connect to the db here.
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn, $sql);

if(mysqli_num_rows($result) > 0){//show records

    while($row = mysqli_fetch_assoc($result)){
        echo '<p>';

        echo 'Brand:<b>'. $row['Brand'] . '</b> ';
        echo 'Beer Name:<b>'. $row['Beername'] . '</b> ';
        echo 'Beer Type:<b>'. $row['Beertype'] . '</b> ';
        echo 'Description:<b>'. $row['Description'] . '</b> ';

        echo '<a href="beer_view.php?id='. $row['BeerID'] . '">'. $row['Beername'] . '</a>';
        
        echo '</p>';
    }
    
}else{//inform there are no records
    echo '<p>There are currently no beers.</p>';

}

//release web server resoures(@ symbol gets rid of error warning that could pop up)
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php'; ?>