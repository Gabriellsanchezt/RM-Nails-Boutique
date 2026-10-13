# RM Nails Boutique — "La boutique de las uñas"
> **Plataforma E-Commerce en Arquitectura MVC con PHP 8 & Composer**  
> Insumos profesionales de belleza para Manicuristas, Brows Artists y Lashistas.  
> Barquisimeto, Estado Lara, Venezuela  
> WhatsApp Oficial: [+58 412-0549526](https://wa.me/584120549526)  
> Instagram: [@rmnailsboutique](https://www.instagram.com/rmnailsboutique/)

---

## Arquitectura MVC (Model-View-Controller)

El proyecto esta disenado bajo el estandar **PSR-4** de PHP y estructurado de forma modular y desacoplada:

```
rm-nails-boutique/
├── app/
│   ├── Core/
│   │   ├── Config.php             # Lector centralizado de configuraciones y .env
│   │   ├── Controller.php         # Controlador base con renderizador de vistas y respuestas JSON
│   │   ├── Model.php              # Modelo base
│   │   ├── RateService.php        # Tasa de cambio BCV automatica con respaldo en cache congelada
│   │   ├── Router.php             # Enrutador HTTP (GET, POST, parametros dinamicos)
│   │   └── View.php               # Motor de renderizado con layouts y sub-componentes
│   ├── Controllers/
│   │   ├── HomeController.php     # Controlador principal de la tienda
│   │   ├── ProductController.php  # Endpoints REST de catalogo y filtrado
│   │   ├── RateController.php     # Endpoint REST de tasa de cambio oficial
│   │   └── OrderController.php    # Procesamiento y validacion de ordenes WhatsApp
│   ├── Models/
│   │   ├── Product.php            # Modelo de catalogo, stock, precios USD/VES y filtros
│   │   └── Setting.php            # Parametros de negocio, tasas y delivery
│   └── Views/
│       ├── layouts/
│       │   ├── main.php           # Layout maestro (HTML head, scripts, modals)
│       │   ├── header.php         # Top bar promocional, logo boutique y buscador
│       │   └── footer.php         # Pie de pagina, metodos de pago y contacto
│       ├── home/
│       │   ├── hero.php           # Seccion Hero con imagen de estudio y sello boutique
│       │   ├── catalog.php        # Grid interactivo de productos con selector de categorias
│       │   ├── features.php       # Banners de tienda fisica, delivery y envios nacionales
│       │   ├── reviews.php        # Muro de testimonios de clientas
│       │   ├── instagram.php      # Feed de comunidad @rmnailsboutique
│       │   ├── index.php          # Ensamblador de vistas home
│       ├── errors/
│       │   ├── 404.php            # Pagina boutique para rutas no encontradas
│       │   └── 500.php            # Pagina boutique para interrupciones del servidor
│       └── modals/
│           ├── cart_drawer.php    # Carrito lateral deslizante (Slide-Over)
│           ├── checkout.php       # Checkout modal con generador WhatsApp
│           ├── quickview.php      # Modal de vista rapida de producto
│           ├── wishlist.php       # Modal de favoritos
│           └── error_modal.php    # Ventana de error elegante para contingencias de red/servidor
├── assets/                        # Carpeta dedicada de recursos estaticos
│   ├── css/
│   │   └── styles.css             # Estilos boutique, gradientes oro/rosa
│   ├── js/
│   │   └── app.js                 # Logica de carrito resistente, validaciones y pedidos
│   └── images/
│       ├── logo.jpg               # Monograma oficial centrado opticamente
│       └── hero-showcase.jpg      # Fotografia de estudio estetico
├── config/
│   └── app.php                    # Configuracion general (nombre, WhatsApp, tasas, delivery)
├── public/
│   ├── assets/                    # Espejo publico de recursos web (css, js, images)
│   ├── .htaccess                  # Reescritura de URLs para Apache/cPanel
│   └── index.php                  # Front Controller (punto de entrada)
├── .env.example                   # Plantilla de variables de entorno
├── .gitignore                     # Exclusiones de Git (vendor, .env, temporales)
├── composer.json                  # Configuracion de Composer con autoloading PSR-4
├── LICENSE                        # Licencia MIT
└── README.md                      # Documentacion tecnica
```

---

## Identidad de Marca y Estilo Visual

- **Nombre:** RM Nails Boutique
- **Slogan:** *"La boutique de las uñas - Todo para las manicuristas, brows artist y más"*
- **Paleta de Colores:**
  - **Rosa Chic Principal:** `#E57399` y `#C84B75`
  - **Acento Oro / Champagne:** `#D4AF37`
  - **Blanco Puro:** `#FFFFFF`
  - **Gris Oscuro / Negro Elegante:** `#1F191E` y `#6B6168`
- **Tipografias:** `Playfair Display` (lujo y elegancia) + `Plus Jakarta Sans` (interfaz moderna y numeros).

---

## Rutas y Endpoints Disponibles

| Metodo | Ruta | Descripcion |
| :--- | :--- | :--- |
| `GET` | `/` | Vista principal de la tienda (Storefront) |
| `GET` | `/api/products` | Catalogo completo o filtrado (`?category=unas&q=gel`) |
| `GET` | `/api/products/{id}` | Ficha en formato JSON de un producto especifico |
| `POST` | `/api/order/whatsapp` | Valida el pedido en el backend y genera el enlace oficial a `wa.me/584120549526` |

---

## Requisitos Previos

- **PHP 8.0 o superior** (compatible con PHP 8.1, 8.2 y 8.3).
- **Composer 2.x**.
- **Apache / XAMPP** con mod_rewrite activado o servidor integrado de PHP.
- **Git** (control de versiones).

---

## Instalacion y Ejecucion Local

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/Gabriellsanchezt/RM-Nails-Boutique.git
   cd RM-Nails-Boutique
   ```

2. **Instalar dependencias y generar autoload PSR-4:**
   ```bash
   composer install
   # o bien:
   composer dump-autoload
   ```

3. **Crear archivo de entorno:**
   ```bash
   copy .env.example .env
   ```

4. **Iniciar con XAMPP o servidor local de PHP:**
   - **XAMPP:** Ubicar la carpeta en `C:\xampp\htdocs\rm-nails-boutique` y abrir [http://localhost/rm-nails-boutique/](http://localhost/rm-nails-boutique/).
   - **PHP CLI:**
     ```bash
     php -S localhost:8000 -t public
     ```
     Abrir [http://localhost:8000](http://localhost:8000).

---

## Repositorio Oficial en GitHub

Repositorio: [https://github.com/Gabriellsanchezt/RM-Nails-Boutique](https://github.com/Gabriellsanchezt/RM-Nails-Boutique)

Comandos para sincronizar cambios:

```bash
git add .
git commit -m "docs: actualizar documentacion tecnica"
git push origin main
```

---

## Despliegue en Servidores Web / Hosting

- **Apache / cPanel / Hostinger / DonWeb:**
  Apunta el *DocumentRoot* a la carpeta `/public` del proyecto. El archivo [public/.htaccess](public/.htaccess) gestiona automaticamente la reescritura de URLs hacia `index.php`.
- **Nginx:**
  Configura `try_files $uri $uri/ /index.php?$query_string;` apuntando el root a `.../public`.
- **Docker / Cloud:**
  Compatible con cualquier contenedor estandar PHP 8.2+ con Apache o Nginx.

---

## Licencia

Este proyecto esta bajo la Licencia **MIT** — ver el archivo [LICENSE](LICENSE) para mas detalles.
