<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- ... -->
</head>

<title>Scholarship Program Applications</title>
<style>
    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        color: green;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
        background-color: #b8daff;
    }

    /* Make the search box in the top right corner */
    div.dataTables_wrapper {
        position: relative;
    }

    div.dataTables_filter {
        text-align: right;
    }
      .dataTables_scrollBody {
        max-height: calc(100vh - 250px); /* Adjust this value based on your needs */
        overflow-y: auto;
    }
</style>
</head>
<body>
    <div class="container mt-5">
        <h2 align="center">Scholarship Program Applications</h2>
        <div class="table-responsive">
            <table id="dataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Address</th>
                        <th>Pin Code</th>
                        <th>School Name</th>
                        <th>School Address</th>
                        <th>Education Class</th>
                        <th>Scholarship Type</th>
                        <th>Stream</th>
                        <th>Marks</th>
                        <th>Email</th>
                        <th>Student Phone</th>
                        <th>Guardian Phone</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Student_Name"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["Country"] . "</td>";
                echo "<td>" . $row["State"] . "</td>";
                echo "<td>" . $row["District"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
                echo "<td>" . $row["Pincode"] . "</td>";
                echo "<td>" . $row["schoolname"] . "</td>";
                echo "<td>" . $row["Schooladdress"] . "</td>";
                echo "<td>" . $row["Currenteducation"] . "</td>";
                echo "<td>" . $row["Scholarshipname"] . "</td>";
                echo "<td>" . $row["Strem"] . "</td>";
                echo "<td>" . $row["lastexammark"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["PhoneNo"] . "</td>";
                echo "<td>" . $row["GardianPhoneno"] . "</td>";
                echo "<td>" . $row["Remark"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='17'>No data available</td></tr>";
        }
        ?>  
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>