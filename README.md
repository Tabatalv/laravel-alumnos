@ Mi proyecto
1.- Creo el proyecto
```bash
laravel new laravel-alumnos
```
Escogemos las siguientes opciones de configuración:

Utilizamos Breeze ya que va a crear la gestion de autenticación 

![primer imagen](public/Images/imagen1.png)

Utilizamos Blade para la parte gráfica

![primer imagen](public/Images/imagen2.png)

![primer imagen](public/Images/imagen3.png)

Elegimos Pest ya que no haremos pruebas unitarias

![primer imagen](public/Images/imagen4.png)

Utilizamos SQLite como base de datos

![primer imagen](public/Images/imagen5.png)


![primer imagen](public/Images/imagen6.png)

Procedemos a crear el layout prinicpal, que contendrá a las demás secciones, referenciandolas mediante el <x-layouts-...>, siendo así componentes reutilizables Blade
el x sería la carpeta components donde se encuentra la carpeta layouts que contiene la página, e insertamos {{$slot}} 

![primer imagen](public/Images/imagen9.png)


Luego creamos nuestros componentes restantes, el header, nav y footer.

![primer imagen](public/Images/imagen7.png)

Para que se apliquen los estilos que deseamos, ingresamos en tailwind.config.js y agregamos los estilos predeterminados que deseemos
Para los estilos, instalamos Daysiui, que nos permitirá incluir clases en las etiquetas HTML para definir estilos, además que cuentan en su página web con estilos ya hechos para disitntas etiquetas

```bash
npm i -D daisyui@latest

```
Luego ingresamos a tailwind.config.js agregamos en la parte de plugins lo siguiente, y Daysi debería funcionar correctamente

![primer imagen](public/Images/imagen8.png)

Para que se apliquen estilos predeterminados que deseamos, ingresamos en tailwind.config.js, y agregamos los estilos que queremos, agregamos el nombre de la propiedad que queremos que afecte,
y ponemos un alias con el que referenciaremos la clase, y lo que queremos que haga

![primer imagen](public/Images/imagen11.png)

Una vez configurados los estilos, nos dirijimos a nuestra carpeta layouts y agregamos el contenido con su respectivo estilo a las páginas que tenemos, por ejemplo: 

![primer imagen](public/Images/imagen12.png)




