<!-- task1.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matrix = $_POST["matrix"];
    $rows = explode(";", $matrix);
    $negativeCount = 0;

    foreach ($rows as $row) {
        $elements = explode(",", $row);
        $zeroCount = 0;
        foreach ($elements as $element) {
            if ($element == 0) {
                $zeroCount++;
            }
        }
        if ($zeroCount > 1) {
            foreach ($elements as $element) {
                if ($element < 0) {
                    $negativeCount++;
                }
            }
        }
    }
    echo "Количество отрицательных элементов: $negativeCount";
}
?>