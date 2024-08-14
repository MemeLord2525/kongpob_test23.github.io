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

mysql_select_db($database_mysqli, $mysqli);
$query_kongpob_rec_member = "SELECT * FROM kongpob_system01";
$kongpob_rec_member = mysql_query($query_kongpob_rec_member, $mysqli) or die(mysql_error());
$row_kongpob_rec_member = mysql_fetch_assoc($kongpob_rec_member);
$totalRows_kongpob_rec_member = mysql_num_rows($kongpob_rec_member);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Member Information</title>
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
        width: 80%;
        background-color: #ffffff; /* White background for table */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
    }
    th, td {
        border: 1px solid #b2ebf2; /* Light blue border */
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #b2ebf2; /* Light blue background for header */
    }
</style>
</head>

<body>
<h1>ข้อมูลสมาชิก สทส.12</h1>
<div align="center">
  <table>
    <tr>
      <th width="155">Id</th>
      <th width="183">Code</th>
      <th width="178">Name</th>
      <th width="194">Department</th>
      <th width="158">Telephone</th>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_kongpob_rec_member['id']; ?></td>
        <td><?php echo $row_kongpob_rec_member['code_std']; ?></td>
        <td><?php echo $row_kongpob_rec_member['name_std']; ?></td>
        <td><?php echo $row_kongpob_rec_member['dep_std']; ?></td>
        <td><?php echo $row_kongpob_rec_member['tel_std']; ?></td>
      </tr>
      <?php } while ($row_kongpob_rec_member = mysql_fetch_assoc($kongpob_rec_member)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($kongpob_rec_member);
?>
