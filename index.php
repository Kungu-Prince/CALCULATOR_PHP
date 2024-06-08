<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DO EVERY MATH</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Every Calculator</h1>
        <form action="calculator.php" method="POST">
            <label for="num1">Number 1:</label>
            <input type="number" step="any" id="num1" name="num1" required>
            <br>

            <label for="num2">Number 2:</label>
            <input type="number" step="any" id="num2" name="num2">
            <br>

            <label for="operation">Operation:</label>
            <select id="operation" name="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="exponent">Exponentiation</option>
                <option value="percentage">Percentage</option>
                <option value="sqrt">Square Root</option>
                <option value="log">Logarithm</option>
            </select>
            <br>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
