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
                <img class="col-sm-12" src="images/Ant-Esports-510-Air-ARGB-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ANT ESPORTS 510 AIR ARGB E-ATX MID TOWER CABINET (BLACK) (510-AIR-ARGB-BLACK)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹4,490.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Antec-DF600-FLUX-ARGB-Cabinet-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">Antec DF600 FLUX ARGB Cabinet (Black)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹6,080.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Asus-Rog-Strix-Helios-GX601-black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">ASUS ROG STRIX HELIOS GX601 (Black)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹24,800.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/COOLER-MASTER-HAF-500-MID-TOWER-BLACK-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">COOLER MASTER HAF 500 MID TOWER - BLACK (H500-KGNN-S00)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹9,890.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Fractal-Design-Torrent-Gray-E-ATX-Tempered-Glass-Window-High-Airflow-Mid-Tower-Cabinet-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">FRACTAL DESIGN TORRENT GREY E-ATX TEMPERED GLASS WINDOW HIGH-AIRFLOW MID TOWER CABINET (FD-C-TOR1A-02)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹20,590.00</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Gamdias-Argus-E2-Elite-ARGB-Cabinet-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5 class="text-center">GAMDIAS ARGUS E2 ELITE ARGB ATX MID TOWER CABINET (BLACK) (ARGUS-E2-ELITE)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹3,400.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "main-footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>            
            
            
            
            
