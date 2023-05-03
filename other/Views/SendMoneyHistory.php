<?php
// Open history file for reading
$file = fopen("history.txt", "r");

// Display the 5 most recent sent transactions
echo "<h2>Recent Transactions</h2>";
echo "<table border='1'>";
echo "<tr><th>Date</th><th>Type</th><th>Amount</th><th>Path</th></tr>";
$count = 0;
while(!feof($file) && $count < 5) {
    $line = trim(fgets($file));
    $fields = explode(",", $line);
    if(count($fields) == 4 && $fields[1] == "sent") {
        echo "<tr><td>".$fields[0]."</td><td>".$fields[1]."</td><td>".$fields[2]."</td><td>".$fields[3]."</td></tr>";
        $count++;
    }
}
echo "</table>";

// Close file
fclose($file);
?>
