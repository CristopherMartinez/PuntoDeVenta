<?php
namespace App\Models\generico;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;
class Email extends Model
{
    protected $email ;

    public function __construct()
    {
        $this->email  = \Config\Services::email();

    }

    //Registro exitoso
    public function sendCorreo($destinatario,$usuario,$password){
        $this->email->setTo($destinatario);
        $this->email->setFrom('worldgamess975@gmail.com', 'WorldGames');
        $this->email->setSubject('Datos de cuenta WorldGames');
        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">  
        </head>
        <body>
            <h2>Bienvenido a WorldGames</h2>
            <h3>A continuación proporcionamos tus datos</h3>
            <table class="table-primary">
            <tr>
                <td>Usuario:</td>
                <td>user</td>
            </tr>
            <tr>
                <td>Correo electrónico:</td>
                <td>email</td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>password</td>
            </tr>
            </table>
        </body>
        </html>';

        // Reemplazamos los valores de las etiquetas con los datos del usuario y la imagen
        $body = str_replace('user', $usuario, $body);
        $body = str_replace('email', $destinatario, $body);
        $body = str_replace('password', $password, $body);

        // $body = str_replace('URL_DE_LA_IMAGEN_AQUI', $this->urlImagen, $body);

        $this->email->setMessage($body);

        // //Enviamos el correo
        // $this->email->send();

        //Si se envia el correo exitosamente asignamos un flashData de registro exitoso, si no se envia asignamos fallo el envio
        if ($this->email->send()) {          
            $session = session();
            $session->setFlashdata('registroExitoso', 'Registro Exitoso, se han enviado sus datos a su correo');
            return redirect()->to('usuario/inicio');

        }else{
            $session = session();
            $session->setFlashdata('falloEnvioCorreo', 'Ha fallado el envio de correo');

            return redirect()->to('usuario/inicio');
        }

    }

    //Envio de correo de compra exitosa 
    public function sendCorreoCompra($videojuegos,$idOrden,$folio){
        
        //Recuperamos la imagen desde un link especifico
        $imagen_url = "https://i.postimg.cc/MKV3vKwx/logo-World.png";

        $this->email->setTo($_SESSION['datosUsuario'][0]['correo']);
        $this->email->setFrom('worldgamess975@gmail.com', 'WorldGames');
        $this->email->setSubject('Compra en WorldGames');
 
        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">  
        </head>
        <body>

        <img src="imagenUrl" style="width:250px;" alt="LogoWorldGames">
        <h2 style="color:black;">Felicidades por tu compra en WorldGames '.$_SESSION['datosUsuario'][0]['usuario'].'</h2>
        <h2 style="color:black;">Orden de compra #'.$idOrden.'</h2>
        <h2 style="color:black;">Folio de compra #'.$folio.'</h2>
        
            <table class="table-primary table-bordered">
            ';
                $cont = 1;
                foreach($videojuegos as $videojuego) {
                    $body .= '
                    <tr>
                        <td>'.$cont.'</td>
                        <td>' . $videojuego['nombre'] . '</td>
                        <td>' . $videojuego['consola'] . '</td>
                        <td>' . '$'.$videojuego['precio'] . '</td>
                    </tr>                    
                    ';
                    $cont++;
                }
                
        $body .= '
                </table>
            </body>
            </html>
        ';

        $body = str_replace('imagenUrl', $imagen_url, $body);

        $this->email->setMessage($body);

        //Si se envia el correo exitosamente asignamos un flashData de registro exitoso, si no se envia asignamos fallo el envio
        if ($this->email->send()) {          
            $session = session();
            $session->setFlashdata('compraExitosa', 'Se ha realizado la compra correctamente, se enviaron detalles de la compra a su correo');
            return redirect()->to('usuario/listaCarrito');
        
        }else{
            $session = session();
            $session->setFlashdata('falloEnvioCorreo', 'Ha fallado el envio de correo');

            return redirect()->to('usuario/listaCarrito');
        }

    }

    // public function sendCorreoRecuperacion(){
    //     $this->email->setTo($_SESSION['datosUsuario'][0]['correo']);
    //     $this->email->setFrom('worldgamess975@gmail.com', 'WorldGames');
    //     $this->email->setSubject('Compra en WorldGames');

        
 
    // }

}
