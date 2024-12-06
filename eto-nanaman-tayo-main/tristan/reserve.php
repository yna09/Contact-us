<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productId = $_POST['productId'];
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $adviser = $_POST['adviser'];
    $contact = $_POST['contact'];
    $title = $_POST['title'];
    $userType = $_POST['userType'];
    $studentType = isset($_POST['studentType']) ? $_POST['studentType'] : null;
    $facultyType = isset($_POST['facultyType']) ? $_POST['facultyType'] : null;
    $dateBorrowed = $_POST['dateBorrowed'];
    $accessionNo = $_POST['accessionNo'];
    $dateDue = $_POST['dateDue'];
    $dateReturned = $_POST['dateReturned'];

    // Perform database operations to store the data
    // Example: Insert data into a MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tantan";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO reservations (productId, name, grade, section, adviser, contact, title, userType, studentType, facultyType, dateBorrowed, accessionNo, dateDue, dateReturned)
            VALUES ('$productId', '$name', '$grade', '$section', '$adviser', '$contact', '$title', '$userType', '$studentType', '$facultyType', '$dateBorrowed', '$accessionNo', '$dateDue', '$dateReturned')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Display success message using JavaScript
        echo "<script>alert('Reservation successful!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
