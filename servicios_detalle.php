<?php require('template/_header.php'); ?>

<?php require('template/_navbar.php'); ?>

<?php

$service = "";
$description = "";
$image = "";

$url = $_SERVER['REQUEST_URI'];
$arrayData = [];

switch($url) {
  case '/servicios/empresas-privadas/conocimiento-aplicado/consultoria-estrategica':
    $service = "Consultoría Estratégica";
    $description = "Diagnosticamos, diseñamos e implementamos un plan de acción personalizado para atender tus necesidades. Emplearemos herramientas innovadoras de consultoría para llevarte al siguiente nivel.";
    $image = "/assets/images/services/005-telephone.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/profesionalizacion.jpg",
        'title' => "Profesionalización",
        'description' => [
          "El arranque y desarrollo de un negocio no es cosa fácil, la motivación, el compromiso, la creatividad, el esfuerzo y líderazgo de los fundadores y personal clave en las etapas iniciales, resultó en su crecimiento, sin embargo, conquistar nuevos mercados o mantenerse presente en el actual, requieren de un proceso interno dentro de la empresa, que lo mantenga en constante evolución y en una posición competitiva, para ello, se requiere de la estructuración de la misma, dotarla de talento y de la construcción de las bases para la sucesión de los fundadores a las nuevas generaciones.",
          "Tenemos la experiencia y el método para gestionar la transformación de tu organización hacia el desarrollo de sus capacidades. Trabajaremos contigo el Plan de Acción previamente generado de acuerdo al diagnóstico inicial que realicemos a tu empresa."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/automatizacion.jpg",
        'title' => "Automatización y Digitalización de Procesos",
        'description' => [
          "Gestionar correctamente las actividades y procesos claves de la empresa, es fundamental para mantener su óptimo funcionamiento, pero reducir los costos, aumentar la productividad, evitar los fallos, acelarar los tiempos de ejecución y sustituir procesos manuales con aplicaciones de software, implica un gran desafio para las organizaciones, sobre todo si desean mantenerse a la vanguardia y competitivas.",
          "Diseñamos toda una metodología para ayudarte afrontar este reto y agilizar los tiempos de implementación. Ejecutaremos el Plan de Trabajo establecido para la implementación del sistema que necesites."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/planeacion.jpg",
        'title' => "Planeación Estratégica",
        'description' => [
          "Contar con un proceso sistemático de desarrollo e implementación de planes para alcanzar los objetivos de la empresa, es indispensable para alcanzar el éxito. Este proceso suele ser un dolor de cabeza cuando la organización no tiene clara la visión o desconoce hasta donde puede llegar.",
          "Te proporcionamos las herramientas estratégicas, el conocimiento y acompañamiento para que construyas tu Plan Estratégico, con el que plasmaras el quehacer y el cómo debería hacerse, lo que permitirá a tu empresa se organice y opere de acuerdo a esa visión."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/estandarizacion.jpg",
        'title' => "Estandarización de Procesos",
        'description' => [
          "Diseñar o actualizar la estructura organizacional, definir el estándar de los procesos y establecer el perfil adecuado de los puestos de trabajo que aseguren el correcto funcionamiento de la empresa, son parte de las tareas estratégicas necesarias para reducir los costos y aumentar la calidad de los productos o servicios que se ofrecen al cliente.",
          "Te entregaremos tu Manual de Procedimientos Estandarizados para preservar el conocimiento y experiencia que tu empresa ha generado y sirva de guía para la ejecución de los procesos para el personal actual o el nuevo."
        ]
      ]
    );
    break;
  case '/servicios/empresas-privadas/conocimiento-aplicado/talleres-empresariales':
    $service = "Talleres Empresariales";
    $description = "Asesoramos y capacitamos a los dueños de negocios para guiarlos en la profesionalización de sus empresas, esto será posible a través de un consultor experto que impartirá y personalizará el contenido de los talleres para que el conocimiento se aplique a la realidad de tu negocio.";
    $image = "/assets/images/services/020-certificate.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/modelo_negocio.jpg",
        'title' => "Modelo de Negocio",
        'description' => [
          "Esquematizar la forma en que generará utilidades el negocio, suele ser un proceso que nos permite definir aspectos claves del negocio para asegurar que funcione según el plan, sin embargo, en ocasiones la realidad resulta ser muy diferente a lo previsto, esto por lo general se debe a que en un inicio no se validó las necesidades del mercado por lo tanto, el producto o servicio no atiende tal necesidad. ",
          "Compartiremos contigo el conjunto de herramientas especializadas en la materia, para acompañarte en la Elaboración de tu Modelo de Negocio, que sirva para identificar tu propuesta de valor, saber como hacerla llegar adecuadamente al cliente, diferenciarte de la competencia, hacer rentable y escable el negocio, pero sobre todo, tener una visión clara de como captar, crear y entregar lo que es de valor para el cliente, lo que asegurará el éxito de tu negocio a largo plazo."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/innovacion.jpg",
        'title' => "Innovación Empresarial",
        'description' => [
          "La capacidad de adaptación de cualquier organización y su rapidez con la que esta lo haga, son factores claves para su éxito, realizar una continua renovación de los productos o servicios, así como de la organización misma, ayuda a mantenerse presente y en constante evolución.",
          "Te instruiremos en el Desarrollo de la Estrategia de Innovación que proporcionará cambios organizacionales, productivos y/o tecnológicos en tu empresa con el fin de hacerla competitiva y eficiente."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/estrategia.jpg",
        'title' => "Estrategias Digitales de Venta y Comercialización",
        'description' => [
          "La tecnología e innovación empresarial que permiten mejorar los procesos internos de la empresa ya no son suficiente ante un mercado en constante evolución, de manera que aumentar las capacidades digitales en todas las áreas de la empresa sobre todo en el área comercial, implica un cambio de paradigma organizacional ya que significa para la empresa un cambio radical en la forma de operar y brindar valor a sus clientes.",
          "Te expondremos las nuevas oportunidades de generación de ingresos y te guiaremos en la Definición de la Estrategia Digital de Comercialización para desarrollar tu empresa dentro de un nuevo canal digital."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/innovacion.jpg",
        'title' => "Planeación Estratégica",
        'description' => [
          "Contar con un proceso sistemático de desarrollo e implementación de planes para alcanzar los objetivos de la empresa, es indispensable para alcanzar el éxito. Este proceso suele ser un dolor de cabeza cuando la organización no tiene clara la visión o desconoce hasta donde puede llegar. ",
          "Te proporcionamos las herramientas estratégicas, el conocimiento y acompañamiento para que construyas tu plan estratégico, con el que plasmaras el quehacer y el cómo debería hacerse, lo que permitirá a tu empresa se organice y opere de acuerdo a esa visión."
        ]
      ]
    );
    break;
  case '/servicios/empresas-privadas/conocimiento-aplicado/desarrollo-de-capital-humano':
    $service = "Desarrollo de Capital Humano";
    $description = "Formamos, entrenamos e instruimos al capital humano para desarrollar y aprovechar las capacidades y experiencia de tu equipo de trabajo. A través de sesiones de coaching individual o grupal conseguiremos el cumplimiento de los objetivos propuestos.";
    $image = "/assets/images/services/018-profit.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/formacion.jpg",
        'title' => "Formación de Líderes",
        'description' => [
          "Generar un entorno productivo que fomente un ambiente colaborativo y una cultura de trabajo en beneficio de todos, es resultado de trabajar con líderes dentro de tu organización.",
          "Tenemos el entrenamiento para que esto sea posible, a través de Sesiones Dinámicas Especialemente Diseñadas de acuerdo a las necesidades de capacitación detectadas en tus líderes.",
          "Entre los temas a tratar en las sesiones está:<br>
          - ¿El lider nace o se hace?<br>
          - Capacidad de cambio<br>
          - Actitud<br>
          - Mentalidad positiva<br>
          - El cambio depende tí<br>
          - Rompiendo paradigmas<br>
          - Visión de líder<br>
          - Facultamiento y delegación<br>
          - Cualidades del líder<br>
          - Jefe Vs Líder<br>
          - Persuación<br>
          - Moticavión<br>
          - Comunicación<br>
          - Trabajo en equipo<br>
          - Liderazgo transformacional<br>
          - Entre otras",
          "Sesiones impartidas por un coach ontológico certificado."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/trabajo_equipo.jpg",
        'title' => "Trabajo en Equipo",
        'description' => [
          "La formación del equipo de trabajo es una de los factores claves para potencializar las capacidades, cualidades y experiencia de tus colaboradores en tu organización.",
          "Te ofrecemos una serie de Sesiones Personalizadas de acuerdo a los necesidades de tu equipo de trabajo.",
          "Entre los temas a tratar en las sesiones está:<br>
          - Trabajo en equipo<br>
          - Grupo Vs Equipo<br>
          - Metas<br>
          - Colaboración<br>
          - Respeto<br>
          - Comunicación<br>
          - Sinergía<br>
          - Compromiso<br>
          - Responsabilidad <br>
          - Gestión del tiempo<br>
          - Servicio<br>
          - Mejora continua<br>
          - Temperamento<br>
          - Manejo del irá<br>
          - Relación con el cliente<br>
          - Entre otras",
          "Sesiones impartidas por un coach ontológico certificado."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/habilidades.jpg",
        'title' => "Habilidades Blandas",
        'description' => [
          "La captación y detección del talento dentro de la organización es uno de los primeros pasos para el desarrollo de los mismos y con ello de la empresa. El Curriculum ya no es suficiente, el conjunto de competencias relacionadas con la personalidad y las relaciones interpersonales han tomado mayor relevancia, ya que de ellas depende la capacidad de los colaboradores para interactuar con otras personas de manera éxitosa y mantener relaciones de alto nivel.",
          "Impartiremos las Sesiones Personalizadas requeridas por tu equipo de trabajo para aprender a resolver problemas más complejos y cumplir con los objetivos y metas propuestas por la empresa.",
          "Entre los temas a tratar en las sesiones está:<br>
          - Liderazgo<br>
          - Comunicación asertiva<br>
          - Motivación<br>
          - Influencia<br>
          - Creatividad<br>
          - Negociación<br>
          - Honestidad<br>
          - Proactividad<br>
          - Resilencia<br>
          - Trabajo en equipo<br>
          - Empatía<br>
          - Tolerancia<br>
          - Autoestima<br>
          - Manejo del irá<br>
          - Adaptación al cambio<br>
          - Orientación al cliente<br>
          - Espirítu de equipo<br>
          - Toma de decisiones<br>
          - Inteligencia emocional<br>
          - Mindset<br>
          - Entre otras",
          "Sesiones impartidas por un coach ontológico certificado."
        ]
      ]
    );
    break;
  case '/servicios/empresas-privadas/tecnologias-de-la-informacion/sitios-web':
    $service = "Sitios Web";
    $description = "Diseñamos y desarrollamos sitios web responsivos, multifuncionales, fáciles de usar, interactivos, flexibles y escalables. El alojamiento y el dominio están incluidos.";
    $image = "/assets/images/services/007-world.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/paginas_web.jpg",
        'title' => "Páginas Web",
        'description' => [
          "El diseño de páginas web es el primer gran paso al mundo digital para tu negocio, te mantendrá a la vanguardia y diferenciado de la competencia al permitirle al cliente conocerte mejor y saber más de tus productos y servicios.",
          "En IDN Consultores te ayudamos a crear tu página web ideal, con la que podrás:<br>
          * Dar a conocer el negocio en el mundo digital.<br>
          * Incrementar presencia en internet y generar prestigio de marca.<br>
          * Promocionar tus productos / servicios."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/landing.jpg",
        'title' => "Landing Page",
        'description' => [
          "La Landing Page es una versión muy sencilla de página web (micrositio), útil para convertir usuarios interesados en clientes potenciales. El micrositio proporcionará información clara, precisa y de valor, para cautivar a los usuarios y mediante un formulario se obtendrían los datos de contacto de los usuarios para posteriormente se cierre en ventas. ",
          "En IDN Consultores te ayudamos a crear tu landing page, con la que podrás:<br>
          * Captar clientes potenciales.<br>
          * Promocionar tus productos / servicios.<br>
          * Conseguir contactos para futuras promociones."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/blog.jpg",
        'title' => "Blog",
        'description' => [
          "El blog es una página web especializada para publicar contenido sobre temas de interés con el que se puede interactuar con los lectores y comunicarse con ellos, permitiendo posicionar la marca, comparitr información de valor y generar comunidad.",
          "En IDN Consultores te ayudamos a crear tu blog, con la que podrás:<br>
          * Atraer clientes potenciales.<br>
          * Reforzar la marcar.<br>
          * Interactuar con la comunidad."
        ]
      ]
    );
    break;
  case '/servicios/empresas-privadas/tecnologias-de-la-informacion/desarrollo-de-software':
    $service = "Desarrollo de Software";
    $description = "Analizamos, diseñamos y fabricamos software a la medida que incremente la productividad de tu negocio, durante este proceso te acompañará un consultor experto que asegurar que tus procesos se digitalicen correctamente en el software.";
    $image = "/assets/images/services/022-browser.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/digitalizacion.jpg",
        'title' => "Digitalización y Transformación Digital",
        'description' => [
          "En este mundo cada vez más digitalizado ¿En dondé estás tú?",
          "La tecnología como pilar de la estratégia de innovación en una organización, se observa en la productividad y crecimiento de la misma, ya que brinda múltiples herramientas para mejorar sus procesos internos, abatir sus costos e incrementar sus ingresos, de manera que, invertir en tecnología es uno de los factores claves para mantenerse presente, a la vanguardia y en constante evolución.",
          "¿Te gustaría tener el control de tu negocio con un par de clics?<br>
          ¿Desearías dejar de utilizar excel (lo que eso implique) para empezar a emplear herramientas especialmente diseñadas para tu negocio?<br>
          ¿Te imaginas retirar la carga de las tareas repetitivas a tus colaboradores y con ello evitar errores?<br>
          ¿Cómo sería para tus clientes que además de la forma tradicional de atención ahora puedan interactuar contigo en un entorno completamente digital?",
          "La respuestas a estas preguntas las irás descubriendo al digitalizar tu empresa, ya que para ello, se requiere llevarla a través de un proceso de transformación digital donde se integrará paulatinamente la tecnología digital en todas las áreas claves de tu empresa y el resultado de la misma será el incremento de su productividad, optimización de sus procesos y el ofrecimiento de tu propuesta de valor a tus clientes mediante un nuevo canal innovador.",
          "En IDN Consultores nos hemos especializado en el acompañamiento de las empresas en su proceso de transformación digital, esto a través de nuestra metodología que asegura de forma estructurada la digitalización empresarial. Analizamos, diseñamos y Fabricamos el Software a la medida de tus procesos y tus requerimientos para que el software se adapte a ti.",
          "¿Qué puedes obtener del software fabricado a tu medida?<br>
          - Digitalizar tu modelo de negocio.<br>
          - Ofrecer productos y servicios digitales.<br>
          - Integrar a tus operaciónes proveedores y clientes en una misma plataforma digital.<br>
          - Tener métricas e indicadores de desempeño en tiempo real.<br>
          - Acceder a nuevos nichos de mercado.<br>
          - Controlar tu negocio desde cualquier dispositivo con acceso a internet.<br>
          - Entre otros múltiples beneficios."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/aplicaciones.jpg",
        'title' => "Aplicaciones Web",
        'description' => [
          "¿Necesitas una solución informatica para tu negocio ajustado a tus necesidades? ¿Tienes algún proceso clave en tu empresa que deseas automatizar?",
          "Para ambos casos, desarrollar una aplicación web es una alternativa altemente rentable, ya que con ella podrás automatizar, optimizar, agilizar, simplificar, estandarizar y digitalizar tus pocesos como:<br>
          - Ventas<br>
          - Inventarios<br>
          - Cobranza<br>
          - Rentas<br>
          - Fletes<br>
          - Compras<br>
          - Tesorería<br>
          - Producción<br>
          - Administración<br>
          - Recursos Humanos<br>
          - Capacitación<br>
          - Entre otros",
          "Una aplicación web no requeire de comprar equipos o instalaciones especiales, ya que accedes a el a través de una plataforma digital alojada en la nube completamente segura, por lo que podrás acceder a el desde cualquier dispositivo con acceso a internet con tu respectivo usuario y contraseña, como si estuvieras utilizando tu cuenta de correo.",
          "En IDN Consultores nos involucramos en las necesidades y requerimientos que nos compartas de tu negocio, para que a través de nuestra metodología aseguremos el desarrollo y correcta implementación de la aplicación web. Analizamos, diseñamos y Fabricamos la Aplicación Web a la medida de tus procesos.",
          "¿Qué puedes obtener de tu aplicación web?<br>
          - Facilitar las operaciones de tus colaboradores, proveedores y clientes.<br>
          - Resolver los problemas operativos y aministrativos de tus procesos manuales.<br>
          - Reducir los errores de tus procesos claves.<br>
          - Controlar la correcta ejecución de los procesos.<br>
          - Monitorear el desempeño de tu negocio.<br>
          - Entre otros múltiples beneficios."
        ]
      ]
    );
    break;
  case '/servicios/empresas-privadas/tecnologias-de-la-informacion/licencias-tics':
    $service = "Licencias TIC´s";
    $description = "Asesoramos e implementamos soluciones tecnológicas. En nuestro catálogo de TIC´s con enfoque comercial, tenemos la opción que se ajuste a tus necesidades.";
    $image = "/assets/images/services/001-protection.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/tienda_virtual.jpg",
        'title' => "Tienda Virtual",
        'description' => [
          "El mercado ahora es global y cada vez es más competitivo, para sobresalir, los negocios requieren de herramientas digitales que permitan comercializar sus productos y servicios a gran escala y en nuevos mercados.",
          "En IDN Consultores hemos desarrollado una Tienda Virtual atractiva que impulsarán las ventas de tu negocio.",
          "Esta tecnologia de la información es ideal para:<br>
          - Controlar las existencias y las ventas.<br>
          - Recibir pedidos a cualquier hora y lugar<br>
          - Facilitar el proceso de venta e incrementarlas.",
          "Nota: Pregunta por las funcionalidades extras sin costo adicional."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/punto_venta.jpg",
        'title' => "Punto de Venta",
        'description' => [
          "En IDN Consultores entendemos el valor de agilizar el proceso de venta y controlar los precios, ya que son dos aspectos vitales para el éxito de todo negocio.",
          "Nuestro Punto de Venta lo hemos desarrollado con la intención de fortalecer a tu fuerza de ventas y mejorar la atención al cliente.",
          "Esta tecnología de la información es ideal para:<br>
          - Administrar inventarios de productos y servicios.<br>
          - Controlar la caja de tu negocio.<br>
          - Brindar un servicio más rápido y eficiente a tus clientes.",
          "Nota: Pregunta por las funcionalidades extras sin costo adicional."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/software.jpg",
        'title' => "Software de Gestión Comercial, Lógistico y Operativo (G-CLO)",
        'description' => [
          "Nuestro Software G-CLO es único en el mercado, juntamos lo mejor de nuestro punto de venta, tienda virtual y le hemos agregados funcionalidades comerciales, logísticas y operativas que lo hacen un software realmente interesante que resolverá problemas como:<br>
          - Vender productos y servicios.<br>
          - Levantar pedidos.<br>
          - Cotizar servicios.<br>
          - Armar paquetes.<br>
          - Realizar reservas.<br>
          - Gestionar proyectos.<br>
          - Controlar inventarios.<br>
          - Operar rutas de entrega.<br>
          - Administrar listas de precios.<br>
          - Registrar la cobranza y saldos pendientes.<br>
          - Analizar patrones de consumo de tus clientes.<br>
          - Dar seguimiento a los pedidos, servicios y/o reservas.<br>
          - Conocer el ingreso por producto, por cliente, por proyecto, etc.<br>
          - Revisar las métricas e indicadores claves de tu negocio.<br>
          - Entre otras múltiples funcionalidades.",
          "Nuestros software es tan flexible que si no tiene la funcionalidad que necesitas, te la desarrollamos. Es una verdadera joya."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/facturacion.jpg",
        'title' => "Facturación",
        'description' => [
          "¿Buscando una opción confiable, fácil y rápida de facturación?",
          "Solo escoge el paquete de folios de timbrado y el resto esta en buenas manos. Paga solo lo que uses en tu Facturación en línea, sin rentas mensuales, genera tus facturas, tímbralas y envíalas por correo a tus clientes.",
          "Nota: La vigencia de los folios es por 1 año, acumulables en tu siguiente compra."
        ]
      ]
    );
    break;
  case '/servicios/ayuntamientos/conocimiento-aplicado/administracion-eficiente':
    $service = "Administración eficiente";
    $description = "Diseñamos e implementamos proyectos estratégicos, desarrollamos el capital humano y estandarizamos sus procesos, todo lo anterior como parte de un proyecto integral que busca incrementar la productividad de la administración y optimizar sus recursos disponibles.";
    $image = "/assets/images/services/023-bar-chart.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/planeacion.jpg",
        'title' => "Planeación Estratégica",
        'description' => [
          "Contar con un proceso sistemático de desarrollo e implementación de proyectos estratégicos para alcanzar los objetivos del Ayuntamiento, es indispensable para alcanzar el éxito. Este proceso suele ser un dolor de cabeza cuando la organización no tiene clara la visión o desconoce hasta donde puede llegar.",
          "Te proporcionamos las herramientas estratégicas, el conocimiento, la metodología y acompañamiento para que construyas tus Proyectos Estratégicos alideados a tu Plan Municipal de Desarrollo, con el que plasmaras el quehacer y el cómo debería hacerse, lo que permitirá a tu ayuntamiento se organice y opere de acuerdo a una visión estratégica."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/formacion.jpg",
        'title' => "Desarrollo de Capital Humano",
        'description' => [
          "Generar un entorno productivo que fomente un ambiente colaborativo y una cultura de trabajo en beneficio de todos, es resultado de trabajar con líderes dentro de tu organización, así como la formación del equipo de trabajo es una de los factores claves para potencializar las capacidades, cualidades y experiencia de tus colaboradores en tu organización.",
          "Tenemos el entrenamiento para que esto sea posible, a través de Sesiones Dinámicas Especialemente Diseñadas de acuerdo a las necesidades de capacitación detectadas en tus líderes y equipo de trabajo.",
          "Entre los temas a tratar en las sesiones está:<br>
          - ¿El lider nace o se hace?<br>
          - Capacidad de cambio<br>
          - Actitud<br>
          - Mentalidad positiva<br>
          - El cambio depende tí<br>
          - Rompiendo paradigmas<br>
          - Visión de líder<br>
          - Facultamiento y delegación<br>
          - Cualidades del líder<br>
          - Jefe Vs Líder<br>
          - Persuación<br>
          - Moticavión<br>
          - Comunicación<br>
          - Trabajo en equipo<br>
          - Liderazgo transformacional<br>
          - Trabajo en equipo<br>
          - Grupo Vs Equipo<br>
          - Metas<br>
          - Colaboración<br>
          - Respeto<br>
          - Comunicación<br>
          - Sinergía<br>
          - Compromiso<br>
          - Responsabilidad <br>
          - Gestión del tiempo<br>
          - Servicio<br>
          - Mejora continua<br>
          - Temperamento<br>
          - Manejo del irá<br>
          - Relación con el cliente<br>
          - Entre otras",
          "Sesiones impartidas por un coach ontológico certificado."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/estandarizacion.jpg",
        'title' => "Estandarización de Procesos",
        'description' => [
          "Diseñar o actualizar la estructura organizacional, definir el estándar de los procesos y establecer el perfil adecuado de los puestos de trabajo que aseguren el correcto funcionamiento del Ayuntamiento, son parte de las tareas estratégicas necesarias para reducir los costos y aumentar la productividad.",
          "Te entregaremos tu Manual de Procedimientos Estandarizados para preservar el conocimiento y experiencia de tu Ayuntamiento que ha generado y sirva de guía para la ejecución de los procesos para el personal actual o el nuevo."
        ]
      ]
    );
    break;
  case '/servicios/ayuntamientos/conocimiento-aplicado/programas-de-incubacion-y-aceleracion':
    $service = "Programas de Incubación y Aceleración";
    $description = "Asesoramos, capacitamos y dotamos de herramientas a emprendedores y dueños de negocios a traves de talleres integrales para acompañarlos en su arranque o su proyecto de expansión.";
    $image = "/assets/images/services/026-idea.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/emprende.jpg",
        'title' => "Emprende Tu Negocio",
        'description' => [
          "De acuerdo con los datos del INEGI, 1 de cada 10 negocios logran alcanzar el éxito, las causas son variadas pero el común denominador apuntan a la mala gestión de quien está a cargo, debido a la falta de capacitación y al desconocimiento de las herramientas disponibles para la gestión de los negocios.",
          "De manera que, formar, capacitar y dotar de herramientas a emprendedores, es fundamental para ayudarlos en este complejo proceso de emprender un negocio.",
          "Emprende Tu Negocio es un programa para emprendedores diseñado para que, a través de una Serie de Talleres Integrales impartidas por un consultor experto, se traten temas como:<br>
          - Modelo de negocios<br>
          - Innovación empresarial<br>
          - Redes sociales<br>
          - Producto mínimo viable<br>
          - Levantamiento de capital<br>
          - Planeación estratégica<br>
          - Estrategias digitales de venta<br>
          - Consultoría estratégica",
          "Los talleres pertenecen al programa de incubación con duración aproximada de 4 meses."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/acelera.jpg",
        'title' => "Expande tu Negocio",
        'description' => [
          "El ciclo de vida de las empresas esta relacionado con su edad y tamaño, pero sobre todo con el grado de madurez de la misma. De acuerdo con los datos del INEGI, el 20% de las empresas logran alcanzar los 5 años, pasado este tiempo, estas empresas ya habrán pasado por múltiples desafios que los ha dotado de cierta madurez, elemento clave para gestionar el crecimieto y expansión de las empresas.",
          "De manera que, formar, capacitar y proporcionar herramientas a los empresarios, es indispensable para apoyarlos en el complicado proceso de expansión y crecimiento de sus negocios.",
          "Expande Tu Negocio es un programa para empresarios diseñado para que, a través de una Serie de Talleres Integrales impartidas por un consultor experto, se traten temas como:<br>
          - Propuesta única de valor<br>
          - Modelos de innovación<br>
          - Marketing digital<br>
          - Estrategias digitales de comecialización<br>
          - Embudo de ventas<br>
          - Due diligence<br>
          - Proyectos estratégicos<br>
          - Consultoría estratégica",
          "Los talleres pertenecen al programa de incubación con duración aproximada de 4 meses."
        ]
      ]
    );
    break;
  case '/servicios/ayuntamientos/conocimiento-aplicado/gestion-de-eventos':
    $service = "Gestión de eventos";
    $description = "Planeamos, organizamos, ejecutamos y controlamos las actividades a realizar por parte de los colaboradores y líderes del ayuntamiento para asegurar el cumplimiento de los objetivos en tiempo, forma y recursos definidos para el evento.";
    $image = "/assets/images/services/050-id-card.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/fiestas.jpg",
        'title' => "Fiestas Tradicionales",
        'description' => [
          "El turismo cultural ademas de preservar, resaltar y promover la riqueza cultural de una comunidad, tienen un impacto económico directo por la cantidad de miembros de la sociedad que depende economicamente directa o indirectamente de esta tipo de actividades, mucha de ellas representativas y esperadas a nivel local, nacional e incluso internacional.",
          "La adecuada gestión de estos eventos toma mayor relevancia cuando se trata de fiestas con trayectoria y reconocimiento, ya que a través de ellas, se fortalece la imagen y su legado, pero sobre todo, ofrece las condiciones para que el turista valore y comprenda la cultura de la población, disfrute de su gastronomia, tradiciones y costumbres, como consecuencia, se generarán los ingresos correspondientes a la comunidad por la compra de los productos típicos de su región.",
          "En IDN Consultores, te apoyamos en la Gestión de la Fiestas Tradicionasles con la consultoría estratégica y la tecnología de la información para planear, organizar e implementar de forma metódica, diligente y estructurada estos eventos.",
          "Este servicio incluye las Horas Consultor y Liciencia del Software especialmente diseñado para la gestión de eventos."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/culturales.jpg",
        'title' => "Eventos Culturales",
        'description' => [
          "La cultura como elemento esencial de integración social, forman parte de los objetivos estratégicos de cualquier Ayuntamiento, ya que se ha demostrado el impacto que esta tiene en la reconstitución del tejido social y su desarrollo comunitario.",
          "La realización de eventos culturales fortalece la identidad de una sociedad, fomenta la conservación de su riqueza cultural a través de sus generaciones e incrementa el desarrollo económico, permitiendo que sus habitantes disfruten de sus costumbres y ejerzan sus derechos económico, por ende mejoraren su bienestar y calidad de vida.",
          "En IDN Consultores, te apoyamos en la Gestión de los Eventos Culturales con la consultoría estratégica y la tecnología de la información para planear, organizar e implementar de forma metódica, diligente y estructurada estos eventos.",
          "Este servicio incluye las Horas Consultor y Liciencia del Software especialmente diseñado para la gestión de eventos."
        ]
      ]
    );
    break;
  case '/servicios/ayuntamientos/tecnologias-de-la-informacion/sitios-web':
    $service = "Sitios Web";
    $description = "Diseñamos y desarrollamos sitios web responsivos, multifuncionales, fáciles de usar, interactivos, flexibles y escalables. El alojamiento y el dominio están incluidos.";
    $image = "/assets/images/services/007-world.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/paginas_web.jpg",
        'title' => "Páginas Web Institucional",
        'description' => [
          "Contar con una página institucional para mantenerse en comunicación con la sociedad, es primordial para informar a la comunidad de los avisos, eventos y actividades que el ayuntamiento este realizando en beneficio de sus ciudadanos.",
          "Es por ello, que en IDN Consultores te ayudamos a crear la página web institucional del Ayuntamiento, con la que podrás:<br>
          * Difundir noticias de interés.<br>
          * Publicar convocatoria, avisos y notificaciones.<br>
          * Promocionar eventos y actividades.<br>
          * Mostrar el directorio y medios de contacto."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/landing.jpg",
        'title' => "Landing Page",
        'description' => [
          "La Landing Page es una versión muy sencilla de página web (micrositio), útil para promocionar los eventos, convocatorias o actividades en general del municipio. El micrositio proporcionará la información clara, precisa y de valor, para informar a los ciudadanos y mediante un formulario se obtendrían los datos de contacto de los interesados para posteriormente se de continuidad.",
          "En IDN Consultores te ayudamos a crear la landing page, con la que podrás:<br>
          * Captar a los ciudadanos interesados.<br>
          * Promocionar los eventos, convocatorias y actividades.<br>
          * Proporcionar seguimiento a los ciudadanos registrados."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/blog.jpg",
        'title' => "Reporte Ciudadano",
        'description' => [
          "Disponer de un canal de comunicación para que el ciudadano reporte sus incidencias, es de mucha utilidad para atender los reporte a la brevedad.",
          "En IDN Consultores te ayudamos a crear el Sitio de Reporte Ciudadano, con la que podrás:<br>
          * Mostrar el directorio de contacto.<br>
          * Brindar diferentes medios de contacto según el tema. <br>
          * Atender los reportes vía whatsapp."
        ]
      ]
    );
    break;
  case '/servicios/ayuntamientos/tecnologias-de-la-informacion/grp':
    $service = "GRP";
    $description = "Asesoramos e implementamos los módulos necesarios para satisfacer las necesidades y requerimientos del ayuntamiento para el cumplimiento de la normatividad vigente de la administración pública. La transparencia y rendición de cuentas, será el resultado de implementar este sistema integral de gestión gubernamental en tu ayuntamiento.";
    $image = "/assets/images/services/004-puzzle.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/software.jpg",
        'title' => "Software de Planeación de Recursos Gubernamentales (GRP)",
        'description' => [
          "Nuestro Software GRP es único y especialmente diseñado para el correcto funcionamiento de los ayuntamientos, sus módulos fueron desarrollados de acuerdo a necesidades específicas del sector público.",
          "Disponer de un sistema integral para la administración del ayuntamiento trae consigo beneficios como:<br>
          - Estandarizar procesos.<br>
          - Trazabilidad y confiabilidad de la información.<br>
          - Disminución de errores.<br>
          - Registro único de la información.<br>
          - Mejora la eficiencia y productividad.<br>
          - Información financiera al instante.<br>
          - Entre otros múltiples beneficios.",
          "Nuestros software es tan flexible que si no tiene la funcionalidad que necesitas, te la desarrollamos."
        ]
      ]
    );
    break;
  case '/servicios/ayuntamientos/tecnologias-de-la-informacion/licencias-tics':
    $service = "Licencias TIC´s";
    $description = "Asesoramos e implementamos soluciones tecnológicas. En nuestro catálogo de TIC´s con enfoque comercial, tenemos la opción que se ajuste a tus necesidades.";
    $image = "/assets/images/services/001-protection.svg";

    array_push($arrayData, 
      [
        'image' => "/assets/images/fotosidn/cobro.jpg",
        'title' => "Cobro en Ventanilla",
        'description' => [
          "En IDN Consultores entendemos el valor de agilizar el proceso de cobro en ventanilla y controlar los ingresos.",
          "Nuestro Cobro en Ventanilla lo hemos desarrollado con la intención de mejorar la atención al ciudadano.",
          "Esta tecnología de la información es ideal para:<br>
          - Brindar un servicio más rápido y eficiente.<br>
          - Controlar los ingresos del ayuntamiento.",
          "Nota: Pregunta por las funcionalidades extras."
        ]
      ],
      [
        'image' => "/assets/images/fotosidn/mercado.jpg",
        'title' => "Mercado Virtual",
        'description' => [
          "El mercado ahora es global y cada vez es más competitivo, para sobresalir, los negocios requieren de herramientas digitales que permitan comercializar sus productos y servicios a gran escala y en nuevos mercados.",
          "En IDN Consultores hemos desarrollado un Mercado Virtual atractivo que impulsarán las ventas de los negocios de la comunidad.",
          "Esta tecnologia de la información es ideal para:<br>
          - Brindar una opcion digital de comercialización a la comunidad.<br>
          - Facilitar el proceso de compra y venta. <br>
          - Disponer de una plataforma que fomente el comercio local.",
          "Nota: Pregunta por las funcionalidades adicionales."
        ]
      ]
    );
    break;
  default:
}

?>

<section class="header14 cid-sz2UT2UfDM" id="header14-1" style="background: none; background-color: #F9F9F9 !important;">
  <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 380px;">
      <div class="col-12 col-md-5 image-wrapper">
        <img src="<?php echo $image; ?>" style="margin: 0 auto; width: 160px; margin-right: 0;" />
      </div>
      <div class="col-12 col-md">
        <div class="text-wrapper" style="padding: 0;">
          <h1
            class="mbr-section-title mbr-fonts-style mb-3 display-2"
            style="text-shadow: 2px 0 0 #fef7ea, -2px 0 0 #fef7ea,
                0 2px 0 #fef7ea, 0 -2px 0 #fef7ea, 1px 1px #fef7ea,
                -1px -1px 0 #fef7ea, 1px -1px 0 #fef7ea, -1px 1px 0 #fef7ea; margin-bottom: 1rem !important;">
            <strong><?php echo $service; ?></strong>
          </h1>
          <p class="mbr-text mbr-fonts-style display-7">
            <?php echo $description; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .detail_service h3{
    font-weight: bold;
    color: #00c5c5;

  }

  .detail_service p {
    font-size: 1rem;
  }
</style>

<?php
  

  foreach($arrayData as $key => $value) {
    if(($key + 1) % 2 != 0){
      ?>
      <section class="cid-sz2UVLuOX2 detail_service">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <img src=<?php echo $value['image'] ?>>
            </div>
            <div class="col-lg-8">
              <div class="item">
                <h3 class="card-title mbr-fonts-style display-7"><?php echo $value['title'] ?></h3>
                <?php
                  foreach($value['description'] as $key2 => $value2) {
                    ?>
                    <p class="card-text mbr-fonts-style display-7"><?php echo $value2 ?></p>
                    <?php
                  }
                ?>
                <a href="/#contactanos" class="btn btn-primary display-4">Cotizar</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
    } else {
      ?>
      <section class="cid-sz2UVLuOX2 detail_service" style="background-color: #F9F9F9;">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="item">
                <h3 class="card-title mbr-fonts-style display-7" style="color: #f2a74c;"><?php echo $value['title'] ?></h3>
                <?php
                  foreach($value['description'] as $key2 => $value2) {
                    ?>
                    <p class="card-text mbr-fonts-style display-7"><?php echo $value2 ?></p>
                    <?php
                  }
                ?>
                <a href="/#contactanos" class="btn btn-secondary display-4">Cotizar</a>
              </div>
            </div>
            <div class="col-lg-4">
              <img src=<?php echo $value['image'] ?>>
            </div>
          </div>
        </div>
      </section>
      <?php
    }
  }
?>

<!--
<section class="cid-sz2UVLuOX2 detail_service">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <img src="/assets/images/fotosidn/profesionalizacion.jpg">
      </div>
      <div class="col-lg-8">
        <div class="item">
          <h3 class="card-title mbr-fonts-style display-7">Profesionalización</h3>
          <p class="card-text mbr-fonts-style display-7">El arranque y desarrollo de un negocio no es cosa fácil, la motivación, el compromiso, la creatividad, el esfuerzo y líderazgo de los fundadores y personal clave en las etapas iniciales, resultó en su crecimiento, sin embargo, conquistar nuevos mercados o mantenerse presente en el actual, requieren de un proceso interno dentro de la empresa, que lo mantenga en constante evolución y en una posición competitiva, para ello, se requiere de la estructuración de la misma, dotarla talento y de la construcción de las bases para la sucesión de los fundadores a las nuevas generaciones.</p>
          <p class="card-text mbr-fonts-style display-7">Tenemos la experiencia y el método para gestionar la transformación de tu organización hacia el desarrollo de sus capacidades. Trabajaremos contigo el Plan de Acción previamente generado de acuerdo al diagnóstico inicial que realicemos a tu empresa.
          </p>
          <button class="btn btn-primary display-4">Cotizar</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cid-sz2UVLuOX2 detail_service" style="background-color: #F9F9F9;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="item">
          <h3 class="card-title mbr-fonts-style display-7" style="color: #f2a74c;">Automatización y Digitalización de Procesos</h3>
          <p class="card-text mbr-fonts-style display-7">Gestionar correctamente las actividades y procesos claves de la empresa, es fundamental para mantener su óptimo funcionamiento, pero reducir los costos, aumentar la productividad, evitar los fallos, acelarar los tiempos de ejecución y sustituir procesos manuales con aplicaciones de software, implica un gran desafio para las organizaciones, sobre todo si desean mantenerse a la vanguardia y competitivas.</p>
          <p class="card-text mbr-fonts-style display-7">Diseñamos toda una metodología para ayudarte afrontar este reto y agilizar los tiempos de implementación. Ejecutaremos el Plan de Trabajo establecido para la implementación del sistema.</p>
          <button class="btn btn-secondary display-4">Cotizar</button>
        </div>
      </div>
      <div class="col-lg-4">
        <img src="/assets/images/fotosidn/automatizacion.jpg">
      </div>
    </div>
  </div>
</section>

<section class="cid-sz2UVLuOX2 detail_service">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <img src="/assets/images/fotosidn/planeacion.jpg">
      </div>
      <div class="col-lg-8">
        <div class="item">
          <h3 class="card-title mbr-fonts-style display-7">Planeación Estratégica</h3>
          <p class="card-text mbr-fonts-style display-7">Contar con un proceso sistemático de desarrollo e implementación de planes para alcanzar los objetivos de la empresa, es indispensable para alcanzar el éxito. Este proceso suele ser un dolor de cabeza cuando la organización no tiene clara la visión o desconoce hasta donde puede llegar.</p>
          <p class="card-text mbr-fonts-style display-7">Te proporcionamos las herramientas estratégicas, el conocimiento y acompañamiento para que construyas tu Plan Estratégico, con el que plasmaras el quehacer y el cómo debería hacerse, lo que permitirá a tu empresa se organice y opere de acuerdo a esa visión.</p>
          <button class="btn btn-primary display-4">Cotizar</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cid-sz2UVLuOX2 detail_service" style="background-color: #F9F9F9;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="item">
          <h3 class="card-title mbr-fonts-style display-7" style="color: #f2a74c;">Estandarización de Procesos</h3>
          <p class="card-text mbr-fonts-style display-7">Diseñar o actualizar la estructura organizacional, definir el estándar de los procesos y establecer el perfil adecuado de los puestos de trabajo que aseguren el correcto funcionamiento de la empresa, son parte de las tareas estratégicas necesarias para reducir los costos y aumentar la calidad de los productos o servicios que se ofrecen al cliente.</p>
          <p class="card-text mbr-fonts-style display-7">Te entregaremos tu Manual de Procedimientos Estandarizados para preservar el conocimiento y experiencia de tu empresa que ha generado y sirva de guía para la ejecución de los procesos para el personal actual o el nuevo.</p>
          <button class="btn btn-secondary display-4">Cotizar</button>
        </div>
      </div>
      <div class="col-lg-4">
        <img src="/assets/images/fotosidn/estandarizacion.jpg">
      </div>
    </div>
  </div>
</section>
-->

<?php require('template/_footer.php'); ?>