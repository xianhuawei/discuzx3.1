<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

ALTER TABLE `pre_hux_wx` ADD `qdnum` INT( 10 ) UNSIGNED NOT NULL DEFAULT '0' ;
ALTER TABLE `pre_hux_wx` ADD `qdtime` INT( 10 ) UNSIGNED NOT NULL DEFAULT '0' ;

EOF;

runquery($sql);

$finish = TRUE;
?>