<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<h1><?= $pageID; ?></h1>

<p>Bacon ipsum dolor amet frankfurter cupim spare ribs biltong. Shank jowl ham turkey bacon. Chuck rump filet mignon venison meatball, frankfurter tail ribeye beef kevin tongue pork belly. Leberkas andouille jerky pork loin meatball chicken. Porchetta ground round cupim cow meatball. Cow turducken picanha chicken kevin pig ham.

Brisket tenderloin alcatra spare ribs chuck. Meatball short loin picanha doner, salami cow spare ribs chicken boudin shankle prosciutto shank. Biltong shoulder doner, prosciutto chuck landjaeger drumstick venison picanha chicken. Cow pig picanha beef pastrami ribeye chicken. Tri-tip bresaola turducken, meatloaf pork loin jerky hamburger doner chuck.</p>

<h2>Menu Page Feedback!</h2>

<?php 
if (isset($_POST['Submit'])){//if data, process it
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = 'smcdav01@seattlecentral.edu';
    $message = process_post();
    $subject = 'Menu Feedback Form from Retro Site';
    
    
    safeEmail($to, $subject, $message);
    
}else{//no data, show form
    echo '
        <form method="post" action="">
        
        Name: <input type="text" name="Name" required="required"><br>
        
        Email: <input type="email" name="Email" required="required"><br>
        
        Can We Contact You?: <p><input type="radio" name="contact" id="yes" value="yes" >Yes</p>
        <p><input type="radio" name="contact" id="no" value="no" >No</p><br>
       
        Which menu item(s) did you like?: <p><input type="checkbox" name="help[]" id="pancakes" value="pancakes" >Pancakes</p>
        <p><input type="checkbox" name="help[]" id="hamburger" value="hamburger" >Hamburger</p>
        <p><input type="checkbox" name="help[]" id="hotdog" value="hotdog" >Hot Dog</p>
        <p><input type="checkbox" name="help[]" id="milkshake" value="milkshake" >Milkshake</p><br>

        Comments: <textarea name="Comments"></textarea><br>
        <input type="submit" value="Send" name="Submit">
    
        </form>
    ';


}




?>
<?php include 'includes/footer.php'; ?>