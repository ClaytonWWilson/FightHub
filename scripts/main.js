
// Validates the data inputs on the upload form
function validateUpload() {
    var url_bar = document.getElementById('url');
    var video_title = document.getElementById('title');
    var username = document.getElementById('username');
    // var description = document.getElementById('description'); // optional
    var video_date = document.getElementById('video-date');
    // var length = document.getElementById('length');  // optional
    var characters = document.getElementById('characters');
    var players = document.getElementById('players');
    var game = document.getElementById('game');
    var stage = document.getElementById('stage');

    // console.log('url_bar: ' + url_bar);
    // console.log('video_title: ' + video_title);
    // console.log('username: ' + username);
    // console.log('description: ' + description);
    // console.log('video_date: ' + video_date);
    // console.log('length: ' + length);
    // console.log('characters: ' + characters);
    // console.log('players: ' + players);
    // console.log('game: ' + game);
    // console.log('stage: ' + stage);


    // Checking that the required text boxes are filled in, and highlighting them red
    // if they are not
    var form_complete = true;

    // URL
    if (url_bar.value == "") {
        form_complete = false;
        url_bar.style = "border-color:red;"
    } else {
        url_bar.style = "border-color:green;"
    }

    // Video Title
    if (video_title.value == "") {
        form_complete = false;
        video_title.style = "border-color:red;"
    } else {
        video_title.style = "border-color:green;"
    }

    // Username
    if (username.value == "") {
        form_complete = false;
        username.style = "border-color:red;"
    } else {
        username.style = "border-color:green;"
    }

    // Video Date
    if (video_date.value == "") {
        form_complete = false;
        video_date.style = "border-color:red;"
    } else {
        video_date.style = "border-color:green;"
    }

    // Characters
    if (characters.value == "") {
        form_complete = false;
        characters.style = "border-color:red;"
    } else {
        characters.style = "border-color:green;"
    }

    // Players
    if (players.value == "") {
        form_complete = false;
        players.style = "border-color:red;"
    } else {
        players.style = "border-color:green;"
    }

    // Game
    if (game.value == "") {
        form_complete = false;
        game.style = "border-color:red;"
    } else {
        game.style = "border-color:green;"
    }

    // Stage
    if (stage.value == "") {
        form_complete = false;
        stage.style = "border-color:red;"
    } else {
        stage.style = "border-color:green;"
    }

    // If the form is completely filled out, call the submit function for the form
    // and redirect them to submit.php, otherwise alert them that they've forgotten to
    // fill in some of the form
    if (form_complete) {
        document.getElementById("upload-form").submit();
    } else {
        alert('Please fill out the rest of the upload form.');
    }
