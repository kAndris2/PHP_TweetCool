<html>
    <head>
        <title>TweetCool</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <img src="pics/tw0.jpg" width="150" height="125" align="left">
        <h1>Welcome to the TweetCool site!</h1>
        <h3>You can post whatever you want!</h3>
        <br><br>

        <img src="pics/tw1.jpg" width="600" height="450" align="right">
        <ul class="nav-tabs">
            <form method="post" action="/tweet">
                <label for="name">Your name:</label><br>
                <input type="text" id="name" name="username" required><br>

                <label for="textbox">Message:</label>
                <br>
                <textarea id="textbox" name="message" required></textarea><br><br>

                <input type="submit" value="Submit">
                <button onclick="window.location.href ='messageboard';">Go to message board</button>
            </form>
        </ul>

    </body>
</html>