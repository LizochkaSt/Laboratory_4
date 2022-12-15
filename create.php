<?php 
    if (isset($_POST['submit'])) {
        
        $imgflower = $_POST['imgflower'];
 
        $nameflower = $_POST['nameflower'];
   
        $costflower = $_POST['costflower'];

        $xml = simplexml_load_file("data.xml");

        $lastEl = $xml->item[$xml->count() - 1];

        $newflower = $xml->addChild('item', '');
        $newflower->addChild('name', $nameflower);
        $newflower->addChild('cost', $costflower);
        $newflower->addChild('img', $imgflower);

        if ($xml->count() != 0){
            $newflower->addAttribute('id', $lastEl['id'] + 1);
        }
        else{
            $newflower->addAttribute('id', 1);
        }

        $xml->saveXML("data.xml");

        echo "<script>
        alert('Ваше растение успешно создано!');
        location.href = 'index.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Создание</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgflower" placeholder="url цветка">
        <br>
        <br>
        <input type="text" name="nameflower" required placeholder="введите название цветка">
        <br>
        <br>
        <input type="text" name="costflower" required placeholder="введите цену цветка">
        <br>
        <br>
        <button type="submit" name="submit">Создать</button>
    </form>

    <a href="index.php">Назад</a>
</body>
</html>