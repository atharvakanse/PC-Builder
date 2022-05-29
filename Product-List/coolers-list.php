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
            height: 34rem !important;
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
                <img class="col-sm-12 m-3" src="images/Arctic-Freezer-A35-A-RGB-CPU-Cooler-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ARCTIC FREEZER A35 A-RGB TOWER CPU COOLER FOR AMD (ACFRE00115A)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹3,900.00.png</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/ASUS-ROG-RYUJIN-II-360-all-in-one-liquid-CPU-cooler-with-3.5-LCD-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ASUS ROG RYUJIN II 360 ALL-IN-ONE CPU LIQUID COOLER WITH 3.5 INCH LCD</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹24,500.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Corsair-H100x-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">COOLER MASTER HYPER H410R RGB LED CONTROLLER CPU COOLER</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹1,770.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/DEEPCOOL-AK620-WH-CPU-COOLER-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CORSAIR H100X 120MM SP SERIES CPU LIQUID COOLER (CW-9060040-WW)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹8,275.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/DEEPCOOL-GAMMAXX-400-PRO-BLUE-CPU-COOLER-1-new.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">DEEPCOOL GAMMAXX 400 PRO BLUE CPU COOLER (DP-MCH4-GMX400PRO-BL)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹2,230.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Gigabyte-Aorus-240-ARGB-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">GIGABYTE AORUS 240 ARGB Liquid Cooler</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹13,550.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "main-footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>            
            
            
            
            
