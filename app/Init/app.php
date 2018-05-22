<?php
/**
 * Let the session be in work.
 */
!isset($_SESSION) && session_start();

/**
 *  require autoload
 */
require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * The common functions
 */
require_once __DIR__ . '/../Helpers/functions.php';

/**
 * The config
 */
$appSettings = require_once __DIR__ . '/../../config/app.php';

$app = new \Slim\App($appSettings);

require_once __DIR__ . '/dependencies.php';

//web路由
require_once __DIR__ . '/../../routes/web.php';

return $app;