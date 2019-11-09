<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Rich McGirr (RMcGirr83)
* @author Jari Kanerva
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

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'Nastala chyba!',
	'BANNED_SUCCESS'	=> 'Všechny akce byly v pořádku dokončeny.',

	'ERROR_BAN_EMAIL'	=> 'Zabanování emailu selhalo.',
	'ERROR_BAN_IP'		=> 'Zabanování IP adresy selhalo.',
	'ERROR_BAN_USER'	=> 'Zabanování uživatelského jména selhalo.',
	'ERROR_DEL_POSTS'	=> 'Vymazání uživatelových příspěvků selhalo.',
	'ERROR_MOVE_GROUP'	=> 'Přesun uživatele do vybrané skupiny selhal.',
	'ERROR_SFS'			=> 'Chyba při hlášení na databázi Stop Forum Spam',

	'BH_BAN_EMAIL'			=> 'Zabanovat uživatelovu mailovou addresu',
	'BH_BAN_GIVE_REASON'	=> 'Důvod pro ban viditelný pro uživatele',
	'BH_BAN_IP'				=> 'Zabanovat uživatelovu IP addresu',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>S tímto buďte opatrní.</strong> Mnoho uživatelů používá k připojení na web poskytovatele, jež jim přiřazuje dynamickou IP ardesu a stačí jim jen restartovat modem k získání nové IP. Další den může mít tu samou IP adresu člověk, kterého na svém webu chcete. Spammeři často používají různé proxy servery a síť Tor, která znemožňuje identifikaci IP.',
	'BH_BAN_LENGTH'			=> 'Zabanovat tohoto uživatele za %s',
	'BH_BAN_REASON'			=> 'Interní důvod pro tento ban',
	'BH_BAN_USER'			=> 'Zabanovat tohoto uživatele za %s',
	'BH_BAN_USER_PERM'		=> 'Zabanovat permanentně uživatelské jméno',
	'BH_BAN_EMAIL_PERM'		=> 'Zabanovat permanentně uživatelův email',
	'BH_BAN_EMAIL_FOR'		=> 'Zabanovat uživatelovu emailovou addresu na %s',
	'BH_BAN_IP_PERM'		=> 'Zabanovat permanentně uživatelovu IP addresu',
	'BH_BAN_IP_FOR'			=> 'Zabanovat uživatelovu IP addresu na %s',
	'BH_BANNED'				=> 'Tento uživatel je zabanován',

	'BH_DEL_AVATAR'		=> 'Smazat uživatelův avatar',
	'BH_DEL_PRIVMSGS'	=> 'Smazat uživatelovy soukromé zprávy',
	'BH_DEL_POSTS'		=> 'Smazat uživatelovy příspěvky',
	'BH_DEL_PROFILE'	=> 'Smazat uživatelova pole profilu',
	'BH_DEL_SIGNATURE'	=> 'Smazat uživatelův podpis',

	'BH_MOVE_GROUP'	=> 'Přesunout tohoto uživadele do skupiuny &quot;%s&quot;', // %s will be a group name

	'BH_REASON'		=> 'Interní důvod k banu &quot;%s&quot;', // %s will be the reason
	'BH_REASON_USER'	=> 'Důvod k banu &quot;%s&quot;', // %s will be the reason

	'BH_SUBMIT_SFS'	=> 'Odeslat na Stop Forum Spam',

	'BH_THIS_USER'	=> 'Zabanovat tohoto uživatele',

	'SFS_REPORT'	=> 'Nahlásit tohoto uživatele na Stop Forum Spam',
	'SURE_BAN'		=> 'Jste si jistí, že chcete zabanovat <strong>%s</strong>?', // %s will be a username.

	'THIS_WILL'	=> 'Tohle bude',
));
