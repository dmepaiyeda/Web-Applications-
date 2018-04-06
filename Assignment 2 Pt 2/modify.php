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

    $conn = mysqli_connect($servername, $username, $password, $dbname);

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
    if($_POST['dditem']!="")
        $dditem = $_POST['dditem'];


    if ($_POST['Table3'] == 'artist')
    {
        if (($_POST['fname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artist SET aFirstname='$fname' WHERE idArtist=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['lname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artist SET aLastname='$lname' WHERE idArtist=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            }
            else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['byear'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artist SET byear='$byear' WHERE idArtist=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['dyear'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artist SET dyear='$dyear' WHERE idArtist=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['pol'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artist SET pol='$pol' WHERE idArtist=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'artwork')
    {
        if (($_POST['fname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET firstname='$fname' WHERE idArtwork=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['lname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET lastname='$lname' WHERE idArtwork=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            }
            else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['price'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET price='$price' WHERE idArtwork=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['dop'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET year='$dop' WHERE idArtwork=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['dime'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET dimension='$dime' WHERE idArtwork=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['piece'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET piece='$piece' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['location'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Artwork SET location='$locat' WHERE idArtwork=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'museum')
    {
        if (($_POST['dop'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Museum SET doe='$dop' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['gmname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Museum SET mname='$gmname' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['location'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Museum SET location='$locat' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['addr'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Museum SET address='$addr' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'galleries')
    {
        if (($_POST['dop'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Galleries SET doe='$dop' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['gmname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Galleries SET gname='$gmname' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['location'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Galleries SET location='$locat' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['addr'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Galleries SET address='$addr' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'genres')
    {
        if (($_POST['genre'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Genre SET genre='$genre' WHERE uniqueIDGenre=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }

    elseif ($_POST['Table3'] == 'shopping')
    {
        if (($_POST['piece'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE shoppingCart SET scArtwork='$piece' WHERE uniqueIDSC=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['price'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE shoppingCart SET scPrice ='$price' WHERE uniqueIDSC=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'famous')
    {
        if (($_POST['piece'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE FamousPiece SET piece ='$piece' WHERE uniqueIDFP=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
     elseif ($_POST['Table3'] == 'build')
    {
         if (($_POST['fname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Builder SET fname='$fname' WHERE uniqueIDB=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
         if (($_POST['lname'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Builder SET lname='$lname' WHERE uniqueIDB=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'images')
    {
       if (($_POST['piece'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Images SET name='$piece' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['url'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Images SET url='$url' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['cslink'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Images SET cslink='$cslink' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    elseif ($_POST['Table3'] == 'subjects')
    {
        if (($_POST['dditem'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Subjects SET dditem='$dditem' WHERE uniqueID=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if (($_POST['cslink'] != "") && ($_POST['id'] != ""))
        {
            $sql = "UPDATE Subjects SET cslink='$cslink' WHERE uniqueID=$id";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }

    else
    {
        echo "nothing deleted";
    }



?>
</body>
</html>