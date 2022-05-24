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
                <img class="col-sm-12" src="images/Adata-XPG-Gammix-S11-Pro-1TB-M.2-NVMe-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ADATA XPG GAMMIX S11 PRO 1TB M.2 NVMe SSD (AGAMMIXS11P-1TT-C)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹8,840.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/ANT-ESPORTS-690-NEO-PRO-M.2-NVME-SSD-128GB-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ANT ESPORTS 690 NEO PRO 128GB M.2 NVME SSD (8906136071001)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹1,790.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/ANT-ESPORTS-690-NEO-SATA-2.5INCH-256GB-SSD-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ANT ESPORTS 690 NEO SATA 2.5 INCH 256GB SSD (8906136070950)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹2,210.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Corsair-MP600-Core-2TB-M.2-NVMe-Gen4-Internal-SSD-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CORSAIR MP600 CORE 2TB M.2 NVME GEN4 INTERNAL SSD (CSSD-F2000GBMP600COR)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹22,790.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Crucial-MX500-1000GB-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">CRUCIAL MX500 1000GB</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹8,350.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/GIGABYTE-AORUS-500GB-M.2-NVMe-GEN4-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">GIGABYTE AORUS 500GB M.2 NVMe GEN4</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹10,400.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "main-footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>            
            
            
            
            
