<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = (float) $_POST['num1'];
    $operation = $_POST['operation'];
    $num2 = (float) $_POST['num2'];

    $result = null;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error! Division by zero.';
            }
            break;
        default:
            $result = 'Invalid operation';
    }

    header('Location: index.html?result=' . urlencode($result));
    exit();
}
?>
