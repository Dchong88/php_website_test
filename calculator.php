<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            $operation_name = 'Addition';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $operation_name = 'Subtraction';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $operation_name = 'Multiplication';
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            $operation_name = 'Division';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Result:</h2>
        <p>Operation: <?php echo htmlspecialchars($operation_name); ?></p>
        <p>Number 1: <?php echo htmlspecialchars($num1); ?></p>
        <p>Number 2: <?php echo htmlspecialchars($num2); ?></p>
        <p>Result: <?php echo htmlspecialchars($result); ?></p>
    <?php endif; ?>
    <a href="index.html">Back to Calculator</a>
</body>
</html>
