# Aprende-a-Hablar
## Setup
* Instalamos XAMP versión 8.*
* Clonamos el repositorio
`git clone https://github.com/saezdev/Aprende-a-Hablar`
* Hacemos un `git checkout master` para cambiar a la rama master del proyecto
* Al clonar el repositorio la carpeta raiz del proyecto sera `Aprende-a-Hablar` debemos de renombrarla por `wordpress` para el correcto funcionamiento de la aplicación.
* Creamos un nuevo schema de BD en phpmyadmin con el siguiente nombre obligatoriamente: `proyecto_diw`
* Importamos la BD, incluida en la carpeta raíz del proyecto `proyecto_diw.sql`
* Podemos empezar a trabajar, iniciamos Apache y MySQL y accedemos a `localhost/wordpress/wp-admin`
* Iniciamos sesión con las credenciales de administrador proporcionadas en el tablero de Trello -> Project resources

## Como subir los cambios
* Primero, exportamos la BD en formato SQL desde phpmyadmin
* Incluimos el fichero SQL dentro de la carpeta principal del proyecto
* Ejecutamos el comanto git add . para añadir todos los cambios realizados
* Generamos un commit con git commit -m "Mensaje del commit"
* Subimos los cambios al repositorio con el comando git push -u origin master