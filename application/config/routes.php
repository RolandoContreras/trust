<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['acerca'] = "about_us";

$route['login'] = "login_home";

$route['recuperar'] = "recuperar";

$route['faq'] = "faq";

$route['registro'] = "registro";
$route['registro/afiliate/([0-9a-z_-]+)'] = "registro/index/$1";

//$route['registro'] = "home";
//$route['registro/afiliate/([0-9a-z_-]+)'] = "home/index/$1";


$route['contacto'] = "contact";
$route['backoffice'] = "b_home";
$route['logout'] = "b_home/logout";
$route['backoffice/misdatos'] = "b_data";

$route['backoffice/archivos'] = "b_files";

$route['backoffice/binario'] = "b_binario";
$route['backoffice/binario/([0-9a-z_-]+)'] = "b_binario/index/$1";

$route['backoffice/centro-informacion'] = "b_information_center";

$route['backoffice/unilevel'] = "b_unilevel";
$route['backoffice/unilevel/([0-9a-z_-]+)'] = "b_unilevel/index/$1";

$route['backoffice/balance'] = "b_balance";
$route['backoffice/comisiones'] = "b_comissions";
$route['backoffice/comisiones/concepto'] = "b_comissions/consultar";

$route['backoffice/billetera'] = "b_wallet";

$route['backoffice/pagos'] = "b_pay";
$route['backoffice/pagos/validar'] = "b_pay/validate";

$route['dashboard'] = "dashboard";
$route['dashboard/panel'] = "panel";
$route['dashboard/panel/guardar_btc'] = "panel/guardar_btc";


$route['dashboard/clientes'] = "d_customer";
$route['dashboard/financiados'] = "d_customer/financiados";
$route['dashboard/clientes/active_customer'] = "d_customer/active_customer";
$route['dashboard/clientes/no_active_customer'] = "d_customer/no_active_customer";
$route['dashboard/clientes/load/([0-9]+)'] = "d_customer/load/$1";
$route['dashboard/clientes/validate'] = "d_customer/validate";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";

$route['dashboard/cobros'] = "d_pays";
$route['dashboard/cobros_details/([0-9]+)'] = "d_pays/details/$1";
$route['dashboard/cobros/pagado'] = "d_pays/pagado";
$route['dashboard/cobros/devolver'] = "d_pays/devolver";

$route['dashboard/recargas'] = "d_recargas";
$route['dashboard/recargas/load'] = "d_recargas/load";
$route['dashboard/recargar/buscar_customer'] = "d_recargas/buscar_customer";
$route['dashboard/recargas/validate'] = "d_recargas/validate";

$route['dashboard/activaciones'] = "d_activate";
$route['dashboard/activaciones/active_customer'] = "d_activate/active_customer";
$route['dashboard/activaciones/active'] = "d_activate/active";

$route['dashboard/pagos_diarios'] = "d_pay_dialy";
$route['dashboard/pagos_diarios/hacer_pago'] = "d_pay_dialy/hacer_pago";


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
