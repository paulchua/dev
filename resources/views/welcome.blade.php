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
	
	</form>
	<HR>
	Random User Generator<BR>
	 <form method="POST" action='/user#results'>
           
               <input type="hidden" value="{{ csrf_token() }}" name="_token">
               <fieldset>
                  <label>Number of users:</label>
                  <input type='text' name='numUsers' class="form-control" id='numUsers' value =
                     <?php 
                        echo isset($_POST['numUsers']) ? $_POST['numUsers'] : '' 
                        ?>
                     >
               @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                       
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            {{ $error }}
              
                        @endforeach
               @endif
                  <label>Include email address: </label>
                  <input type="checkbox" name="wantsEmail"
                     <?php
                        if (isset($_POST["wantsEmail"]))
                            echo "checked";
                        ?>
                     >
                  <br />
                  <label>Include phone number: </label>
                  <input type="checkbox" name="wantsPhone"
                     <?php
                        if (isset($_POST["wantsPhone"]))
                            echo "checked";
                        ?>
                     > 
               </fieldset>

            <button type='submit'>Get Users</button>
         </form>
	<HR>
    </body>
</html>
