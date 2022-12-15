<?php 
    
    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $xml = simplexml_load_file("data.xml");

        $i = 0; 

        foreach($xml->item as $flower) {
            if ($flower['id'] == $id) {
                unset($xml->item[$i]);
                break;
            }
            $i++;
        }

        $xml->saveXML("data.xml");
        echo "<script>location.href='index.php'</script>";
    }
?>