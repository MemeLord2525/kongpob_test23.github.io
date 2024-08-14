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
$query_kongpob_rec_admin_member_member = "SELECT * FROM kongpob_system01";
$kongpob_rec_admin_member_member = mysql_query($query_kongpob_rec_admin_member_member, $mysqli) or die(mysql_error());
$row_kongpob_rec_admin_member_member = mysql_fetch_assoc($kongpob_rec_admin_member_member);
$totalRows_kongpob_rec_admin_member_member = mysql_num_rows($kongpob_rec_admin_member_member);
$query_kongpob_rec_admin_member = "SELECT * FROM kongpob_system01";
$kongpob_rec_admin_member = mysql_query($query_kongpob_rec_admin_member, $mysqli) or die(mysql_error());
$row_kongpob_rec_admin_member = mysql_fetch_assoc($kongpob_rec_admin_member);
$totalRows_kongpob_rec_admin_member = mysql_num_rows($kongpob_rec_admin_member);
$query_kongpob_rec_admin_member = "SELECT * FROM kongpob_admin";
$kongpob_rec_admin_member = mysql_query($query_kongpob_rec_admin_member, $mysqli) or die(mysql_error());
$row_kongpob_rec_admin_member = mysql_fetch_assoc($kongpob_rec_admin_member);
$totalRows_kongpob_rec_admin_member = mysql_num_rows($kongpob_rec_admin_member);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Light sky blue */
            margin: 0;
            padding: 20px;
        }
        h3 {
            color: #00796b; /* Teal color for headings */
        }
        p {
            font-size: 18px;
            color: #004d40; /* Dark teal for text */
        }
        form {
            margin: 20px 0;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #00796b; /* Dark teal border */
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff; /* Sky blue button */
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #b2ebf2; /* Light blue border */
            background-color: #ffffff; /* White background for cells */
        }
        th {
            background-color: #007bff; /* Sky blue for header */
            color: white;
        }
        tr:hover {
            background-color: #80deea; /* Light blue on row hover */
        }
        a {
            color: #007bff; /* Sky blue for links */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <p>ข้อมูลสมาชิก สทส.12</p>
    <h3><a href="insert.php">Insert Data</a></h3>
    <h3><a href="logout.php">Logout</a></h3>

    <form id="form2" name="form2" method="post" action="search.php">
        <label for="search">ค้นหา:</label>
        <input type="text" name="search" id="search" />
        <input type="submit" name="btn" id="btn" value="Search" />
    </form>

    <div align="center">
        <table>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Name</th>
                <th>Department</th>
                <th>Telephone</th>
                <th>Options</th>
            </tr>
            <?php do { ?>
                <tr>
                    <td><?php echo $row_kongpob_rec_admin_member_member['id']; ?></td>
                    <td><?php echo $row_kongpob_rec_admin_member_member['code_std']; ?></td>
                    <td><?php echo $row_kongpob_rec_admin_member_member['name_std']; ?></td>
                    <td><?php echo $row_kongpob_rec_admin_member_member['dep_std']; ?></td>
                    <td><?php echo $row_kongpob_rec_admin_member_member['tel_std']; ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $row_kongpob_rec_admin_member['id']; ?>">Delete</a> |
                        <a href="update.php?id=<?php echo $row_kongpob_rec_admin_member['id']; ?>">Update</a>
                    </td>
                </tr>
            <?php } while ($row_kongpob_rec_admin_member_member = mysql_fetch_assoc($kongpob_rec_admin_member_member)); ?>
        </table>
    </div>

    <?php mysql_free_result($kongpob_rec_admin_member); ?>
</body>
</html>
<?php
mysql_free_result($kongpob_rec_admin_member_member);
?>
