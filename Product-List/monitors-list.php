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
                <img class="col-sm-12 m-3" src="images/AOC-C27G1-27-Inch-Class-LED-Gaming-Monitor-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">AOC C27G1 27" CLASS LED FULL HD VA 1800R GAMING MONITOR</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹25,200.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Asus-ProArt-Display-PA278QV-SRGB-Professional-Monitor-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ASUS PROART DISPLAY PA278QV 100% SRGB PROFESSIONAL MONITOR</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹29,980.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/BENQ-EW3270U-4K-HDR-31.5-INCH-WITH-EYE-CARE-GAMING-MONITOR-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">BENQ EW3270U 4K HDR 31.5 INCH WITH EYE-CARE GAMING MONITOR</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹30,650.00/p>
                            </div>
                            <div class="d-flex w-100 align-items-center justify-content-center">
                                <button type="button" class="btn btn-primary">Add to Cart</button>                
                            </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Dell-P2722H-27-Inch-Full-HD-Monitor-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">DELL P2722H PROFESSIONAL 27 INCH FULL HD MONITOR (BLACK)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹20,900.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Gigabyte-G27F-Gaming-Monitor-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">GIGABYTE G27F 27 INCH GAMING MONITOR</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹18,480.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/25UM58-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">LG 25UM58-P Ultra Wide Borderless Monitor</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹14,500.00</p>
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
            



