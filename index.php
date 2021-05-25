    <link rel="icon" href="./src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./src/css/style.css">
<?php
    // Définir le titre de ma page
    $titre = "Bitly";
    $description = "Shorten your Link";
    // Appeler mon header 
    require "./src/controller/header.php";
    require "./src/controller/hero.php";
?>

<!-- Formulaire pour entrer liens -->
<section class="link">
    <form action="" method="post">
        <input type="url" name="url" placeholder="<?= $description ?>">
        <input type="submit" value="Shorten">
    </form>
    <p>By clicking SHORTEN, you are agreeing to Bitly's <span>Terms of service</span> and 
    <span>Privacy Policy</span></p>
</section>



<?php
    require "./src/controller/sponsor.php";
    require './src/controller/footer.php';
?>
</body>
</html>
