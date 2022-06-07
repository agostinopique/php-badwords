<?php
$loremParagraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, ea nostrum laborum ad eligendi aliquid necessitatibus cumque accusamus dolor, maxime tempore officia nisi recusandae expedita corporis sunt eius error dolorem commodi. Ipsam repellendus aliquid tempora sunt officiis, perspiciatis atque corporis impedit iste doloribus, natus praesentium. Id soluta, aut officiis facere, deserunt eaque, ut impedit possimus fuga odio neque. Ipsam porro, eos dolorum, pariatur error, adipisci fugiat hic quo corrupti ea harum quisquam doloribus labore doloremque facilis. Consequuntur ea eligendi reiciendis architecto? Mollitia tempora delectus accusamus nesciunt aut, sapiente repudiandae rem commodi iste qui quo molestiae non corporis nostrum. Id, corporis!";

$noSpaceParagraph = str_replace(" ", "", $loremParagraph);
// CONTEGGIO DEI CARATTERI AGGIUNTO DIRETTAMENTE IN HTML
// $paragraphLength = strlen($noSpaceParagraph);
// $paragraphLength = strlen($loremParagraph);

$censoredParagraph = str_ireplace($_GET["badword"], "***", $loremParagraph);
$censNoSpaceLength = str_replace(" ", "", $censoredParagraph);
// CONTEGGIO DEI CARATTERI AGGIUNTO DIRETTAMENTE IN HTML
// $censParaLength = strlen($censNoSpaceLength);

echo (substr_count($loremParagraph, $_GET["badword"]) * 3);
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

    <h2>Il paragrafo é il seguente:</h2>

    <p><?php echo $loremParagraph ?></p>
    <p>Il paragrafo é lungo <?php echo strlen($noSpaceParagraph)?> caratteri.</p>

    <hr>
    
    <h2>Questo é il paragrafo censurato:</h2>
    
    <p><?php echo $censoredParagraph ?></p>
    <p>Il paragrafo é lungo <?php echo strlen($noSpaceParagraph) - (substr_count($loremParagraph, $_GET["badword"]) * 3)?> caratteri.</p>
</body>
</html>