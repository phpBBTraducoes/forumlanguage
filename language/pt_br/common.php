<?php

/**
 *
 * Forum Language. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0-b2] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, Saeed Hubaishan, http:/salafitech.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'FORUM_LANGUAGE'			=> 'Idioma do Fórum',
	'DEFAULT_LANGUAGE'			=> 'Idioma padrão',
));
