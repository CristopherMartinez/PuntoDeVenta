<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


  <!-- <script src=" <?php echo base_url()?>/js/scripts.js"></script>   -->


<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

.chatbot {
  position: fixed;
  bottom: 20px;
  right: 20px;
}

.chatbot button {
  background-color: #4CAF50; /* Cambia el color de fondo según tus necesidades */
  color: white;
  border: none;
  padding: 10px 15px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 10px;
}

.chatbot button:hover {
  background-color: #3e8e41; /* Cambia el color de fondo al pasar el cursor sobre el botón */
}

.chatbot {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999; /* Este valor debe ser mayor que el de otros elementos en la página */
}


 /* Modal overlay */
 .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }
  /* Modal wrapper */
.wrapper {
            width: 90%;
            max-width: 600px;
            background: #fff;
            border-radius: 5px;
            border: 1px solid lightgrey;
            border-top: 0px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
.wrapper .title {
            background: #fd7d1c;
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            line-height: 60px;
            text-align: center;
            border-bottom: 1px solid #fd7d1c;
            border-radius: 5px 5px 0 0;
        }
        .wrapper .form {
            padding: 20px 15px;
            min-height: 400px;
            max-height: 70vh;
            overflow-y: auto;
        }
.wrapper .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
.wrapper .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.wrapper .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #fd7d1c;
}
.wrapper .form .inbox .msg-header{
    max-width: 53%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: #fd7d1c;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.wrapper .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
}
.wrapper .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.wrapper .typing-field .input-data input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.wrapper .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #fd7d1c;
    border: 1px solid #fd7d1c;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.wrapper .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #fd7d1c;
}
.float-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 99;
}

#float-btn-icon {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 16px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 50%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

#float-btn-icon:hover {
    background-color: #005b82;
}


</style>


</head>



<div id="contact" class="container-fluid bg-black letraContaco" >
  <h2 class="text-center" style="color:whitesmoke; font-weight:bolder;">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p style="font-size:medium;"><span class="material-symbols-outlined" style="width: 40px; padding-right:10px">
      pin_drop
      </span>Merida Yucatan</p>
      <p style="font-size:medium;"><span class="material-symbols-outlined" style="width: 40px; padding-right:10px" >
      call
      </span>99-93-35-43-42</p>
      <p style="font-size:medium;"><span class="material-symbols-outlined" style="width: 40px; padding-right:10px">
      mail
      </span> contacto@worldgames.com.mx</p>
    </div>
    <div class="col-sm-7 slideanim">
      <form name="registro" method="POST" action="<?php echo base_url().'/guardar_sugerencia'?>" onsubmit="return validarRecaptcha()" >
        
        <div class="row" style="padding-bottom: 10px;">
          <div class="col-sm-6 form-group" style="padding-bottom: 10px;">
            <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" style="font-size:medium;">
          </div>
          <div class="col-sm-6 form-group" >
            <input class="form-control" id="correo" name="correo" placeholder="Correo" type="email" required style="font-size:medium;">
          </div>
        </div>
        <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios" rows="5" style="font-size:medium;" required></textarea><br>
        <small class="form-text " id="contador" style="color:whitesmoke;font-size:15px;">Caracteres : </small>
        
        <div class="mb-3">
                        <div class="d-flex justify-content-center form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <div class="help-block with-errors"></div>
                        </div>
        </div>

        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-outline-primary" type="submit" style="font-size:medium; ">Enviar</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>



  <!--Chatboot-->

  <div class="chatbot">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chatbotModal">
      Chat
    </button>
  </div>

    <div class="modal fade" id="chatbotModal" tabindex="-1" role="dialog" aria-labelledby="chatbotModalLabel" aria-hidden="true">
        
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="chatbotModalLabel" style="color:black;">Soporte al cliente</h5>
                </div>

             
                  <div class="modal-body">
                      <div class="form">
                          <div class="bot-inbox inbox">
                              <div class="icon">
                                  <i class="fas fa-user"></i>
                              </div>
                              <div class="msg-header">
                                  <p>Hola, me llamo CATA, ¿cómo puedo ayudarte?</p>
                              </div>
                          </div>
                      </div>
                      
                      <div class="mb-3">
                        <input type="text" placeholder="Escribe algo aquí.." class="form-control" name="data" id="data" maxlength="150" required>
                      </div>

                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="send-btn" onclick="sugerenciaEnviada()">Enviar</button>
                    
                  </div>
            

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $("#send-btn").on("click", function () {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');             
                // iniciar el código ajax
                $.ajax({
                    url: 'invitado/message',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function (result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

<script>
    const texto = document.getElementById('comentarios');
    const contador = document.getElementById('contador');
    const limiteCaracteres = 300; // Establecer el límite de caracteres aquí
    texto.addEventListener('input', () => {
      const numCaracteres = texto.value.length;
      contador.textContent = `Caracteres: ${numCaracteres}`;
      // Comprobar si se ha superado el límite de caracteres
      if (numCaracteres > limiteCaracteres) {
        // Si se ha superado el límite, mostrar un mensaje de error
        // o impedir que se sigan ingresando caracteres
        texto.value = texto.value.substring(0, limiteCaracteres);
        contador.textContent = `Caracteres: ${limiteCaracteres} (límite alcanzado)`;
      }
    });
 
</script>


