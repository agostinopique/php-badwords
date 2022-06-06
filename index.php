<?php
$loremParagraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores libero ut debitis minima expedita. Veritatis, reiciendis quibusdam quae fugit consequuntur labore ullam hic inventore itaque eveniet illum, reprehenderit, soluta suscipit!";

// $trimmedParagraph = trim($loremParagraph, " ");
// $paragraphLength = strlen($trimmedParagraph);
$paragraphLength = strlen($loremParagraph);
$censoredParagraph = str_ireplace($_GET["badword"], "***", $loremParagraph);
$censParaLength = strlen($censoredParagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords PHP</title>
</head>
<body>
    <h1>Badwords</h1>
    
    <p><?php echo $loremParagraph ?></p>
    <p>Il paragrafo é lungo <?php echo $paragraphLength?> caratteri.</p>

    <p><?php echo $censoredParagraph ?></p>
    <p>Il paragrafo é lungo <?php echo $censParaLength?> caratteri.</p>
</body>
</html>