<?php
//daily.php
?>

<?php include 'includes/config.php'; ?>

<?php

//echo date('a');

//Get the day of the week
$myDay = date('l');
$bcColor = ''; //will store the background color the user wants
$schedule = ''; //will store schedule for the day
$myPic = '';//will store picture of the day
$dogName = '';//will store dog name

if(isset($_GET['myDay'])){
    $myDay = $_GET['myDay'];

}else{
    $myDay = date('l');
}

switch($myDay)
{
    case 'Monday':
        $myPic = 'mondog.jpg';
        $schedule = '"Training Goals"';
        $bcColor = "red";
        $dogName = 'Potato';
        break;
    case 'Tuesday':
        $myPic = 'tuedog.jpg';
        $schedule = '"Getting your dog to respect you"';
        $bcColor = "orange";
        $dogName = 'Monkey';
        break;
    case 'Wednesday':
        $myPic = 'weddog.jpg';
        $schedule ='"Getting your dog to follow you"';
        $bcColor = "yellow";
        $dogName = 'Ogre';
        break;
    case 'Thursday':
        $myPic = 'thurdog.jpg';
        $schedule ='"Teach your dog commands"';
        $bcColor = "green";
        $dogName = 'Smitten';
        break;
    case 'Friday':
        $myPic = 'fridog.jpg';
        $schedule ='"Have fun with your dog!"';
        $bcColor = "blue";
        $dogName = 'Snikey';
        break;
    case 'Saturday':
        $myPic = 'satdog.jpg';
        $schedule = 'a day off!';
        $bcColor = "purple";
        $dogName = 'Saddidas';
        break;
    case 'Sunday':
        $myPic = 'sundog.jpg';
        $schedule = 'a day off!' ;
        $bcColor = "grey";
        $dogName = 'Teeny';
        break;
}
?>



<?php include 'includes/header.php'; ?>

<h1><?= $pageID; ?></h1>

<img src="images/<?=$myPic?>" alt="Our Animal of the Day <?=$dogName?>!" >
            <p><strong ><?=$myDay?> Training Schedule:</strong> <?=$myDay?> is <b><?=$schedule?></b>

<p><a href="daily.php?myDay=Sunday">Sunday</a></p>
<p><a href="daily.php?myDay=Monday">Monday</a></p>
<p><a href="daily.php?myDay=Tuesday">Tuesday</a></p>
<p><a href="daily.php?myDay=Wednesday">Wednesday</a></p>
<p><a href="daily.php?myDay=Thursday">Thursday</a></p>
<p><a href="daily.php?myDay=Friday">Friday</a></p>
<p><a href="daily.php?myDay=Saturday">Saturday</a></p>

                
<?php include 'includes/footer.php'; ?>