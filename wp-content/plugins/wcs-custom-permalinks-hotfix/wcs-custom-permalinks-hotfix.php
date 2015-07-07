<?php
/*
Plugin Name:	WCS Custom Permalinks Hotfix
Version:	1.1
Plugin URI:	http://wpcodesnippets.info/blog/wcs-custom-permalinks-hotfix.html
Download URI:	http://wordpress.org/extend/plugins/wcs-custom-permalinks-hotfix/
Author:		WP Code Snippets (Luke America)
Author URI:	http://wpCodeSnippets.INFO
Author Email:	LukeAmerica2020@gmail.com
Contributors:	Luke America (LukeAmerica2020)
License:	GNU General Public License (GPL2)
Tags:		permalinks, permalinks bug, permalinks not working, canonical redirect, categories, tags, pagination, hotfix, wp code snippets, wpCodeSnippets.info, Luke America, LukeAmerica2020, broken permalinks, broken pagination, 404 page, 404 error, Concentric / XO Communications
Description:	This plugin is a hotfix for permalink issues encountered with WordPress installations after upgrading to 3.1.x. It fixes the 404 error for menu/dropdown categories and tags. It fixes pagination for search results, categories, and tags. And, it fixes RSS feeds for categories and tags. Before using it, be SURE that your issues are not caused by plugins that modify categoires and/or tags ... by deactivating them. More details are available in the readme.txt file and (after activation) at Dashboard->WCS-Permalinks.
*/


/*
	WCS Custom Permalinks Hotfix
	Copyright (c) 2011 WP Code Snippets / Gizmo Digital Fusion (LukeAmerica2020@gmail.com)

	This program is free software; you can redistribute it and/or modify it
	under the terms of the GNU General Public License as published by the
	Free Software Foundation; either version 2 of the License, or (at your
	option) any later version.

	This program is distributed in the hope that it will be useful, but WITHOUT
	ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
	FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
	more details.

	You should have received a copy of the GNU General Public License along
	with this program, LICENSE.txt. If not, write to the Free Software Foundation, Inc.,
	51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA. Or, visit this web address:
	http://www.gnu.org/licenses/gpl.html OR http://www.gnu.org/licenses/gpl-2.0.html.
*/




/**************************************************************************
ACTIVATE / ENABLE PLUGIN
**************************************************************************/


// prevent file from being accessed directly
$wcsp_cph_filname = 'wcs-custom-permalinks-hotfix.php';
if (basename($_SERVER['SCRIPT_FILENAME']) == $wcsp_cph_filname)
{
	die ("Please do not access this file, $wcsp_cph_filname, directly. Thanks!");
}


// enable plugin
wcsp_cph_enable();




/**************************************************************************
PLUGIN FUNCTIONS
**************************************************************************/

function wcsp_cph_enable()
{
	// abort if wcs_hotfix_31_redirect_canonical is in theme's functions.php file
	// wcs_hotfix_31_redirect_canonical alternative available at
	// http://wpcodesnippets.info/blog/how-to-fix-the-wp-3-1-custom-permalinks-bug.html

	// this is now handled through a dashboard message
	//if (function_exists('wcs_hotfix_31_redirect_canonical')) {return;}

	// activate plugin admin features
	register_activation_hook(__FILE__, 'wcsp_cph_activate_admin_options');

	// enable plugin features
	add_action('init', 'wcsp_hotfix_31_redirect_canonical', -1);
	remove_filter('template_redirect', 'redirect_canonical');
}


// repairs the custom permalink bug with WordPress 3.1+
// works with or w/out custom permalinks enabled
function wcsp_hotfix_31_redirect_canonical()
{
	// developed by Luke America with valuable assistance by Jonas Nordström

	// source code release 2011-03-23
	// updated 2011-04-05 (added fixes to pagination for searches, categories, & tags)
	// updated 2011-04-08 (added support for multisites that use subdirectories)
	// updated 2011-04-09 (added hotfix bypass to retain XML-RPC Support)
	// updated 2011-04-11 (added fixes for RSS feeds for categories & tags)
	// updated 2011-05-05 (official public plugin release, 1.0.0)

	global $wp_version;

	// does NOT assume bug will be fixed by next version release
	if ((!is_admin()) && ($wp_version >= 3.1))
	{
		// extract current URI
		$uri = untrailingslashit($_SERVER['REQUEST_URI']);

		// bypass hotfix to retain XML-RPC Support
		$pos = strpos($uri, 'xmlrpc.php');
		if ($pos >= 1) {return;}

		// process hotfix for custom permalink CAT lookup
		$pos = strpos($uri, 'category/');
		if ($pos >= 1)
		{
			// prep fix for CAT rss feeds
			$feed = '';
			if (strpos($uri, 'feed'))
			{
				$feed = '&feed=rss2';
				$uri = substr($uri, 0, strlen($uri) - 5);
			}
			// continue CAT hotfix
			$pos = strrpos($uri, '/');
			$len = strlen($uri);
			$cat_slug = substr($uri, $pos + 1, $len - $pos - 1);
			$cat_id_object = get_category_by_slug($cat_slug);
			$cat_id = $cat_id_object->term_id;
			$url = site_url('?cat=' . $cat_id . $feed);
			header("Location: $url");
			exit;
		}

		// process hotfix for custom permalink TAG lookup
		$pos = strpos($uri, 'tag/');
		if ($pos >= 1)
		{
			// prep fix for TAG rss feeds
			$feed = '';
			if (strpos($uri, 'feed'))
			{
				$feed = '&feed=rss2';
				$uri = substr($uri, 0, strlen($uri) - 5);
			}
			// continue TAG hotfix
			$pos = strrpos($uri, '/');
			$len = strlen($uri);
			$tag_slug = substr($uri, $pos + 1, $len - $pos - 1);
			$url = site_url('?tag=' . $tag_slug . $feed);
			header("Location: $url");
			exit;
		}

		if (empty($_SERVER['QUERY_STRING']))
		{
			// handle true 404's, normal processing, etc
			redirect_canonical();

			// if everything works but your home page times out
			// (as with the "Concentric/XO Communications shared hosting platform")
			// COMMENT line #151, ie,: //redirect_canonical();
			// and UNCOMMENT the next line (#158)

			// $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
		}
		else
		{
			// fix pagination for categories, tags, and searches
			$page_query = wcsp_hotfix_31_get_page($uri);
			if ($page_query != '')
			{
				$url = site_url() . $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];
				$url .= '&' . $page_query;
				header("Location: $url");
				exit;
			}
		}
	}
}


// support for pagination fix
function wcsp_hotfix_31_get_page($uri)
{
	// init
	$page = '';
	$pos = strpos($uri, 'page/');

	// convert to page query
	if ($pos >= 1)
	{
		$page = substr($uri, $pos + 5);
		$page = 'paged=' . intval($page);
	}

	// exit
	return $page;
}


/**************************************************************************
ENABLE ADMIN OPTIONS
**************************************************************************/


function wcsp_permalinks_options() {include 'wcs-permalinks-options.php';}


function wcsp_cph_activate_admin_options()
{
	global $current_user;

	$wcs_cph_icon_url = plugins_url('wcs-custom-permalinks-hotfix/images/wcs-custom-permalinks-hotfix-icon.png');

	if (current_user_can('manage_options')) // typically Admin or Super-Admin
	{
		if (function_exists('add_meta_box'))
		{
			// at the bottom of all Dashboard menus (also has a custom icon)
		        add_menu_page('WCS-Permalinks', 'WCS-Permalinks', 2, 'wcsp_permalinks_options', 'wcsp_permalinks_options', $wcs_cph_icon_url);
		}
		else
		{
			// inside Settings menu block
			add_submenu_page('options-general.php', 'WCS-Permalinks', 'WCS-Permalinks', 2, 'WCS-Permalinks', 'wcsp_permalinks_options');
		}
	}
}

add_action('admin_menu', 'wcsp_cph_activate_admin_options');

?>
