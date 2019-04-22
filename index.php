<html>
<head>
    <title>FightHub - Home</title>
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





        <!-- This is where php code for loading preview videos below the titlebar will go -->

        <div class="video-list-container">
            <!-- Entry 1 -->
            <div id="video-item">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/eCI8eAbq-4c" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>

                <a href="https://www.youtube.com/watch?v=eCI8eAbq-4c">Video Title Here</a>

                <div id="players-characters">
                    <table>
                        <tr>
                            <td class="header">Players</td>
                            <td class="header">Characters</td>
                        </tr>
                        <tr>
                            <td class="data" id="table-border">Player1</td>
                            <td class="data" id="table-border">Character1</td>
                        </tr>
                        <tr>
                            <td class="data" id="table-border">Player2</td>
                            <td class="data" id="table-border">Character2</td>
                        </tr>
                    </table>
                </div>

                <div id="game-stage">
                    <p>Game Name</p>
                    <p>Stage Name</p>
                </div>

                <div id="description">
                    <p>The description goes here.......</p>
                </div>

            </div>


            <!-- Entry 2 -->

            <div id="video-item">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/eCI8eAbq-4c" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>

                <a href="https://www.youtube.com/watch?v=eCI8eAbq-4c">Video Title Here</a>

                <div id="players-characters">
                    <table>
                        <tr>
                            <td class="header">Players</td>
                            <td class="header">Characters</td>
                        </tr>
                        <tr>
                            <td class="data" id="table-border">Player1</td>
                            <td class="data" id="table-border">Character1</td>
                        </tr>
                        <tr>
                            <td class="data" id="table-border">Player2</td>
                            <td class="data" id="table-border">Character2</td>
                        </tr>
                    </table>
                </div>

                <div id="game-stage">
                    <p>Game Name</p>
                    <p>Stage Name</p>
                </div>

                <div id="description">
                    <p>The description goes here.......</p>
                </div>

            </div>
            

        </div>

    </body>
</html>
