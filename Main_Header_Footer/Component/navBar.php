<div class=<?php echo $classnav; ?> data-scroll data-scroll-sticky data-scroll-target="#scroller">
  <nav class="fixed-nav">
    <ul class="mm-projects-nav menu" id="mm-projects-nav">
      <li>
        <a href="#navServicio" id="nav-btn-1" class="dropdown mm-projects-nav-btn location navServicio"><?php echo $item1?></a>
      </li>

      <li>
        <a href="#navQuienesSomos" id="nav-btn-2" class="dropdown mm-projects-nav-btn location navQuienesSomos"><?php echo $item2?></a>
      </li>

      <li>
        <a href="#navOpiniones" id="nav-btn-3" class="dropdown mm-projects-nav-btn location navOpiniones"><?php echo $item3?></a>
      </li>

      <li>
        <a href="#navColaboradores" id="nav-btn-4" class="dropdown mm-projects-nav-btn location navColaboradores"><?php echo $item4?></a>
      </li>

      <!-- <li ><a href="#location5" id="nav-btn-5"
            class="dropdown mm-projects-nav-btn location location5"
            >location5</a></li> -->

      <li class="dropdown dropdownTraits dropdown-6">
        <a style="width: 160px; text-align: center;" href="#">
          <svg id="Traits" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style=" stroke: white; stroke-width: 2;" width="16px" height="16px" viewBox="0 0 16 16" zoomAndPan="disable" preserveAspectRatio="none">
                <style type="text/css"></style>
                <line x1="0" y1="1" x2="16" y2="1" />
                <line x1="0" y1="7" x2="16" y2="7" />
                <line x1="0" y1="13" x2="16" y2="13" />
          </svg>
        </a>
        <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6">
          <li class="dropdown_item-1" onclick="myRedirection('../Main_Page/Welcome.php')">Inicio</li>
          <li class="dropdown_item-1" onclick="myRedirection('../Page1_Au_Pair/Page_AuPair.php')">Au pair</li>
          <li class="dropdown_item-2" onclick="myRedirection('../Page2_Job_En_Irlanda/Page_Job_En_Irlanda.php')">Job en Irlanda</li>
          <li class="dropdown_item-3" onclick="myRedirection('../Page3_Convivencia_Irlanda/Page_Convivencia_En_Irlanda.php')">Convivencia en Irlanda</li>
          <li class="dropdown_item-4" onclick="myRedirection('../Page5_Practicas_Espana/Page_Practicas_Espana.php')">Praticas en España</li>
          <li class="dropdown_item-5" onclick="myRedirection('../Page4_Anos_Escolar/Page_Anos_Escolar.php')">Año escolar en Irlanda</li>
          <li class="dropdown_item-6" onclick="myRedirection('../Page6_Servicio_Domestico/Page_Servicio_Domestico.php')">Servicio Doméstico</li>
          <li class="dropdown_item-7" onclick="myRedirection('../Page7_Praticas_Aicap/Page_Praticas_Aicap.php')">Práticas en Aicap</li>
          <li class="dropdown_item-8" onclick="myRedirection('../Page8_Otros_Programas/Page_Otros_Programas.php')">Otros Programas</li>
          <li class="dropdown_item-9" onclick="myRedirection('../Page9_Quienes_Somos/Page_Quienes_Somos.php')">Quienes Somos</li>
          <li class="dropdown_item-10">FAQ</li>
          <li class="dropdown_item-11" id="btnModal">Contactános</li>
        </ul>
      </li>
    </ul>
  </nav>
</div>

<?php 
    include '../Page11_Contactanos/modal-contact-form.php';
?>