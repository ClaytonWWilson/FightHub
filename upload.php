<html>
<head>
    <title>FightHub - Upload</title>
    <link rel="stylesheet" href="main.css">
    <script src="scripts/main.js"></script>
</head>

<body>
    <!-- Titlebar -->
    <form class="search" action="search.php">
        <h1 class="title-text">FightHub</h1>
        <input type="text" name="query" class="search" placeholder="Search..">
        <input type="submit" name="submit" class="submit" value="Search">
        <a href="upload.php"><img src="images/upload.png" class="upload" alt="upload"></a>
    </form>

    <!-- submit.php will read the variables from the url and add it to the database -->
    <form class="upload-form" id="upload-form" action="submit.php">

        <h3>Youtube URL *</h3>
        <input type="text" name="url" id="url">

        <h3>Name *</h3>
        <input type="text" name="name" id="name">
        
        <h3>Username *</h3>
        <input type="text" name="username">
        
        <h3>Description</h3>
        <textarea name="description" cols="30" rows="10"></textarea>
        
        <h3>Event Date</h3>
        <input type="date" name="video-date">
        
        <h3>Video Length</h3>
        <input type="text" name="length">
        
        <h3>Characters (Seperated by commas) *</h3>
        <input type="text" name="characters">
        
        <h3>Players (Seperated by commas) *</h3>
        <input type="text" name="players">
        
        <h3>Select Game *</h3>
        <select name="game">
            <option disabled selected value>-- Game --</option>
            <option value="Street Fighter">Street Fighter</option>
            <option value="Mortal Kombat">Mortal Kombat</option>
            <option value="Super Smash Bros">Super Smash Bros</option>
        </select>
        
        <h3>Stage Name *</h3>
        <input type="text" name="stage">
        
        
        <input type="button" name="submit_button" value="Submit" onclick="validateUpload()">
    </form>

</body>
</html>
