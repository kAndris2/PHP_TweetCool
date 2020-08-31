<html>
        <head>
            <title>All messages></title>
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>
            <h1>This is the Message board</h1>
            <h3>You can see all TweetCool messages!</h3>
            <button onclick="window.location.href ='/';">Back</button>

            <div style="background-color: darkcyan">
                @foreach ($tweets as $tweet)
                    <ul class="nav-tabs">
                        <a class="name" id="username">{{$tweet->userName}}:</a>
                        <br>
                        <a class="date" id="date">({{$tweet->date}})</a>
                        <br>
                        <p class="tweet" id="tweet">{{$tweet->message}}</p>
                    </ul>
                 @endforeach
             </div>

        </body>
    </html>