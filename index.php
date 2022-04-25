<?php
require_once 'vendor/autoload.php';
$smarty = new Smarty();

$smarty->setTemplateDir('views/');
$smarty->setCompileDir('complied/');

$smarty->assign('variable', 'Hieu');
$smarty->assign('array', ['key' => 'value']);
$smarty->display('index.tpl');
