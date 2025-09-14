

<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: gray;
        }

        th {
            background-color: black;
            color: white;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        td {
            text-align: center;
            font-size: 16px;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .no-data {
            color: red;
            text-align: center;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <h1>Data from Database</h1>
    <?php
    // Step 1: Create a database connection
    $conn = new mysqli("localhost", "root", "", "learn");

    if ($conn->connect_error) {
        die("Connection Failed");
    }

    // Step 2: Retrieve data from the database
    $sql = "SELECT companyname, license_number, details, id, number_of_ship FROM comdetails";
    $result = $conn->query($sql);

    // Step 3: Check if there is any data




    
    
    if ($result->num_rows > 0) {

        echo "<table >";
        echo "<tr>";
        echo "<th>Company Name</th>";
        echo "<th>License Number</th>";
        echo "<th>Details</th>";
        echo "<th>ID</th>";
        echo "<th>Number of Ship</th>";
        echo "<th>Number of Ship</th>";
        echo "<th>Operation</th>";

        echo "</tr>";

        // Step 4: Loop through the data and display it in the table
        while ($row = $result->fetch_assoc()) {
            
            echo "<tr>";
            
            echo "<td>" . $row["companyname"] . "</td>";
            echo "<td>" . $row["license_number"] . "</td>";
            echo "<td>" . $row["details"] . "</td>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["number_of_ship"] . "</td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found.";
    }

    // Step 5: Close the database connection
    $conn->close();
    ?>
</body>
</html>



     


   



