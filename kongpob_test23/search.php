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
$query_kongpob_rec_search11 = "SELECT * FROM kongpob_system01";
$kongpob_rec_search11 = mysql_query($query_kongpob_rec_search11, $mysqli) or die(mysql_error());
$row_kongpob_rec_search11 = mysql_fetch_assoc($kongpob_rec_search11);
$totalRows_kongpob_rec_search11 = mysql_num_rows($kongpob_rec_search11);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Light sky blue */
            color: #004d40; /* Dark teal text */
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #00796b; /* Teal for heading */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff; /* White background for table */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #81d4fa; /* Light blue border */
        }
        th {
            background-color: #81d4fa; /* Light blue background for header */
            color: #004d40; /* Dark teal for header text */
        }
        tr:nth-child(even) {
            background-color: #b2ebf2; /* Alternating row color */
        }
        tr:hover {
            background-color: #4dd0e1; /* Highlight row on hover */
        }
    </style>
</head>

<body>
    <h1>User</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Code</th>
            <th>Name</th>
            <th>Department</th>
            <th>Telephone</th>
        </tr>
        <?php do { ?>
            <tr>
                <td><?php echo $row_kongpob_rec_search11['id']; ?></td>
                <td><?php echo $row_kongpob_rec_search11['code_std']; ?></td>
                <td><?php echo $row_kongpob_rec_search11['name_std']; ?></td>
                <td><?php echo $row_kongpob_rec_search11['dep_std']; ?></td>
                <td><?php echo $row_kongpob_rec_search11['tel_std']; ?></td>
            </tr>
        <?php } while ($row_kongpob_rec_search11 = mysql_fetch_assoc($kongpob_rec_search11)); ?>
    </table>
</body>
</html>
<?php
mysql_free_result($kongpob_rec_search11);
?>
