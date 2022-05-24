<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css-styles/product-style.css">
    <style>
        .main-content > div > .brand-filter, .price-filter, .style-filter,
        .cooler-type-filter, .fan-led-filter, .fan-size-filter, .stock-status-filter {
            border: 2px solid lightgrey;
            border-radius: 6px;
            /* margin: 1rem; */
            margin-left: 2rem;
            padding: .5rem;
            height: fit-content;
        }

        .main-content > .products-list > .card {
            display: flex;
            flex-direction: revert;
            height: 28rem !important;
        }

        .main-content > .products-list > .card > .card-body > div > p{
            text-decoration: solid;
            font-weight: bold;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <?php include "main-upper-menu.php" ?>
    <div class="main-content row">
        <?php include "components-categories.php" ?>
        <div class="products-list col-xl-8 row h-100 justify-content-center">
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12 m-3" src="images/Asus-Dual-GeForce-RTX-2060-Evo-6GB-GDDR6-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ASUS DUAL GEFORCE RTX 2060 EVO 6GB GDDR6 GRAPHICS CARD (DUAL-RTX2060-6G-EVO)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹38,500.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Colorful-IGame-RTX-3060-Ti-Ultra-W-OC-V-8GB-Graphics-Card-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">COLORFUL IGAME RTX 3060 TI ULTRA W OC-V 8GB GRAPHICS CARD (IGAME-GEFORCE-RTX-3060TI-ULTRA-W-OC-V)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹59,000.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Galax-GTX-1660-Super-1-Click-OC-6GB-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">GALAX GTX 1660 SUPER (1-Click OC) 6GB GDDR6 GAMING GRAPHICS CARD</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹39,900.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Inno3d-RTX-3060-Twin-X2-OC-LHR-12GB-Graphics-Card-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">INNO3D GEFORCE RTX 3060 TWIN X2 OC LHR 12GB GRAPHICS CARD (N30602-12D6X-11902120H)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹40,900.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/MSI-GEFORCE-RTX-3050-VENTUS-2X-8G-OC-GDDR6-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">MSI GEFORCE RTX 3050 VENTUS 2X 8G OC GDDR6 GRAPHICS CARD</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹34,800.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/NVIDIA-QUADRO-RTX-4000-8GB-GDDR6-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">NVIDIA QUADRO RTX 4000 8GB GDDR6 GRAPHICS CARD</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹63,100.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "main-footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>            
            
            
            
            
