<!-- task2.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $position = strpos($inputString, ":");
    if ($position !== false) {
        $result = substr($inputString, 0, $position);
        echo "Символы перед двоеточием: $result";
    } else {
        echo "Двоеточие не найдено.";
    }
}
?>