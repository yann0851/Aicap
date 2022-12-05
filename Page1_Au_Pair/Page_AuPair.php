               
<?php
    $classnav = "nav1";
    $item1 = "Información General";
    $item2 = "Información importante";
    $item3 = "La casa y la familia / Derechos y obligaciones";
    $item4 = "";
    include '../Main_Header_Footer/header.php';
?>
                        <!-- CSS -->
<link rel="stylesheet" href="CSS/aupair-section-info.css">
<link rel="stylesheet" href="CSS/aupair-section-top.css">
<link rel="stylesheet" href="CSS/aupair-section-video.css">
<link rel="stylesheet" href="CSS/aupair-information-general.css">
<link rel="stylesheet" href="CSS/aupair-section-horizontal.css">

<?php
    include 'Component/aupair-start.php';
    include 'Component/aupair-information-general.php';
    include 'Component/aupair-video.php';
    include 'Component/aupair-accordion.php';
    include 'Component/aupair-scrollHorizontal.php';
    include '../Main_Header_Footer/Component/button_contactanos.php';
?>

<!-- Titre de la page -->
<script>
    var title_page = "Au Pair";
</script>

<?php
    include '../Main_Header_Footer/footer.php';
?>

<script src="JS/accordion_effect.js"></script>
<script type="text/javascript" src="../Main_Header_Footer/JS/locomotiveScroll.js"></script>