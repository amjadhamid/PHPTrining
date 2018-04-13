<?PHP
 
//for ensure if the user is in database
$admin = array("amjad" ,"judy");

$username = $_GET['username'] ; 

if(in_array($username , $admin)){

    echo "Welcome " . $username . "To Control Panel For Admin" ;
}
else{
    echo "Sorry this username is not Exist In OurClient Area";
}