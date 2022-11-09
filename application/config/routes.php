<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Client';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



/*
#event
    -index
    -detail-event
*/
$route['event'] = 'event/Event/';
$route['event/detail/(:any)'] = 'event/Event/eventDetail/$1';
$route['event/o/(:any)'] = 'event/Event/eventOrder/$1';
$route['event/checkout'] = 'event/Event/eventcheckout';
$route['event/doInvoice'] = 'event/Event/doInvoice';
$route['event/invoice/(:any)'] = 'event/Event/eventInvoice/$1';
$route['event/invoice/(:num)/e_tiket'] = 'event/Event/e_tiket/$1';
$route['event/e_tiket/(:num)'] = 'event/Event/e_tiket/$1';
$route['event/kirim_bukti'] = 'event/Event/kirim_bukti';




/*
#auth
    -login
    -register
*/
$route['auth/auth'] = 'auth/login';
$route['auth/newmember'] = 'auth/newmember';
$route['auth/c_member'] = 'auth/c_member';
$route['auth/logOff'] = 'auth/logOff';




/*
#admin
    -index
    -component-users
    -component-users-detail
    -component-creator
    -component-creator-detail
    -component-transaksi
*/

$route['admin/dashboard'] = 'admin/Home';
$route['admin/users'] = 'admin/Home/users';
$route['admin/creator'] = 'admin/Home/creator';
$route['admin/creator/(:any)'] = 'admin/Home/creator/$1';
$route['admin/transaksi'] = 'admin/Home/transaksi';
$route['admin/invoice/(:any)'] = 'admin/Home/invoice/$1';
$route['admin/konfirmasiID'] = 'admin/Home/konfirmasiID';

/*
#member
    -dashboard
    -gantiRole
   
*/
$route['member/dashboard'] = 'member/Member';
$route['member/gantiRole'] = 'member/Member/gantiRole';

/*
#creator
    -dashboard
    -add Event
   
*/
$route['creator/dashboard'] = 'creator/Creator/index';
$route['creator/event'] = 'creator/Creator/event';
$route['creator/event/(:any)'] = 'creator/Creator/eventDetail/$1';
$route['creator/addEvent'] = 'creator/Creator/addEvent';
$route['creator/doAddEvent'] = 'creator/Creator/doAddEvent';
