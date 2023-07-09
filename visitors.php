









<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>task</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM visitors;";
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {


                echo "- id: " . $row["visitor_id"]. "<br> - IP: " . $row["ip_address"]. "<br><br>";
            }
        } else {
            echo "0 results";
        }
        // Close the database connection
        mysqli_close($conn);

        function display_current_time() {
            $current_time = date('h:i:s A'); // Get the current time in the format: hours:minutes:seconds AM/PM
            echo "The current time is $current_time";
        }
        // Call the function to display the current time
        display_current_time();
        
    
    ?>
</body>
</html>

























