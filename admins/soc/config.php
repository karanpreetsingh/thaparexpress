<?

$site = "http://www.THAPAREXPRESS.IN"; //enter the site url in the same format
$mail = "support@thaparexpress.in"; //enter your email
$adminpassword = "admin"; //enter the password of the admin account.
$sitetitle = "THAPAREXPRESS";  //enter your site title
$sitedesc = "THAPAR EXPRESS, One stop for all of Thapar.";  //Your site description
$bottom = "Site Developed  for 		the students of THAPAR UNIVERSITY"; //Text at the bottom of your site
$username = "txpress_tx";	//enter mysql user name
$password = "laxarsh6!"; //enter mysql user password
$database = "txpress_tx";  //enter database name
$hostname = "localhost"; 	//enter hostname (usually localhost)

$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db($database,$dbhandle) 
  or die("Could not select examples");

$dbc = @mysqli_connect($hostname, $username, $password, $database);

if(isset($_SESSION['rollnum']))
{
$rn = $_SESSION['rollnum'];

$query = "SELECT * FROM members WHERE rollnum = '$rn'"; 
	 
$result = mysql_query($query) or die(mysql_error());

$user = mysql_fetch_array($result) or die(mysql_error());
}

?>