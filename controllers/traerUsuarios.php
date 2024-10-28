<?php
include('../config/db.php');

// Query to select all users
$consulUser = "SELECT * FROM user";
$result = mysqli_query($conn, $consulUser);

// Check if the query returned any rows
if(mysqli_num_rows($result) > 0) {
    $users = [];

    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $datos = [
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['mail']
        ];

        // Store the user data in the $users array
        $users[] = $datos;
    }

    // Display the user data
   /*   echo '<pre>';
    print_r($users);
    echo '</pre>';  */
    
    // Free the result set
    return $users;
}

// Close the connection
mysqli_close($conn);
