<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-10 22:31:19 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2024-06-10 22:31:19 --> #0 C:\xampp\htdocs\easyappointments\application\libraries\Notifications.php(92): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Buenos_...')
#1 C:\xampp\htdocs\easyappointments\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2024-06-10 22:31:58 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2024-06-10 22:31:58 --> #0 C:\xampp\htdocs\easyappointments\application\libraries\Notifications.php(92): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Buenos_...')
#1 C:\xampp\htdocs\easyappointments\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}
