<?php 
include 'db.php';

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "INSERT INTO newsletter (email) VALUES('$email')";

    $result = mysqli_query($connection,$sql);

    if($result) {
      header("Message sent successfully");
    }else {
        die("There was a problem sending us your Message");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>which_choice?</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/lolo.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <nav>
    <div class="wrapper">
      <div class="logo" ><a href="index.html">WHICH_CHOICE? </a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li>
          <a href="#" class="desktop-item">Technology</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Technology</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="img/tec.png" alt="">
              </div>
              <div class="row">
                <header>Computing</header>
                <ul class="mega-links">
                  <li><a href="404.html?name=google.com" target="_blank">Graphics</a></li>
                  <li><a href="404.html" target="_blank">Vectors</a></li>
                  <li><a href="404.html" target="_blank">Business cards</a></li>
                  <li><a href="404.html" target="_blank">Custom logo</a></li>
                  <li><a href="404.html" target="_blank">Site Seal</a></li>
                  <li><a href="404.html" target="_blank">VPS Hosting</a></li>
                  <li><a href="404.html" target="_blank">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Smart device and Gadgets</header>
                <ul class="mega-links">
                  <li><a href="404.html">Personal Email</a></li>
                  <li><a href="404.html">Business Email</a></li>
                  <li><a href="404.html">Mobile Email</a></li>
                  <li><a href="404.html">Web Marketing</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Wearable technology</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="#" class="desktop-item">Cars & travel</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Cars & travel</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="img/ct.jpg" alt="">
              </div>
              <div class="row">
                <header>Vehicle</header>
                <ul class="mega-links">
                  <li><a href="http://www.globalab.club">Global Auto</a></li>
                  <li><a href="http://www.kastrucks.com">ETS KAS TRUCKS</a></li>
                  <li><a href="http://www.mpscameroon.com">MPS Cameroon</a></li>
                  <li><a href="http://www.camlogistico.com">Cam Logis Inc</a></li>
                  <li><a href="http://www.etsangel.com">ETS ANGEL EXPORT</a></li>
                  <li><a href="http://www.forcetyre.com">FORCE TYRE S.</a></li>
                  <li><a href="http://www.unitedcaragent.com">UNITEDCARAGENT</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Email Services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Personal Email</a></li>
                  <li><a href="404.html">Business Email</a></li>
                  <li><a href="404.html">Mobile Email</a></li>
                  <li><a href="404.html">Web Marketing</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Top selling Cars</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="#" class="desktop-item">Home & Garden</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Home & Garden</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="img/Screenshot 2022-01-23 145036.jpg" alt="">
              </div>
              <div class="row">
                <header>Design Services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Email Services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Security services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="#" class="desktop-item">Baby & child</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Baby & child</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="img/baby-toddler-routine.jpg" alt="">
              </div>
              <div class="row">
                <header>Design Services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Email Services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Security services</header>
                <ul class="mega-links">
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">VPS Hosting</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Website design</a></li>
                  <li><a href="404.html">Site Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                  <li><a href="404.html">Privacy Seal</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="#" class="desktop-item">Money </a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Money</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="img/money-and-banks.jpg" alt="">
              </div>
              <div class="row">
                <header>Banks</header>
                <ul class="mega-links">
                  <li><a href="http://www.afrilandfirstbank.com">Afriland First Bank</a></li>
                  <li><a href="http://www.banquetlantique-cmr.com/en/groupe-afg">Atlantic Bank</a></li>
                  <li><a href="http://www.bicec.com">BICEC</a></li>
                  <li><a href="http://www.scbcameroun.net">SCB Cameroun</a></li>
                  <li><a href="http://www.citigroup.com/citi/">Citibank</a></li>
                  <li><a href="http://www.cbc-bank.com">CBC</a></li>
                  <li><a href="http://www.ubagroup.com">UBA</a></li>
                </ul>
              </div>
              <div class="row">
                <header>International</header>
                <ul class="mega-links">
                  <li><a href="http://www.beac.int">BEAC</a></li>
                  <li><a href="http://www.groupebgfibank.com">BGFI Bank</a></li>
                  <li><a href="http://www.ecobank.com/cm/personal-banking">Ecobank</a></li>
                  <li><a href="http://www.sc.com">SCB</a></li>
                  <li><a href="http://www.unionbankcameroon.com">UBC</a></li>
                  <li><a href="http://www.attijarisecurities.com">ASCA</a></li>
                  <li><a href="http://www.credit-agricole.com">Credit Agricole G.</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Loans</header>
                <ul class="mega-links">
                  <li><a href="http://www.sc.com">SCB.</a></li>
                  <li><a href="http://www.ecobank.com/cm/personal-banking/">Ecobank</a></li>
                  <li><a href="http://www.credit-agricole.com">Credit Agricole G.</a></li>
                  <li><a href="http://www.attijarisecurities.com">ASCA</a></li>
                  <li><a href="http://www.groupebgfibank.com">BGFI Bank</a></li>
                  <li><a href="http://www.cca-bank.com">CCA Bank</a></li>
                  <li><a href="http://www.beac.int">BEAC</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
        
        <li><a href="about-us.php">About</a></li>
        <li><a href="contact.php">contact us</a></li>
        
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
 
        
<div class="space">
    <br><hr>
</div>


<!------------offer------------->
<div class="offer">
  <h2 class="title ">About Us </h2>
  <div class="small-container">
      <div class="row">
          <div class="col-lg-6 col-12 ps-3 animate__animated animate__fadeInDownBig">
              <img src="img/jbh.jpg " class="offer-img"  width="80%">
          </div>
          <div class="col-lg-6 col-12 px-3 animate__animated animate__fadeInLefttBig">
                  <p>Get to know more about us.</p>
                  <h1><strong> WHICH_CHOICE?</strong></h1>
                  <small>The smart band feature a 50.77% larger(than mi band 5)
                      Amoled color full-soft display with adjustable brightness,
                       so everything is clear as can be!!<br> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque culpa modi, 
                        officiis beatae libero, nesciunt voluptatum pariatur praesentium eum eaque suscipit laborum!
                        Lorem ipsum dolor <br>sit amet consectetur adipisicing.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ducimus sequi necessitatibus similique fugit soluta non, hic minus possimus repellendus saepe!
                            Lorem ipsum dolor sit amet consectetur.</p>
                      </small>
          </div>
      </div>
  </div>
</div>

<!-- our team -->
<div class="py-5 team4">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-7 text-center">
        <h3 class="mb-3">Experienced & Professional Team</h3>
        <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
      </div>
    </div>
    <div class="row">
      <!-- column  -->
      <div class="col-lg-3 mb-4" class="offer-img">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-lg-3 mb-4">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
          </div>
          <div class="col-md-12 text-center">
            <div class="pt-2">
              <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
              <h6 class="subtitle mb-3">Property Specialist</h6>
              <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
    </div>
  </div>
</div>
<!-- close team -->


<section class="newsletter">
  <form action="" method="POST">
  <div class="container">
  <div class="row">
  <div class="col-sm-12">
    <div class="content">
      <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
    <div class="input-group d-flex align-items-center">
           <input type="email" class="form-control" id="contact-email" placeholder="Enter your email" name="email">
           <div class="input-group-btn">
           <button name="submit" class="btn" type="submit" >Subscribe Now</button>
           </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </form>
  </section>

<!----------------------footer---------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <a href="" ><img src="img/playstore.png" ></a>
                    <a href="" ><img src="img/appstore.png" ></a>

                </div>
            </div>
            <div class="footer-col-3">
                <h2>which_choice?</h2><br>
                <p>Our Purpose is to sustainably make the pleasure and benefit of rest accesible to the world.</p>
            </div>
            <div class="footer-col-3">
                <h3>Usefull links</h3>
                <ul>
                    <li><a href="" >Money & serices</a></li>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Baby & Child</a></li>
                    <li><a href="">Cars & Transportation</li>
                    <li><a href="">Home & Garden</a></li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Youtube</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2022!!!  which_choice</p>
    </div>
</div>
<!----------------js for toggle menu-------------------------->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

<script>
    
 var menuitems= document.getElementById("menuites")

 menuitems.style.maxHeight="0px";

 function menutoggle(){
     if(menuitems.style.maxHeight == "0px")
     {
         menuitems.style.maxHeight = "200px"
     }
     else
     {
        menuitems.style.maxHeight="0px";
     }
 }
</script>
<script src="./bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="./bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//code.tidio.co/rjorsgv81tyednjaysptxppc1pjg12ma.js" async></script>
</body>
</html>
</body>
</html>