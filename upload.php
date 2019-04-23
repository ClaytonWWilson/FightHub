<html lang="en">
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

        <h3 class="url">Youtube URL *</h3>
        <input type="text" name="url" id="url" class="url">

        <h3 class="title">Video Title *</h3>
        <input type="text" name="title" id="title" class="title">
        
        <div class="user-date">
            <div class="username">
                <h3>Username *</h3>
                <input type="text" name="username" id="username">
            </div>

            
            <div class="video-date">
                <h3>Event Date *</h3>
                <input type="date" name="video-date" id="video-date">
            </div>
        </div>
        
        <h3 class="description">Description</h3>
        <textarea name="description" cols="30" rows="10" id="description" class="description"></textarea>
        
        <h3 class="characters">Characters (Seperated by commas) *</h3>
        <input type="text" name="characters" id="characters" class="characters">
        
        <h3 class="players">Players (Seperated by commas) *</h3>
        <input type="text" name="players" id="players" class="players">
        
            
        
        
        <div class="game-info">
            <div class="game-name">
                <h3>Select Game *</h3>
                <select name="game" id="game">
                    <option disabled selected value>-- Game --</option>
                    <option value="Street Fighter V">Street Fighter V</option>
                    <option value="Mortal Kombat 11">Mortal Kombat 11</option>
                    <option value="Super Smash Bros Melee">Super Smash Bros Melee</option>
                    <option value="Super Smash Bros Ultimate">Super Smash Ultimate</option>
                    <option value="Killer Instinct">Killer Instinct</option>
                    <option value="Injustice">Injustice</option>       
                </select>
            </div>

            <div class="stage-name">
                <h3 class="stage">Stage Name *</h3>
                <input type="text" name="stage" id="stage" class="stage">
            </div>
        </div>

        <div class="length-button">
            <div class="length">
                <h3>Video Length</h3>
                <input type="text" name="length" id="length">
            </div>

            <div class="button">
                <input type="button" name="submit_button" value="Submit" onclick="validateUpload()">
            </div>
        </div>
    </form>

</body>
</html>
