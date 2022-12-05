               
<?php
    $classnav = "nav1";
    $item1 = "Prácticas remuneradas en Hostelería";
    $item2 = "Requisitos / Documentacíon necesaria";
    $item3 = "Características";
    $item4 = "";
    include '../Main_Header_Footer/header.php';
?>
                        <!-- CSS -->
<link rel="stylesheet" href="CSS/practicasespana-section-horizontal.css">
<link rel="stylesheet" href="CSS/practicasespana-section-top.css">
<link rel="stylesheet" href="CSS/practicasespana-section-video.css">
<link rel="stylesheet" href="CSS/practicasespana-information-general.css">
<link rel="stylesheet" href="CSS/practicasespana-section-caracteristicas.css">

<?php
    include 'Component/practicasespana-start.php';
    include 'Component/practicasespana-information-general.php';
    include 'Component/practicasespana-video.php';
    include 'Component/practicasespana-scrollHorizontal.php';
    include 'Component/practicasespana-section-caracteristicas.php';
    include '../Main_Header_Footer/Component/button_contactanos.php';
?>

<!-- Titre de la page -->
<script>
    var title_page = "Práticas en España";
</script>

<?php
    include '../Main_Header_Footer/footer.php';
?>

<script type="text/javascript" src="../Main_Header_Footer/JS/locomotiveScroll.js"></script>