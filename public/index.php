<?php 
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('DATA', ROOT . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);
$modeules = [ROOT,APP,CORE,CONTROLLER,DATA];
set_include_path(get_include_path() . PATH_SEPARATOR . implode( PATH_SEPARATOR, $modeules));
spl_autoload_register('spl_autoload',false); //ใช้โหลดไฟล์ที่ต้องใช้ แบบ งง 
new Application;

?>
<style>
    a{
        text-decoration: none;
    }
    li{
       list-style-type: none;
    }
</style>
<div>
    <ul>
        <li>
            <a href="home/index">Home</a>
        </li>
        <li>
            <a href="home/about">Ablut</a>
        </li>
    </ul>
</div>