# RM Nails Boutique — "La boutique de las uñas"
> **Plataforma E-Commerce Profesional en Arquitectura MVC (PHP 8 & Composer)**  
> Distribución y venta de insumos profesionales de belleza para Manicuristas, Brows Artists y Lashistas.  
> Barquisimeto, Estado Lara, Venezuela  
> WhatsApp Oficial: [+58 412-0549526](https://wa.me/584120549526)  
> Instagram: [@rmnailsboutique](https://www.instagram.com/rmnailsboutique/)  
> Repositorio GitHub: [https://github.com/Gabriellsanchezt/RM-Nails-Boutique](https://github.com/Gabriellsanchezt/RM-Nails-Boutique)

---

## 1. ¿Que es RM Nails Boutique y cual es su proposito?

**RM Nails Boutique** es una solucion de comercio electronico disenada a la medida para salones de belleza, academias y profesionales independientes de las areas de manicura, cejas y pestanas en Barquisimeto y a nivel nacional en Venezuela.

La plataforma resuelve los desafios comerciales particulares del mercado venezolano:
- **Atencion Directa y Consulta de Insumos:** Las profesionales de la belleza requieren atencion consultiva antes de concretar su compra. Por ello, la tienda no maneja inventario rigido en pantalla, sino un catalogo dinamino orientado a la consulta y confirmacion personalizada.
- **Conversion y Checkout a WhatsApp:** Cada orden seleccionada genera automaticamente un mensaje detallado, estructurado y formateado en lista que se envia con un clic a la asesora de ventas por WhatsApp, reduciendo la friccion y acelerando el cierre de la venta.
- **Economia Multimoneda (USD y Bolivares):** Integra precios duales en tiempo real calculados con la tasa oficial del Banco Central de Venezuela (BCV), garantizando transparencia cambiaria y respaldo ante fallas de conexion.
- **Logistica Local y Nacional:** Gestion de delivery expreso en Barquisimeto (con envio gratis condicionado) y despachos nacionales por empresas de encomienda (MRW, Zoom, Tealca).

---

## 2. Funcionalidades Clave de la Tienda (¿Que hace la plataforma?)

### A. Catalogo Inteligente de Insumos Profesionales
- **Categorias Especializadas:**
  - *Unas / Manicura:* Geles semipermanentes, lamparas profesionales UV/LED, pinceles Kolinsky, limas spongee, drill y fresas.
  - *Cejas & Pestanas:* Blisters de extensiones pelo a pelo y volumen ruso, kits de laminado y lifting de cejas, adhesivos de secado rapido.
  - *Cuidado & Herramientas:* Aceites de cuticula con particulas doradas, removedores, sanitizantes y herramientas de preparacion.
- **Buscador Reactivo Tolerante a Tildes:** Búsqueda en vivo que normaliza caracteres diacriticos (buscar *"unas"* arroja *"uñas"*, *"pestanas"* arroja *"pestañas"*, *"lampara"* arroja *"lámpara"*).
- **Filtros Dinamicos:** Acceso rapido mediante botones de categoria, ordenamiento por precio y valoracion, y boton destacado para *Mostrar Todo el Catalogo*.
- **Vista Rapida (Quick View):** Ventana modal para inspeccionar atributos tecnicos, formula, tiempo de curado y fotos ampliadas del producto sin abandonar la navegacion.
- **Lista de Favoritos (Wishlist):** Permite a las especialistas guardar sus insumos recurrentes y moverlos directamente a la orden con un clic.
- **Respaldo de Imagenes:** Sistema de seguridad `onerror` que sustituye automaticamente cualquier enlace de imagen caido por el monograma oficial de la boutique, evitando iconos rotos.

### B. Carrito de Compras Robusto y Checkout Directo a WhatsApp
- **Reinicio en Cero:** Cada vez que la cliente reinicia o recarga la pagina (F5), el carrito inicia estrictamente en 0. Esto evita selecciones residuales o pedidos accidentales de sesiones anteriores.
- **Cajon Lateral Deslizante (Slide-Over Drawer):** Visualizacion clara de los productos seleccionados, cantidades modificables con proteccion anti-NaN (limite maximo de 99 unidades y eliminacion al llegar a 0) y subtotales en USD y Bolivares.
- **Barra de Progreso para Delivery Gratis:** Barra dinamica que calcula cuanto dinero falta para alcanzar el beneficio de *Delivery GRATIS en Barquisimeto* (a partir de $35 USD).
- **Validaciones Estrictas en Tiempo Real:**
  - *Nombre:* Bloqueo fisico de teclas numericas en el teclado, impidiendo el ingreso de digitos.
  - *Telefono:* Validacion de prefijos moviles nacionales venezolanos (0412, 0414, 0424, 0416, 0426) y formato numerico estricto.
  - *Direccion / Salon:* Exigencia de direccion fisica para delivery o seleccion de punto de retiro en tienda.
- **Generador de Mensaje en Lista:** En lugar de textos confusos, el checkout arma un mensaje en limpio para WhatsApp con encabezado oficial, numeracion de articulos, precios unitarios, costo de envio, tasa aplicada, total en ambas monedas y datos de la cliente.

### C. Tasa de Cambio Oficial (BCV) con Respaldo de Contingencia
- **Actualizacion Automatica:** Consume la tasa oficial de cambio a traves de API en tiempo real.
- **Modo Congelado (Frozen Rate):** Si la conexion a internet se interrumpe o la API externa falla, el sistema no se detiene ni arroja error: recurre a una memoria cache local donde mantiene la ultima tasa valida congelada.
- **Ajuste Manual:** Modal administrativo que permite fijar o congelar una tasa personalizada si es requerido por la gerencia.

### D. Ventana de Error y Contingencia Amigable
- **Deteccion de Estado Offline:** Si la cliente pierde conexion de datos o WiFi, la aplicacion lo detecta de inmediato y presenta una ventana de diseno boutique advirtiendo la intermitencia sin asustar a la usuaria.
- **Rescate de Ventas:** Si la respuesta del servidor tarda o se corta durante el checkout, la ventana de error presenta dos soluciones inmediatas:
  1. *Reintentar Conexion:* Vuelve a intentar la solicitud sin recargar la pagina.
  2. *Enviar Pedido por WhatsApp Directo:* Permite enviar la orden directamente a la asesora para concretar la compra manualmente.
- **Vistas 404 y 500 Personalizadas:** Las rutas inexistentes o fallas internas renderizan interfaces esteticas con accesos directos al catalogo y a WhatsApp, en lugar de pantallas blancas o codigos de error incomprensibles.

---

## 3. Arquitectura y Explicacion del Codigo

El software esta construido siguiendo el patron arquitectonico **MVC (Modelo - Vista - Controlador)** con PHP 8, respetando el estandar de interoperabilidad **PSR-4** gestionado por **Composer**.

```
rm-nails-boutique/
├── app/
│   ├── Core/                      # Nucleo del Framework MVC
│   │   ├── Config.php             # Lector centralizado de configuracion (.env y app.php)
│   │   ├── Controller.php         # Controlador base con helpers de respuesta JSON y render
│   │   ├── Model.php              # Clase base para abstraccion de datos
│   │   ├── RateService.php        # Logica de consumo de API BCV y cache de contingencia
│   │   ├── Router.php             # Enrutador HTTP (GET/POST, regex y vistas 404/500)
│   │   └── View.php               # Motor de ensamblado de vistas con layouts y assets
│   ├── Controllers/               # Controladores de la aplicacion
│   │   ├── HomeController.php     # Despacha la vista principal de la boutique
│   │   ├── ProductController.php  # Endpoints REST del catalogo de insumos
│   │   ├── RateController.php     # Endpoint REST de consulta y actualizacion de tasa
│   │   └── OrderController.php    # Validacion del pedido y estructuracion de orden WhatsApp
│   ├── Models/                    # Capa de datos y reglas de negocio
│   │   ├── Product.php            # Catalogo oficial de insumos, categorias y filtros
│   │   └── Setting.php            # Parametros generales, tasas de respaldo y delivery
│   └── Views/                     # Capa de presentacion (HTML / Tailwind CSS)
│       ├── layouts/
│       │   ├── main.php           # Layout maestro con head, CDN Tailwind, modales y scripts
│       │   ├── header.php         # Barra de navegacion superior, logo y buscador
│       │   └── footer.php         # Pie de pagina institucional, redes y atencion
│       ├── home/
│       │   ├── hero.php           # Banner principal con foto de estudio y sello oficial
│       │   ├── catalog.php        # Grid interactivo de tarjetas de productos
│       │   ├── features.php       # Bloques de entrega fisica, delivery y despachos nacionales
│       │   ├── reviews.php        # Resenas de manicuristas y clientas
│       │   ├── instagram.php      # Seccion de comunidad y enlaces a @rmnailsboutique
│       │   └── index.php          # Vista contenedora que ensambla los componentes home
│       ├── errors/
│       │   ├── 404.php            # Pagina boutique para enlaces no encontrados
│       │   └── 500.php            # Pagina boutique para interrupciones del servidor
│       └── modals/
│           ├── cart_drawer.php    # Carrito lateral deslizante con barra de delivery
│           ├── checkout.php       # Formulario con validaciones en tiempo real
│           ├── quickview.php      # Ficha tecnica de producto
│           ├── wishlist.php       # Modal de insumos favoritos
│           ├── rate.php           # Modal de consulta y ajuste de tasa BCV
│           └── error_modal.php    # Ventana de error y contingencia amigable
├── assets/                        # Carpeta dedicada de recursos estaticos del proyecto
│   ├── css/
│   │   └── styles.css             # Estilos de diseno boutique, gradientes oro y sombras
│   ├── js/
│   │   └── app.js                 # Lógica reactiva del carrito, buscador, validaciones y WhatsApp
│   └── images/
│       ├── logo.jpg               # Monograma oficial balanceado opticamente (800x800)
│       └── hero-showcase.jpg      # Fotografia de estudio estetico profesional
├── config/
│   └── app.php                    # Variables fijas del negocio (nombre, WhatsApp, ubicacion)
├── public/                        # Punto de entrada web accesible para servidores
│   ├── assets/                    # Espejo publico de archivos estaticos (css, js, images)
│   ├── .htaccess                  # Reescritura de URLs para Apache (mod_rewrite)
│   └── index.php                  # Front Controller principal
├── storage/
│   └── cache/
│       └── rate_cache.json        # Archivo de persistencia de tasa congelada
├── .env.example                   # Plantilla de variables de entorno
├── .gitignore                     # Archivos ignorados por control de versiones
├── composer.json                  # Definicion de autoload PSR-4 y dependencias
├── LICENSE                        # Licencia MIT de codigo abierto
└── README.md                      # Documentacion funcional y tecnica del proyecto
```

---

## 4. Como interactuan los componentes del codigo

### Flujo de la Peticion Web (Request Lifecycle):
1. **Punto de Entrada (`public/index.php`):** Inicializa el autoloading de Composer (`vendor/autoload.php`) e instancia el Enrutador (`App\Core\Router`).
2. **Enrutamiento Inteligente (`Router.php`):** Evalua el metodo HTTP y la URI solicitada.
   - Si la ruta coincide con una ruta web (como `/`), invoca el metodo correspondiente del controlador.
   - Si la ruta no existe y es una peticion web, renderiza automaticamente la vista boutique `errors.404`.
   - Si se produce una excepcion no controlada, captura el error y renderiza la vista `errors.500`.
   - Si la peticion proviene de una API (`/api/*`), responde con formato JSON estandarizado.
3. **Controladores (`app/Controllers/`):**
   - `HomeController::index()`: Carga los datos del negocio y los productos destacados a traves de los modelos `Product` y `Setting`, inyectandolos en la vista `home.index` dentro del layout `main`.
   - `OrderController::generateWhatsAppOrder()`: Recibe el payload del pedido desde JavaScript, ejecuta validaciones de seguridad del lado del servidor (evitando nombres numericos o telefonos invalidos) y devuelve el enlace estructurado de WhatsApp.
   - `RateController::getRate()`: Utiliza el servicio `RateService` para consultar la tasa oficial o devolver la tasa congelada en cache.
4. **Vistas Modulares (`app/Views/`):** Divididas en componentes independientes reutilizables mediante `View::component()`, permitiendo mantener un codigo limpio, editable y escalable.
5. **Capa del Cliente (`assets/js/app.js`):** Gestiona todo el estado reactivo (`STATE`):
   - Almacena el carrito exclusivamente en memoria de sesion (garantizando 0 articulos en cada recarga).
   - Maneja la normalizacion de caracteres para el buscador.
   - Monitorea eventos de red (`online` / `offline`) para disparar la ventana de error elegante cuando la conexion falla.

---

## 5. Endpoints de la API REST

| Metodo | Ruta | Descripcion | Parametros / Body |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | Tienda principal (Storefront completo) | Ninguno |
| `GET` | `/api/rate` | Obtiene la tasa de cambio vigente y su estado de congelamiento | Ninguno |
| `GET` | `/api/products` | Catalogo de productos en formato JSON | `?category=unas`, `?q=gel` |
| `GET` | `/api/products/{id}` | Informacion detallada de un insumo | `{id}` en la URL |
| `POST` | `/api/order/whatsapp` | Valida los datos del cliente y genera la orden en WhatsApp | JSON con nombre, telefono, ciudad, items y tasa |

---

## 6. Instalacion y Puesta en Marcha

### Requisitos del Sistema
- **PHP:** Version 8.0 o superior (compatible con PHP 8.1, 8.2 y 8.3).
- **Composer:** Version 2.x para el mapeo PSR-4.
- **Servidor Web:** Apache con modulo `mod_rewrite` habilitado (XAMPP, WampServer o Lamp) o el servidor integrado de PHP.

### Pasos para ejecucion local en XAMPP:
1. Clonar el repositorio dentro del directorio `htdocs` de XAMPP:
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/Gabriellsanchezt/RM-Nails-Boutique.git rm-nails-boutique
   ```
2. Entrar a la carpeta e inicializar Composer:
   ```bash
   cd rm-nails-boutique
   composer install
   # Si no se requieren paquetes externos, generar el mapa de clases:
   composer dump-autoload
   ```
3. Generar el archivo de variables de entorno:
   ```bash
   copy .env.example .env
   ```
4. Iniciar los servicios de Apache en el panel de control de XAMPP.
5. Abrir el navegador en:
   - [http://localhost/rm-nails-boutique/](http://localhost/rm-nails-boutique/)

### Pasos para ejecucion mediante servidor integrado de PHP:
```bash
cd rm-nails-boutique
php -S localhost:8000 -t public
```
Abrir [http://localhost:8000](http://localhost:8000) en el navegador.

---

## 7. Despliegue en Produccion (cPanel / Hostinger / DonWeb)

1. Subir los archivos del proyecto al servidor de hosting.
2. Configurar el **DocumentRoot** del dominio para que apunte directamente al directorio `/public`.
3. El archivo `public/.htaccess` gestiona de forma nativa la reescritura hacia `index.php` asegurando rutas amigables y protegiendo el codigo de `app/` y `config/` del acceso publico directo.

---

## 8. Identidad de Marca y Creditos

- **Empresa:** RM Nails Boutique — *"La boutique de las uñas"*
- **Slogan:** *"Todo para las manicuristas, brows artist y más"*
- **Canales Oficiales:**
  - WhatsApp: [+58 412-0549526](https://wa.me/584120549526)
  - Instagram: [@rmnailsboutique](https://www.instagram.com/rmnailsboutique/)
- **Licencia:** Codigo liberado bajo la Licencia [MIT](LICENSE).
