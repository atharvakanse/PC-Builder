<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css-styles/product-style.css">
</head>
<body>
    <?php include "main-upper-menu.php" ?>
    <div class="main-content row">
        <div class="col-xl-3">
            <div class="pc-components mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Components Categories</p></div>
                <ul class="fw-bold">
                    <li>Processor</li><hr>
                    <li>Motherboard</li><hr>
                    <li>RAM</li><hr>
                    <li>Storage 1</li><hr>
                    <li>Storage 2</li><hr>
                    <li>Cabinet</li><hr>
                    <li>Cooler</li><hr>
                    <li>Graphics Card</li><hr>
                    <li>Power Supply Unit</li><hr>
                    <li>Monitor</li><hr>
                </ul>
            </div>
            <div class="price-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Price</p><hr></div>
                <div>
                    <label for="customRange3" class="form-label ms-2">Example range</label>
                    <input type="range" class="ms-2 form-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
            </div>
            <div class="brand-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Brand</p><hr></div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Ant Esports</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Arctic</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Asus</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">BYSKI</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Cooler Master</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Corsair</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Deepcool</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Elgato</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Gamdias</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">HyperX</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">KINGPING COOLING</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Logitech</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">MAD CATZ</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">MSI</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">NOCTUA</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Nvidia</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">NZXT</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">PHANTEKS</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Razer</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">SSUPD</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">Thermal Grizzly</label>
                </div>
                <div class="form-check ms-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label fw-bold fs-12" for="flexCheckChecked">THRUSTMASTER</label>
                </div>
            </div>
            <div class="style-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Style</p><hr></div>
                <select class="ms-2 form-select" aria-label="style-select">
                    <option selected>Any Keyboard Style</option>
                    <option value="1">Mehanical Keyboard</option>
                    <option value="2">Normal Keyboard</option>
                    <option value="3">Gaming Keyboard</option>
                </select>
            </div>
            <div class="cooler-type-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Cooler Type</p><hr></div>
                <select class="ms-2 form-select" aria-label="style-select">
                    <option selected></option>
                    <option value="1">Liquid Cooling</option>
                    <option value="2">Thermal Grease</option>
                </select>
            </div>
            <div class="fan-led-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Fan LED</p><hr></div>
                <select class="ms-2 form-select" aria-label="style-select">
                    <option value="1" selected>RGB (RED-GREEN-BLUE)</option>
                    <option value="2">RED</option>
                    <option value="3">GREEN</option>
                    <option value="4">BLUE</option>
                </select>
            </div>
            <div class="fan-size-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Fan Size</p><hr></div>
                <select class="ms-2 form-select" aria-label="style-select">
                    <option selected></option>
                    <option value="1">120mm</option>
                    <option value="2">130mm</option>
                    <option value="3">140mm</option>
                </select>
            </div>
            <div class="stock-status-filter mt-4 w-100 shadow-sm">
                <div class="fw-bold fs-26 mb-2 ms-2"><p>Filter By Stock Status</p><hr></div>
                <select class="ms-2 form-select" aria-label="style-select">
                    <option selected></option>
                    <option value="1">In-stock</option>
                </select>
            </div>
        </div>
        
        <div class="products-list col-xl-8 h-100 ">
            <div class="card m-2 w-100 shadow row">
                <img class="col-sm-4" src="images/Phanteks-PCI-E-4.0X16-300mm-Riser-Cable-Black-1.jpg" alt="product image">
                <div class="card-body col-sm-8">
                    <a href="main-products-details.php"><h5>PHANTEKS PCI-E 4.0 X16 300mm RISER CABLE (BLACK) (PH-CBRS4.0-FL30)</h5></a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, in. Saepe illum eaque, nesciunt amet earum nulla, necessitatibus labore quas fugit quia maiores accusamus consectetur ea vitae vero! Obcaecati, omnis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt maiores officia culpa fuga, libero blanditiis architecto quod rem. Voluptates autem enim, perferendis beatae dolore nam tenetur provident placeat alias!</p>
                    <div class="m-2 justify-content-start d-flex fs-26">
                        <p>₹5,290.00</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 w-100 shadow row">
                <img class="col-sm-4" src="" alt="">
                <div class="card-body col-sm-8">
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, in. Saepe illum eaque, nesciunt amet earum nulla, necessitatibus labore quas fugit quia maiores accusamus consectetur ea vitae vero! Obcaecati, omnis.</p>
                </div>
            </div>
            <div class="card m-2 w-100 shadow row">
                <img class="col-sm-4" src="" alt="">
                <div class="card-body col-sm-8">
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, in. Saepe illum eaque, nesciunt amet earum nulla, necessitatibus labore quas fugit quia maiores accusamus consectetur ea vitae vero! Obcaecati, omnis.</p>
                </div>
            </div>
            <div class="card m-2 w-100 shadow row">
                <img class="col-sm-4" src="" alt="">
                <div class="card-body col-sm-8">
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, in. Saepe illum eaque, nesciunt amet earum nulla, necessitatibus labore quas fugit quia maiores accusamus consectetur ea vitae vero! Obcaecati, omnis.</p>
                </div>
            </div>
            <div class="card m-2 w-100 shadow row">
                <img class="col-sm-4" src="" alt="">
                <div class="card-body col-sm-8">
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, in. Saepe illum eaque, nesciunt amet earum nulla, necessitatibus labore quas fugit quia maiores accusamus consectetur ea vitae vero! Obcaecati, omnis.</p>
                </div>
            </div>
            <div class="card m-2 w-100 shadow row">
                <img class="col-sm-4" src="" alt="">
                <div class="card-body col-sm-8">
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, in. Saepe illum eaque, nesciunt amet earum nulla, necessitatibus labore quas fugit quia maiores accusamus consectetur ea vitae vero! Obcaecati, omnis.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "main-footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>