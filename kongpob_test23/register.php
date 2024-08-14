<?php require_once('Connections/mysqli.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO kongpob_system01 (code_std, name_std, dep_std, tel_std) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['uname'], "text"),
                       GetSQLValueString($_POST['upass'], "text"),
                       GetSQLValueString($_POST['myname'], "text"),
                       GetSQLValueString($_POST['tel'], "text"));

  mysql_select_db($database_mysqli, $mysqli);
  $Result1 = mysql_query($insertSQL, $mysqli) or die(mysql_error());

  $insertGoTo = "login_member.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e0f7fa; /* Light sky blue */
        color: #004d40; /* Dark teal for text */
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
        color: #00796b; /* Teal for heading */
    }
    table {
        margin: auto;
        padding: 20px;
        border-collapse: collapse;
        width: 50%;
        background-color: #ffffff; /* White background for form */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
    }
    th, td {
        padding: 10px;
        text-align: left;
        color: #004d40; /* Dark teal for text */
    }
    input[type="text"], input[type="submit"] {
        padding: 8px;
        border: 1px solid #b2ebf2; /* Light blue border */
        border-radius: 4px; /* Rounded corners */
        width: 100%;
        box-sizing: border-box; /* Include padding in width */
    }
    input[type="submit"] {
        background-color: #b2ebf2; /* Light blue background for button */
        color: #004d40; /* Dark teal text for button */
        cursor: pointer; /* Pointer cursor for button */
    }
    input[type="submit"]:hover {
        background-color: #80deea; /* Slightly darker blue on hover */
    }
</style>
</head>

<body>
<h1>Register</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table>
    <tr valign="baseline">
      <td align="right">Code:</td>
      <td><input type="text" name="uname" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Name:</td>
      <td><input type="text" name="upass" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Dep:</td>
      <td><input type="text" name="myname" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">Tel:</td>
      <td><input type="text" name="tel" value="" required /></td>
    </tr>
    <tr valign="baseline">
      <td align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
