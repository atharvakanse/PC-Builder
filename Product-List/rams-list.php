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
                <img class="col-sm-12" src="images/Adata-8GB-8GBx1-DDR5-4800MHz-RAM-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ADATA 8GB (8GBx1) DDR5 4800MHz DESKTOP RAM (AD5U48008G-S)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹6,260.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Adata-XPG-Gammix-D30-16GB-16GBx1-DDR4-3200MHz-Red-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ADATA XPG GAMMIX D30 16GB (16GBx1) DDR4 3200MHZ DESKTOP RAM (RED) (AX4U320016G16A-SR30)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹4,990.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/ADATA-XPG-Gammix-D30-Series-8GB-8GBX1-DDR4-3200MHz-RAM-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ADATA XPG GAMMIX D30 SERIES 8GB (8GBX1) DDR4 3200MHZ RAM (AX4U32008G16A-SR30)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹2,699.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/CORSAIR-CMK16GX4M1D3000C16-Desktop-Ram-Vengence-Lpx-Series-16GB-16GBx1-DDR4-3000MHz-1-2.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CORSAIR Desktop Vengence LPX Series - 16GB (16GBx1) DDR4 3000MHz RAM (CMK16GX4M1D3000C16)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹5,490.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Corsair-Dominator-Platinum-RGB-32GB-16GBx2-DDR5-5600MHz-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CORSAIR DOMINATOR PLATINUM RGB 32GB (16GBx2) DDR5 5600MHz RAM (BLACK) (CMT32GX5M2X5600C36)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹33,500.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Corsair-Dominator-Platinum-RGB-DDR5-32GB-16GBx2-5600MHz-RAM-White-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CORSAIR DOMINATOR PLATINUM RGB DDR5 32GB (16GBx2) 5600MHZ RAM (WHITE) (CMT32GX5M2B5600C36W)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹34,750.00</p>
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
            

