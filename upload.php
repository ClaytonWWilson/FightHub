<html>
<head>
    <title>FightHub - Upload</title>
    <link rel="stylesheet" href="main.css">
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
    <form class="upload-form" action="submit.php">
        <input type="text" name="url">
        <input type="text" name="name">
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <textarea name="tags" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
