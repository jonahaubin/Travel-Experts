<!doctype="html">
<html>
<head>
    <title>Travel Experts - Travel Packages</title>
    <?php include "php/stdhead.php"; ?>
</head>

<body>
    <!-- <header> -->
    <?php include "php/header.php" ?>
    <!-- <nav> -->
    <?php include "php/nav.php" ?>

    <section>
        <h2>Packages</h2>
        <p>
            This is the Packages page, it will display the packages.<br>
            Each article should include the name, description, start and end dates, and price (bonus for pictures)<br>
            Possibly a "book now" button
        </p>
        <article class="oddart"> <!-- The .oddart class is for alternating color and positioning of an article -->
			<div class="artcontent">
				<h2>Name</h2>
				<p>
					Description
				</p>
			</div>
		</article>
		<article>
			<div class="artcontent">
				<h2>Name 2</h2>
				<p>
					Description 2
				<br>
			</div>
		</article>
    </section>

    <!-- <footer> -->
    <?php include "php/footer.php" ?>
</body>
</html>
