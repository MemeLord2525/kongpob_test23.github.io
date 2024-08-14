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
                       GetSQLValueString($_POST['Code'], "text"),
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Department'], "text"),
                       GetSQLValueString($_POST['Tel'], "text"));

  mysql_select_db($database_mysqli, $mysqli);
  $Result1 = mysql_query($insertSQL, $mysqli) or die(mysql_error());

  $insertGoTo = "admin.php";
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
<title>Insert Record</title>
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
        width: 100%;
        max-width: 400px;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #ffffff; /* White background for form */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
    }
    td {
        padding: 10px;
        text-align: right;
        border: 1px solid #b2ebf2; /* Light blue border */
    }
    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #b2ebf2; /* Light blue border */
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #00796b; /* Teal background */
        color: white; /* White text */
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #004d40; /* Darker teal on hover */
    }
</style>
</head>

<body>
<h1>Insert User</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Code:</td>
      <td><input name="Code" type="text" id="Code" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:</td>
      <td><input name="Name" type="text" id="Name" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td height="65" align="right" nowrap="nowrap"><p>Department:</p></td>
      <td><input name="Department" type="text" id="Department" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telephonel:</td>
      <td><input name="Tel" type="text" id="Tel" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Confirm" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
