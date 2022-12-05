               
<?php
    $classnav = "nav1";
    $item1 = "Información General";
    $item2 = "Información importante";
    $item3 = "La casa y la familia / Derechos y obligaciones";
    $item4 = "";
    include '../Main_Header_Footer/header.php';
?>
                        <!-- CSS -->
<link rel="stylesheet" href="CSS/anosescolar-section-info.css">
<link rel="stylesheet" href="CSS/anosescolar-section-top.css">
<link rel="stylesheet" href="CSS/anosescolar-information-general.css">
<link rel="stylesheet" href="CSS/anosescolar-educacion-segundaria.css">

<?php
    include 'Component/anosescolar-start.php';
    include 'Component/anosescolar-information-general.php';
    include 'Component/anosescolar-scrollHorizontal.php';
    include 'Component/anosescolar-educacion-segundaria.php';
    include '../Main_Header_Footer/Component/button_contactanos.php';
?>

<!-- Titre de la page -->
<script>
    var title_page = "Au Pair";
</script>

<?php
    include '../Main_Header_Footer/footer.php';
?>

<script type="text/javascript" src="../Main_Header_Footer/JS/locomotiveScroll.js"></script>