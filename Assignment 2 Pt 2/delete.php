<!DOCTYPE html>
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

    if ($_POST['Table'] == 'artist')
    {
        $item = $_POST['item'];
        $sql = "SELECT id FROM Artist WHERE aFirstname='$item'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                $num = $row['id'];
                $sql = "DELETE FROM artist WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM Subjects WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM genre WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM famousPieces WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
                $sql = "DELETE FROM images WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
        }
        else
        {
            echo "0 Results";
        }
    }
    elseif ($_POST['Table'] == 'artwork')
    {
        $item = $_POST['item'];
        $sql = "SELECT id FROM Artwork WHERE piece='$item'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                $num = $row['id'];
                $sql = "DELETE FROM artwork WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }


                $sql = "DELETE FROM Subjects WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM genre WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
                $sql = "DELETE FROM images WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
        }
        else
        {
            echo "0 Results";
        }
    }
    elseif ($_POST['Table'] == 'museum')
    {
        $item = $_POST['item'];
        $sql = "SELECT id FROM Museum WHERE mname='$item'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                $num = $row['id'];
                $sql = "DELETE FROM Museum WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM Subjects WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM Builder WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM famousPieces WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
                $sql = "DELETE FROM images WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
        }
        else
        {
            echo "0 Results";
        }
    }
    elseif ($_POST['Table'] == 'galleries')
    {
        $item = $_POST['item'];
        $sql = "SELECT id FROM Galleries WHERE gname='$item'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0)
        {
        // output data of each row
            while($row = mysqli_fetch_assoc($result))
            {
                $num = $row['id'];
                $sql = "DELETE FROM Galleries WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }


                $sql = "DELETE FROM Subjects WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM Builder WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }

                $sql = "DELETE FROM famousPieces WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
                $sql = "DELETE FROM images WHERE id= $num";

                if (mysqli_query($conn, $sql))
                {
                    echo "Record deleted successfully";
                }
                else
                {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
        }
        else
        {
            echo "0 Results";
        }
    }
    elseif ($_POST['Table'] == 'genre')
    {
        $item = $_POST['item'];
        $sql = "DELETE FROM Genre WHERE genre='$item'";
        if (mysqli_query($conn, $sql))
        {
            echo "Record deleted successfully";
        }
        else
        {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    elseif ($_POST['Table'] == 'shoppingCart')
    {
        $item = $_POST['item'];
        $sql = "DELETE FROM shoppingCart WHERE scArtwork='$item'";
        if (mysqli_query($conn, $sql))
        {
            echo "Record deleted successfully";
        }
        else
        {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    elseif ($_POST['Table'] == 'famousPieces')
    {
        $item = $_POST['item'];
        $sql = "DELETE FROM famousPieces WHERE piece='$item'";
        if (mysqli_query($conn, $sql))
        {
            echo "Record deleted successfully";
        }
        else
        {
            echo "Error deleting record: " . mysqli_error($conn);
        }

    }
     elseif ($_POST['Table'] == 'builder')
    {
        $item = $_POST['item'];
        $sql = "DELETE FROM Builder WHERE fname='$item'";
        if (mysqli_query($conn, $sql))
        {
            echo "Record deleted successfully";
        }
        else
        {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    else
    {
        echo "nothing deleted";
    }
    mysqli_close($conn);

?>

    <!-- Footer section-->
    <footer class = 'footer font'>
        <p>Copyright &copy; Deborah Mepaiyeda & Sarah MacCallum 2018</p>
    </footer>
</body>
</html>