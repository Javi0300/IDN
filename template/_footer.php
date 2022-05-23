<section
      class="footer4 cid-sz2VmbEtSA mbr-white"
      once="footers"
      id="footer4-5"
    >
      <div class="container">
        <div class="row mbr-white">
          <div class="col-6 col-lg-2">
            <div class="media-wrap col-md-8 col-12" style="max-width: 100%">
              <a href="#">
                <img src="/assets/images/logo-blanco-122x64.png" alt="IDN" />
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-2">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
              <strong>Síguenos</strong>
            </h5>
            <div class="social-row display-7">
              <div class="soc-item">
                <a
                  href="https://www.facebook.com/idnconsultores"
                  target="_blank"
                >
                  <span class="mbr-iconfont socicon socicon-facebook"></span>
                </a>
              </div>
              <div class="soc-item" style="display: none">
                <a href="https://twitter.com/" target="_blank">
                  <span class="mbr-iconfont socicon socicon-twitter"></span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
              <strong>Contacto</strong>
            </h5>
            <ul class="list mbr-fonts-style display-4">
              <li class="mbr-text item-wrap">
                <span style="font-size: 1.1rem"
                  >Calle 55 No 274 por 46 y 48</span
                ><br />
              </li>
              <li class="mbr-text item-wrap">
                <span style="font-size: 1.1rem"
                  >Colonia Cordemex. C.P. 97110</span
                >
              </li>
              <li class="mbr-text item-wrap">Mérida, Yucatán, México</li>
            </ul>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
              <strong>Enlaces</strong>
            </h5>
            <ul class="list mbr-fonts-style display-4">
              <li class="mbr-text item-wrap"><a href="/">Inicio</a></li>
              <li class="mbr-text item-wrap"><a href="/servicios">Servicios</a></li>
              <li class="mbr-text item-wrap"><a href="/nosotros">Nosotros</a></li>
              <li class="mbr-text item-wrap"><a href="/casos-de-exito">Casos de éxito</a></li>
              <li class="mbr-text item-wrap"><a href="/#contacto">Contacto</a></li>
            </ul>
          </div>

          <div class="col-12 mt-4">
            <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
              Copyright © Todos los Derechos Reservados IDN Software Y Empresas
              S.A.P.I. De C.V. México 2016 - 2021 | <a href="/assets/uploads/aviso_de_privacidad_2020.pdf">Aviso de privacidad</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php /*
    <section
      style="
        background-color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto',
          'Helvetica Neue', Arial, sans-serif;
        color: #aaa;
        font-size: 12px;
        padding: 0;
        align-items: center;
        display: flex;
      "
    >
      <a
        href="https://mobirise.sit"
        style="flex: 1 1; height: 3rem; padding-left: 1rem; display: none"
      ></a>
    </section>
    */ ?>

    <div id="myDiv" style="z-index: 10;"></div>

    <div id="google_translate_element" class="google" style="position: fixed; right: 0; bottom: 0;"></div>
    <style>
      #google_translate_element img, #google_translate_element iframe {
    display: inline-block;
    
}
    </style>

    <script src="/assets/web/assets/jquery/jquery.min.js"></script>
    <script src="/assets/popper/popper.min.js"></script>
    <script src="/assets/tether/tether.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="/assets/dropdown/js/nav-dropdown.js"></script>
    <script src="/assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="/assets/theme/js/script.js"></script>
    <script src="/assets/formoid/formoid.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.3/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/assets/floating-whatsapp/floating-wpp.min.js"></script>
    <script type="text/javascript" src="/assets/modo-nocturno/js/main.js"></script>
    <script type="text/javascript">
      $("#a-contact").on("click", function(e){
        e.preventDefault();
        $(window).scrollTo($("/contacto"), 1000);
      });

      var WAPopup = null;
      $(function () {
        WAPopup = $('#myDiv').floatingWhatsApp({
          phone: '5219993707028',
          popupMessage: 'Hola, ¿En que podemos ayudarte?',
          showPopup: true
        });
      });
    </script>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'ca,eu,gl,en,fr,it,pt,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
            }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </body>
</html>