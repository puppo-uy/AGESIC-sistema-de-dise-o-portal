# Sistema de diseño Agesic

Biblioteca de componentes y estilos globales del sistema de diseño del Estado uruguayo (PHP + SCSS).

## Requisitos

- Node.js y npm
- PHP

## Instalación

```bash
npm install
```

## Compilar

```bash
npm run sass        # compila scss/main.scss a recursos/css/main.css (y aplica autoprefixer)
npm run sass:watch  # compila en modo watch
npm run sprite      # genera recursos/dist/sprites.svg a partir de recursos/iconos/
```

Hay que volver a correr `npm run sprite` cada vez que se agregan, renombran o eliminan SVG en `recursos/iconos/`.

## Muestrario de componentes

Desde la raíz del repositorio:

```bash
php -S localhost:8000
```

y abrir `http://localhost:8000/biblioteca/index-componentes.php`. Lista automáticamente todos los archivos `.php` dentro de `comp/`.

## Estructura

- `scss/tokens/`: variables (colores, espaciados, sombras, bordes, tipografía).
- `scss/components/`: estilos de cada componente.
- `comp/`: ejemplos de cada componente y de los estilos globales (`comp/globales/`).
- `recursos/iconos/`: SVG fuente de los íconos.
- `recursos/dist/`: sprite de íconos compilado.
