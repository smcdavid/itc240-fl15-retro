<?php
//config.php

define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

include 'credentials.php'; //stores database login info
include 'common.php'; //stores all unsightly application functions, etc.
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

/* use the following path settings for placing all code in one application folder */ 
define('VIRTUAL_PATH', 'http://smcdavid.com/itc240/retro/'); # Virtual (web) 'root' of application for images, JS & CSS files

define('PHYSICAL_PATH', '/home/shumcd/smcdavid.com/itc240/retro/'); # Physical (PHP) 'root' of application for file & upload reference

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching


//echo basename($_SERVER['PHP_SELF']);

//the constant THIS_PAGE identifies the current file name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//The switch allows us to create unique content for each page
switch(THIS_PAGE)
{
    case 'menu.php':
        $title = 'Menu page';
        $pageID = 'Menu Page!';
        break;
        
    case 'daily.php':
        $title = 'Daily page';
        $pageID = 'Daily Deals!';
        break;
        
    case 'contact.php':
        $title = 'Contact page';
        $pageID = 'Contact Us!';
        break;
        
    case 'index.php':
        $title = 'Home';
        $pageID = 'Home Page!';
        break;
        
    case 'beer_list.php':
        $title = 'Title for Beers Page';
        $pageID = 'Beers';
        break;
        
    default:
        $title = THIS_PAGE;
        $pageID = 'Welcome to the Retro Diner!';
        
} //End switch

$nav1['index.php'] = 'Home';
$nav1['menu.php'] = 'Menu';
$nav1['daily.php'] = 'Daily';
$nav1['beer_list.php'] = 'Beers';
$nav1['contact.php'] = 'Contact';

/*

foreach($nav1 as $link => $label)
{
    echo "the link is $link and the label is $label <br />";
    
}



				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
			



*/

//echo THIS_PAGE;



//die;


/*
will place navigational links on the page
makeLinks($nav1,'<li>','</li>','<li class="active">')
*/

function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
    $myReturn = '';
    
    foreach($arr as $link => $label)
    {   
        if (THIS_PAGE == $link) 
        { //current page  
            $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
            
        }else
        { //all other pages 
            $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
        }
    } //end foreach
    
    return $myReturn;
} //end make links

/*
Allows us to send an email that respects the server domain spoofing polices of 
hosts like DH.

$response = safeEmail($to, $subject, $message, $replyTo,'html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}

*/
function safeEmail($to, $subject, $message, $replyTo = '',$contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{//default is text
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }
    
    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    
    if($replyTo !=''){//only add replyTo if passed
        //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
        $headers[] = 'Reply-To: ' . $replyTo;   
    }
    
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();
    
    //collapse all header data into a string with operating system safe
    //carriage returns - PHP_EOL
    $headers = implode(PHP_EOL,$headers);

    //use mail() command internally and pass back the feedback
    return mail($to, $subject, $message, $headers);

}//end safeEmail()


/*
    The function below loops through the entire POST data and creating a single string of name/value pairs to send.  When we do this, we can now add elements and not need to address them in the formhandler!

    There is also a bit of code that replaces any underscores with spaces.  This is useful because we can name our POST variables in such a way that makes it easier for the client to view our emails.

    $to = 'xxx@example.com';
    $message = process_post();
    $replyTo = $_POST['Email'];
    $subject = 'Test from contact form';
    
    safeEmail($to, $subject, $message, $replyTo);

*/

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

