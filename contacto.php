<?php require('template/_header.php'); ?>
<?php require('template/_navbar.php'); ?>
<?php require('template/_nodosNavegacion.php'); ?>

<section style="padding-bottom: 5rem 0">
  <div class="contentenedor">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-5 image-wrapper" >
        <img src="/assets/images/Contacto-221823826.jpg" style="width: 800px; margin-top: 20px; margin-left: 0; margin-right: 0;" />
        
      </div>
    </div>
  </div>
</section>

<!--Información de Contacto-->
<section class="contacts3 map1 cid-sz2Vh36DuR" id="contacto" style="padding-right: 4rem; margin-right: 4rem;">       
  <div class="container">
    
    <div class="mbr-section-head">
      <h3 class="mbr-section-title mbr-fonts-style align-left mb-0 display-2">
        <strong>Contáctanos</strong>
      </h3>
      <h4 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2 display-5">
        En cualquiera de las siguientes formas
      </h4>
    </div>
    <div class="row justify-content-center mt-4">
      <!--Division de GoogleMaps-->
      <div class="map-wrapper col-12 col-md-6">
        <div class="google-map">
        <iframe frameborder="0" style="border: 0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=55, 274 cordemex" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="card col-12 col-md-6">
        <div class="card-wrapper">
          <div class="image-wrapper">
            <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
          </div>
          <div class="text-wrapper">
                <h6 class="card-title mbr-fonts-style mb-1 display-5">
                  <strong>Teléfono</strong>
                </h6>
                <p class="mbr-text mbr-fonts-style display-7">
                  <a href="tel:+5219993707028" class="text-primary">
                    99 93 70 70 28
                  </a>
                </p>
          </div>
        </div>
            <div class="card-wrapper">
              <div class="image-wrapper">
                <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
              </div>
              <div class="text-wrapper">
                <h6 class="card-title mbr-fonts-style mb-1 display-5">
                  <strong>Email</strong>
                </h6>
                <p class="mbr-text mbr-fonts-style display-7">
                  <a
                    href="mailto:contacto@idnconsultores.com"
                    class="text-primary"
                  >
                    contacto@idnconsultores.com
                  </a>
                </p>
              </div>
            </div>
            <div class="card-wrapper">
              <div class="image-wrapper">
                <span class="mbr-iconfont mobi-mbri-home mobi-mbri"></span>
              </div>
              <div class="text-wrapper">
                <h6 class="card-title mbr-fonts-style mb-1 display-5">
                  <strong>Dirección</strong>
                </h6>
                <p class="mbr-text mbr-fonts-style display-7">
                  <a
                    href="https://maps.google.com/maps?ll=21.035373,-89.626131&z=16&t=m&hl=es-419&gl=US&mapclient=embed&cid=17297889564476591014"
                    class="text-primary"
                    >Calle 55 No 274 por 46 y 48 Colonia Cordemex</a
                  >
                </p>
              </div>
            </div>
      </div>
          
    </div>
 </div>
</section>


<!--Formulario-->
<section class="form5 cid-sz9DYwBMT9" id="contactanos" style="padding-bottom: 5rem; padding-top: 5rem">
      <div class="container">
        <div class="mbr-section-head">
          <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <strong>Dínos en que podemos ayudarte</strong>
          </h3>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
            <form action="/contacto/enviar" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
              <input type="hidden" name="email" data-form-email="true" value="eYs1ut/5bmkUtu7/yKgPgxwyBK69F5kQeJVgEGO024GD70j3a0NJyFs9BC0ESJzWlE0oS27aqWRUuz2iBNNE2j1IM4We//yyDHT1iBxu8vXwFCztj/XQ9XR4o/AETpcP" />
              <div class="row">
                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                  ¡Gracias, pronto nos pondremos en contacto!
                </div>
                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                  Oops...! some problem!
                </div>
              </div>
              <div class="dragArea row">
                <div class="col-md col-sm-12 form-group" data-for="name">
                  <input type="text" name="name" placeholder="Nombre" data-form-field="name" class="form-control" value="" id="name-form5-b" />
                </div>
                <div class="col-md col-sm-12 form-group" data-for="email">
                  <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-b" />
                </div>
                <div class="col-12 form-group" data-for="city">
                  <input type="text" name="city" placeholder="Ciudad" data-form-field="city" class="form-control" value="" id="url-form5-b" />
                </div>
                <div class="col-12 form-group" data-for="message">
                  <textarea name="message" placeholder="Mensaje" data-form-field="message" class="form-control" id="textarea-form5-b" rows="5"></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                  <button type="submit" class="btn btn-primary display-4">
                    Enviar mensaje
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>
<?php require('template/_footer.php'); ?>
<!-- error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST) && !empty($_POST)){
  // Takes raw data from the request
  $json = file_get_contents('php://input');
  // Converts it into a PHP object
  $data = json_decode($json, true);

  //var_dump($data['form']['data']); die();
  //var_dump($data); die();

  foreach($data['form']['data'] as $key => $value) {
    //echo $key.": ". $value[0].": ". $value[1] ."\n";
    switch($value[0]){
      case "name":
        $name  = $value[1];
        break;
      case "email":
        $email = $value[1];
        break;
      case "city":
        $city  = $value[1];
        break;
      case "message":
        $mess  = $value[1];
        break;
      default:

    }
  }
  //die();

  /*$post = $data->form->data;
  print_r($post); die();

  $name  = $post[0]->name;
  $email = $post["email"];
  $city  = $post["city"];
  $mess  = $post["message"];

  die($name);*/

  require 'vendor/autoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = 'mail.idnconsultores.com';
  $mail->Port = 25;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->SMTPAuth = true;
  $mail->Username = 'no-reply@idnconsultores.com';
  $mail->Password = 'xv@=r.QY8x21QW4A+R';
  $mail->setFrom($email, $name);
  $mail->addReplyTo($email, $name);
  $mail->addAddress('contacto@idnconsultores.com', 'Contacto IDN');
  $mail->Subject = 'Formulario de contacto del portal';
  $mail->Body = <<<EOT
Nombre: {$name}
Email: {$email}
Ciudad: {$city}
Mensaje: {$mess}
EOT;
  //$mail->addAttachment('test.txt');
  if (!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    header("content-type: application/json");
    echo '{"status":"Ready!","response":"¡Gracias, pronto nos pondremos en contacto!"}';
  }
} else {
  echo "formulario de contacto";
} -->