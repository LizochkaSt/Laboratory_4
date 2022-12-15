<?php  

$xml = simplexml_load_file("data.xml");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@500&family=Nunito:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com"     crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@500&family=Nunito:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@500&family=Nunito:wght@500&family=Poppins:wght@500&family=Work+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@500&family=Nunito:wght@500&family=Poppins:wght@500&family=Raleway&family=Work+Sans&display=swap" rel="stylesheet">

    <title>Shop of flowers</title>
</head>
<body>
    <body>
        <header class="header">
    
            <div>
            <img class="header_photo" src="images/main_photo.jpg" alt="Woman caring for flowers">
            </div>

            <div>
            <ul class="header_items">
                <li class="header_item">
                   <img src="images/search 1.png" alt="Search">
                </li>
                <li class="header_item">
                   <img src="images/shopping-cart 1.png" alt="Shopping cart">
                </li>
                <li class="header_item buttom">
                    <a>Sign up</a> 
                </li>
                <li class="header_item buttom">
                    <a>Sign In</a>
                </li>
            </ul>

            <h1>Kembang  <br> Flower Mantap</h1>

            <div class="header_description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            </div>
            </div>

        </header>
    
        <main> 
           <section class="benefits container">
            <div class="benefits_item">
                <div class="top_part_benefits">
                <img class="benefit_sign" src="images/fast 1.png" alt="Fast car">
                <div class="benefit_name">Fast <br> Delivery</div>
                </div>

                <div class="benefit_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </div>
            </div>
            <div class="benefits_item">
                <div class="top_part_benefits">
                    <img class="benefit_sign" src="images/headphones.png" alt="Headphones">
                     <div class="benefit_name">Great Customer <br> Service</div>
                </div>
    
                <div class="benefit_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </div>
            </div>
            <div class="benefits_item">
                <div class="top_part_benefits">
                    <img class="benefit_sign" src="images/plant 1.png" alt="Plant">
                    <div class="benefit_name">Original <br> Plants</div>
                </div>

                <div class="benefit_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </div>
            </div>
            <div class="benefits_item">
                <div class="top_part_benefits">
                    <img class="benefit_sign" src="images/dollar-symbol 1.png" alt="Dollar symbol">
                    <div class="benefit_name">Affordable <br> Price</div>
                </div>

                <div class="benefit_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </div>
            </div>
           </section>

            <div class="featured_heading container">
                <h2> Featured Plants </h2>
            </div>

            <section class="featured_plants container">              
       
            <?php foreach($xml->item as $flower) { ?>

                <div class="featured_item">
                    <img src="<?php echo $flower->photo?>" class="featured_item_photo">
                    <div class="featured_item_name"> <?php echo $flower->name?> </div>
                    <div class="featured_item_cost"> <?php echo $flower->cost?> </div>
                    <div class="featured_link_1">
                        <a href="change.php?id=<?php echo $flower['id'] ?>" class="buttom">Изменить</a>
                    <div>
                    <br>
                    <div class="featured_link_2">
                        <a href="delete.php?id=<?php echo $flower['id'] ?>" class="buttom">Удалить</a>
                    </div>
                </div> 

            <?php } ?>

           </section>

           <a href="create.php" class="buttom create"> Добавить новое растение </a>

           <section class="advice container">

            <div class="advice_item">
            <h3>Buy more plants, it helps you to be relaxed </h3>
            <div class="advice_context">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.</div>
            <img class = "advice_pict1" src="images/advice_picture_bottom.png" alt="Mirror and flower">
            </div>

            <img class="advice_item advice_pict2" src="images/advice_picture_right.png" alt="Flowers on the wall">
        
           </section>

           <section class="visit_shop container">

            <div class="visit_shop_first">
            <div class="visit_shop_description">Get your favourites plant on our shop now</div>
            <a class="visit_shop_link buttom">Visit Shop</a>
            </div>

            <img class="visit_shop_second" src="images/visit_shop_photo.png" alt="Visit shop" class="visit_shop_photo">

           </section>
        </main>

        <footer class="footer">
            <div class="footer_first_column footer_item">
                <div class="footer_1c_1row">plantku</div>
                <div class="footer_1c_2row">Plantku House</div>
                <div class="footer_1c_3row">Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282</div>
            </div>
            <div class="footer_second_column footer_item">
                <div class="footer_2-4c_1row">Perusahaan</div>
                <div class="footer_2-3c_2-3row">Tentang Kami</div>
                <div class="footer_2-3c_2-3row">Hubungi Kami</div>
            </div>
            <div class="footer_third_column footer_item">
                <div class="footer_2-4c_1row">Produk</div>
                <div class="footer_2-3c_2-3row">Tanaman</div>
                <div class="footer_2-3c_2-3row">Tanaman Lain</div>
            </div>
            <div class="footer_fourth_column footer_item">
                <div class="footer_2-4c_1row">Berlangganan Email Kami</div>
                <div class="footer_4c_2row">Masukan Alamat Email</div>
                <div class="footer_4c_3row buttom">
                    <a>Submit</a>
                </div>
            </div>
        </footer>
    </body>
</html>