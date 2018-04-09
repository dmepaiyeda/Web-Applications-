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
    <link rel='stylesheet' href='maintainstyle.css'>
</head>
<body>
    <!-- Make buttons load page specific to their maintainence function -->
<button type="button" class="btn collapsed" data-toggle="collapse" data-target="#add" aria-expanded="false">Add</button>
<div id="add" class="collapse" aria-expanded="false" style="height: 0px;">
    <form action="add.php" method="post">
        Select table:<br>
        <select name="Table1" size="3">
            <option value="artist">Artists</option>
            <option value="artwork">Artworks</option>
            <option value="images">Images</option>
            <option value="museum">Museum</option>
            <option value="galleries">Galleries</option>
            <option value="genres">Genres</option>
            <option value="subjects">Subjects</option>
            <option value="shopping">Shopping Cart</option>
            <option value="review">Reviews</option>
            <option value="famous">Famous Pieces</option>
            <option value="build">Builder</option>
        </select>

        <br><br>ID: <br>
        <input type='text' name='id'>
        <br><br>  Piece: (Artworks, Images, ShoppingCart Only, Famous Pieces Only) <br>
        <input type='text' name='piece'>
        <br><br> (Artworks, Artist and Builders Only) First Name: <br>
        <input type='text' name='fname'>
        <br><br> (Artworks, Artist and Builders Only) Last Name: <br>
        <input type='text' name='lname'>
        <br><br> (Artwork, Museum and Galleries Only) Date of Creation: <br>
        <input type='text' name='dp'>
        <br><br> (Artwork Only) Type of Painting Colors: <br>
        <input type='text' name='type'>
        <br><br> (Artwork Only) Dimension: <br>
        <input type='text' name='dime'>
        <br><br> (Artwork and Shopping Cart only) Price: <br>
        <input type='text' name='price'>
        <br><br> (Genre Only) Genre: <br>
        <input type='text' name='genre'>
        <br><br> (Images only) URL: <br>
        <input type='text' name='url'>
        <br><br> (Artist Only) Birth year: <br>
        <input type='text' name='byear'>
        <br><br> (Artist Only) Death year: <br>
        <input type='text' name='dyear'>
        <br><br> (artist Only) Place of Living: <br>
        <input type='text' name='pol'>
        <br><br>(Artist, Artworks, Galleries and Museum only) Location: <br>
        <input type='text' name='location'>
        <br><br>(Galleries and Museum only) Address: <br>
        <input type='text' name='addr'>
        <br><br> (Images and Subjects Only) CSS Link:<br>
        <input type='text' name='cslink'>
        <br><br>(Galleries and Museum Only) Name of Place:<br>
        <input type='text' name='gmname'><br>
        <br><br> (Subject Only) Drop Down Menu Item: <br>
        <input type='text' name='dditem'><br>



        <input type="submit" value="Submit">
    </form>
</div>
<br><br>
<button type="button" class="btn collapsed" data-toggle="collapse" data-target="#delete" aria-expanded="false">Delete</button>
<div id="delete" class="collapse" aria-expanded="false" style="height: 0px;">
    <form action="delete.php" method="post">

        Select table:<br>
        <select name="Table" size="3">
            <option value="artist">Artists</option>
            <option value="artwork">Artworks</option>
            <option value="museum">Museum</option>
            <option value="galleries">Galleries</option>
            <option value="genre">Genres</option>
            <option value="shoppingCart">Shopping Cart</option>
            <option value="famousPieces">Famous Pieces</option>
            <option value="builder">Builder</option>
        </select><br><br>
        First name of item to be removed:
        <input type="text" name="item">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</div>
<br><br>
<button type="button" class="btn collapsed" data-toggle="collapse" data-target="#modify" aria-expanded="false">Modify</button>
<div id="modify" class="collapse" aria-expanded="false" style="height: 0px;">
    <form action="modify.php" method="post">
        Select table:<br>
        <select name="Table3" size="3">
            <option value="artist">Artists</option>
            <option value="artwork">Artworks</option>
            <option value="images">Images</option>
            <option value="museum">Museum</option>
            <option value="galleries">Galleries</option>
            <option value="genres">Genres</option>
            <option value="subjects">Subjects</option>
            <option value="shopping">Shopping Cart</option>
            <option value="review">Reviews</option>
            <option value="famous">Famous Pieces</option>
            <option value="build">Builder</option>
        </select>

        <br><br>ID: <br>
        <input type='text' name='id'>
        <br><br>  Piece: (Artworks, Images, ShoppingCart Only, Famous Pieces Only) <br>
        <input type='text' name='piece'>
        <br><br> (Artworks, Artist and Builders Only) First Name: <br>
        <input type='text' name='fname'>
        <br><br> (Artworks, Artist and Builders Only) Last Name: <br>
        <input type='text' name='lname'>
        <br><br> (Artwork, Museum and Galleries Only) Date of Creation: <br>
        <input type='text' name='dp'>
        <br><br> (Artwork Only) Type of Painting Colors: <br>
        <input type='text' name='type'>
        <br><br> (Artwork Only) Dimension: <br>
        <input type='text' name='dime'>
        <br><br> (Artwork and Shopping Cart only) Price: <br>
        <input type='text' name='price'>
        <br><br> (Artist and Artwork only) Genre: <br>
        <input type='text' name='genre'>
        <br><br> (Images only) URL: <br>
        <input type='text' name='url'>
        <br><br> (Artist Only) Birth year: <br>
        <input type='text' name='byear'>
        <br><br> (Artist Only) Death year: <br>
        <input type='text' name='dyear'>
        <br><br> (artist Only) Place of Living: <br>
        <input type='text' name='pol'>
        <br><br>(Artworks, Galleries and Museum only) Location: <br>
        <input type='text' name='location'>
        <br><br>(Galleries and Museum only) Address: <br>
        <input type='text' name='addr'>
        <br><br> (Images Only) CSS Link:<br>
        <input type='text' name='cslink'>
        <br><br>(Galleries and Museum Only) Name of Place:<br>
        <input type='text' name='gmname'><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>