<!doctype html>
<html>
<body>
<section>
<h1>Your fake users have been generated:</h1>
<BR><a href="http://p3.paulchua.xyz">Go Back</a><BR><BR><HR>
        <?php
            if (isset($users))
                foreach($users as $user) 
                {
                    echo "Name: " . $user['name'] . "  " . $user['lastName'] . "<br>";
                    if (isset($user['city']))
                    	echo "City: " . $user['city'] . "<br>";
                    if (isset($user['state']))
                    	echo "State: " . $user['state'] . "<br>";
                   echo "<hr>";
                }
        ?>
</section>
</body>
</html>