<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Material_Management/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Materialmanagement/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Materialmanagement/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Severity: error --> Exception: Unable to locate the model you have specified: MaterialManagement_model C:\wamp64\www\bsc.localhost\system\core\Loader.php 349
ERROR - 2024-11-16 --> Severity: error --> Exception: Unable to locate the model you have specified: MaterialManagement_model C:\wamp64\www\bsc.localhost\system\core\Loader.php 349
ERROR - 2024-11-16 --> Severity: error --> Exception: Unable to locate the model you have specified: MaterialManagement_model C:\wamp64\www\bsc.localhost\system\core\Loader.php 349
ERROR - 2024-11-16 --> Severity: error --> Exception: Unable to locate the model you have specified: MaterialManagement_model C:\wamp64\www\bsc.localhost\system\core\Loader.php 349
ERROR - 2024-11-16 --> Severity: error --> Exception: Unable to locate the model you have specified: MaterialManagement_model C:\wamp64\www\bsc.localhost\system\core\Loader.php 349
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.technicians' doesn't exist - Invalid query: SELECT *
FROM `technicians`
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Material_model.php 8
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.technicians' doesn't exist - Invalid query: SELECT *
FROM `technicians`
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Material_model.php 8
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.technicians' doesn't exist - Invalid query: SELECT *
FROM `technicians`
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Material_model.php 8
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.technicians' doesn't exist - Invalid query: SELECT *
FROM `technicians`
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Material_model.php 8
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.technicians' doesn't exist - Invalid query: SELECT *
FROM `technicians`
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Material_model.php 8
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method Material_model::getTechnicians() C:\wamp64\www\bsc.localhost\application\controllers\admin\Material_Management.php 13
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.inventory_items' doesn't exist - Invalid query: SELECT *
FROM `inventory_items`
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Material_model.php 13
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 18
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 18
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 40
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 40
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 37
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 37
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 59
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 59
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 36
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 58
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\lead\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\customermanagement\index.php 29
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\materialmanagement\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
