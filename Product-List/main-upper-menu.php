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
        #cart > div > .title {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            font-size: 3rem;    
        }
    </style>

</head>
<body>
    <div class="upper-content shadow w-100">
        <div>
            <img src="images/main-logo.jpg" id="main-logo" alt="logo">
        </div>
        <ul class="row w-100 left-side-options">
            <div class="col-sm-2"><li><a class="text-decoration-none text-black" href="../Landing-page/main.php" target="_blank"> Home </a></li></div>
            <div class="col-sm-2"><li><a class="text-decoration-none text-black" href="../Landing-page/main.php #about-us" target="_blank"> About Us </a></li></div>
            <div class="col-sm-2"><li><a class="text-decoration-none text-black" href="">Contact Us </a></li></div>
        </ul>
        <ul class="row w-100 right-side-options">
            <li class="col-sm-1 "><a href="cart.php"><img src="icons/shopping-cart.svg" id="shopping-cart" alt="cart"></a></li>
            <li class="col-sm-1 "><img src="icons/bell.svg" id="shopping-cart" alt="cart"></li>
        </ul>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>