
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->


<link rel="stylesheet" href="../Page11_Contactanos/CSS/modal-contact-form.css">
<link rel="stylesheet" href="../Page11_Contactanos/CSS/modal-contact-form-media.css">

<!-- Trigger/Open The Modal -->
<!-- <button id="btnModal">Open Modal</button> -->


<!-- The Modal -->
<div id="myModal" class="modal">
    <img data-scroll data-scroll-speed="1" data-scroll-class="appear" class="close" style="opacity: 1; margin-right: 10px; position:relative; width: 20px; right: 0; transform: translate(-100%, 100%)" src="../Page11_Contactanos/img-modal-form/cerrar.png" alt="">
  <!-- Modal content -->
    <div class="modal-content wrapper">
        <div class="modal-contact-info wrapper-contact-info">
            <div class="adress" onclick="myRedirection('https://www.google.com/maps/place/Carrer+de+Sant+Joaquim,+17,+07003+Palma,+Illes+Balears/@39.582301,2.647898,15z/data=!4m5!3m4!1s0x129792f79092df7d:0x5084c781282e69eb!8m2!3d39.5823011!4d2.647898?hl=es')">
                <div class="logo">
                    <img data-scroll data-scroll-speed="1" data-scroll-class="appear" style="opacity: 1; width: 70px; height: auto;" src="../Page11_Contactanos/img-modal-form/cartes-et-drapeaux.png">
                </div>
                <div class="titre">
                    Nuestra dirección
                </div>
                <div class="info">
                    Carrer de Sant Joaquim, 17, 07003 Palma, Illes Balears
                </div>
            </div>
            <a style="text-decoration: none;" href="mailto:quatresolsjustine@gmail.com?subject=Hola Catalina, has recibido una solicitud de contacto a través de la web aicap.es.&body=">
                <div class="tel-whats-app">
                    <div class="logo">
                        <img data-scroll data-scroll-speed="1" data-scroll-class="appear" style="opacity: 1; width: 70px; height: auto;" src="../Page11_Contactanos/img-modal-form/enveloppe.png">
                    </div>
                    <div class="titre">
                        Email
                    </div>
                    <div class="info">
                        a.aicap@aaicap.com
                    </div>
                </div>
            </a>
            <a style="text-decoration: none;" href="tel:+33782590095">
                <div class="tel">
                    <div class="logo">
                        <img data-scroll data-scroll-speed="1" data-scroll-class="appear" style="opacity: 1; width: 70px; height: auto;" src="../Page11_Contactanos/img-modal-form/appel-telephonique.png" alt="">
                    </div>
                    <div class="titre">
                        Teléfono
                    </div>
                    <div class="info">
                        +34 971 755 124
                    </div>
                </div>
            </a>
            
            <a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=%2B33667207514&text&app_absent=0">
                <div class="mailForm">
                    <div class="logo">
                        <img data-scroll data-scroll-speed="1" data-scroll-class="appear" style="opacity: 1; width: 70px; height: auto;" src="../Page11_Contactanos/img-modal-form/whatsapp.png" alt="">
                    </div>
                    <div class="titre">
                        WhatsApp
                    </div>
                    <div class="info">
                        +34 625 503 744
                    </div>
                </div>
            </a>
            
        </div>
        <div class="modal-form">
            
            <form id="myForm" class="wrapper-form" method="post">
                <div class="div-nom">
                    <label class="label-nom">Nombre</label>
                    <input id="name" class="input-nom" type="text">
                </div>
                <div class="div-prenom">
                    <label class="label-prenom">Apellido</label>
                    <input id="prenom" class="input-prenom" type="text">
                </div>
                <div class="div-ciudad">
                    <label class="label-ciudad">Ciudad</label>
                    <input id="ciudad" class="input-ciudad" type="text">
                </div>
                <div class="div-codigo">
                    <label class="label-codigo">Codigo Postal</label>
                    <input id="codigo" class="input-codigo" type="text">
                </div>
                <div class="div-email">
                    <label class="label-email">Email</label>
                    <input id="email" class="input-email" type="text">
                </div>
                <div class="div-telephone">
                    <label class="label-telephone">Teléfono</label>
                    <input id="teléfono" class="input-telephone" type="text">
                </div>
                <div class="div-message">
                    <label class="label-message">Mensaje</label>
                    <textarea id="subject" maxlength="3000" rows="10" cols="100" class="textarea-message" name="" id=""></textarea>
                </div>
                <div class="div-bouton">
                    <button class="btn-form-send" type="button" onclick="sendEmail()">Enviar</button>
                </div>

            </form>
            <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
            <script type="text/javascript">
                function sendEmail() {
                    var name = $("#name");
                    var prenom = $("#prenom");
                    var email = $("#email");
                    var teléfono = $("#teléfono"); 
                    var subject = $("#subject");
                    var body = $("#body");
                    var amigos = $("#amigos");
                    var otros = $("#otros");
                    var aicap = $("#aicap");
                    var internet = $("#internet");
                    var pref =$("#formDoor");

                    if (isNotEmpty(name) && isNotEmpty(email) ) {
                        $.ajax({
                        url: '../Page11_Contactanos/modal-contact-send.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            name: name.val(),
                            prenom: prenom.val(),
                            email: email.val(),
                            teléfono: teléfono.val(),
                            subject: subject.val(),
                            body: body.val(),
                            amigos: amigos.val(),
                            otros: otros.val(),
                            internet: internet.val(),
                            aicap: aicap.val(),
                            pref: pref.val(),
                            
                        },
                        complete: function (response) {
                            $('#myForm')[0].reset();
                            const modal = document.querySelector(".modal");
                            modal.style.display = "none";
                            alert('Mensaje enviado con éxito/ Message sent with success');
                                
                        }
                        });
                    }
                }

                function isNotEmpty(caller) {
                    if (caller.val() == "") {
                        caller.css('border', '1px solid red');
                        return false;
                    } else
                        caller.css('border', '');

                    return true;
                }
            </script>
            
        </div>
    </div>
</div>
<script src="../Page11_Contactanos/JS/modal-contact-form.js"></script>
<!-- </body>
</html> -->