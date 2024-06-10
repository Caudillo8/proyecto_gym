<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-07 16:17:23 --> Severity: error --> Exception: Access denied for user 'root'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:17:40 --> Severity: error --> Exception: Access denied for user 'root'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:21:14 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:21:15 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:21:15 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:21:21 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:21:25 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:24 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:24 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:24 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:25 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:26 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:39 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:40 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:22:40 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:23:09 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:23:11 --> Severity: error --> Exception: Access denied for user 'admineasy'@'localhost' (using password: YES) C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-06-07 16:28:16 --> Severity: error --> Exception: Table 'admineasy.ea_settings' doesn't exist C:\xampp\htdocs\easyappointments\system\database\drivers\mysqli\mysqli_driver.php 301
ERROR - 2024-06-07 22:57:29 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2024-06-07 22:57:29 --> #0 C:\xampp\htdocs\easyappointments\application\libraries\Notifications.php(92): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Buenos_...')
#1 C:\xampp\htdocs\easyappointments\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}
