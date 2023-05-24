<!DOCTYPE html>
<html>

<head>
    <title>Transaction History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 30px;
            color: #333;
        }

        form {
            margin-bottom: 30px;
        }

        label {
            margin-right: 10px;
            color: #555;
        }

        input[type="date"] {
            padding: 5px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-right: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #457d7d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: #f8f9fa;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #555;
            color: #fff;
        }

        td {
            background-color: #f8f9fa;
        }

        .no-results {
            text-align: center;
            color: #777;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            form {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            label,
            input[type="date"],
            button[type="submit"] {
                margin: 5px;
            }

            input[type="date"],
            button[type="submit"] {
                flex: 1 1 auto;
                max-width: calc(50% - 10px);
            }
        }
    </style>
</head>

<body>
    <?php
    require_once 'menu.php';
    ?>
    <div style="display: flex; align-items: center; justify-content: center; flex-direction: column; height: 100%;">
        <h1>Transaction History</h1>

        <form id="transaction-form" method="POST" action="../Controllers/Transaction.php" onsubmit="validateDates()">
    <label for="from_date">From:</label>
    <input type="date" id="from_date" name="from_date" >
    <label for="to_date">To:</label>
    <input type="date" id="to_date" name="to_date" >
    <button type="submit" name="submit">Search</button>
</form>

<script>
    const form = document.getElementById('transaction-form');
    const fromInput = document.getElementById('from_date');
    const toInput = document.getElementById('to_date');

    function validateDates() {
        const fromDate = fromInput.value;
        const toDate = toInput.value;

        if (fromDate && toDate) {
            if (new Date(fromDate) > new Date(toDate)) {
                alert('The "From" date cannot be after the "To" date.');
                return false;
            }
        }

        return true;
    }


</script>

    <?php
    if (!empty($transactions)) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Transaction ID</th>';
        echo '<th>Transaction Date</th>';
        echo '<th>Transaction Amount</th>';
        echo '<th>Transaction Type</th>';
        echo '</tr>';

        foreach ($transactions as $transaction) {
            echo '<tr>';
            echo '<td>' . $transaction['email'] . '</td>';
            echo '<td>' . $transaction['trx_date'] . '</td>';
            echo '<td>' . $transaction['trx_amount'] . '</td>';
            echo '<td>' . $transaction['trx_type'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
       include'../Controllers/alltrx.php';
    }
    ?>
</body>

</html>
