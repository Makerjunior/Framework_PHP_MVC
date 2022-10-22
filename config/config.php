<?php
#Caminhos Absolutos
$pastaInterna="";
define("DIRPAGE","http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ define("DIRREQ","{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}"); }else{ define("DIRREQ","{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}"); }

#Banco de Dados
define('DBHOST','localhost');
define('DBNAME','sistemablade');
define('DBUSER','root');
define('DBPASS','');