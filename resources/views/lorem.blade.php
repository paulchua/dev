
<!doctype html>
<html>
<head>
</head>
<body>

<header>
    </header>

    <section>
	<div class="container">      
		<h1>Your Lorem Ipsum has been generated</h1>
		<BR><a href="http://p3.paulchua.xyz">Go Back</a><BR><BR><HR>
        	@if(isset($paragraphs))
        		<p><?php echo implode('<p>', $paragraphs); ?></p>
			@endif
	</div>
    </section>

</body>
</html>