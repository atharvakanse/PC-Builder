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
                <img class="col-sm-12" src="images/MSI-MEG-Z690-ACE-MOTHERBOARD-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">MSI MEG Z690 ACE LGA1700 E-ATX MOTHERBOARD (MEG Z690 ACE)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹68,700.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/MSI-PRO-B660M-P-DDR4-Motherboard-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">MSI PRO B660M-P DDR4 LGA1700 MATX MOTHERBOARD</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹10,200.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/MSI-MAG-Z690M-MORTAR-WIFI-Motherboard-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">MSI MAG Z690M MORTAR WIFI LGA1700 MATX MOTHERBOARD</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹12,790.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Asus-Prime-X570-P-CSM-Motherboard-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ASUS PRIME X570-P/CSM AMD AM4 ATX MOTHERBOARD (PRIME-X570-P-CSM)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹16,500.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/GIGABYTE-B560M-DS3H-MOTHERBOARD-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">GIGABYTE B560M DS3H LGA1700 MICRO ATX MOTHERBOARD (B560M-DS3H)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹9,600.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/MSI-PRO-B660-A-DDR4-Motherboard-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">MSI PRO B660-A DDR4 LGA1700 ATX MOTHERBOARD (PRO-B660-A-DDR4)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹14,850.00</p>
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
            
            
            
            
