<?php
// Define functions for each operation so that logic can be implemented
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

function exponent($a, $b) {
    return pow($a, $b);
}

function percentage($a, $b) {
    return ($a / $b) * 100;
}

function sqrtValue($a) {
    if ($a < 0) {
        return "Error: Square root of a negative number";
    }
    return sqrt($a);
}

function logValue($a) {
    if ($a <= 0) {
        return "Error: Logarithm of zero or a negative number";
    }
    return log($a);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get form data
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operation = $_POST['operation'];
    $result = "";

    // Perform the selected operation
    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            break;
        case "divide":
            $result = divide($num1, $num2);
            break;
        case "exponent":
            $result = exponent($num1, $num2);
            break;
        case "percentage":
            $result = percentage($num1, $num2);
            break;
        case "sqrt":
            $result = sqrtValue($num1);
            break;
        case "log":
            $result = logValue($num1);
            break;
        default:
            $result = "Invalid operation";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator Result</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Calculator Result</h1>
        <?php
        // Display the result
        if (isset($result)) {
            echo "<h2>Result: $result</h2>";
        } else {
            echo "<h2>No calculation performed</h2>";
        }
        ?>
        <a href="index.php">Back to Calculator</a>
    </div>
</body>
</html>
