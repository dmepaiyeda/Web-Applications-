<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Art Gallery</title>
    <!-- bootstrap, CSS, JQuery and JavaScript links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                <li><a href="assign2main.php">Home</a></li>
                <li><a ><img id="shopping" data-toggle="modal" data-target="#myModal" src="https://bromilow.com.au/sites/all/themes/chilli/images/icon-cart.png"></a></li>
            </ul>
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


<!-- Claude Monet -->
<div class="content container-fluid"id="Mofart">
  <h1 class="font">Museum of Modern Art </h1>
  <!-- Image -->
  <div class="col-sm-9 col-md-6 col-lg-6">
    <img id="museumart" src="https://static.dezeen.com/uploads/2016/04/moma-expansion-diller-scofidio-renfro-new-york-usa_dezeen_1568_0.jpg">
      <br><br>
  </div>
  <!--eum: Date of establishing, Location and address, People involved in building it, History behind it, Famous art works saved the-->
  <!-- Information -->
  <div class="col-sm-3 col-md-6 col-lg-4">
      <p> Location: <strong>United States</strong><br><br>
     Address: <strong>11 West 53 Street, Manhattan</strong>
      <br><br>
          Date of establishing: <strong> November 7, 1929 </strong> <br><br>
          People involved in building it: <strong>  Abby Aldrich Rockefeller, Lillie P. Bliss and Mary Quinn Sullivan </strong> <br><br>
          Famous piece of works saved there:
      <ol class = "famousworks">
          <li> <strong> Les Demoiselles d'Avignon</strong> </li>
          <li> <strong>Reflections of Clouds on the Water-Lily Pond</strong> </li>
          <li><strong> The Song of Love </strong></li>
      </ol>
      </p>
  </div>
</div><br><br><br>
<!-- Footer section-->
<footer class = "footer font">
    <!--<div class = "center"> -->
    <p>Copyright &copy; Deborah Mepaiyeda & Sarah MacCallum 2018</p>

    <!-- </div> -->
</footer>
</body>
</html>
