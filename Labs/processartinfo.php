<!DOCTYPE html>
<html>

  <head>
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400" rel="stylesheet">
  </head>

  <body style="font-family: 'Cinzel', serif; background: linear-gradient(to right, #EEE0CB, #F2C078, #4C230A);">
    <?php
    //  echo $_POST["tag_name"];
   $title =  $_POST['title'];
    $description = $_POST["description"];
    $genre = $_POST["choosegenre"];
    $subject = $_POST["choosesubject"];
    $art = $_POST["art"];
    $CCS = $_POST["CCS"];
    $museum = $_POST["museum"];
    $artyear = $_POST["year"];

    $artwork = array(
              "title" => "$title",
              "description" => "$description",
              "choosegenre" => "$genre",
              "choosesubject" => "$subject",
              "art" => "$art",
              "museum" => "$museum",
              "CCS" => "$CCS",
              "year" => "$artyear"
            );

    echo "<strong>"."Your information has been stored!"."<br>"."<br>"."Here is the information about the artwork you edited:"."</strong>"."<br>"."<br>";
    echo "Title: " . $artwork['title']. "<br>";
    echo "Description: " . $artwork['description']. "<br>";
    echo "Genre: " .  $artwork['choosegenre']."<br>";
    echo "Subject:  " . $artwork['choosesubject']."<br>";
    echo "Type of art: " . $artwork['art']."<br>";
      echo "Year of artwork: " . $artwork['year']."<br>";
    echo "Museum: " . $artwork['museum']."<br>";
    echo "Creative Commons Specification:  " . $artwork['CCS']."<br>";
    ?>

    <br>

  </body>

</html>
