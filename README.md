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

Conatraseña: 200611

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

# Tabla `usuarios`

| Campo  | Tipo         | Justificación |
|--------|-------------|---------------|
| id     | INT AUTO_INCREMENT PRIMARY KEY | Identificador único de cada usuario |
| usuario| VARCHAR(50)  | Permite almacenar nombres de usuario alfanuméricos |
| clave  | VARCHAR(255) | Almacena la contraseña encriptada con SHA2 |

# Tabla `datos`

| Campo   | Tipo        | Justificación |
|---------|------------|---------------|
| id      | INT AUTO_INCREMENT PRIMARY KEY | Identificador único de cada registro |
| nombre  | VARCHAR(100)| Almacena el nombre del cliente |
| edad    | INT        | Almacena la edad como número entero |
| email   | VARCHAR(100)| Permite almacenar correos electrónicos con caracteres especiales (@, .) |

> Los tipos de datos los elejí para garantizar que la información se almacene de manera segura y eficiente, y que cada campo tenga el tamaño adecuado según la información que contendrá.

