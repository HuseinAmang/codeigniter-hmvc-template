<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| BREADCRUMB CONFIG
| -------------------------------------------------------------------
| This file will contain some breadcrumbs' settings.
|
| $config['crumb_divider']		The string used to divide the crumbs
| $config['tag_open'] 			The opening tag for breadcrumb's holder.
| $config['tag_close'] 			The closing tag for breadcrumb's holder.
| $config['crumb_open'] 		The opening tag for breadcrumb's holder.
| $config['crumb_close'] 		The closing tag for breadcrumb's holder.
|
*/

// $config['crumb_divider'] = '<span class="divider">/</span>';
$config['tag_open'] = '<ol class="breadcrumb float-sm-right">';
$config['tag_close'] = '</ol>';
$config['crumb_open'] = '<li class="breadcrumb-item"> ';
$config['crumb_close'] = '</li>';
$config['crumb_last_open'] = '<li class="breadcrumb-item active"><span>';
$config['crumb_last_close'] = '</span></li>';
/* End of file breadcrumbs.php */
/* Location: ./application/config/breadcrumbs.php */
