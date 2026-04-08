# Estudiante: Alejandra María Baires Campos 

# Descripción
Este proyecto es una página web para una pastelería que permite:
- Login de usuarios con contraseña.
- Ingreso de datos de clientes (nombre, edad, email) después de iniciar sesión.
- Visualización de los datos en una tabla ordenada.
- Validación de los datos ingresados para garantizar que sean correctos.
- Diseño simple con estilos en tonos rosa.
# Para realizar la demostración:
Usuario:  Ale

Contraseña: 200611


# Archivos del proyecto
- `index.php` → Página principal con el formulario de login.
- `login.php` → Verifica usuario y contraseña.
- `home.php` → Página principal después del login, con formulario para ingresar datos y tabla de registros.
- `guardar.php` → Procesa el ingreso de nuevos datos.
- `conexion.php` → Conexión a la base de datos MySQL.
- `estilos.css` → Estilos personalizados de mi pagina web.
- `pasteleria_control.sql` → Archivo de la base de datos para importar.


# Preguntas y Respuestas

# 1.¿De qué forma manejaste el login de usuarios? Explica con tus palabras porque en tu página funciona de esa forma.

El login se maneja comparando los datos ingresados por el usuario con los registros almacenados en la base de datos.  
Si el usuario y la contraseña coinciden con un registro, se inicia una sesión que permite navegar por la página sin volver a ingresar los datos.  
La contraseña se guarda encriptada para mayor seguridad.  
Funciona así porque PHP y MySQL verifican la identidad del usuario antes de permitir el acceso a las funciones de la página.


# 2.¿Por qué es necesario para las aplicaciones web utilizar bases de datos en lugar de variables?

Las variables en PHP solo existen mientras se ejecuta la página; al recargar o cerrar, se pierden.  
Las bases de datos permiten almacenar información de manera **permanente**, segura y organizada.  
Además, permiten que varios usuarios accedan y modifiquen la información al mismo tiempo, y facilitan la búsqueda, filtrado y ordenamiento de los datos.



# 3.¿En qué casos sería mejor utilizar bases de datos y en cuáles utilizar otro tipo de datos temporales como cookies o sesiones?

- **Bases de datos:**  
  Cuando necesitamos almacenar información de forma **permanente**, como usuarios, clientes, productos o pedidos.  
  Ejemplo: información de los clientes de la pastelería.  

- **Sesiones:**  
  Para mantener al usuario conectado mientras navega por el sitio, sin necesidad de volver a loguearse.  
  Ejemplo: mostrar el nombre del usuario en la página después de iniciar sesión.  

- **Cookies:**  
  Para recordar preferencias o configuraciones entre visitas.  
  Ejemplo: idioma seleccionado, temas de colores o productos favoritos.



# 4.Describa brevemente sus tablas y los tipos de datos utilizados en cada campo; justifique la elección del tipo de dato para cada uno.

#### **Tabla `usuarios`**
| Campo     | Tipo         | Justificación |
|-----------|-------------|---------------|
| `id`      | INT AUTO_INCREMENT PRIMARY KEY | Es un número único que identifica cada usuario automáticamente; garantiza que no haya duplicados y facilita búsquedas rápidas. |
| `usuario` | VARCHAR(50)  | Almacena nombres de usuario alfanuméricos. Se eligió VARCHAR porque los nombres pueden variar en longitud, y 50 caracteres es suficiente para cualquier nombre de usuario. |
| `clave`   | VARCHAR(255) | Almacena contraseñas de forma segura (encriptadas). Se eligió VARCHAR(255) para tener espacio suficiente para almacenar contraseñas encriptadas con hash. |

#### **Tabla `datos`**
| Campo    | Tipo        | Justificación |
|----------|------------|---------------|
| `id`     | INT AUTO_INCREMENT PRIMARY KEY | Identificador único de cada registro; permite diferenciar cada entrada y facilita las operaciones con la tabla. |
| `nombre` | VARCHAR(100)| Almacena el nombre completo del cliente. VARCHAR permite variar la longitud del texto y 100 caracteres son suficientes para nombres largos. |
| `edad`   | INT        | Almacena la edad como número entero, porque la edad es un valor numérico que no requiere decimales. |
| `email`  | VARCHAR(100)| Almacena correos electrónicos. Se eligió VARCHAR porque los emails contienen letras, números y símbolos especiales, y 100 caracteres cubren la mayoría de los casos. |


> Los tipos de datos los elejí para garantizar que la información se almacene de manera segura y eficiente, y que cada campo tenga el tamaño adecuado según la información que contendrá.

