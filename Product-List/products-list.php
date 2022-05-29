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
                <img class="col-sm-12" src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"  target="_blank"><h5>PHANTEKS PCI-E 4.0 X16 300mm RISER CABLE (BLACK) (PH-CBRS4.0-FL30)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹5,290.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary" id="liveToastBtn">Add to Cart</button>                
                    </div>
                    <?php include "toast.php"?>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Razer-Seiren-Mini-Microphone-Mercury-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>RAZER SEIREN MINI STREAMING MICROPHONE (MERCURY) (RZ19-03450300-R3M1)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹3,699.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/LIAN-LI-STRIMER-PLUS-24-PIN-ARGB-EXTENSION-CABLE-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>LIAN LI STRIMER PLUS 24-PIN ARGB EXTENSION CABLE (G89-PW24-PV2-IN)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹4,990.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>

                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/ASUS-ROG-Clavis-USB-C-to-3.5mm-Gaming-DAC-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>RASUS ROG CLAVIS USB-C To 3.5MM GAMING DAC (90YH02N0-B2UA00)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹8,500.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Lian-Li-O11D-EVO-PCI-E-4.0-X16-Vertical-GPU-Kit-For-O11-Dynamic-EVO-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>LIAN LI O11D-EVO (PCI-E 4.0 X16) VERTICAL GPU KIT FOR O11 DYNAMIC EVO (BLACK) (G89-O11DE-1X-IN)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹5,290.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>

                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Phanteks-Digital-RGB-LED-Strips-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>PHANTEKS DIGITAL RGB LED COMBO STRIPS (PH-DRGBLED-CMBO-01)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹1,890.00</p>
                    </div>
                    <div class="d-flex w-100 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Lian-Li-O11D-EVO-PCI-E-4.0-X16-Vertical-GPU-Kit-For-O11-Dynamic-EVO-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>COOLER MASTER ATX POWER SUPPLY BRACKET FOR THE MASTERBOX NR200 & NR200P (BLACK) (MCA-NR200C-KPSU00)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹1,700.00</p>
                    </div>
                    <div class="d-flex w-100 mt-0 m-2 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Arctic-MX-5-Thermal-Paste-4g-Without-Spatula-1.png" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>ARCTIC MX-5 THERMAL PASTE 4G WITHOUT SPATULA (ACTCP00045A)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹800.00</p>
                    </div>
                    <div class="d-flex w-100 mt-0 m-2 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            <div class="col-xl-3 card m-2 shadow row">
                <img class="col-sm-12" src="images/Deepcool-FH10-1.jpg" alt="product image">
                <div class="card-body col-sm-12">
                    <a href="main-products-details.php"><h5>DEEPCOOL FH10 FAN HUB (SUPPORT UP TO 10 FANS) (DP-F10PWM-HUB)</h5></a>
                    <div class="m-2 justify-content-center d-flex fs-26">
                        <p>₹1,300.00</p>
                    </div>
                    <div class="d-flex w-100 mt-0 m-2 align-items-center justify-content-center">
                        <button type="button" class="btn btn-primary">Add to Cart</button>                
                    </div>
                </div>
            </div>
            
            <div class="w-100 d-flex justify-content-center mt-4">
                <button type="button" class="btn btn-primary btn-lg justify-content-center align-items-center" onclick="location.href='../Payment-page/payment-page.php'">Place Order<img class="ms-2 me-2 mt-0 text-light" src="icons/arrow-right-circle.svg" alt=""></button>                
            </div>
            <!-- <div class="accordion" id="brand-accordian">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <p class="fw-bold fs-26 ">Filter Brand</p><hr>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#brand-accordian">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div> -->

        </div>    
    </div>

    
    <?php include "main-footer.php" ?>

</body>
</html>