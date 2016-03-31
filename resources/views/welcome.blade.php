<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head> {{ csrf_field() }}
	<body>
    <b>Dynamic Web Applications<br>
	Project 3<br>
	Paul Chua<br>
	<HR>
	Lorem Ipsum Generator<BR>
	Lorem Ipsum is simply dummy text of the printing and typesetting industry<BR>
	This tool allows you to generate up to 9 paragraphs of this fake stuff.
	How many paragraphs do you want? (max:9) <BR>
<form method='POST' action='/lorem'>
<input type='text' name='paragraphs' class="form-control" id='paragraphs' size="3">
<button type='submit' >Generate</button>
 {{ csrf_field() }}
</form>
<HR>Random User Generator<BR>
This Tool creats totally fake data like name, city, and state for test purposes.
	 <form method="POST" action='/user#results'>
           
               <input type="hidden" value="{{ csrf_token() }}" name="_token">
               <fieldset>
                  <label>Number of users (max 50):</label>
                  <input type='text' name='numUsers' class="form-control" id='numUsers' value =
                     <?php 
                        echo isset($_POST['numUsers']) ? $_POST['numUsers'] : '' 
                        ?>
                     >
   
                  <label>Include City? </label>
                  <input type="checkbox" name="wantsCity"
                     <?php
                        if (isset($_POST["wantsCity"]))
                            echo "checked";
                        ?>
                     >
                  <br />
                  <label>Include State? </label>
                  <input type="checkbox" name="wantsState"
                     <?php
                        if (isset($_POST["wantsState"]))
                            echo "checked";
                        ?>
                     > 
               </fieldset>
			   
            <button type='submit'>Generate Users</button>
         </form>
		 <BR><BR>
		 <HR>
		 @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                            {{ $error }}
              
                        @endforeach
               @endif
	<HR>
    </body>
</html>
