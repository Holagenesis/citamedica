

### Proyecto Cita Medica

<p>
Este es mi proyecto que simula el login y registro de usuarios en un sistema de reserva para citas medicas. 

</p>

####Instalacion
-Se tiene un demo del sistema creado al que se puede accer a traves del siguiente link: citamedicaphp.infinityfreeapp.com


####Para el login y registro
- Se encuentra en un mismo formulari con el nombre de Index para que sea la pantalla principal
- Al presionar los botones el formulario se alternara entre registro y login
- El usuario podra escoger el rol de paciente o doctor
- Existe un usuario ya guardado: doctora2@gmail.com contraseña: 123456
- Usuario paciente cliente@gmail.com contraseña: 123

![image alt](https://github.com/Holagenesis/citamedica/blob/5d07ea77251045953075b1c4061667b5bb1ffad8/Imagen2.png)

####Para el dashboard
- Se visualiza un dashboard con los datos del usuario logeado, esta vista solo esta permitida para usuarios con el tipo de usuario "doctor", que se obtiene al momento de registro
- La opcion de editar el perfil aparece en el menu con un formulario pero para visualizar los campos es necesario volver a entrar al sistema
- Se tiene un boton con la opcion de descargar los archivos en formato CSV
- En la tabla de resumen se encuentran las reservas hechas por los pacientes con la opcion de reagendar o eliminar la cita

![image alt](https://github.com/Holagenesis/citamedica/blob/5d07ea77251045953075b1c4061667b5bb1ffad8/Imagen4.png)



####Para el paciente
- El usuario con el rol de paciente sera enviado a una vista diferente del usuario con el rol de doctor, en donde se viaualizara un formulario para la reserva de citas
- La reserva hecha sera cargada a la tabla del doctor

  ![image alt](https://github.com/Holagenesis/citamedica/blob/5d07ea77251045953075b1c4061667b5bb1ffad8/Imagen5.png)

####API
- Se incluyo una API en formato JSON que devuleve las citas guardadas
- Sin embargo no se incluyo la opcion en el proyecto sino que debera acceder directamente por la URL

  ![image alt](https://github.com/Holagenesis/citamedica/blob/5d07ea77251045953075b1c4061667b5bb1ffad8/Imagen6.png)
- 
####Acerca de la arquitectura
- Se utilizo PHP como lenguaje principal para el backend
- PhpMyAdmin como gestor de base de datos y sql
- HTML, CSS JavaScript para la parte diseño
- Iconos y modales de Boostrap 5
- Se utilizo programacion modular para la estructura del codigo
- No se utilizaron frameworks sino lenguaje nativo

