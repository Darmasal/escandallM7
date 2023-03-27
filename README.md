# escandallM7
PROGRAMA DE ESCANDALLOS

Un programa para el control y la gestión de escandallos. Será dirigido a orbjetos y con acceso de datos.

En este caso el lenguaje de programación será PHP y la base de datos seleccionada será MySQL.

DISTRIBUCIÓN DE OBJETOS:

-MATERIA PRIMA:
Atributos:
*Ref(String) // Referencia del proveedor.
*Descripcion (String) // Descripción interna del artículo.
*Medida (String) // Unidad de medida por la que se indicará el precio. UNI (unidades), M2 (metro cuadrado), MLINEAL (metro lineal), LT (litro), KG (Kilo), etc...
*Precio (int) // Precio de la unidad de medida.
*Proveedor (String) // Nombre identifictivo del proveedor
*alta (date) // fecha de alta del producto
*ultima (date) // fecha última modificación
Funcionalidades:
*Constructor (ref, description, umedida, precio, proveedor) // 
*Constructor (ref) //
*Consulta () // retorna toda la información el producto
*Alta ()
*Modificar


ARCHIVO DE CONFIGURACION:

// Datos de conexió MySQL
define ("SERVER", "localhost");
define ("USERNAME", "nomusuari");
define ("PASSWORD", "paraula clau");
define ("DATABASE", "base de dades");

DOCKER:

docker network create xarxaescandall

docker run --detach --network xarxaescandall --name mariadb_esc --env MARIADB_USER=nomusuari --env MARIADB_PASSWORD=pass --env MARIADB_DATABASE=database --env MARIADB_ROOT_PASSWORD=passroot mariadb:10.11

docker run --detach --network xarxaescandall --name lamp_esc -p8080:80 -v /home/almata.cat/daniel.sole/Dev/escandallM7:/var/www/html machines/la_p7

docker cp ./ lamp_esc:/var/www/html

VISTAS:
Todas las vistas deven se .view y tener el mismo nombre que el control que se ejecuta.
CSS basado en: https://bootswatch.com/spacelab/

//