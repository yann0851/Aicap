               
<?php
    $classnav = "nav";
    $item1 = "Servicio";
    $item2 = "Quienes Somos";
    $item3 = "Opiniones";
    $item4 = "Colaboradores";
    include '../Main_Header_Footer/header.php';
?>
               <!-- CSS -->

<!-- logo -->
<link rel="stylesheet" href="../Main_Page/CSS/Logo.css">

<link rel="stylesheet" href="../Main_Page/CSS/about.css">
<link rel="stylesheet" href="../Main_Page/CSS/partner.css">
<link rel="stylesheet" href="../Main_Page/CSS/phrases.css">

<!-- Avis -->
<link rel="stylesheet" href="../Main_Page/CSS/opinion.css">

<!-- Service -->
<link rel="stylesheet" href="../Main_Page/CSS/service.css">


<?php
    include 'Component/logo.php';
    include 'Component/services.php';
    include 'Component/aboutHome.php';
    include 'Component/opinions.php';
    include 'Component/partner.php';
?>

    <!-- JS -->
    
    <!-- Service -->
    <script type="text/javascript" src="../Main_Page/JS/service.js"></script>

    <!-- Opinion -->
    <script type="text/javascript" src="../Main_Page/JS/opinion.js"></script>

    <!-- Logo -->
    <script type="text/javascript" src="../Main_Page/JS/logo.js"></script>

    <!-- Titre de la page -->
    <script>
        var title_page = "Inicio";
    </script>

<?php
    include '../Main_Header_Footer/footer.php';
?>