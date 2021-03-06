<?php
/**
*
* @version $Id: acp_imageupload.php 145 2018-04-18 14:34:06Z Scanialady $
* @package phpBB Extension - Image Upload (deutsch)
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_IMAGEUPLOAD_SAVED'					=> 'Image Upload Einstellungen gespeichert',
	'ACP_IMAGEUPLOAD_VERSION'				=> 'Version',
	'ACP_IMAGE_UPLOAD_CONFIGURATION'		=> 'Image Upload Konfiguration',
	'ACP_IMAGEUPLOAD_ENABLE'				=> 'Aktiviere Image Upload',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE'			=> 'Aktiviere hochgeladene Bilder auf der Forenseite',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE_EXPLAIN'	=> 'Globales on/off von Bildern auf der Forenseite für alle Mitglieder.<br />Mitglieder können im UCP wählen, ob sie hochgeladene Bilder auf der Forenseite sehen möchten.',
	'ACP_IMAGEUPLOAD_ENABLE_EXPLAIN'		=> 'Globale Einstellung um den Bilder-Upload zu aktivieren.',
	'ACP_IMAGEUPLOAD_NUMBER'				=> 'Größe des Uploads',
	'ACP_IMAGEUPLOAD_NUMBER_EXPLAIN'		=> 'Setze die maximale Größe des Uploads in MB. Standard ist 2 MB.',
	'ACP_IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'		=> 'Die maximale Größe, die deine php.ini erlaubt, ist <strong>%1$s %2$s</strong>!',
	'ACP_IMAGEUPLOAD_REALLY_DELETE_IMAGE'	=> 'Bild wirklich löschen?',
	'ACP_IMAGEUPLOAD_TITLE'					=> 'Bildname',
	'ACP_IMAGEUPLOAD_TITLE_REAL'			=> 'Realer Bildname',
	'ACP_IMAGEUPLOAD_PREVIEW'				=> 'Vorschau',
	'ACP_IMAGEUPLOAD_WIDTH_HEIGHT'			=> 'Breite/Höhe',
	'ACP_IMAGEUPLOAD_FOLDER_SIZE'			=> 'Gesamte Ordnergröße',
	'ACP_IMAGEUPLOAD_USERNAME'				=> 'Hochgeladen von',
	'ACP_IMAGEUPLOAD_SIZE'					=> 'Größe',
	'ACP_MULTI_IMAGES'		=>	array(
		1 => '%s Bild',
		2 => '%s Bilder',
	),
	'ACP_IMAGEUPLOAD_SORT_USERNAME'			=> 'Benutzername',
	'ACP_IMAGEUPLOAD_SORT_DATE'				=> 'Datum',
	'ACP_IMAGEUPLOAD_NOT_SELECTED'			=> 'Keine Bilder ausgewählt',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE'			=> 'Aktiviere Bildbeiträge für mChat',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE_EXPLAIN'	=> 'Setze dies auf Ja, um hochgeladene Bilder von der Forenseite per Klick in mChat einzufügen.',
));
