<?
// 定义ThinkPHP框架路径
define('THINK_PATH', './ThinkPHP3.1.3/');

//定义项目名称和路径
define('APP_NAME', 'Apps');
define('APP_PATH', './Apps/Uc/');

define('RUNTIME_PATH', '/webwww-cache/www/Runtime/Uc/');
define('LOG_PATH', '/webapplog/phplog/www/Uc/');
define('NO_CACHE_RUNTIME',true);//是否取消预编译缓存
define('STRIP_RUNTIME_SPACE',FALSE);//对编译缓存的内容是否迕行去空白和注释
//define('RUNTIME_ALLINONE', true); // 开启ALLINONE运行模式(用于部署正式生产环境)


define('APP_DEBUG',true);
//加载框架入口文件
require(THINK_PATH."/ThinkPHP.php");

//实例化一个网站应用实例
//App::run();
?>