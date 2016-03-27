<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head> {{ csrf_field() }}
	<body>
    <b>Dynamic Web Applications<br>
	Project 3<br>
	Paul Chua<br>
	<HR>
	Lorem Ipsum Generator<BR>
	How many paragraphs do you want? (max:9) <BR>
 <form method='POST' action='/lorem'>
<input type='text' name='paragraphs' class="form-control" id='paragraphs' size="3">
 <button type='submit' >Generate</button>
        {{ csrf_field() }}
	
	
	<HR>
	Random User Generator<BR>
	<HR>
    </body>
</html>
