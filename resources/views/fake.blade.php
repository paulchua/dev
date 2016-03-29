
<!doctype html>
<html>
<head>
</head>
<body>



 <header>
    </header>

    <section>
<h1>Your unique users have been created</h1> 
        <?php 
            if (isset($users))
                foreach($users as $user) 
                {
                    echo "Name: " . $user['name'] . "  " . $user['lastName'] . "<br>";
                    if (isset($user['email']))
                    	echo "Email: " . $user['email'] . "<br>";
                    if (isset($user['phoneNumber']))
                    	echo "Phone Number: " . $user['phoneNumber'] . "<br>";
                   echo "<hr>";
                }
        ?>

    </section>




</body>
</html>