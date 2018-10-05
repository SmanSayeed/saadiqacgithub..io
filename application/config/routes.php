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
$route['default_controller'] = 'home_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Public Part */
$route['main-gallery'] = 'home_controller/main_gallery';
$route['more-activity'] = 'home_controller/more_activity';
$route['upcoming-events'] = 'home_controller/upcoming_events';

/*----Public Part End ----*/

/* Admin Part*/
	//Auth
$route['iqac-admin'] = 'admin_controller/backend';
$route['admin-login']='admin_controller/admin_login';
$route['backend']='admin_controller/backend';
$route['dashboard']='admin_controller/dashboard';
$route['logout']='admin_controller/logout';

	//Manage Admin
$route['add-admin']='admin_controller/add_admin';
$route['save-admin']='admin_controller/save_admin';
$route['admin-list']='admin_controller/manage_admin';
$route['edit-admin/(.+)']='admin_controller/edit_admin/$1';
$route['update-admin']='admin_controller/update_admin';
$route['delete-admin/(.+)']='admin_controller/delete_admin/$1';


	//Admin Image Part

$route['add-image']='backend/gallery_controller/add_image';
$route['save-gallery']='backend/gallery_controller/save_image';
$route['gallery-list']='backend/gallery_controller/show_gallery';
$route['edit-gallery/(.+)']='backend/gallery_controller/edit_gallery/$1';
$route['update-gallery']='backend/gallery_controller/update_gallery';
$route['delete-gallery/(.+)']='backend/gallery_controller/delete_gallery/$1';

//Admin Slider Part

$route['add-slider']='backend/slider_controller/add_slider';
$route['save-slider']='backend/slider_controller/save_slider';
$route['slider-list']='backend/slider_controller/show_slider';
$route['edit-slider/(.+)']='backend/slider_controller/edit_slider/$1';
$route['update-slider']='backend/slider_controller/update_slider';
$route['delete-slider/(.+)']='backend/slider_controller/delete_slider/$1';

//Admin Event Part

$route['add-event']='backend/event_controller/add_event';
$route['save-event']='backend/event_controller/save_event';
$route['event-list']='backend/event_controller/show_event';
$route['edit-event/(.+)']='backend/event_controller/edit_event/$1';
$route['update-event']='backend/event_controller/update_event';
$route['delete-event/(.+)']='backend/event_controller/delete_event/$1';
$route['hide-event/(.+)']='backend/event_controller/hide_event/$1';


//Admin Activity Part

$route['add-activity']='backend/activity_controller/add_activity';
$route['save-activity']='backend/activity_controller/save_activity';
$route['activity-list']='backend/activity_controller/show_activity';
$route['edit-activity/(.+)']='backend/activity_controller/edit_activity/$1';
$route['update-activity']='backend/activity_controller/update_activity';
$route['delete-activity/(.+)']='backend/activity_controller/delete_activity/$1';
$route['hide-activity/(.+)']='backend/activity_controller/hide_activity/$1';

//Resource Person Part

$route['add-resource_person']='backend/resource_person_controller/add_resource_person';
$route['save-resource_person']='backend/resource_person_controller/save_resource_person';
$route['resource_person-list']='backend/resource_person_controller/show_resource_person';
$route['edit-resource_person/(.+)']='backend/resource_person_controller/edit_resource_person/$1';
$route['update-resource_person']='backend/resource_person_controller/update_resource_person';
$route['delete-resource_person/(.+)']='backend/resource_person_controller/delete_resource_person/$1';
$route['hide-resource_person/(.+)']='backend/resource_person_controller/hide_resource_person/$1';

//Download Part

$route['add-download']='backend/download_controller/add_download';
$route['save-download']='backend/download_controller/save_download';
$route['download-list']='backend/download_controller/show_download';
$route['edit-download/(.+)']='backend/download_controller/edit_download/$1';
$route['update-download']='backend/download_controller/update_download';
$route['delete-download/(.+)']='backend/download_controller/delete_download/$1';
$route['hide-download/(.+)']='backend/download_controller/hide_download/$1';

//Feedback Part

$route['add-download']='backend/download_controller/add_download';
$route['save-download']='backend/download_controller/save_download';


$route['feedback-list']='backend/feedback_controller/show_feedback';
$route['edit-download/(.+)']='backend/download_controller/edit_download/$1';
$route['update-download']='backend/download_controller/update_download';


$route['delete-feedback/(.+)']='backend/feedback_controller/delete_feedback/$1';
$route['hide-feedback/(.+)']='backend/feedback_controller/hide_feedback/$1';

/*-------Admin Part End----------*/


/* Public Part */
$route['save-feedback']='home_controller/save_feedback';