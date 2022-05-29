<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css-styles/product-style.css"> -->
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
                    <img class="col-sm-12" src="images/AMD-Ryzen-5-5600-Desktop-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 5 5600 DESKTOP PROCESSOR (UP TO 3.5GHZ) (100-100000927BOX)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹17,390.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-Ryzen-7-Pro-4750G-Open-Box-OEM-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 7 PRO 4750G OPEN BOX OEM DESKTOP PROCESSOR (RYZEN-7-PRO-4750G)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹27,950.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-Ryzen-5-4500-Open-Box-OEM-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 5 4500 OPEN BOX OEM DESKTOP PROCESSOR (RYZEN-5-4500-OEM)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹12,790.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-Ryzen-3-Pro-4350G-Open-Box-OEM-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 3 PRO 4350G OPEN BOX OEM DESKTOP PROCESSOR (RYZEN-3-PRO-4350G-OEM)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹12,200.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-RYZEN-7-5800X3D-PROCESSOR-UPTO-4.5GHZ-100MB-CACHE-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 7 5800X3D PROCESSOR (UPTO 4.5GHZ, 100MB CACHE)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹42,690.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/Intel-Core-I9-12900KS-Desktop-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>INTEL CORE I9-12900KS LGA1700 16 CORES DESKTOP PROCESSOR (BX8071512900KS)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹66,500.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-Ryzen-3-Pro-4350G-Open-Box-OEM-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 3 PRO 4350G OPEN BOX OEM DESKTOP PROCESSOR (RYZEN-3-PRO-4350G-OEM)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹12,200.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-RYZEN-7-5800X3D-PROCESSOR-UPTO-4.5GHZ-100MB-CACHE-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 7 5800X3D PROCESSOR (UPTO 4.5GHZ, 100MB CACHE)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹42,690.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/Intel-Core-I9-12900KS-Desktop-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>INTEL CORE I9-12900KS LGA1700 16 CORES DESKTOP PROCESSOR (BX8071512900KS)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹66,500.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-Ryzen-3-Pro-4350G-Open-Box-OEM-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 3 PRO 4350G OPEN BOX OEM DESKTOP PROCESSOR (RYZEN-3-PRO-4350G-OEM)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹12,200.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-RYZEN-7-5800X3D-PROCESSOR-UPTO-4.5GHZ-100MB-CACHE-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 7 5800X3D PROCESSOR (UPTO 4.5GHZ, 100MB CACHE)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹42,690.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/Intel-Core-I9-12900KS-Desktop-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>INTEL CORE I9-12900KS LGA1700 16 CORES DESKTOP PROCESSOR (BX8071512900KS)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹66,500.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-Ryzen-3-Pro-4350G-Open-Box-OEM-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 3 PRO 4350G OPEN BOX OEM DESKTOP PROCESSOR (RYZEN-3-PRO-4350G-OEM)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹12,200.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/AMD-RYZEN-7-5800X3D-PROCESSOR-UPTO-4.5GHZ-100MB-CACHE-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>AMD RYZEN 7 5800X3D PROCESSOR (UPTO 4.5GHZ, 100MB CACHE)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹42,690.00</p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary">Add to Cart</button>                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 card m-2 shadow row">
                    <img class="col-sm-12" src="images/Intel-Core-I9-12900KS-Desktop-Processor-1.jpg" alt="product image">
                    <div class="card-body col-sm-12">
                        <a href="main-products-details.php"><h5>INTEL CORE I9-12900KS LGA1700 16 CORES DESKTOP PROCESSOR (BX8071512900KS)</h5></a>
                        <div class="m-2 justify-content-center d-flex fs-26">
                            <p>₹66,500.00</p>
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
            
            
            
            
