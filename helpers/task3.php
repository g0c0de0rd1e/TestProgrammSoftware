<!-- task3.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $file = $_FILES["file"]["tmp_name"];
    $content = file_get_contents($file);
    $sentences = explode(".", $content);
    $maxSpaces = 0;
    $maxSentence = "";

    foreach ($sentences as $sentence) {
        $spaceCount = substr_count($sentence, " ");
        if ($spaceCount > $maxSpaces) {
            $maxSpaces = $spaceCount;
            $maxSentence = $sentence;
        }
    }
    echo "Предложение с максимальным количеством пробелов: $maxSentence";
}
?>