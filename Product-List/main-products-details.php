<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css-styles/product-list-css.css">
    <style>
        #b-crumb > li > a:hover {
            text-decoration: underline !important;
        }
        #navigation {
            margin-top: 6rem;
        }
        #navigation > ul > li > button {
            color: black;
        }

        #navigation > ul > li > button:focus {
            color: orange;
        }
        .product-preview {
            width: 4rem;
            height: 4rem;
            border: 2px solid black;
            margin-left: 1rem;

        }

        .product-preview:hover {
            border: 2px solid orange;
        }

        .product-image > .prod-images {
            display: flex !important;
            justify-content: center !important;
        }
 

    </style>
</head>
<body>
    <?php include "main-upper-menu.php" ?>
    <div class="container w-100 product-info">
        <div class="row mt-4">
            <div class="col-xl-12 w-100">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb" id="b-crumb">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted fs-14">Home</a></li>
                        <li class="breadcrumb-item"><a href="products-list.php" class="text-decoration-none text-muted fs-14">PC Components List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PC Component</li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-6 product-image">
                <img src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-1.jpg" alt="">
                <div class="mt-4 d-flex d-inline-flex justify-content-center prod-images">
                    <img class="product-preview ms-0" src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-2.jpg" alt="">
                    <img class="product-preview" src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-3.jpg" alt="">
                    <img class="product-preview" src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-5.jpg" alt="">
                    <img class="product-preview" src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-1.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-6" id="product-details">
                <h3>PHANTEKS PCI-E 4.0 X16 300mm RISER CABLE (BLACK) (PH-CBRS4.0-FL30)</h3>
                <div class="share d-flex justify-content-end"><img class="size-14"  src="icons/share.svg" alt=""></div>
                <hr>
                <h4>₹5,290.00</h4>
                <span class="ms-2">Inclusive of all taxes</span>                
                <hr>
                <div class="d-flex" id="product-eligibility">
                    <div class="d-flex flex-column method1 mt-1">
                        <img class="size-22" src="images/payment-method.png" alt="">
                        <h6 class="mt-2">Pay On Delivery</h6>
                    </div>
                    <div class="d-flex flex-column method2 mt-1">
                        <img class="size-22" src="icons/repeat.svg" alt="">
                        <h6 class="mt-2">15 Days Replacement</h6>
                    </div>
                    <div class="d-flex flex-column method3 mt-1">
                        <img class="size-22" src="icons/shield.svg" alt="">
                        <h6 class="mt-2">1 Year Warranty</h6>
                    </div>
                </div>
                <div class="" id="navigation">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tech-specs-tab" data-bs-toggle="tab" data-bs-target="#tech-specs" type="button" role="tab" aria-controls="tech-specs" aria-selected="false">Technical Specs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="add-info-tab" data-bs-toggle="tab" data-bs-target="#add-info" type="button" role="tab" aria-controls="add-info" aria-selected="false">Additional Information</button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mt-2 ms-4">
                                <h6>Features:</h6>
                                <ol>
                                    <li>Dual layer design for high stability and full PCI-e Gen4 x16 speeds</li>
                                    <li>Individual laneway shielding to prevent external EMI/EFI and interference between channels</li>
                                    <li>High-quality soldered contacts for better signal integrity</li>
                                    <li>Flexible form factor allows for easier installation and orientation</li>
                                    <li>Gold-plated connectors for durable and lossless signals</li>
                                </ol>
                                <p>The Phanteks Flat Line PCI-e Gen4 x16 Riser Cable unlocks the full potential of any high-end Gen4 graphics card. The dual layer design improves the performance and stability of the high bandwidth signals ensuring the system is running stable and reliable. Each individual laneway is shielded from EMI/EFI interference to prevent interference between channels to further improve signal integrity.</p> 
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tech-specs" role="tabpanel" aria-labelledby="tech-specs-tab" tabindex="0">
                            <div class="ms-4 mt-2">
                                <table class="table table-light">
                                    <tbody>
                                        <tr>
                                            <td>Model No</td>
                                            <td>PH-CBRS4.0-FL30</td>
                                        </tr>
                                        <tr>
                                            <td>UPC Code</td>
                                            <td>886523002291</td>
                                        </tr>
                                        <tr>
                                            <td>Product Name</td>
                                            <td>Flat Line 300mm PCI-E 4.0 x16 Riser Cable 180</td>
                                        </tr>
                                        <tr>
                                            <td>Chassis support</td>
                                            <td>Enthoo Elite</td>
                                        </tr>
                                        <tr>
                                            <td>Application</td>
                                            <td>Vertical GPU riser extender</td>
                                        </tr>
                                        <tr>
                                            <td>Length</td>
                                            <td>300mm / 11.8 in</td>
                                        </tr>
                                        <tr>
                                            <td>Weight</td>
                                            <td>109.6 g</td>
                                        </tr>
                                        <tr>
                                            <td>PCI-e generation</td>
                                            <td>PCI-E 4.0</td>
                                        </tr>
                                        <tr>
                                            <td>Operation Voltage / Current</td>
                                            <td>12V / 5.5A</td>
                                        </tr>
                                        <tr>
                                            <td>Wattage throughput</td>
                                            <td>66W</td>
                                        </tr>
                                        <tr>
                                            <td>PCB / Wire UL Numbers</td>
                                            <td>E189572 / E252840</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h6 class="mt-2">Packaging Information</h6>
                                <table class="table table-light">
                                    <tbody>
                                        <tr>
                                            <td>Package Dimension</td>
                                            <td>348 x 162 x 27.8 mm</td>
                                        </tr>
                                        <tr>
                                            <td>Package Weight</td>
                                            <td>221.2 g</td>
                                        </tr>
                                        <tr>
                                            <td>Outer box Dimension</td>
                                            <td>360 x 285 x 340 mm</td>
                                        </tr>
                                        <tr>
                                            <td>Outer box Weight</td>
                                            <td>5.1 kg</td>
                                        </tr>
                                        <tr>
                                            <td>Quantity (per outer box)</td>
                                            <td>20 pcs</td>
                                        </tr>
                                        <tr>
                                            <td>Warranty</td>
                                            <td>2 Years Limited</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-info" role="tabpanel" aria-labelledby="add-info-tab" tabindex="0">
                            <div class="ms-4 mt-2">
                                <h6>BRAND</h6>
                                <p>Phanters</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include "main-footer.php" ?>
    <!-- <script src="product-list.js"></script> -->
    <script>
        const firstTabEl = document.querySelector('#myTab li:first-child button')
        const firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    </script>
</body>
</html>