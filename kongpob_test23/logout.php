<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session variables
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logout Confirmation</title>
<style>
    body {
        background-color: #121212; /* Dark background */
        color: #e0e0e0; /* Light gray text */
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 20px;
    }
    a {
        color: #bb86fc; /* Light purple for links */
        text-decoration: none;
        font-weight: bold;
    }
    a:hover {
        color: #3700b3; /* Darker purple on hover */
    }
</style>
</head>

<body>
<div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h1>คุณแน่ใจหรือไม่ที่ต้องการจะออกจากระบบ?</h1>
  <h1>&nbsp;<a href="<?php echo $logoutAction ?>">Log out</a></h1>
</div>
</body>
</html>
