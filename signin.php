<!doctype="html">
<html>
<head>
    <title>Travel Experts - Sign In</title>
    <?php include "php/stdhead.php"; ?>
</head>

<body>
    <!-- <header> -->
    <?php include "php/header.php" ?>
    <!-- <nav> -->
    <?php include "php/nav.php" ?>

    <section>
        <h2>Sign In</h2>
        <form action="index.html" method="post">
            <label>Username</label>
            <input type="text" name="uname">
            <br>
            <label>Password</label>
            <input type="password" name="upass">
            <br>
            <input type="submit" name="submit">
        </form>
    </section>

    <!-- <footer> -->
    <?php include "php/footer.php" ?>
</body>
</html>
