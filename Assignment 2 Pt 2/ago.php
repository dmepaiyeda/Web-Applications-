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
                <a class="navbar-brand" href="assign2main.php">Art Gallery</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="assign2main.php">Home</a></li>
                <li><a ><img id="shopping" data-toggle="modal" data-target="#myModal" src="https://bromilow.com.au/sites/all/themes/chilli/images/icon-cart.png"></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class='container'>
    <!-- Modal -->
    <div class='modal fade' id='myModal' role='dialog'>
        <div class='modal-dialog'>
            <!-- Modal content-->
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title font'>Shopping Cart</h4>
                </div>
                <div class='modal-body'>
                    <ul style='list-style-type: none;'>
                        <li>
                            <div class='item'>
                                <!-- Image -->
                                <div class='col-sm-9 col-md-6 col-lg-6'>
                                    <img id='soup' src='http://1.bp.blogspot.com/-zekY4NLo1_c/UD_uVdNgEnI/AAAAAAAAAnA/rZuPJJ35Y4w/s1600/32+campbells.jpeg'>  <br><br>
                                </div>
                                <div class='cart-font' style='padding-top:0;'>
                                    <?php
                                        $servername = "localhost";
                                        $username = "smaccall";
                                        $password = "pygleif0";
                                        $dbname = "smaccall";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $sql = "SELECT * FROM ShoppingCart WHERE scArtwork ='Campbells Soup Can'";
                                        $result = $conn->query($sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                        // output data of each row

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<h3>". $row['scArtwork'] ."</h3><p><em style='padding-top:0px;'> Product#22</em></p><h4>Price: $". $row['scPrice']. "</h4>";
                                            }
                                        }
                                        else
                                        {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class='quantity'>
                                <p class='cart-font cart-text-align'>Quantity </p>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            <div class='input-group'>
                    <span class='input-group-btn'>
                      <button type='button' class='quantity-minus btn btn-danger btn-number' id='minus1'  data-type='minus' data-field=''>
                        <span class='glyphicon glyphicon-minus'></span>
                      </button>
                    </span>
                                                <input type='text' id='quantity1' name='quantity' class='form-control input-number'  value='0' min='1' max='20'>
                                                <span class='input-group-btn'>
                        <button type='button' class='quantity-plus btn btn-success btn-number' id='plus1' data-type='plus' data-field=''>
                          <span class='glyphicon glyphicon-plus'></span>
                        </button>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class='item'>
                                <!-- Image -->
                                <div class='col-sm-9 col-md-6 col-lg-6'>
                                    <img id='wwoman' src='https://i.pinimg.com/originals/6c/f6/78/6cf6785c2931400bc048b06a597f23bd.jpg'>  <br><br>
                                </div>
                                <div class='cart-font' style='padding-top:0;'>
                                    <?php
                                        $servername = "localhost";
                                        $username = "smaccall";
                                        $password = "pygleif0";
                                        $dbname = "smaccall";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $sql = "SELECT * FROM ShoppingCart WHERE scArtwork ='The Weeping Woman'";
                                        $result = $conn->query($sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                        // output data of each row

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<h3>". $row['scArtwork'] ."</h3><p><em style='padding-top:0px;'> Product#24</em></p><h4>Price: $". $row['scPrice']. "</h4>";
                                            }
                                        }
                                        else
                                        {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class='quantity'>
                                <p class='cart-font cart-text-align'>Quantity </p>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            <div class='input-group'>
                    <span class='input-group-btn'>
                      <button type='button' class='quantity-minus btn btn-danger btn-number' id='minus2'  data-type='minus' data-field=''>
                        <span class='glyphicon glyphicon-minus'></span>
                      </button>
                    </span>
                                                <input type='text' id='quantity2' name='quantity' class='form-control input-number'  value='0' min='1' max='20'>
                                                <span class='input-group-btn'>
                        <button type='button' class='quantity-plus btn btn-success btn-number' id='plus2' data-type='plus' data-field=''>
                          <span class='glyphicon glyphicon-plus'></span>
                        </button>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class='item'>
                                <!-- Image -->
                                <div class='col-sm-9 col-md-6 col-lg-6'>
                                    <img id='snight' src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/1280px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg'>  <br><br>
                                </div>
                                <div class='cart-font' style='padding-top:0;'>
                                    <?php
                                        $servername = "localhost";
                                        $username = "smaccall";
                                        $password = "pygleif0";
                                        $dbname = "smaccall";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $sql = "SELECT * FROM ShoppingCart WHERE scArtwork ='Starry Night'";
                                        $result = $conn->query($sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                        // output data of each row

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<h3>". $row['scArtwork'] ."</h3><p><em style='padding-top:0px;'> Product#21</em></p><h4>Price: $". $row['scPrice']. "</h4>";
                                            }
                                        }
                                        else
                                        {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class='quantity'>
                                <p class='cart-font cart-text-align'>Quantity </p>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            <div class='input-group'>
                    <span class='input-group-btn'>
                      <button type='button' class='quantity-minus btn btn-danger btn-number' id='minus3'  data-type='minus' data-field=''>
                        <span class='glyphicon glyphicon-minus'></span>
                      </button>
                    </span>
                                                <input type='text' id='quantity3' name='quantity' class='form-control input-number'  value='0' min='1' max='20'>
                                                <span class='input-group-btn'>
                        <button type='button' class='quantity-plus btn btn-success btn-number' id='plus3' data-type='plus' data-field=''>
                          <span class='glyphicon glyphicon-plus'></span>
                        </button>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class='item'>
                                <!-- Image -->
                                <div class='col-sm-9 col-md-6 col-lg-6'>
                                    <img id='lasts' src='http://milanostyle.com/wp-content/uploads/Last-Supper-Da-Vinci-1495.jpg'>  <br><br>
                                </div>
                                <div class='cart-font' style='padding-top:0px;'>
                                    <?php
                                        $servername = "localhost";
                                        $username = "smaccall";
                                        $password = "pygleif0";
                                        $dbname = "smaccall";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $sql = "SELECT * FROM ShoppingCart WHERE scArtwork ='The Last Supper'";
                                        $result = $conn->query($sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                        // output data of each row

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<h3>". $row['scArtwork'] ."</h3><p><em style='padding-top:0px;'> Product#23</em></p><h4>Price: $". $row['scPrice']. "</h4>";
                                            }
                                        }
                                        else
                                        {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class='quantity'>
                                <p class='cart-font cart-text-align'>Quantity </p>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            <div class='input-group'>
                    <span class='input-group-btn'>
                      <button type='button' class='quantity-minus btn btn-danger btn-number' id='minus4'  data-type='minus' data-field=''>
                        <span class='glyphicon glyphicon-minus'></span>
                      </button>
                    </span>
                                                <input type='text' id='quantity4' name='quantity' class='form-control input-number'  value='0' min='1' max='20'>
                                                <span class='input-group-btn'>
                        <button type='button' class='quantity-plus btn btn-success btn-number' id='plus4' data-type='plus' data-field=''>
                          <span class='glyphicon glyphicon-plus'></span>
                        </button>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class='quantity'>
                            <div class='item'>
                                <!-- Image -->
                                <div style='padding-left: 10px;' class='col-sm-9 col-md-6 col-lg-6'>
                                    <img id='bvenus' src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg/450px-Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg'>  <br><br>
                                </div>
                                <div class='cart-font' style='padding-top:0px;'>
                                    <?php
                                        $servername = "localhost";
                                        $username = "smaccall";
                                        $password = "pygleif0";
                                        $dbname = "smaccall";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $sql = "SELECT * FROM ShoppingCart WHERE scArtwork ='The Birth of Venus'";
                                        $result = $conn->query($sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                        // output data of each row

                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<h3>". $row['scArtwork'] ."</h3><p><em style='padding-top:0px;'> Product#25</em></p><h4>Price: $". $row['scPrice']. "</h4>";
                                            }
                                        }
                                        else
                                        {
                                            echo "0 results";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div>
                                <p class='cart-font cart-text-align'>Quantity </p>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-2'>
                                            <div class='input-group'>
                    <span class='input-group-btn'>
                      <button type='button' class='quantity-minus btn btn-danger btn-number' id='minus5' data-type='minus' data-field=''>
                        <span class='glyphicon glyphicon-minus'></span>
                      </button>
                    </span>
                                                <input type='text' id='quantity5' name='quantity' class='form-control input-number'  value='0' min='1' max='20'>
                                                <span class='input-group-btn'>
                        <button type='button' class='quantity-plus btn btn-success btn-number' id='plus5' data-type='plus' data-field=''>
                          <span class='glyphicon glyphicon-plus'></span>
                        </button>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                    </ul>
                    <!-- Rounded switch -->
                    <h4 class='cart-font'>Express Shipping (Default is Standard)</h4>
                    <label class='switch'>
                        <input type='checkbox' id='express'>
                        <span class='slider round'></span>
                    </label><br>
                    <button type='button' class='btn btn-primary' id='addto'>Add to Cart</button>
                    <div class='cart-font cart-text-align'>
                        <h4> Order Summary </h4>
                        <div>
                            <h6 id='sub'>Subtotal:</h6>
                            <h6 class='pull-right'> </h6>
                        </div>
                        <div>
                            <h6 id = 'shipping'>Shipping:</h6>
                            <h6 class='pull-right'></h6>
                            <h6 id='tax'>Tax(HST):</h6>
                            <h6 class='pull-right'></h6>
                            <hr style='border-style: inset; border-width: 1px; background-color:black;'>
                            <h6 id='total'>TOTAL:</h6>
                            <h6 class='pull-right'> </h6>
                        </div>

                    </div>

                </div>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Claude Monet -->

  <?php
//<!-- Claude Monet -->
    $servername = "localhost";
    $username = "smaccall";
    $password = "pygleif0";
    $dbname = "smaccall";

    $conn = new mysqli($servername, $username, $password, $dbname);
    echo "<div class='content container-fluid' id='ago'>";
        $sql = "SELECT gname FROM Galleries WHERE id='11'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<h1 class='font'>".$row['gname']."</h1>";
            }
        }
        else
        {
            echo "0 results";
        }

        //<!-- Image -->
        echo "<div class='col-sm-9 col-md-6 col-lg-6'>";
        $sql = "SELECT url, cslink FROM Images WHERE id='11'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='".$row['cslink']."' src='".$row['url']."'>";
            }
        }
        else
        {
            echo "0 results";
        }
            echo "<br><br>";
        echo "</div>";
        //<!-- Information -->
        echo "<div class='col-sm-3 col-md-6 col-lg-4'>";
            echo "<p>";
                $sql = "SELECT gdoe, glocation, gaddress FROM Galleries WHERE id='11'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0)
                {
                // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "Location: ".$row['glocation']."<br><br> Address: ".$row['gaddress'] . "<br><br> Date of establishing: ".$row['gdoe'] ." <br><br>";
                    }
                }
                else
                {
                    echo "0 results";
                }

                $sql = "SELECT fname, lname FROM Builder WHERE id='11'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0)
                {
                // output data of each row
                    echo "People involved in building it: ";
                    echo "<ul>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<li class='famousworks'>" . $row['fname']." ".$row['lname'] ."</li>";
                    }
                    echo "</ul><br><br>";
                }
                else
                {
                    echo "0 results";
                }
                $sql = "SELECT piece FROM FamousPieces WHERE id='12'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0)
                {
                // output data of each row
                    echo "Famous piece of works saved there: ";
                    echo "<ol class='famousworks'>";
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<li>" .$row['piece'] ."</li>";
                    }
                    echo "</ol><br><br>";
                }
                else
                {
                    echo "0 results";
                }
            echo "</p>";
        echo "</div>";
    echo "</div>";

?>
<br><br><br>
<!-- Footer section-->
<footer class = "footer font">
    <!--<div class = "center"> -->
    <p>Copyright &copy; Deborah Mepaiyeda & Sarah MacCallum 2018</p>

    <!-- </div> -->
</footer>
</body>
</html>