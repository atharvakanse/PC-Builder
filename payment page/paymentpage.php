<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--custom css file link -->
    <link rel="stylesheet" href="style.css">


</head>
<body>
 
<div class="container">
    
<form action="">

    <div class="row">

        <div class="billing-address col-lg-5 ms-2">

            <h3 class="title fw-bold">BILLING ADDRESS</h3>

            <div class="inputbox">
                <span>Fullname : </span>
                <input type="text"  class="form-control mt-2 mb-2"  placeholder="Rock Lee">
            </div>
            <div class="inputbox">
                <span>Email : </span>
                <input type="email"  class="form-control mt-2 mb-2" placeholder="xyz@example.com">
            </div>
            <div class="inputbox">
                <span>Address : </span>
                <input type="text"  class="form-control mt-2 mb-2" placeholder="Room - street - locality">
            </div>
            <div class="inputbox">
                <span>City : </span>
                <input type="text"   class="form-control mt-2 mb-2" placeholder="Pune">
            </div>

            <div class="flex">

                <div class="inputbox">
                    <span>State : </span>
                    <input type="text"  class="form-control mt-2 mb-2" placeholder="Maharshtra">
                </div>
                <div class="inputbox">
                    <span>Pin Code : </span>
                    <input type="text" class="form-control mt-2 mb-2" placeholder="123 456">
                </div>

            </div>
            
        </div>

        <div class="payment col-lg-6 row ms-4">

            <div class="row">
    
                <h3 class="title fw-bold" style="font-size: 28px;">PAYMENT</h3>

                <div class="inputbox mb-2 col-lg-12">
                    <span>Cards accepted : </span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputbox  col-lg-12 w-100 ">
                    <span>Name on card : </span>
                    <input type="text" class="form-control mt-2 mb-2" placeholder="Mr. Rock Lee">
                </div>
                <div class="inputbox col-lg-12 w-100">
                    <span>Credit Card Number : </span>
                    <input type="number" class="form-control mt-2 mb-2" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputbox col-lg-12 w-100 ">
                    <span>Exp month : </span>
                    <input type="text" class="form-control mt-2 mb-2" placeholder="January">
                </div>
    
                <div class="d-flex">
    
                    <div class="inputbox">
                        <span>Exp year : </span>
                        <input type="number" class="form-control mt-2 mb-2" placeholder="2022">
                    </div>
                    <div class="inputbox ms-2">
                        <span>CVV : </span>
                        <input type="number" class="form-control mt-2 mb-2" placeholder="123">
                    </div>
    
                </div>
                
            </div>
        </div>

    </div>

    <input type="submit" value="Proceed to checkout" class="submit-btn">
</form>

    <?php include "../Product-List/main-footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>

</body>
</html>