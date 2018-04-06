<html>
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
<a href="maintain.php">Maintain</a>

<?php
    $servername = "localhost";
    $username = "smaccall";
    $password = "pygleif0";
    $dbname = "smaccall";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($_POST['id'] != "")
        $id=$_POST['id'];
    if($_POST['piece']!="")
        $piece=$_POST['piece'];
    if($_POST['fname']!="")
        $fname = $_POST['fname'];
    if($_POST['lname']!="")
        $lname = $_POST['lname'];
    if($_POST['dp']!="")
        $dp = $_POST['dp'];
    if($_POST['type']!="")
        $type = $_POST['type'];
    if($_POST['dime']!="")
        $dime = $_POST['dime'];
    if($_POST['price']!="")
        $price = $_POST['price'];
    if($_POST['genre']!="")
        $genre = $_POST['genre'];
    if($_POST['url']!="")
        $url = $_POST['url'];
    if($_POST['byear']!="")
        $byear = $_POST['byear'];
    if($_POST['dyear']!="")
        $dyear = $_POST['dyear'];
    if($_POST['pol']!="")
        $pol = $_POST['pol'];
    if($_POST['location']!="")
        $locat = $_POST['location'];
    if($_POST['addr']!="")
        $addr = $_POST['addr'];
    if($_POST['cslink']!="")
        $cslink = $_POST['cslink'];
    if($_POST['gmname']!="")
        $gmname = $_POST['gmname'];

    if ($_POST['Table1'] == 'artist')
    {
        $sql = "INSERT INTO Artist (idArtist, aFirstname, aLastname, byear, dyear, pol)
            VALUES ('$id', '$fname', '$lname', '$byear', '$dyear', '$locat')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'artwork')
    {
        $sql = "INSERT INTO Artwork (idArtwork, piece, type, dimension, year, firstname, lastname, location)
            VALUES ('$id', '$piece', '$type','$dime', '$dp' '$fname', '$lname', '$locat')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'museum')
    {
        $sql = "INSERT INTO Museum(mname, doe, location, address, id)
            VALUES ('$gmname', '$dp', '$locat', '$addr', '$id')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'galleries')
    {
        $sql = "INSERT INTO Galleries(gname, gdoe, gLocation, gaddress, id)
            VALUES ('$gmname', '$dp', '$locat', '$addr', '$id')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'genres')
    {
        $sql = "INSERT INTO Genre (genre, id)
            VALUES ('$genre','$id')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    elseif ($_POST['Table1'] == 'shopping')
    {
        $sql = "INSERT INTO ShoppingCart (scArtwork, scPrice,uniqueIDSC)
            VALUES ('$piece', '$price', '$id')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'famous')
    {
        $sql = "INSERT INTO FamousPieces(id, piece)
            VALUES ('$id','$piece')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
     elseif ($_POST['Table1'] == 'build')
    {
        $sql = "INSERT INTO Builder (id, fname, lname)
            VALUES ('$id', '$fname', '$lname')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'images')
    {
       $sql = "INSERT INTO Images (id, name, url, cslink)
            VALUES ('$id', '$piece', '$url', '$cslink')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table1'] == 'subjects')
    {
        $sql = "INSERT INTO Subjects (id, dditem, cslink)
            VALUES ('$id', '$piece', '$cslink' )";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    else
    {
        echo "nothing deleted";
    }
?>
</body>
</html>