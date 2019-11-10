# redes-sociales
El código para poder compartir desde Wordpress en redes sociales sin necesidad de plugins

## Archivo style.css
En este archivo se pueden encontrar algunas líneas CSS para que los botones se vean más chulos.

## Archivo social.js
Este archivo javascript se utiliza para abrir los enlaces en una ventana emergente o en otra ventana del navegador. Este archivo se debe guardar dentro del directorio js que debería de haber dentro de la carpeta de tu theme. Si no lo hay créalo.

## Archivo social.php
Aquí va todo el meollo. Este archivo debe guardarse dentro en una carpeta dentro de la de tu theme que se llama inc. Si no existe créala. Al archivo social.php se le debe llamar desde el archivo functions.php con:

include_once('inc/social.php');

El archivo da la posibilidad de que se muestren los botones en la parte superior (línea 31) o en la parte inferior (línea 32).

Para que se vean los iconos de las redes sociales en los botones, es necesario disponer de font-awesome instalado en el theme. El botón de Whatsapp, solo se va a mostrar en dispositivos móviles.
