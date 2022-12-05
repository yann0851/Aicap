<?php
    $classnav = "nav1";
    $item1 = "";
    $item2 = "";
    $item3 = "";
    $item4 = "";
    include '../Main_Header_Footer/header.php';
?>

                        <!-- CSS -->
<link rel="stylesheet" href="CSS/serviciodomestico-section-top.css">
<link rel="stylesheet" href="CSS/serviciodomestico-information-general.css">
<link rel="stylesheet" href="CSS/serviciodomestico-section-video.css">

<?php
    include 'Component/serviciodomestico-start.php';
    include 'Component/serviciodomestico-information-general.php';
    include 'Component/serviciodomestico-video.php';
    include '../Main_Header_Footer/Component/button_contactanos.php';
?>

<!-- Titre de la page -->
<script>
    var title_page = "Servicio Doméstico";
</script>

<?php
    include '../Main_Header_Footer/footer.php';
?>

<script type="text/javascript" src="../Main_Header_Footer/JS/locomotiveScroll.js"></script>