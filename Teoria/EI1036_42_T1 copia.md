---
theme : "white"
transition: "zoom"
highlightTheme: "darkula"
---
## Introducció a la WWW

**EI1042 - Tecnologies i Aplicacions Web**

**EI1036- Tecnologies Web per als Sistemes d'Informació (2017/2018)**

**Professora: Dra. Dolores Mª Llidó Escrivá**


Cookies/session/url rewriting


---

 # Índice
 ## La web WWW: Sistema client servidor

 ## Procés de producció del portal web

- Definir la Arquitectura: Thumbnail
- Dissenyar la web: Wireframe
- _Prototipat Mockup_
- Equip producció

 ## • Informació: Document HTML

 ## • Localització de recursos: URL

 ## • Servidor web amb PHP

 ## • Servidor web apache(xamp)

 ## • Formularis web


---
 ### La World Wide Web


---
 ### HTML
```<!DOCTYPE html >```

 ``` HTTP

  GET /un/ejemplo.html HTTP/1.0 CRLF

  User Agent: Mozilla CRLF

  (..)

  Referer:http://anubis.uji.es/index.html

  CRLF

  CRLF

  HTTP/1.1 200 OK CRLF

  Date: Mon, 27 Sep 199 21:23:20 GMT CRLF

  Server: Apache/1.3.3 (Unix) CRLF

  Last-Modified: Sun, 26 Sep 1999 ... CRLF

  Content-Length: 5654 CRLF

  (...)

  Content-Type: text/html CRLF

  CRLF

  <PAGE HTML>
```

Client

Servidor

---
#MéTODOS

**Method =
GET|HEAD|POST|PUT|DELETE |OPTIONS|TRACE |CONNECT
GET** recuperar el recurso identificado por Request-URI.
**HEAD** recupera las cabeceras HTTP de respuesta.
obtener meta-información sobre el recurso
comprobar la validez de hiperenlaces,
comprobar la accesibilidad, actualización, etc.
POST ejecuta el recurso con los datos del cuerpo de la petición.
Envío de un mensaje a un grupo de noticias o lista de correo
Insertar un nuevo registro en una base de datos
Formularios

---
#Códigos de estado HTTP
Códigos de estado
2xx: la petición se realizó con éxito
200 OK
3xx: redirecciones (el recurso solicitado ha cambiado su ubicación)
301 Moved Permanently
302 Moved Temporarily
4xx: error del cliente
400 Bad Request
403 Forbidden
404 Not Found
5xx: error del servidor
500 Internal Server Error
501 Not Implemented


wget -r -l1 [http://www.pekegifs.com/pekemundo/dibujos/colorearonline.htm](http://www.pekegifs.com/pekemundo/dibujos/colorearonline.htm)

curl

---

Sesión
HTTP es un protocolo sin sesión.
¿Como evitamos que pida reiteradamente la autentificación?
¿Como recordamos el carrito de la compra?
Algunas de las alternativas son:
A partir de controles HTML ocultos.

```<INPUT type=“hidden” name=“session” value=“1234”>```
---

URL rewriting :
Uso cookie (por ejemplo, mediante JavaScript o CGI)
Una combinación de cookie y bases de datos
Usar el objeto SESSION (o similar) provisto por los entornos de programación como PHP, ASP o J2EE

URL REWRITING
Consiste en incluir la información del estado en el propio URL
/.../comprar.asp?paso=3&producto1=01992CX
&producto2=ZZ112230&producto3=HJ19X25...

---
**Las variables básicas de una Cookie son:**
name= nombre de la cookie
expires=DD-Month-YY HH:MM:SS GMT fecha caducidad.
secure=tipo de seguridad (sólo en HTTPS)
path= ruta especifica a los recursos a los que se envía la cookie. Por defecto lo añade el servidor.
domain=ámbito con el cual el cliente identifica si debe enviar la cookie al servidor
---
Inonvenientes:
* Privacidad:
Otros servidores podrían leer información de las cookies del cliente
No son válidas para guardar números de tarjeta, contraseñas,etc
* Los datos pueden ser alterados
Un usuario podría modificar el fichero de una cookie
Al igual como con otros mecanismos: URL, formularios.
* Aumenta el tráfico por la red
* El estado se transmite con cada petición al servidor
* Implementación compleja
* Mantener “a mano” el estado en el cliente puede ser realmente complicado si queremos hacerlo de manera robusta
* Tamaño de datos limitado
Tanto el tamaño máximo permitido por las cookies como la longitud máxima de una URL pueden darnos problemas.

--- 
Indicar el comportamiento que
tienen que tener los buscadores y
los programas de descargas sobre
el servidor.
Con este fichero podemos indicar
qué buscadores pueden acceder al
servidor y sobre qué directorio
actuar.
Se supone que todos los
programas de descarga deben
respetarlo, aunque no siempre es
así.
Se utilizan 2 directivas:
User-agent:
Disallow:
Para desactivar todas la arañas:

```
User-agent: *
Disallow: /
```
```
Prohibimos que las arañas carguen
los directorios /cgi-bin/ y /imágenes/
```
```
User-agent: *
Disallow: /cgi-bin/
Disallow: /imagenes/
```
```
Prohibimos que email spider lea
cualquier página
User-agent: emailspider
Disallow: /
```
--- 
Cookies
**Una cookie es información que un servidor puede enviar al cliente para que la almacene y se reenvíe en posteriores accesos.(cabecera)
La información de la coockiie son pares nombre=valor
Aplicaciones de las cookies:**
Recordar preferencias de un cliente para generar contenido personalizado
Para almacenar información de sesión (ej: carro de la compra)
En general: para “simular” sesiones


---
 ### Procés de producció

- It requires **time** and **planning**
- Production **Process** :
    - Planning
    - Design
    - Development
    - Implementation
    - Evaluation
    - Maintenance


---
 ### Diagrama de la Arquitectura de la informació

---
 ### Thumbnail


---
 ### Disseny web:

---
 ### WireFrame


---
 ### Prototipat:

---
 ### Mockup

--- 
Title (^) Título
URL (^) URL
Method (^) GET/POST
URL Params (^) Parámetros en la URL
Data Params (^) Parámetros que requiere/envía el
formulario
Success Response (^) Que mostrar si el registro se ha realizado
correctamente
Error Resp. (^) Que mostrar si el registro se ha realizado
correctamente
Notes (^) Precondiciones/postcondiciones

---
 ### Definició de la interfície dels servicis

**Identificador:​R01 Name:​Registro
URL:​​http://al315614.al.nisu.org/Lab2017/Proyecte/PortalMVC.php​?
Método: ​GET
Parametros URL:​module=user, action=register_form**

Fecha de Creación: 10/11/
Fecha de Revisión: 15/01/
Revisión autores: CMV&JCB
Versión: 1.
**Descripción: ​El usuario quiere registrarse en el portal.
Datos sobre parámetros:
Respuesta de éxito:
code: 200 content → Formulario de registro
Respuesta de error:
code: 500 content → Interfaz no implementada
Comentarios:**

**- A esta interfaz puedes llegar desde cualquier pantalla puesto que el enlace está situado en la cabecera, pero
solo si no has sido identificado en el portal con anterioridad. - Esta contolada en el fichero mod_user.php
(Proyecte/mod_userMVC) - Después de rellenar el formulario y hacer darle en Enviar, dicho usuario se
registrará en el portal, se le enviará un mensaje de confirmación de alta y se identificará en el portal,
cambiando ası́ sus privilegios y pudiendo ver contenido oculto.**

---

# URL: Uniform Resource Locator

 Són cadenes de caràcters amb un format que identifica recursos indicant la seua direcció electrónica

 * http://anubis.uji.es/index.html

 * ftp://al007@anubis.uji.es/un/ejemplo.txt

```<esquema>://<user>:<password>@<host>:<port>/<url-path>```

 * //: Parte específica de los sistemas basados en IP

 * URLs HTTP:

 * http://host[:port][abs_path]


---
 ### Exemples URL

- [http://www.milanuncios.com/informaticos-en-almeria/pp.htm?dias=1&demanda=n](http://www.milanuncios.com/informaticos-en-almeria/pp.htm?dias=1&demanda=n)
- https://duckduckgo.com/?q=pp&t=ffab&ia=about
- https://www.google.es/search?q=llido&as_sitesearch=uji.es&gfe_rd=ssl&ei=pRDx
- [http://dllido.al.nisu.org/EI1036_1042/PortalJson.php?action=modificarAlumnoJson](http://dllido.al.nisu.org/EI1036_1042/PortalJson.php?action=modificarAlumnoJson)

###### El servidor si existeix el recurs, comprova qui som i si estem

###### autoritzats ens dona accés al recurs.


---
 ### Exemples URL amigables

[http://www.example.com/camaras/reflex/canon-eos-5d-mark-2/](http://www.example.com/camaras/reflex/canon-eos-5d-mark-2/)

- Millora el SEO
- El servidor les ha de manipular les urls per a enviar els paràmetres correctes als programes


---
 # Servidor WEB con PHP

★¿Cómo funciona PHP?

```
Página
PHP
```
**Intérprete**

**PHP**

```
Página
HTML
```
```
Página
HTML
internet
```
```
Servidor web Cliente^
(navegador)
```
<?PHP

$nombre = "Ana";

print ("<P>Hola,$nombre</P>");

```
?>
<P>Hola, Ana</P>
```

---
 ## ¿?



