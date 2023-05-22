<?php
// Include the database connection file
include "connect.php";

// Check if ID is provided via POST
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Sanitize input to prevent SQL injection attack
    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);

    // Prepare a delete statement
    $query = "DELETE FROM `orderapp` WHERE id= ?";

    if($stmt = mysqli_prepare($conn, $query)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $id);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Query executed successfully, return success response
            $response = array(
                "success" => true,
                "message" => "Row deleted successfully."
            );
        } else{
            // Query execution failed, return error response
            $response = array(
                "success" => false,
                "message" => "Error deleting row. Please try again later."
            );
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

} else {
    // ID not provided via POST, return error response
    $response = array(
        "success" => false,
        "message" => "No ID provided."
    );
}

// Send response as JSON
header("Content-Type: application/json");
echo json_encode($response);
?>
