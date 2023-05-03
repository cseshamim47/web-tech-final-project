<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "project");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get all the faqs from the database
$sql = "SELECT * FROM faq";
$result = mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>User FAQ</title>
    <link rel="stylesheet" href="../style.css">
    
</head>

<body>
<h1> <a href="dashboard.php">Back</a> </h1>
    <fieldset>
        <legend>FAQ</legend>
        <?php
        // If there are no faqs, display a message
        if (mysqli_num_rows($result) == 0) {
            echo "No FAQs yet!";
        } else {
            // Loop through each faq and display it
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>Q: " . $row["question"] . "</strong></p>";
                echo "<p>A: " . $row["answer"] . "</p>";
            }
        }
        ?>
    </fieldset>
</body>

</html>
