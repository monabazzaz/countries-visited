<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Droid+Sans+Mono" rel="stylesheet">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                background-color: #f0f0f0;
            }

            .container {
                text-align: center;
                display: table-cell;
            }

            .content {
                text-align: center;
                display: inline-block;
                margin-top: 40px;
            }

            .title {
                font-size: 70px;
                font-family: 'Bungee Hairline', cursive;
                padding-bottom: 20px;
            }

            .api {
                font-size: 20px;
                padding-top: 10px;
                color: #1da0a3;
                margin-left: 80px;
                margin-right: 80px;
                font-family: 'Droid Sans Mono', monospace;
                padding-bottom: 50px;
            }

            .api a {
                text-decoration: none;
                color: #999999;
            }

            .api a:hover {
                color: #1da0a3;
            }

            .credits {
                font-family: 'Bungee Hairline', cursive;
                color: black;
                padding-top: 20px;
                border: solid 1px #d1d1d1;
                padding-bottom: 20px;
                background-color: #b7b7b7;
            }
            .credits p {
                color: #1da0a3;
            }

            .credits a {
                text-decoration: none;
                color: #ffffff;
            }

            .credits a:hover {
                color: #1da0a3;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Travel and Fruits API</div>
                  <div class="api">This is a Laravel API that integrates PHP and allows a user to create, read, update or delete paramaters for three main elements: <a href="/states">states</a>, <a href="/countries">countries</a> and <a href="/fruits">fruits</a>.</div>
                  <div class="credits">
                    <h3>Credits:</h3>
                    <p><a href="https://laravel.com/">Laravel</a></p>
                    <p><a href="#">Gitbook</a></p>
                    <p><a href="https://github.com/monabazzaz/countries-visited">Github</a></p>
                    <p><a href="http://monabazzaz.org/portfolio">My Portfolio</a></p>
                  </div>
            </div>
        </div>
    </body>
</html>
