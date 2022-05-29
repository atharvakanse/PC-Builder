<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="../Product-List/css-styles/product-style.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


        <title>PC Builder</title>
    <style>
        section#about-us > .profile-cards > .card {
            margin: 2rem !important;
        }
    </style>

    

    </head>

        <body>


            <!------------------------------------------------HOME SECTION------------------------------------------------------------->


        <div class="container w-100">

            <nav class="nav-bar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="#references">References</a></li>

                </ul>

            </nav>

            <section id="home">

            <div class="landing-message">

                <h1>Welcome to the  PC Building Portal</h1>

                <p class="">Build your very own PC with a wide range of options.</p>

                <a href="../Product-List/products-list.php" class="button">Let's Get Started</a>  <!---- EDIT HERE----->

            </div>

            </section>


           <!------------------------------------------------ABOUT US SECTION------------------------------------------------------------->


            <section id="about-us">

                <h1>About Us</h1>

                <div class="profile-cards">
 
                    <div class="card">

                        <img src="profile.jpg" alt="John" class="profile-img">
                        <h1>Harshvardhan Latkar</h1>
                        <p class="title">Contributions</p>
                        <p>Front End (HTML, CSS)</p>

                    </div>

                    <div class="card">

                        <img src="profile.jpg" alt="John" class="profile-img">
                        <h1>Ashwin Kumar</h1>
                        <p class="title">Contributions</p>
                        <p>Prototyping (Figma) <br> Front End (HTML, CSS)</p>

                    </div>

                    <div class="card">

                        <img src="profile.jpg" alt="John" class="profile-img">
                        <h1>Atharva Kanse</h1>
                        <p class="title">Contributions</p>
                        <p>Front End, Back End <br> (HTML, CSS, JavaScript)</p>

                    </div>

                  </div>


            </section>


            <!------------------------------------------------REFERENCES SECTION------------------------------------------------------------->


            <section id="references">

               <br><br><br><br><br> <h1>References</h1> <br> <br> <br>

                <div class="ref-logo">

                    <div class="gallery">
                        <a href="https://www.w3schools.com/default.asp" target="_blank">
                        <img src="logo/w3schools.png" alt="Cinque Terre" class="logo">
                        </a>
                        <div class="desc">W3 Schools</div>
                    </div>
                    
                    <div class="gallery">
                        <a href="https://developer.mozilla.org/en-US/" target="_blank">
                        <img src="logo/mdn-web-docs.png" alt="Forest" class="logo">
                        </a>
                        <div class="desc">MDN Web Docs</div>
                    </div>
                    
                    <div class="gallery">
                        <a href="https://color.adobe.com/create/image" target="_blank">
                        <img src="logo/adobe-color.png" alt="Northern Lights" class="logo">
                        </a>
                        <div class="desc">Adobe Color</div>
                    </div>
                    
                    <div class="gallery">
                        <a href="https://getbootstrap.com" target="_blank">
                        <img src="logo/bootstrap.png" alt="Mountains" class="logo">
                        </a>
                        <div class="desc">Bootstrap</div>
                    </div>

                    <div class="gallery">
                        <a href="https://unsplash.com" target="_blank">
                        <img src="logo/unsplash.png" alt="Mountains" class="logo">
                        </a>
                        <div class="desc">Unsplash</div>
                    </div>

                    <div class="gallery">
                        <a href="https://www.figma.com" target="_blank">
                        <img src="logo/figma.png" alt="Mountains" class="logo">
                        </a>
                        <div class="desc">Figma</div>
                    </div>
                    
                    <div class="gallery">
                        <a href="https://github.com" target="_blank">
                        <img src="logo/github.png" alt="Mountains" class="logo">
                        </a>
                        <div class="desc">GitHub</div>
                    </div>
                    
                </div>
                  
            </section>
        </div>
        <!-- <?php include "../Product-List/main-footer.php" ?> -->
      
    </body>


</html>