<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <title>Art Gallery</title>
    <!-- bootstrap, CSS, JQuery and JavaScript links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="animation.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="modal-animation.js"></script>

    <!-- stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="artworkstyle.css">

</head>
<body>
<div class = "font">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" id="AG">Art Gallery</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a id="H">Home</a></li>
                <li><a id="AU">About Us</a></li>
                <li><a>Blogs</a></li>
                <li> <a id="SEARCHIT"> Search </a></li>

                <li><a><img id="shopping" data-toggle="modal" data-target="#myModal" src="https://bromilow.com.au/sites/all/themes/chilli/images/icon-cart.png"></a></li>

            </ul>

            <!--Search Dialogue Box-->

            <div class="content" id = "searchform" >

              <form action = 'search.php' method ='GET'>

                     <input type = 'text' size='40' name = 'search' class="searchbox" placeholder="Search artworks..." >

                     <button class="btn btn-dropdown-toggle" type = 'button' name = 'submit' value = 'Search' class="searchbutton">Search</button>

               </form>

            </div>



        </div>

    </nav>

</div>



<div class="container">

    <!-- Modal -->

    <div class="modal fade" id="myModal" role="dialog">

        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title font">Shopping Cart</h4>

                </div>

                <div class="modal-body">

                    <ul style="list-style-type: none;">

                        <li>

                            <div class="item">

                                <!-- Image -->

                                <div class="col-sm-9 col-md-6 col-lg-6">

                                    <img id="soup" src="http://1.bp.blogspot.com/-zekY4NLo1_c/UD_uVdNgEnI/AAAAAAAAAnA/rZuPJJ35Y4w/s1600/32+campbells.jpeg">  <br><br>

                                </div>

                                <div class="cart-font" style="padding-top:0;">

                                    <h3>Campbell Soup</h3>

                                    <p><em style="padding-top:0px;"> Product#22</em></p>

                                    <h4>Price: $200</h4>

                                </div>

                            </div>

                            <div class="quantity">

                                <p class="cart-font cart-text-align">Quantity </p>

                                <div class="container">

                                    <div class="row">

                                        <div class="col-lg-2">

                                            <div class="input-group">

                    <span class="input-group-btn">

                      <button type="button" class="quantity-minus btn btn-danger btn-number" id="minus1"  data-type="minus" data-field="">

                        <span class="glyphicon glyphicon-minus"></span>

                      </button>

                    </span>

                                                <input type="text" id="quantity1" name="quantity" class="form-control input-number"  value="0" min="1" max="20">

                                                <span class="input-group-btn">

                        <button type="button" class="quantity-plus btn btn-success btn-number" id="plus1" data-type="plus" data-field="">

                          <span class="glyphicon glyphicon-plus"></span>

                        </button>

                      </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                        </li>

                        <li>

                            <div class="item">

                                <!-- Image -->

                                <div class="col-sm-9 col-md-6 col-lg-6">

                                    <img id="wwoman" src="https://i.pinimg.com/originals/6c/f6/78/6cf6785c2931400bc048b06a597f23bd.jpg">  <br><br>

                                </div>

                                <div class="cart-font" style="padding-top:0;">

                                    <h3>The Weeping Woman</h3>

                                    <p><em style="padding-top:0px;"> Product#24</em></p>

                                    <h4>Price: $140</h4>

                                </div>



                            </div>

                            <div class="quantity">

                                <p class="cart-font cart-text-align">Quantity </p>

                                <div class="container">

                                    <div class="row">

                                        <div class="col-lg-2">

                                            <div class="input-group">

                    <span class="input-group-btn">

                      <button type="button" class="quantity-minus btn btn-danger btn-number" id="minus2"  data-type="minus" data-field="">

                        <span class="glyphicon glyphicon-minus"></span>

                      </button>

                    </span>

                                                <input type="text" id="quantity2" name="quantity" class="form-control input-number"  value="0" min="1" max="20">

                                                <span class="input-group-btn">

                        <button type="button" class="quantity-plus btn btn-success btn-number" id="plus2" data-type="plus" data-field="">

                          <span class="glyphicon glyphicon-plus"></span>

                        </button>

                      </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                        </li>

                        <li>

                            <div class="item">

                                <!-- Image -->

                                <div class="col-sm-9 col-md-6 col-lg-6">

                                    <img id="snight" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/1280px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg">  <br><br>

                                </div>

                                <div class="cart-font" style="padding-top:0;">

                                    <h3>Starry Night</h3>

                                    <p><em style="padding-top:0;"> Product#21</em></p>

                                    <h4>Price: $120</h4>

                                </div>

                            </div>

                            <div class="quantity">

                                <p class="cart-font cart-text-align">Quantity </p>

                                <div class="container">

                                    <div class="row">

                                        <div class="col-lg-2">

                                            <div class="input-group">

                    <span class="input-group-btn">

                      <button type="button" class="quantity-minus btn btn-danger btn-number" id="minus3"  data-type="minus" data-field="">

                        <span class="glyphicon glyphicon-minus"></span>

                      </button>

                    </span>

                                                <input type="text" id="quantity3" name="quantity" class="form-control input-number"  value="0" min="1" max="20">

                                                <span class="input-group-btn">

                        <button type="button" class="quantity-plus btn btn-success btn-number" id="plus3" data-type="plus" data-field="">

                          <span class="glyphicon glyphicon-plus"></span>

                        </button>

                      </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                        </li>

                        <li>

                            <div class="item">

                                <!-- Image -->

                                <div class="col-sm-9 col-md-6 col-lg-6">

                                    <img id="lasts" src="http://milanostyle.com/wp-content/uploads/Last-Supper-Da-Vinci-1495.jpg">  <br><br>

                                </div>

                                <div class="cart-font" style="padding-top:0px;">

                                    <h3>The Last Supper</h3>

                                    <p><em style="padding-top:0px;"> Product#23</em></p>

                                    <h4>Price: $300</h4>

                                </div>

                            </div>

                            <div class="quantity">

                                <p class="cart-font cart-text-align">Quantity </p>

                                <div class="container">

                                    <div class="row">

                                        <div class="col-lg-2">

                                            <div class="input-group">

                    <span class="input-group-btn">

                      <button type="button" class="quantity-minus btn btn-danger btn-number" id="minus4"  data-type="minus" data-field="">

                        <span class="glyphicon glyphicon-minus"></span>

                      </button>

                    </span>

                                                <input type="text" id="quantity4" name="quantity" class="form-control input-number"  value="0" min="1" max="20">

                                                <span class="input-group-btn">

                        <button type="button" class="quantity-plus btn btn-success btn-number" id="plus4" data-type="plus" data-field="">

                          <span class="glyphicon glyphicon-plus"></span>

                        </button>

                      </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                        </li>

                        <li class="quantity">

                            <div class="item">

                                <!-- Image -->

                                <div style="padding-left: 10px;" class="col-sm-9 col-md-6 col-lg-6">

                                    <img id="bvenus" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg/450px-Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg">  <br><br>

                                </div>

                                <div class="cart-font" style="padding-top:0px;">

                                    <h3>The Birth of Venus</h3>

                                    <p><em style="padding-top:0px;"> Product#25</em></p>

                                    <h4>Price: $250</h4>

                                </div>

                            </div>

                            <div>

                                <p class="cart-font cart-text-align">Quantity </p>

                                <div class="container">

                                    <div class="row">

                                        <div class="col-lg-2">

                                            <div class="input-group">

                    <span class="input-group-btn">

                      <button type="button" class="quantity-minus btn btn-danger btn-number" id="minus5" data-type="minus" data-field="">

                        <span class="glyphicon glyphicon-minus"></span>

                      </button>

                    </span>

                                                <input type="text" id="quantity5" name="quantity" class="form-control input-number"  value="0" min="1" max="20">

                                                <span class="input-group-btn">

                        <button type="button" class="quantity-plus btn btn-success btn-number" id="plus5" data-type="plus" data-field="">

                          <span class="glyphicon glyphicon-plus"></span>

                        </button>

                      </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                        </li>

                    </ul>

                    <!-- Rounded switch -->

                    <h4 class="cart-font">Express Shipping (Default is Standard)</h4>

                    <label class="switch">

                        <input type="checkbox" id="express">

                        <span class="slider round"></span>

                    </label><br>

                    <button type="button" class="btn btn-primary" id="addto">Add to Cart</button>

                    <div class="cart-font cart-text-align">

                        <h4> Order Summary </h4>

                        <div>

                            <h6 id="sub">Subtotal:</h6>

                            <h6 class="pull-right"> </h6>

                        </div>

                        <div>

                            <h6 id = "shipping">Shipping:</h6>

                            <h6 class="pull-right"></h6>

                            <h6 id="tax">Tax(HST):</h6>

                            <h6 class="pull-right"></h6>

                            <hr style="border-style: inset; border-width: 1px; background-color:black;">

                            <h6 id="total">TOTAL:</h6>

                            <h6 class="pull-right"> </h6>

                        </div>



                    </div>



                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>



    </div>

</div>







<!-- Artists Drop Down Menu -->

<div class="dropdown font">

    <button class="btn btn-dropdown-toggle" type="button" data-toggle="dropdown">Artists</button>

    <ul class="dropdown-menu ">

        <li><a id="AW">Andy Warhol</a></li>

        <li><a id="CM">Claude Monet</a></li>

        <li><a id="LV">Leonardo da Vinci</a></li>

        <li><a id="MM">Michelangelo</a></li>

        <li><a id="VV">Vincent Van Gogh</a></li>

    </ul>

</div>





<!-- Art Works Drop Down Menu -->

<div class="dropdown font">

    <button class="btn btn-dropdown-toggle" type="button" data-toggle="dropdown">Art Works</button>

    <ul class="dropdown-menu">

        <li><a id="CSC">Campbell's Soup Can</a></li>

        <li><a id="SN">Starry Night</a></li>

        <li><a id="BV">The Birth of Venus</a></li>

        <li><a id="LS">The Last Supper</a></li>

        <li><a id="WW">The Weeping Woman</a></li>

    </ul>

</div>



<!-- Museum Drop Down Menu -->

<div class="dropdown font">

    <button class="btn btn-dropdown-toggle" type="button" data-toggle="dropdown">Museums</button>

    <ul class="dropdown-menu">

        <li><a id="MOMA">Museum of Modern Art</a></li>

        <li><a id="TATE">Tate Modern</a></li>

        <li><a id="UFFIZI">Uffizi Gallery</a></li>

        <li><a id="AGO">Art Gallery of Ontario</a></li>

        <li><a id="MUSEE">Musée des Beaux-Arts de Bordeaux</a></li>

    </ul>

</div>



<div class = "center font">

    <div class = "padding" >

        <h1 > Art Gallery </h1>

        <h4> Web Applications (CPS 630) </h4>

    </div>

</div>

<!-- Home Page Information -->

<div class="content" id = "home">

    <div class = "center font">

        <div class = "padding" >

            <h3 class="name"> Deborah Mepaiyeda <br> 500713214 <br> </h3>

            <h3 class="name"> Sarah MacCallum <br> 500684093 </h3>

        </div>

    </div>

</div>



<!--Artists-->

<!-- Campbell's Soup Can -->

<div class="content" id="campbells">
    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 CampbellsSoup">

        <img id="soup" src="http://1.bp.blogspot.com/-zekY4NLo1_c/UD_uVdNgEnI/AAAAAAAAAnA/rZuPJJ35Y4w/s1600/32+campbells.jpeg">  <br><br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 CampbellsSoup">

        <p>

            <a href="campbellSoup.php">Campbell's Soup Cans</a> <br>

            Andy Warhol <br>

            Price: N/A

        </p>

    </div>

</div>



<!-- Starry Night -->

<div class="content" id="starry">

    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 StarryNight">

        <img id="snight" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/1280px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg">  <br><br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 StarryNight">

        <p>

            <a href="StarryNight.<?php  ?>">Starry Night</a><br>

            Vincent Van Gogh <br>

            Price: over 100 million

        </p>

    </div>

</div>



<!-- The Birth of Venus -->

<div class="content" id="venus">

    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 BirthoVenus">

        <img id="bvenus" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg/450px-Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg">  <br><br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 BirthoVenus">

        <p>

            <a href="BirthOfVenus.php">The Birth of Venus</a><br>

            Sandro Botticelli<br>

            Price: N/A

        </p>

    </div>

</div>



<!-- The Last Supper -->

<div class="content container-fluid" id="supper">

    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 LastSupper">

        <img id="lasts" src="http://milanostyle.com/wp-content/uploads/Last-Supper-Da-Vinci-1495.jpg">  <br><br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 LastSupper">

        <p>

            <a href="LastSupper.php">The Last Supper</a><br>

            Leonardo da Vinci<br>

            Price: N/A

        </p>

    </div>

</div>



<!-- Weeping Woman -->

<div class="content container-fluid" id="weeping">

    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 WeepingWoman">

        <img id="wwoman" src="https://i.pinimg.com/originals/6c/f6/78/6cf6785c2931400bc048b06a597f23bd.jpg">  <br><br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 WeepingWoman">

        <p>

            <a href="WeepingWomen.php">The Weeping Woman</a> <br>

            Pablo Picasso<br>

            Price: N/A

        </p>

    </div>

</div>





<!-- Claude Monet -->

<div class="content container-fluid" id="claude">

    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 Monet">

        <img id="monet" src="https://www.thefamouspeople.com/profiles/images/claude-monet-3.jpg">  <br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 Monet">

        <p class = "artistfont">

            <a href="claudeMonet.php"> Claude Monet </a><br>

            Date of Birth: <strong>Nov. 14, 1840</strong><br><br>

            Date of Death: <strong>Dec. 5, 1926</strong> <br><br>

            Place of their living: <strong>Paris, France </strong> <br><br>

        </p>

    </div>

</div>

<!-- Vincent Van Gogh -->

<div class="content container-fluid" id="vincent">

    <!-- Image -->

    <div class="col-sm-2 col-md-2 col-lg-2 VanGogh">

        <img id="gogh" src="https://www.artble.com/imgs/3/2/c/55784/vincent_van_gogh.jpg">

        <br>

    </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 VanGogh">

        <p class = "artistfont">

            <a href="vincentVanGogh.php"> Vincent Van Gogh </a><br>

            Date of Birth: <strong> March 30, 1853</strong><br><br>

            Date of Death: <strong> July 29, 1890</strong> <br><br>

            Place of their living: <strong>Paris, France</strong> <br><br>

        </p>

    </div>

</div>

<!-- Leonardo da Vinci -->

<div class="content container-fluid" id="leonardo">

  <!-- Image -->

  <div class="col-sm-2 col-md-2 col-lg-2 daVinci">

      <img id="davinci" src="https://news.nationalgeographic.com/content/dam/news/2017/11/2/book-talk-leonardo-da-vinci/01-leonardo-da-vinci-book-talk.jpg">  <br>

  </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 daVinci">

        <p class = "artistfont">

           <a href="leonardo.php">Leonardo Da Vinci </a><br>

           Date of Birth: <strong> April 15, 1452</strong><br><br>

            Date of Death: <strong>May 2, 1519</strong> <br><br>

            Place of their living: <strong>Milan, Italy</strong> <br><br>

        </p>

    </div>



</div>

<!-- MichelAngelo -->

<div class="content container-fluid" id="michel">

  <!-- Image -->

  <div class="col-sm-2 col-md-2 col-lg-2 Michel">

      <img id="angelo" src="https://media1.britannica.com/eb-media/46/75046-004-E437D9A2.jpg">  <br>

  </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 Michel">

        <p class = "artistfont">

          <a href="michelangelo.php"> Michelangelo </a><br>

           Date of Birth: <strong>March 6, 1475</strong><br><br>

            Date of Death: <strong>February  18, 1564</strong> <br><br>

            Place of their living: <strong>Italy </strong> <br><br>

        </p>

    </div>

</div>

<!-- Andy Warhol -->

<div class="content container-fluid" id="andy">

  <!-- Image -->

  <div class="col-sm-2 col-md-2 col-lg-2 Andy">

      <img id="warhol" src="https://upload.wikimedia.org/wikipedia/commons/4/42/Andy_Warhol_1975.jpg">

      <br>

  </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 Andy">

        <p class = "artistfont">

            <a href="andyWarhol.php"> Andy Warhol </a><br>

            Date of Birth: <strong>Aug 6, 1928</strong><br><br>

            Date of Death: <strong>Feb 22, 1987</strong> <br><br>

            Place of their living: <strong>New York City, NY, USA </strong> <br><br>

        </p>

    </div>

</div>



<!-- Museums Section -->



<!--Museum of Modern Art -->

<div class="content container-fluid" id="mma">

  <!-- Image -->

  <div class="col-sm-2 col-md-2 col-lg-2 Mofart">

      <img id="museumart" src="https://static.dezeen.com/uploads/2016/04/moma-expansion-diller-scofidio-renfro-new-york-usa_dezeen_1568_0.jpg">

      <br>

  </div>

    <!-- Information -->

    <div class="col-sm-3 col-md-3 col-lg-3 Mofart">

        <p class = "artistfont">

            <a href="museumofart.php">Museum of Modern Art</a><br>

           Location: <strong>United States</strong><br><br>

          Address: <strong>11 West 53 Street, Manhattan</strong> <br><br>

        </p>

    </div>

</div>



<!-- Tate Modern-->

<div class="content container-fluid" id="tate">

<!--Image-->

<div class="col-sm-2 col-md-2 col-lg-2 Tate">

      <img id="tatemodern" src="http://www.vigoenfotos.com/londres/imagenes/london/tate_modern_museum/g_vigoenfotos_6453m.jpg">

      <br>

  </div>



 <!-- Information-->

 <div class="col-sm-3 col-md-3 col-lg-3 Tate">

        <p class = "artistfont"><a href="tatemuseum.php">Tate Modern</a><br>

            Location: <strong>United Kingdom</strong><br><br>

            Address: <strong>Bankside; London, SE1</strong> <br><br>

        </p>

    </div>

</div>



<!--Uffizi Gallery-->

<div class="content container-fluid" id="uffizi">

<!--Image-->

<div class="col-sm-2 col-md-2 col-lg-2 Uffizi">

      <img id="uffizigal" src="https://nationalpostcom.files.wordpress.com/2016/07/travel_trip_essentials_florence_47275094.jpg">

      <br>

  </div>

 <!-- Information-->

 <div class="col-sm-3 col-md-3 col-lg-3 Uffizi">

        <p class = "artistfont">

            <a href="uffizigal.php"> Uffizi Gallery</a><br>

            Location: <strong>Italy</strong><br><br>

            Address: <strong>Piazzale degli Uffizi, 6, 50122 Firenze FI</strong> <br><br>

        </p>

    </div>

</div>



<!--Art Gallery of Ontario-->

<div class="content container-fluid" id="ago">

<!--Image-->

<div class="col-sm-2 col-md-2 col-lg-2 AGO">

      <img id="ontario" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/AGO_at_dusk.jpg/1200px-AGO_at_dusk.jpg">

      <br>

  </div>

 <!-- Information-->

 <div class="col-sm-3 col-md-3 col-lg-3 AGO">

        <p class = "artistfont">

            <a href="ago.php">Art Gallery of Ontario </a><br>

            Location: <strong>Canada</strong><br><br>

            Address: <strong> 317 Dundas St W, Toronto, ON M5T 1G4</strong> <br><br>

        </p>

    </div>

</div>



<!-- Musee Des Beaux-Arts De Bordeaux-->

<div class="content container-fluid" id="musee">

<!--Image-->

<div class="col-sm-2 col-md-2 col-lg-2 Musee">

      <img id="museemuseum" src="http://actualites-pro-museumexperts.com/wp-content/uploads/2013/12/Absolute-barrieres-.jpg">

      <br>

  </div>

 <!-- Information-->

 <div class="col-sm-3 col-md-3 col-lg-3 Musee">

        <p class = "artistfont">

            <a href="museemuseum.php">Musee Des Beaux-Arts De Bordeaux</a><br>

            Location: <strong>France</strong><br><br>

            Address: <strong>20 Cours d'Albret, 33000 Bordeaux</strong> <br><br>

        </p>

    </div>

</div>



<div class="searchcontainer">

<div class="searchinfopos">

<div >

  <?php
       $button = $_GET [ 'submit' ];
       $search = $_GET [ 'search' ];

       if( !$button )
             echo "you didn't submit a keyword";
       else {
             if( strlen( $search ) <= 1 )
                    echo "Search term too short";
             else {
                    echo "You searched for <b> $search </b> <hr size='1' > </ br > ";
                    mysql_connect( "localhost","USERNAME","PASSWORD") ;
                    mysql_select_db("DBNAME");

                    $search_exploded = explode ( " ", $search );
                    $x = 0;
                    foreach( $search_exploded as $search_each ) {
                           $x++;
                           $construct = "";
                           if( $x == 1 )
                                  $construct .="keywords LIKE '%$search_each%'";
                           else
                                  $construct .="AND keywords LIKE '%$search_each%'";
                    }

                    $construct = " SELECT * FROM SEARCH_ENGINE WHERE $construct ";
                    $run = mysql_query( $construct );

                    $foundnum = mysql_num_rows($run);

                   if ($foundnum == 0)
                          echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar  meaning </br> 3. Please check your spelling";
                   else {
                          echo "$foundnum results found !<p>";

                          while( $runrows = mysql_fetch_assoc( $run ) ) {
                                 $title = $runrows ['title'];
                                 $desc = $runrows ['description'];
                                 $url = $runrows ['url'];

                                 echo "<a href='$url'> <b> $title </b> </a> <br> $desc <br> <a href='$url'> $url </a> <p>";

                          }
                   }

            }
      }
?>

  </div>
  </div>
</div>
<!-- Footer section-->
<footer class = "footer font">
    <p>Copyright &copy; Deborah Mepaiyeda & Sarah MacCallum 2018</p>
</footer>

	</body>

</html>
