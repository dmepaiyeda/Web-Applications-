<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Art Gallery</title>
    <!-- bootstrap, CSS, JQuery and JavaScript links -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='animation.js'></script>
    <script defer src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='modal-animation.js'></script>

    <!-- stylesheets -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='navbar.css'>
    <link rel='stylesheet' href='styling.css'>
    <link rel='stylesheet' href='artworkstyle.css'>



</head>
<body>
<div class = 'font'>
    <nav class='navbar navbar-inverse'>
        <div class='container-fluid'>
            <div class='navbar-header'>
                <a class='navbar-brand' id='AG'>Art Gallery</a>
            </div>
            <ul class='nav navbar-nav'>
                <li><a id='H'>Home</a></li>
                <li><a id='AU'>About Us</a></li>
                <li><a>Blogs</a></li>
                <li><a href='maintain.php'>Maintain</a></li>
                <li><a id="SEARCHIT"> Search </a></li>
                <li><a ><img id='shopping' data-toggle='modal' data-target='#myModal' src='https://bromilow.com.au/sites/all/themes/chilli/images/icon-cart.png'></a></li>
            </ul>
<div class="content" id = "searchform" >
              <form action = 'search.php' method ='post'>
                     <input type = 'text' size='40' name='input' class="searchbox" placeholder="Search artworks..." >
                     <button class="btn" type = 'button' name='submit' value = 'Search' class="searchbutton">Search</button>
               </form>
            </div>
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

<?php
    $servername = "localhost";
    $username = "smaccall";
    $password = "pygleif0";
    $dbname = "smaccall";

    $conn = new mysqli($servername, $username, $password, $dbname);

//<!-- Artists Drop Down Menu -->
echo "<div class='dropdown font'>";
    echo "<button class='btn btn-dropdown-toggle' type='button' data-toggle='dropdown'>Artists</button>";
    echo "<ul class='dropdown-menu '>";
        echo "<li><a id='AW'>Andy Warhol</a></li>";
        echo "<li><a id='CM'>Claude Monet</a></li>";
        echo "<li><a id='LV'>Leonardo da Vinci</a></li>";
        echo "<li><a id='MM'>Michelangelo</a></li>";
        echo "<li><a id='VV'>Vincent Van Gogh</a></li>";
    echo "</ul>";
echo "</div>";


//<!-- Art Works Drop Down Menu -->
echo "<div class='dropdown font'>";
    echo "<button class='btn btn-dropdown-toggle' type='button' data-toggle='dropdown'>Art Works</button>";
    echo "<ul class='dropdown-menu'>";
        echo "<li><a id='CSC'>Campbells Soup Can</a></li>";
        echo "<li><a id='SN'>Starry Night</a></li>";
        echo "<li><a id='BV'>The Birth of Venus</a></li>";
        echo "<li><a id='LS'>The Last Supper</a></li>";
        echo "<li><a id='WW'>The Weeping Woman</a></li>";
    echo "</ul>";
echo "</div>";

//<!-- Museum Drop Down Menu -->
echo "<div class='dropdown font'>";
    echo "<button class='btn btn-dropdown-toggle' type='button' data-toggle='dropdown'>Museums</button>";
    echo "<ul class='dropdown-menu'>";
        echo "<li><a id='MOMA'>Museum of Modern Art</a></li>";
        echo "<li><a id='TATE'>Tate Modern</a></li>";
        echo "<li><a id='UFFIZI'>Uffizi Gallery</a></li>";
        echo "<li><a id='AGO'>Art Gallery of Ontario</a></li>";
        echo "<li><a id='MUSEE'>Musée des Beaux-Arts de Bordeaux</a></li>";
    echo "</ul>";
echo "</div>";

echo "<div class = 'center font'>";
    echo "<div class = 'padding' >";
        echo "<h1 > Art Gallery </h1>";
        echo "<h4> Web Applications (CPS 630) </h4>";
    echo "</div>";
echo "</div>";
//<!-- Home Page Information -->
echo "<div class='content' id = 'home'>";
    echo "<div class = 'center font'>";
        echo "<div class = 'padding' >";
            echo "<h3 class='name'> Deborah Mepaiyeda <br> 500713214 <br> </h3>";
            echo "<h3 class='name'> Sarah MacCallum <br> 500684093 </h3>";
        echo "</div>";
    echo "</div>";
echo "</div>";

//<!--Artists-->

//<!-- Campbell's Soup Can -->


    // Create connection

    echo "<div class='content' id='campbells'>";
    //<!-- Image -->
        echo "<div class='col-sm-2 col-md-2 col-lg-2 CampbellsSoup'>";
        $sql = "SELECT url FROM Images WHERE id='1'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='soup' src='". $row["url"]."'>  <br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo "</div>";
    //<!-- Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 CampbellsSoup'>";
        echo "<p>";

        $sql = "SELECT piece, firstname, lastname, price FROM Artwork WHERE idArtwork='1'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='campbellSoup.php'>". $row["piece"]. "</a> <br>". $row["firstname"]." ". $row["lastname"]. "<br>";
                if ($row["price"] == NULL)
                {
                    echo "Price: N/A";
                }
                else
                {
                    echo "Price: ". $row["price"];
                }
                }
            }
            else
            {
                echo "0 Results";
            }

        echo "</p>";
    echo "</div>";
echo "</div>";

//<!-- Starry Night -->
echo "<div class='content' id='starry'>";
    // Image -->
    echo"<div class='col-sm-2 col-md-2 col-lg-2 StarryNight'>";
        $sql = "SELECT url FROM Images WHERE id='2'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='soup' src='". $row["url"]."'>  <br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 StarryNight'>";
        echo "<p>";

            $sql = "SELECT piece, firstname, lastname, price FROM Artwork WHERE idArtwork='2'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='StarryNight.php'>". $row["piece"]. "</a> <br>". $row["firstname"]." ". $row["lastname"]. "<br>";
                    if ($row["price"] == NULL)
                    {
                        echo "Price: N/A";
                    }
                    else
                    {
                        echo "Price: ". $row["price"];
                    }
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

// The Birth of Venus -->
echo "<div class='content' id='venus'>";
    // Image -->
    echo "<div class='col-sm-2 col-md-2 col-lg-2 BirthoVenus'>";
        $sql = "SELECT url FROM Images WHERE id='3'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='bvenus' src='". $row["url"]."'>  <br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 BirthoVenus'>";
        echo "<p>";
            $sql = "SELECT piece, firstname, lastname, price FROM Artwork WHERE idArtwork='3'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='BirthOfVenus.php'>". $row["piece"]. "</a> <br>". $row["firstname"]." ". $row["lastname"]. "<br>";
                    if ($row["price"] == NULL)
                    {
                        echo "Price: N/A";
                    }
                    else
                    {
                        echo "Price: ". $row["price"];
                    }
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

// The Last Supper -->
echo "<div class='content container-fluid' id='supper'>";
    // Image -->
    echo "<div class='col-sm-2 col-md-2 col-lg-2 LastSupper'>";
        $sql = "SELECT url FROM Images WHERE id='4'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='lasts' src='". $row["url"]."'>  <br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 LastSupper'>";
        echo "<p>";
            $sql = "SELECT piece, firstname, lastname, price FROM Artwork WHERE idArtwork='4'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='LastSupper.php'>". $row["piece"]. "</a> <br>". $row["firstname"]." ". $row["lastname"]. "<br>";
                    if ($row["price"] == NULL)
                    {
                        echo "Price: N/A";
                    }
                    else
                    {
                        echo "Price: ". $row["price"];
                    }
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

// Weeping Woman -->
echo "<div class='content container-fluid' id='weeping'>";
    // Image -->
    echo "<div class='col-sm-2 col-md-2 col-lg-2 WeepingWoman'>";
        $sql = "SELECT url FROM Images WHERE id='5'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='wwoman' src='". $row["url"]."'>  <br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 WeepingWoman'>";
        echo "<p>";
            $sql = "SELECT piece, firstname, lastname, price FROM Artwork WHERE idArtwork='5'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='WeepingWomen.php'>". $row["piece"]. "</a> <br>". $row["firstname"]." ". $row["lastname"]. "<br>";
                    if ($row["price"] == NULL)
                    {
                        echo "Price: N/A";
                    }
                    else
                    {
                        echo "Price: ". $row["price"];
                    }
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";


// Claude Monet -->
echo "<div class='content container-fluid' id='claude'>";
    // Image -->
    echo "<div class='col-sm-2 col-md-2 col-lg-2 Monet'>";
        $sql = "SELECT url FROM Images WHERE id='7'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='monet' src='". $row['url']."'><br><br>";
            }
        }
        else
        {
            echo "0 results";
        }

        echo"<br>";
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 Monet'>";
        echo "<p class = 'artistfont'>";
        $sql = "SELECT aFirstName, aLastname, dyear, byear, pol FROM Artist WHERE idArtist='7'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='claudeMonet.php'>". $row['aFirstName']." ". $row['aLastname'] ."</a><br>
            Date of Birth: ". $row['byear']. "<br><br>
            Date of Death: ". $row['dyear']. "<br><br>
            Place of their living: ". $row['pol']. "<br><br>";
                }
            }
            else
            {
                echo "0 results";
            }

        echo "</p>";
    echo "</div>";
echo "</div>";

// Vincent Van Gogh -->
echo "<div class='content container-fluid' id='vincent'>";
    // Image -->
    echo "<div class='col-sm-2 col-md-2 col-lg-2 VanGogh'>";
        $sql = "SELECT url FROM Images WHERE id='10'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='gogh' src='". $row['url']."'><br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
        echo"<br>";
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 VanGogh'>";
        echo "<p class = 'artistfont'>";
            $sql = "SELECT aFirstName, aLastname, dyear, byear, pol FROM Artist WHERE idArtist='10'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='vincentVanGogh.php'>". $row['aFirstName']." ". $row['aLastname'] ."</a><br>
            Date of Birth: ". $row['byear']. "<br><br>
            Date of Death: ". $row['dyear']. "<br><br>
            Place of their living: ". $row['pol']. "<br><br>";
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";
// Leonardo da Vinci -->
echo "<div class='content container-fluid' id='leonardo'>";
  // Image -->
    echo "<div class='col-sm-2 col-md-2 col-lg-2 daVinci'>";
        $sql = "SELECT url FROM Images WHERE id='8'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<img id='davinci' src='". $row['url']."'><br><br>";
            }
        }
        else
        {
            echo "0 results";
        }
    echo"<br>";
    echo "</div>";
    // Information -->
   echo "<div class='col-sm-3 col-md-3 col-lg-3 daVinci'>";
        echo "<p class = 'artistfont'>";
           $sql = "SELECT aFirstName, aLastname, dyear, byear, pol FROM Artist WHERE idArtist='8'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='leonardo.php'>". $row['aFirstName']." ". $row['aLastname'] ."</a><br>
            Date of Birth: ". $row['byear']. "<br><br>
            Date of Death: ". $row['dyear']. "<br><br>
            Place of their living: ". $row['pol']. "<br><br>";
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";

echo "</div>";
// MichelAngelo -->
echo "<div class='content container-fluid' id='michel'>";
  // Image -->
  echo "<div class='col-sm-2 col-md-2 col-lg-2 Michel'>";
   $sql = "SELECT url FROM Images WHERE id='9'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='angelo' src='". $row['url']."'><br><br>";
                }
            }
            else
            {
                echo "0 results";
            }

      echo"<br>";
    echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 Michel'>";
        echo "<p class = 'artistfont'>";
        $sql = "SELECT aFirstName, aLastname, dyear, byear, pol FROM Artist WHERE idArtist='9'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='michelangelo.php'>". $row['aFirstName']." ". $row['aLastname'] ."</a><br>
            Date of Birth: ". $row['byear']. "<br><br>
            Date of Death: ". $row['dyear']. "<br><br>
            Place of their living: ". $row['pol']. "<br><br>";
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

// Andy Warhol -->
echo "<div class='content container-fluid' id='andy'>";
  // Image -->
  echo "<div class='col-sm-2 col-md-2 col-lg-2 Andy'>";
      $sql = "SELECT url FROM Images WHERE id='6'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='warhol' src='". $row['url']."'><br><br>";
                }
            }
            else
            {
                echo "0 results";
            }

      echo"<br>";
  echo "</div>";
    // Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 Andy'>";
        echo "<p class = 'artistfont'>";

        $sql = "SELECT aFirstName, aLastname, dyear, byear, pol FROM Artist WHERE idArtist='6'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='andyWarhol.php'>". $row['aFirstName']." ". $row['aLastname'] ."</a><br>
            Date of Birth: ". $row['byear']. "<br><br>
            Date of Death: ". $row['dyear']. "<br><br>
            Place of their living: ". $row['pol']. "<br><br>";
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";


//<!-- Museums Section -->

//<!--Museum of Modern Art -->
echo "<div class='content container-fluid' id='mma'>";
  //<!-- Image -->
  echo "<div class='col-sm-2 col-md-2 col-lg-2 Mofart'>";
     $sql = "SELECT url, cslink FROM Images WHERE id='14'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='". $row['cslink']. "' src='". $row['url']."'>";
                }
            }
            else
            {
                echo "0 results";
            }
      echo "<br>";
  echo "</div>";
    //<!-- Information -->
    echo "<div class='col-sm-3 col-md-3 col-lg-3 Mofart'>";
        echo "<p class = 'artistfont'>";
             $sql = "SELECT mname, location, address FROM Museum WHERE id='14'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='museumofart.php'>". $row['mname']. "</a><br>Location: ".$row['location'] . "<br><br>Address: ".$row['address'] ."<br><br>";
                }
            }
            else
            {
                echo "0 results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

//<!-- Tate Modern-->
echo "<div class='content container-fluid' id='tate'>";
//<!--Image-->
echo "<div class='col-sm-2 col-md-2 col-lg-2 Tate'>";
       $sql = "SELECT url, cslink FROM Images WHERE id='15'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='". $row['cslink']. "' src='". $row['url']."'>";
                }
            }
            else
            {
                echo "0 results";
            }
      echo "<br>";
  echo "</div>";

 //<!-- Information-->
 echo "<div class='col-sm-3 col-md-3 col-lg-3 Tate'>";
        echo "<p class = 'artistfont'>";
         $sql = "SELECT mname, location, address FROM Museum WHERE id='15'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='tatemuseum.php'>". $row['mname']. "</a><br>Location: ".$row['location'] . "<br><br>Address: ".$row['address'] ."<br><br>";
                }
            }
            else
            {
                echo "0 Results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

//<!--Uffizi Gallery-->
echo "<div class='content container-fluid' id='uffizi'>";
//<!--Image-->
echo "<div class='col-sm-2 col-md-2 col-lg-2 Uffizi'>";
       $sql = "SELECT url, cslink FROM Images WHERE id='12'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='". $row['cslink']. "' src='". $row['url']."'>";
                }
            }
            else
            {
                echo "0 results";
            }
      echo "<br>";
  echo "</div>";
// <!-- Information-->
 echo "<div class='col-sm-3 col-md-3 col-lg-3 Uffizi'>";
        echo "<p class = 'artistfont'>";
            $sql = "SELECT gname, glocation, gaddress FROM Galleries WHERE id='12'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='uffizigal.php'>". $row['gname']. "</a><br>Location: ".$row['glocation'] . "<br><br>Address: ".$row['gaddress'] ."<br><br>";
                }
            }
            else
            {
                echo "0 Results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

//<!--Art Gallery of Ontario-->
echo "<div class='content container-fluid' id='ago'>";
//<!--Image-->
echo "<div class='col-sm-2 col-md-2 col-lg-2 AGO'>";
       $sql = "SELECT url, cslink FROM Images WHERE id='11'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='". $row['cslink']. "' src='". $row['url']."'>";
                }
            }
            else
            {
                echo "0 results";
            }
      echo "<br>";
  echo "</div>";
 //<!-- Information-->
 echo "<div class='col-sm-3 col-md-3 col-lg-3 AGO'>";
        echo "<p class = 'artistfont'>";
            $sql = "SELECT gname, glocation, gaddress FROM Galleries WHERE id='11'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='ago.php'>". $row['gname']. "</a><br>Location: ".$row['glocation'] . "<br><br>Address: ".$row['gaddress'] ."<br><br>";
                }
            }
            else
            {
                echo "0 Results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";

//<!-- Musee Des Beaux-Arts De Bordeaux-->
echo "<div class='content container-fluid' id='musee'>";
//<!--Image-->
echo "<div class='col-sm-2 col-md-2 col-lg-2 Musee'>";
       $sql = "SELECT url, cslink FROM Images WHERE id='13'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<img id='". $row['cslink']. "' src='". $row['url']."'>";
                }
            }
            else
            {
                echo "0 results";
            }
     echo "<br>";
  echo "</div>";
// <!-- Information-->
echo "<div class='col-sm-3 col-md-3 col-lg-3 Musee'>";
        echo "<p class = 'artistfont'>";
            $sql = "SELECT mname, location, address FROM Museum WHERE id='13'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0)
            {
            // output data of each row

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<a href='museemuseum.php'>". $row['mname']. "</a><br>Location: ".$row['location'] . "<br><br>Address: ".$row['address'] ."<br><br>";
                }
            }
            else
            {
                echo "0 Results";
            }
        echo "</p>";
    echo "</div>";
echo "</div>";


?>

<!-- Footer section-->
<footer class = 'footer font'>
    <p>Copyright &copy; Deborah Mepaiyeda & Sarah MacCallum 2018</p>
</footer>
</body>
</html>
