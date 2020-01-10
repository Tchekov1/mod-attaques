<?php
/**
 * update.php
 *
 * @package Attaques
 * @author Verité/ericc
 * @link http://www.ogsteam.fr
 * @version : 0.8j
 */

if (!defined('IN_SPYOGAME')) {
    die("Hacking attempt");
}

global $db,$table_prefix;


$query = "CREATE TABLE IF NOT EXISTS `" . $table_prefix . "mod_user_config` (
            `mod` VARCHAR(50) NOT NULL,
            `config` VARCHAR(255) NOT NULL,
            `user_id` INT(11) NOT NULL,
            `value` VARCHAR(255) NOT NULL,
         PRIMARY KEY (`mod`, `config`, `user_id`),
         UNIQUE KEY `config` (`config`)
        )
        DEFAULT CHARSET = utf8";

$db->sql_query($query);


// Puis on change le numéro de version
$mod_folder = "attaques";
$mod_name = "Gestion des attaques";
update_mod($mod_folder, $mod_name);