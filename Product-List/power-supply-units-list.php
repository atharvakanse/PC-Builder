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
                <img class="col-sm-12 m-3" src="images/ANT-ESPORTS-FP550B-BRONZE-FORCE-SERIES-POWER-SUPPLY-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ANT ESPORTS FP550B BRONZE FORCE SERIES POWER SUPPLY</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹2,790.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/ANTEC-CSK-750H-SEMI-MODULAR-750-WATT-80-PLUS-BRONZE-CERTIFIED-POWER-SUPPLY-5.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ANTEC CSK 750H SEMI MODULAR 750 WATT 80 PLUS BRONZE CERTIFIED POWER SUPPLY</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹5,550.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Asus-ROG-THOR-1200P-1200-Watt-80-Plus-Platinum-SMPS-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ASUS ROG THOR 1200P 1200 WATT 80 PLUS PLATINUM POWER SUPPLY (90YE0080-B001I0)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹28,700.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/cooler-master-g600-80-plus-gold-power-supply-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">COOLER MASTER G600 GOLD 80 PLUS GOLD POWER SUPPLY (MPW-6001-ACAAG)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹5,740.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/CORSAIR-RMX-SERIES-RM1000X-—-1000-WATT-FULLY-MODULAR-PSU-5.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CORSAIR RMX SERIES RM1000X — 1000 WATT FULLY MODULAR PSU</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹16,100.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/DEEPCOOL-DQ850-M-V2L-POWER-SUPPLY-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">DEEPCOOL DQ850-M-V2L POWER SUPPLY</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹8,500.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "main-footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>            
            
            
            
            
