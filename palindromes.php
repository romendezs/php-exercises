<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['palindrome'])) {
    $w = strtolower(strval($_POST['palindrome']));

    $splitted = str_split($w);

    $splitted_reverse = array_reverse($splitted);

    function isPalindrome($splitted, $splitted_reverse){
        for ($i = 0; $i < count($splitted); $i++) {
            if ($splitted[$i] !== $splitted_reverse[$i]) {
                return false;
            }
        }
        return true;
    }

    echo isPalindrome($splitted, $splitted_reverse) ? "The word is palindrome":" The word is NOT palindrome";
} else{
    echo "No input was received. Please go back and submit the form.";
}

?>