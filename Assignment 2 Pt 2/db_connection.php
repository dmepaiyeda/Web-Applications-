<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "smaccall";
 $dbpass = "pygleif0";
 $db = "smaccall";


try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'DROP TABLE IF EXISTS Artist';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Genre';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Artwork';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS ShoppingCart';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Reviews';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Galleries';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Museum';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Images';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS FamousPieces';
        $conn->exec($sql);

        $sql = 'DROP TABLE IF EXISTS Subjects';
        $conn->exec($sql);
        $sql = 'DROP TABLE IF EXISTS Builder';
        $conn->exec($sql);



        $sql = "CREATE TABLE Genre (
            genre VARCHAR(30),
            id INT(6),
            uniqueIDGenre INT(6)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Genre created successfully <br>";


        $sql = "CREATE TABLE Artist (
            idArtist INT(6) ,
            aFirstname VARCHAR(30) NOT NULL,
            aLastname VARCHAR(30) NOT NULL,
            byear INT(4),
            dyear INT(4),
            pol VARCHAR(25),
            cslink VARCHAR(10)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Artist created successfully <br>";

        $sql = "CREATE TABLE Artwork (
            idArtwork INT(6) ,
            piece VARCHAR(30) NOT NULL,
            type VARCHAR(50),
            dimension VARCHAR(50),
            year INT(1),
            price INT(10),
            firstname VARCHAR(30),
            lastname VARCHAR(30),
            location VARCHAR(30),
            cslink VARCHAR(10)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Artwork created successfully <br>";

        $sql = "CREATE TABLE Museum (
            mname VARCHAR(50) ,
            doe VARCHAR(25),
            location VARCHAR(20),
            address VARCHAR(50),
            id INT(6)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Museum created successfully <br>";


        $sql = "CREATE TABLE Galleries (
            gname VARCHAR(50) ,
            gdoe VARCHAR(25),
            gLocation VARCHAR(25),
            gaddress VARCHAR(50),
            id INT(6)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Galleries created successfully <br>";

        $sql = "CREATE TABLE ShoppingCart (
            scArtwork VARCHAR(50),
            scPrice INT(10),
            uniqueIDSC INT(6)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table ShoppingCart created successfully <br>";


        $sql = "CREATE TABLE Reviews (
            reviewNum INT(10) ,
            reviewerUsername VARCHAR(25)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Reviews created successfully <br>";

        $sql = "CREATE TABLE Images (
            id INT(6),
            name VARCHAR(30),
            url VARCHAR(250),
            cslink VARCHAR(15)
        )";

        // use exec() because no results are returned
        $conn->query($sql);
        echo "Table Images created successfully <br>";

        $sql = "CREATE TABLE FamousPieces(
            id INT(6),
            piece VARCHAR(30),
            uniqueIDFP INT(6)
        )";

        $conn->query($sql);
        echo "Table FamousPieces created successfully <br>";

        $sql = "CREATE TABLE Builder(
            id INT(6),
            fname VARCHAR(75),
            lname VARCHAR(30),
            uniqueIDB INT(6)
        )";

        $conn->query($sql);
        echo "Table Builder created successfully <br>";

        $sql = "CREATE TABLE Subjects(
            dditem VARCHAR(50),
            cslink VARCHAR(6),
            uniqueID INT(6)
        )";

        $conn->query($sql);
        echo "Table Subjects created successfully <br>";


    // begin the transaction
    $conn->beginTransaction();

    // our SQL statements

    //Artwork Table
   $conn->exec("INSERT INTO Artwork (idArtwork, piece, type, dimension, year, firstname, lastname, location)
    VALUES ('1','Campbells Soup Can', 'Synthetic Polymer Paint', '51cm x 41cm', '1962', 'Andy', 'Warhol','Museum of Modern Art')");
    $conn->exec("INSERT INTO Artwork (idArtwork, piece, type, dimension, year, price, firstname, lastname, location)
    VALUES ('2','Starry Night', 'Oil Paint', '73.7cm x 92.1cm', '1889', '100000000', 'Vincent', 'Van Gogh','Museum of Modern Art')");
    $conn->exec("INSERT INTO Artwork (idArtwork, piece, type, dimension, year, firstname, lastname, location)
    VALUES ('3', 'The Birth of Venus', 'Tempera', '672.5cm x 278.9cm', '1486', 'Sandro', 'Botticello','Uffizi Gallery')");
    $conn->exec("INSERT INTO Artwork (idArtwork, piece, type, dimension, year, firstname, lastname, location)
    VALUES ('4', 'The Last Supper', 'Fresco-secco', '460cm x 880cm', '1495', 'Leonardo', 'Da Vinci','Convent of Santa Maria delle Grazie')");
    $conn->exec("INSERT INTO Artwork (idArtwork, piece, type, dimension, year, firstname, lastname, location)
    VALUES ('5', 'The Weeping Woman', 'Oil on Canvas', '60cm x 49cm', '1937', 'Pablo', 'Picaso','Tate Modern')");

    //Artist Table
    $conn->exec("INSERT INTO Artist (idArtist, aFirstname, aLastname, byear, dyear, pol)
    VALUES ('6', 'Andy', 'Warhol', '1928', '1987', 'New York City')");
    $conn->exec("INSERT INTO Artist (idArtist, aFirstname, aLastname, byear, dyear, pol)
    VALUES ('7', 'Claude', 'Monet', '1840', '1926', 'Paris')");
    $conn->exec("INSERT INTO Artist (idArtist, aFirstname, aLastname, byear, dyear, pol)
    VALUES ('8', 'Leonardo', 'Da Vinci', '1452', '1519', 'Milan')");
    $conn->exec("INSERT INTO Artist (idArtist, aFirstname, aLastname, byear, dyear, pol)
    VALUES ('9', 'MichelAngelo', 'di Lodovico Buonarroti Simoni', '1475', '1564', 'Italy')");
    $conn->exec("INSERT INTO Artist (idArtist, aFirstname, aLastname, byear, dyear, pol)
    VALUES ('10', 'Vincent', 'Van Gogh', '1853', '1890', 'Paris')");

    //Shopping Cart Table
    $conn->exec("INSERT INTO ShoppingCart (scArtwork, scPrice, uniqueIDSC)
    VALUES ('Campbells Soup Can', '200', '1')");
    $conn->exec("INSERT INTO ShoppingCart (scArtwork, scPrice, uniqueIDSC)
    VALUES ('Starry Night', '120', '2')");
    $conn->exec("INSERT INTO ShoppingCart (scArtwork, scPrice, uniqueIDSC)
    VALUES ('The Last Supper', '300', '3')");
    $conn->exec("INSERT INTO ShoppingCart (scArtwork, scPrice, uniqueIDSC)
    VALUES ('The Birth of Venus','250', '4')");
    $conn->exec("INSERT INTO ShoppingCart (scArtwork, scPrice, uniqueIDSC)
    VALUES ('The Weeping Woman', '140', '5')");

    //Genre Table
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Pop Art', '1', '1')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Post-impressionism','2','2')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Renaissance','3','3')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Renaissance','4','4')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Cubism','5', '5')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Pop Art', '6', '6')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Modern Art', '6', '7')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Abstract Impressionism', '6', '8')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Impressionism','7', '9')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Realism', '7', '10')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Renaissance','8', '11')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Renaissance','9', '12')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Impressionism', '10', '13')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Realism', '10', '14')");
    $conn->exec("INSERT INTO Genre (genre, id, uniqueIDGenre)
    VALUES ('Post-impressionism', '10', '15')");

    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('1','Campbells Soup Can','http://1.bp.blogspot.com/-zekY4NLo1_c/UD_uVdNgEnI/AAAAAAAAAnA/rZuPJJ35Y4w/s1600/32+campbells.jpeg', 'soup')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('2','Starry Night','https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/1280px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg', 'snight')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('3', 'The Last Supper','http://milanostyle.com/wp-content/uploads/Last-Supper-Da-Vinci-1495.jpg', 'lasts')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('4', 'The Birth of Venus','https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg/450px-Sandro_Botticelli_-_La_nascita_di_Venere_-_Google_Art_Project_-_edited.jpg', 'bvenus')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('5', 'The Weeping Woman','https://i.pinimg.com/originals/6c/f6/78/6cf6785c2931400bc048b06a597f23bd.jpg','wwoman')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('6','Andy Warhol','https://upload.wikimedia.org/wikipedia/commons/4/42/Andy_Warhol_1975.jpg', 'warhol')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('7','Claude Monet','https://www.thefamouspeople.com/profiles/images/claude-monet-3.jpg', 'monet')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('8', 'Leonardo Da Vinci','https://news.nationalgeographic.com/content/dam/news/2017/11/2/book-talk-leonardo-da-vinci/01-leonardo-da-vinci-book-talk.jpg', 'davinci')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('9','MichelAngelo','https://media1.britannica.com/eb-media/46/75046-004-E437D9A2.jpg', 'angelo')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('10','Vincent Van Gogh','https://www.artble.com/imgs/3/2/c/55784/vincent_van_gogh.jpg', 'gogh')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('14','Museum of Art','https://static.dezeen.com/uploads/2016/04/moma-expansion-diller-scofidio-renfro-new-york-usa_dezeen_1568_0.jpg','museumart')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('15','Tate Modern','http://www.vigoenfotos.com/londres/imagenes/london/tate_modern_museum/g_vigoenfotos_6453m.jpg','tatemodern')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('12','Uffizi Gallery', 'https://nationalpostcom.files.wordpress.com/2016/07/travel_trip_essentials_florence_47275094.jpg', 'uffizigal')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('11','Art Gallery of Ontario','https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/AGO_at_dusk.jpg/1200px-AGO_at_dusk.jpg','ontario')");
    $conn->exec("INSERT INTO Images (id, name, url, cslink)
        VALUES ('13','Musee Des Beaux-Arts De Bordeaux','http://actualites-pro-museumexperts.com/wp-content/uploads/2013/12/Absolute-barrieres-.jpg','museemuseum')");


    $conn->exec("INSERT INTO Galleries(gname, gdoe, gLocation, gaddress, id)
        VALUES ('Art Gallery of Ontario','1900', 'Canada', '317 Dundas St W, Toronto ON M5T 1G4', '11')");
    $conn->exec("INSERT INTO Galleries(gname, gdoe, gLocation, gaddress, id)
        VALUES ('Uffizi Gallery','1581', 'Italy', 'Piazzale degli Uffizi, 6, 50122 Firenze FI','12')");
    $conn->exec("INSERT INTO Museum(mname, doe, location, address, id)
        VALUES ('Musee Des Beaux-Arts De Bordeaux', '1801','France','20 Cours dAlbret, 33000 Bordeaux','13')");
    $conn->exec("INSERT INTO Museum(mname, doe, location, address, id)
        VALUES ('Museum of Modern Art', 'November 7, 1929', 'United States of America', '11 West 53 Street, Manhattan', '14')");
    $conn->exec("INSERT INTO Museum(mname, doe, location, address, id)
        VALUES ('Tate Modern', '2000', 'United Kingdom', 'Bankside; London, SE1', '15')");



$conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('6','Campbells Soup Can', '1')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('6','Green Coca-Cola Bottles', '2')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('6','Mickey Mouse', '3')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('6','Flowers Series', '4')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('6','Eight Elvises', '5')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('7','San Giorgio Maggiore at Dusk', '6')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('7','Poplar Series', '7')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('7','Haystack Series', '8')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('7','Impression, Sunrise', '9')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('7','Rouen Cathedral Series', '10')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('8','Mona Lisa', '11')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('8','The Last Supper', '12')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('8','St. John the Baptist', '13')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('8','Female Head', '14')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('8','Head of Christ', '15')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('9','The Sistine Chapel Ceiling', '16')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('9','The Last Judgement', '17')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('9','Battle of Cascina', '18')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('9','Torment of Saint Anthony', '19')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('9','The Entombment', '20')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('10','Starry Night', '21')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('10','Self-portrait', '22')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('10','The Potato Eaters', '23')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('10','Irises', '24')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('10','Café Terrace at Night', '25')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('11','The Baroque', '26')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('11','Adam and Eve', '27')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('11','The Crucified Christ', '28')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('12','Santa Trinita Maestà', '29')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('12','Primavera', '30')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('12','The Birth of Venus', '31')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('13','Eliezer and Rebecca', '32')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('13','Greece on the Ruins of Missolonghi', '33')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('13','The Banks of the Oise', '34')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('14','Les Demoiselles dAvignon', '35')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('14','Reflections of Clouds on Water-Lily Pond', '36')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('14','The Song of Love', '37')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('15','I Do, I Undo, I Redo', '38')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('15','Double bind', '39')");
    $conn->exec("INSERT INTO FamousPieces(id, piece, uniqueIDFP)
        VALUES ('15','Marsyas', '40')");


    $conn->exec("INSERT INTO Builder (id, fname, uniqueIDB)
        VALUES('11','Group of private members of the Ontario Society of Artists', '1')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('12','Giorgio','Vasari', '2')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('12','Alfonso','Parigi', '3')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('13','Pierre','Lacour', '4')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('14','Abby Aldrich','Rockefeller', '5')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('14', 'Lillie P.',' Bliss', '6')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('14', 'Mary Quinn','Sullivan', '7')");
    $conn->exec("INSERT INTO Builder (id, fname, lname, uniqueIDB)
        VALUES('15','Sir Giles Gilbert','Scott', '8')");

    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Andy Warhol', 'AW', '6')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Claude Monet', 'CM', '7')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Leonardo da Vinci', 'LV', '8')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('MichelAngelo', 'MM', '9')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Vincent Van Gogh','VV','10')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Campbells Soup Can', 'CSC','1')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Starry Night', 'SN','2')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('The Birth of Venus', 'BV', '3')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('The Last Supper', 'LS', '4')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('The Weeping Woman', 'WW', '5')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Museum of Modern Art', 'MOMA', '14')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Tate Modren', 'TATE', '15')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Ifiizi Gallery', 'UFFIZI', '12')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Art Gallery of Onatrio', 'AGO', '11')");
    $conn->exec("INSERT INTO Subjects (dditem, cslink, uniqueID)
        VALUES('Musée des Beaux-Arts de Bordeaux', 'MUSEE', '13')");



    // commit the transaction
    $conn->commit();
    echo "New records created successfully";




    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 }

function CloseCon($conn)
 {

    $conn = null;
 //$conn -> close();
 }

?>






