<?php

/**
 * * Descripción: Controlador principal
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @author  Lola <dllido@uji.es> 
 * * @copyright 2018 Lola
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 2
 * */


//Estas 2 instrucciones me aseguran que el usuario accede a través del WP. Y no directamente
if (!defined('WPINC')) exit;

if (!defined('ABSPATH')) exit;

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
include_once(plugin_dir_path(__FILE__) . 'gestionBD.php');
$table = "A_GrupoCliente";




//Funcion instalación plugin. Crea tabla
function MPP_CrearT($table)
{
    $pdo1 = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $query = "CREATE TABLE IF NOT EXISTS $table (person_id INT(11) NOT NULL AUTO_INCREMENT, nombre VARCHAR(100),  email VARCHAR(100),  foto_file VARCHAR(25), clienteMail VARCHAR(100),  PRIMARY KEY(person_id))";
    $consult = $pdo1->prepare($query);
    $consult->execute(array());
}





//CONTROLADOR
//Esta función realizará distintas acciones en función del valor del parámetro
//$_REQUEST['proceso'], o sea se activara al llamar a url semejantes a 
//https://host/wp-admin/admin-post.php?action=my_datos&proceso=r 

function MPP_my_datos()
{
    global $table;
    global $pdo;

    global $user_ID, $user_email;


    wp_get_current_user();
    if ('' == $user_ID) {
                //no user logged in
        exit;
    }



    if (!(isset($_REQUEST['action'])) or !(isset($_REQUEST['proceso']))) {

        print("Opciones no correctas $user_email");
        exit;
    }

    if (!(isset($_REQUEST['partial']))) {
        get_header();
        echo '<div class="wrap">';
    }
    switch ($_REQUEST['proceso']) {
        case "registro":
            $MP_user = null;
            include_once(plugin_dir_path(__FILE__) . '../templates/registro.php');
            break;
        case "registrar":
            if (count($_REQUEST) < 3) {
                print("No has rellenado el formulario correctamente");
                return;
            }
            $query = "INSERT INTO $table (nombre, email,clienteMail) VALUES (?,?,?)";
            $a = array($_REQUEST['userName'], $_REQUEST['email'], $_REQUEST['clienteMail']);
            //$pdo1 = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD); 
            $consult = $pdo->prepare($query);
            $a = $consult->execute($a);
            if (1 > $a) {
                echo "InCorrecto: $query";
            } else {
                echo "<p>Inserción realizada con éxito</p>";
                if (!(isset($_REQUEST['partial']))) wp_redirect(admin_url('admin-post.php?action=my_datos&proceso=listar'));
            }
            break;
        case "listar":
            //Listado amigos o de todos si se es administrador.
            if (current_user_can('administrator')) {
                $rows = consultar();
            } else {
                $rows = consultarFiltro("clienteMail", $user_email);
            }

            if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
                $filas = json_encode($rows);
                include_once(plugin_dir_path(__FILE__) . '../templates/listar.php');
            
                //wp_send_json($rows);
                //wp_register_script('miscript', get_stylesheet_directory_uri().'/js/ cargaTemplateTable.js');
                //wp_enqueue_script('miscript');
                //wp_send_json($rows);
            }
            break;
        default:
            print "Opción no correcta";

    }
    
    // get_footer ademas del pie de página carga el toolbar de administración de wordpres si es un 
    //usuario autentificado, por ello voy a borrar la acción cuando no es un administrador para que no aparezca.
    if (!current_user_can('administrator')) {

        // for the admin page
        remove_action('admin_footer', 'wp_admin_bar_render', 1000);
        // for the front-end
        remove_action('wp_footer', 'wp_admin_bar_render', 1000);
    }
    if (!(isset($_REQUEST['partial']))) {
        get_footer();
        echo "</div>";
    }
}
//add_action('admin_post_nopriv_my_datos', 'my_datos');
//add_action('admin_post_my_datos', 'my_datos'); //no autentificados
?>