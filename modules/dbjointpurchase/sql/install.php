<?php

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'dbjointpurchase_product_joint` (
    `id_product_joint` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `id_product_main` int(10) unsigned NOT NULL,
    `id_product_related` int(10) unsigned NOT NULL,
    PRIMARY KEY (`id_product_joint`),
    KEY `id_product_main` (`id_product_main`),
    KEY `id_product_related` (`id_product_related`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
