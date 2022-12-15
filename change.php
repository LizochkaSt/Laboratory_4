<?php 
    $xml = simplexml_load_file("data.xml");
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $id = $_GET['id'];

        foreach($xml->item as $flower) {
            if ($flower['id'] == $id) {
                $name = $flower->name;
                $img = $flower->photo;
                $cost = $flower->cost;
                break;
            }
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['id'];

        foreach($xml->item as $flower) {
            if ($flower['id'] == $id) {
                $flower->name = $_POST['nameflower'];
                $flower->cost = $_POST['costflower'];
                $flower->photo = $_POST['imgflower'];
                break;
            }
        }

        $xml->saveXML("data.xml");
        echo "<script>
        alert('Данные успешно обновлены');
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
    <title>Изменение данных</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgflower" value="<?php echo $img ?>">
        <br>
        <br>
        <input type="text" name="nameflower" value="<?php echo $name ?>">
        <br>
        <br>
        <input type="text" name="costflower" value="<?php echo $cost ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <br>
        <br>
        <button type="submit" name="submit">Сохранить</button>
    </form>

    <a href="index.php"> назад</a>
</body>
</html>