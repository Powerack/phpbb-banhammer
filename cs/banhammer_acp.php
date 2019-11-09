<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
$lang = array_merge($lang, array(
	'ACP_BAN_EMAIL'		=> 'Zabanovat uživatelův email',
	'ACP_BAN_IP'		=> 'Zabanovat uživatelovu IP addresu',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>S tímto buďte opatrní.</strong> Mnoho uživatelů používá k připojení na web poskytovatele, jež jim přiřazuje dynamickou IP ardesu a stačí jim jen restartovat modem k získání nové IP. Další den může mít tu samou IP adresu člověk, kterého na svém webu chcete. Spammeři často používají různé proxy servery a síť Tor, která znemožňuje identifikaci IP.',

	'ACP_DEL_AVATAR'	=> 'Smazat uživatelův avatar',
	'ACP_DEL_PRIVMSGS'	=> 'Smazat uživatelovy soukromé zprávy',
	'ACP_DEL_POSTS'		=> 'Smazat uživatelovy příspěvky',
	'ACP_DEL_PROFILE'	=> 'Smazat uživatelovo pole profilu',
	'ACP_DEL_SIGNATURE'	=> 'Smazat uživatelův podpis',
	
	'ACP_GROUP_MISSING'	=> 'Skupina &quot;%s&quot; neexistuje.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Přesunout do skupiny',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Název skupiny kam budou přesunuti zabanovaní uživatelé. Toto bude jejich základní skupina. <br /><strong>Pokud zde není nic jiného, než <em>“Nebyla zvolena skupina”</em>, nemáte nastavenou žádnou skupinu pro zabanované uživatele.</strong>',
	'BAN_LENGTH_EXPLAIN'	=> 'Pokud je natavena některá z možností banu, uživatel bude mít zakázán přístup po dobu nastavenou zde.',
	'SETTINGS_ERROR'		=> 'Nastala chyba při ukládání vašeho nastavení. Prosím pošlete nám report s chybou.',
	'SFS_API_KEY'			=> 'SFS klíč k API',
	'SFS_API_KEY_EXPLAIN'	=> 'Pokud chcete spammery hlásit automaticky na StopForumSpam, potřebujete klíč k API, který lze získat na <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Váš server potřebuje nainstalovaný cURL pro použití služby stop forum spam.</span>',
));
