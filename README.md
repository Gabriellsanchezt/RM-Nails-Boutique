# 💅 RM Nails Boutique — "La boutique de las uñas"
> **Plataforma E-Commerce en Arquitectura MVC con PHP 8 & Composer**  
> Insumos profesionales de belleza para Manicuristas, Brows Artists y Lashistas.  
> 📍 Barquisimeto, Estado Lara, Venezuela 🇻🇪  
> 💬 WhatsApp Oficial: [+58 412-0549526](https://wa.me/584120549526)  
> 📸 Instagram: [@rmnailsboutique](https://www.instagram.com/rmnailsboutique/)

---

## 🏛️ Arquitectura MVC (Model-View-Controller)

El proyecto está diseñado bajo el estándar **PSR-4** de PHP y estructurado de forma modular y desacoplada:

```
rm-nails-boutique/
├── app/
│   ├── Core/
│   │   ├── Config.php          # Lector centralizado de configuraciones y .env
│   │   ├── Controller.php      # Controlador base con renderizador de vistas y respuestas JSON
│   │   ├── Model.php           # Modelo base
│   │   ├── Router.php          # Enrutador HTTP (GET, POST, parámetros dinámicos)
│   │   └── View.php            # Motor de renderizado con layouts y sub-componentes
│   ├── Controllers/
│   │   ├── HomeController.php  # Controlador principal de la tienda
│   │   ├── ProductController.php # Endpoints REST de catálogo y filtrado
│   │   └── OrderController.php # Procesamiento y validación de órdenes WhatsApp
│   ├── Models/
│   │   ├── Product.php         # Modelo de catálogo, stock, precios USD/VES y filtros
│   │   └── Setting.php         # Parámetros de negocio, tasas y delivery
│   └── Views/
│       ├── layouts/
│       │   ├── main.php        # Layout maestro (HTML head, scripts, modals)
│       │   ├── header.php      # Top bar promocional, logo boutique y buscador
│       │   └── footer.php      # Pie de página, métodos de pago y contacto
│       ├── home/
│       │   ├── hero.php        # Sección Hero de alta conversión
│       │   ├── features.php    # Banners de tienda física, delivery y envíos Vzla
│       │   ├── catalog.php     # Grid interactivo de productos
│       │   ├── wholesale.php   # Sección de combos para academias y cursos
│       │   ├── reviews.php     # Muro de testimonios reales
│       │   ├── instagram.php   # Feed de comunidad @rmnailsboutique
│       │   └── index.php       # Ensamblador de vistas home
│       └── modals/
│           ├── cart_drawer.php # Carrito lateral deslizante (Slide-Over)
│           ├── checkout.php    # Checkout modal con generador WhatsApp
│           ├── quickview.php   # Modal de vista rápida de producto
│           ├── wishlist.php    # Modal de favoritos
│           └── rate.php        # Modal para ajustar la tasa oficial/BCV
├── config/
│   └── app.php                 # Configuración general (nombre, WhatsApp, tasas, delivery)
├── public/
│   ├── assets/
│   │   ├── css/
│   │   │   └── styles.css      # Estilos luxury boutique, gradientes oro/rosa
│   │   └── js/
│   │       └── app.js          # Reactividad del carrito, buscador y pedidos
│   ├── .htaccess               # Reescritura de URLs para Apache/cPanel
│   └── index.php               # Front Controller (punto de entrada)
├── .env.example                # Plantilla de variables de entorno
├── .gitignore                  # Exclusiones de Git (vendor, .env, temporales)
├── composer.json               # Configuración de Composer con autoloading PSR-4
├── LICENSE                     # Licencia MIT
└── README.md                   # Documentación técnica
```

---

## 🌸 Identidad de Marca y Estilo Visual

- **Nombre:** RM Nails Boutique
- **Slogan:** *"La boutique de las uñas - Todo para las manicuristas, brows artist y más"*
- **Paleta de Colores:**
  - **Rosa Chic Principal:** `#E57399` y `#C84B75`
  - **Acento Oro / Champagne:** `#D4AF37`
  - **Blanco Puro:** `#FFFFFF`
  - **Gris Oscuro / Negro Elegante:** `#1F191E` y `#6B6168`
- **Tipografías:** `Playfair Display` (lujo y elegancia) + `Plus Jakarta Sans` (interfaz moderna y números).

---

## ⚡ Rutas y Endpoints Disponibles

| Método | Ruta | Descripción |
| :--- | :--- | :--- |
| `GET` | `/` | Vista principal de la tienda (Storefront) |
| `GET` | `/api/products` | Catálogo completo o filtrado (`?category=unas&q=gel`) |
| `GET` | `/api/products/{id}` | Ficha en formato JSON de un producto específico |
| `POST` | `/api/order/whatsapp` | Valida el pedido en el backend y genera el enlace oficial a `wa.me/584120549526` |

---

## 🛠️ Requisitos Previos

- **PHP 8.0 o superior** (probado y compatible con PHP 8.1, 8.2 y 8.3).
- **Composer 2.x**.
- **Git** (para subirlo a GitHub).

---

## 💻 Instalación y Ejecución Local

1. **Instalar dependencias y generar autoload PSR-4:**
   ```bash
   composer install
   # o bien:
   composer dump-autoload
   ```

2. **Crear archivo de entorno:**
   ```bash
   copy .env.example .env
   ```

3. **Iniciar servidor local de desarrollo:**
   ```bash
   composer start
   # o el comando directo de PHP:
   php -S localhost:8000 -t public
   ```

4. **Abrir en el navegador:**
   - [http://localhost:8000](http://localhost:8000)

---

## 🚀 Cómo Subir este Proyecto a GitHub

El proyecto ya incluye `.gitignore`, `LICENSE`, `composer.json` y la estructura lista. Para publicarlo en tu repositorio:

```bash
# 1. En la carpeta del proyecto:
cd C:\Users\Usuario\.gemini\antigravity\scratch\rm-nails-boutique

# 2. Inicializar repositorio (si aún no lo hiciste):
git init

# 3. Agregar los archivos:
git add .

# 4. Crear el primer commit:
git commit -m "feat: initial commit RM Nails Boutique MVC e-commerce platform"

# 5. Conectar con tu repositorio en GitHub (reemplaza TU-USUARIO y TU-REPO):
git remote add origin https://github.com/TU-USUARIO/rm-nails-boutique.git

# 6. Definir rama principal y subir:
git branch -M main
git push -u origin main
```

---

## 🌐 Despliegue en Servidores Web / Hosting

- **Apache / cPanel / Hostinger / DonWeb:**
  Apunta el *DocumentRoot* a la carpeta `/public` del proyecto. El archivo [public/.htaccess](public/.htaccess) gestiona automáticamente la reescritura de URLs hacia `index.php`.
- **Nginx:**
  Configura `try_files $uri $uri/ /index.php?$query_string;` apuntando el root a `.../public`.
- **Docker / Cloud:**
  Compatible con cualquier contenedor estándar PHP 8.2+ con Apache o Nginx.

---

## 📄 Licencia

Este proyecto está bajo la Licencia **MIT** — ver el archivo [LICENSE](LICENSE) para más detalles.
