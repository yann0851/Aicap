<?php
    $classnav = "nav1";
    $item1 = "";
    $item2 = "";
    $item3 = "";
    $item4 = "";
    include '../Main_Header_Footer/header.php';
?>

                        <!-- CSS -->
<link rel="stylesheet" href="CSS/quienessomos-section-top.css">
<link rel="stylesheet" href="CSS/quienessomos-information-general.css">
<link rel="stylesheet" href="CSS/quienessomos-text.css">

<?php
    include 'Component/quienessomos-start.php';
    include 'Component/quienessomos-information-general.php';
    include 'Component/quienessomos-text.php';
    include '../Main_Header_Footer/Component/button_contactanos.php';
?>

<!-- Titre de la page -->
<script>
    var title_page = "Quienes Somos";
</script>

<?php
    include '../Main_Header_Footer/footer.php';
?>

<script type="text/javascript" src="../Main_Header_Footer/JS/locomotiveScroll.js"></script>