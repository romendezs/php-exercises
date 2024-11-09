<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fibonacci'])) {
    $n = intval($_POST['fibonacci']);
    
    if ($n <= 0) {
        echo "Please enter a positive integer.";
        exit;
    }

    $fibonacci = array(0, 1);
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    foreach ($fibonacci as $index => $number) {
        if ($index >= $n) break;  // Limit output to the requested $n numbers
        echo "$number <br>";
    }
} else {
    echo "No input was received. Please go back and submit the form.";
}
?>
