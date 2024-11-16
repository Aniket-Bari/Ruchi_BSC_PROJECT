<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 29
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 30
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 27
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 27
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 138
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 138
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 155
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 155
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 171
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 171
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 146
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 146
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 163
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 163
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 179
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 179
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 147
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 147
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 164
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 164
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 180
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 180
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 147
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 147
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 164
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 164
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 180
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 180
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 35
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 36
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 36
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 36
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 36
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 36
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: error --> Exception: Call to undefined function get_cookie() C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 522
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined property: CI_Loader::$session C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 47
ERROR - 2024-11-15 --> Severity: error --> Exception: Call to a member function flashdata() on null C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 47
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Lead_management/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 39
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Customer_Management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Customer_Management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Customer_Management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Customer_Management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Customer_Management/index
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Customer_Management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 37
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 218
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 39
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customer_management\index.php 39
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 34
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-15 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-15 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-15 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-15 --> 404 Page Not Found: admin/Material_Management/index
