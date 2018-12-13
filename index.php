<?php
require_once('smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('/var/www/html/proxyscan/smarty/templates');

if($_GET['page'])
{
	$page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);

	switch($page)
	{
		default:
			$smarty->display('login.tpl');
		break;

                case "home":
                        $smarty->display('header.tpl');
                        $smarty->display('sidebar.tpl');
                        $smarty->display('main.tpl');
                        $smarty->display('footer.tpl');
                break;

		case "login":
			$smarty->display('login.tpl');
		break;

		case "forgot":
			$smarty->display('forgot.tpl');
		break;

		case "register":
			$smarty->display('register.tpl');
		break;

		case "logout":
			session_destroy();
                        $smarty->display('login.tpl');
		break;
	}
} else {
	$smarty->display('login.tpl');
}

?>
