<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-14 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/User/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/User/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/User/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Indexphp/vendor
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Vendorphp/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Vendor_formphp/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Vendor_formphp/index
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Profilehtml/index
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Inventory_Management/index
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Query error: Table 'arcelo6_bsc.inventory' doesn't exist - Invalid query: SELECT *
FROM `inventory`
ERROR - 2024-11-14 --> Severity: error --> Exception: Call to a member function result() on bool C:\wamp64\www\bsc.localhost\application\models\Inventory_model.php 11
ERROR - 2024-11-14 --> Severity: error --> Exception: Class 'Admin_Model' not found C:\wamp64\www\bsc.localhost\application\models\Inventory_model.php 4
ERROR - 2024-11-14 --> Query error: Table 'arcelo6_bsc.inventory' doesn't exist - Invalid query: SELECT *
FROM `inventory`
ERROR - 2024-11-14 --> Severity: error --> Exception: Call to a member function result() on bool C:\wamp64\www\bsc.localhost\application\models\Inventory_model.php 11
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Query error: Table 'arcelo6_bsc.inventory' doesn't exist - Invalid query: SELECT *
FROM `inventory`
ERROR - 2024-11-14 --> Severity: error --> Exception: Call to a member function result() on bool C:\wamp64\www\bsc.localhost\application\models\Inventory_model.php 11
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 27
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 27
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 132
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 132
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 149
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 149
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 165
ERROR - 2024-11-14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 165
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 21
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 21
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-14 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-14 --> 404 Page Not Found: Assets/img
