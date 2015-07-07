<?php

/**************************************************************************
ADMIN INITIALIZE
**************************************************************************/

if ('wcs-permalinks-options.php' == basename($_SERVER['SCRIPT_FILENAME']))
{
	die ('Please do not access this admin file directly. Thanks!');
}


if (!is_admin()) {die('This plugin is only accessible from the WordPress Dashboard.');}


if (!defined('WP_CONTENT_DIR'))	define('WP_CONTENT_DIR', ABSPATH . 'wp-content');
if (!defined('WP_CONTENT_URL'))	define('WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
if (!defined('WP_ADMIN_URL'))	define('WP_ADMIN_URL', get_option('siteurl') . '/wp-admin');
if (!defined('WP_PLUGIN_DIR'))	define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');
if (!defined('WP_PLUGIN_URL'))	define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');

?>


<div class="wrap">
	<table width="600" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>

		<tr>
			<td colspan="2"><img width="600" height="128" src="<?php _e(WP_PLUGIN_URL); ?>/wcs-custom-permalinks-hotfix/images/wcs-custom-permalinks-hotfix-header.png" border="0" alt="WCS Custom Permalinks Hotfix Options" title="WCS Custom Permalinks Hotfix Options" /></td>
		</tr>

		<tr>
			<td><br/>&nbsp;<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.wpcodesnippets.info%2Fblog%2Fwcs-custom-permalinks-hotfix.html&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font=lucida+grande&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></td>
			<td>&nbsp;</td>
		</tr>
	</table>


	<table cellpadding="0" cellspacing="0" border="0" style="width:600px; margin-left:5px; color:black; background:#F6F6F6; border:1px solid #606060; padding:4px; -moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;">
	<tr><td>

		<h2>&nbsp;About this Plug-in</h2>
		<div style="margin-left:20px; line-height:150%; font-size:14px;">
		This plugin is a hotfix for permalink issues encountered with WordPress installations after upgrading to 3.1.x. <b>It fixes</b> the 404 error (or blank page) for menu/dropdown categories and tags. <b>It fixes</b> pagination for search results, categories, and tags. And, <b>it fixes</b> RSS feeds for categories and tags.
		<br/><br/>
		</div>



		<h2>&nbsp;Links Related to this Plug-in</h2>
		<div style="margin-left:20px; line-height:150%; font-size:14px;">
		<ol style="margin-left:40px;">
			<li>Visit our web site, <a target="_blank" href="http://wpcodesnippets.INFO">wpCodeSnippets.INFO</a>, for lots of WordPress tips, tweaks, shortcodes, and plugins.</li>
			<li>View the full <a target="_blank" href="http://wpcodesnippets.info/blog/how-to-fix-the-wp-3-1-custom-permalinks-bug.html">source code</a> explanation for the prototype of this plug-in along with numerous user comments.</li>
			<li>View <a target="_blank" href="http://wpcodesnippets.info/blog/wcs-custom-permalinks-hotfix.html">details for this plug-in</a> at our web site.</li>
			<li>Revisit the <a target="_blank" href="http://wordpress.org/extend/plugins/wcs-custom-permalinks-hotfix/">plug-in download</a> page at the WordPress repository. In the sidebar on the right, click your "<b>My Rating</b>" preference (hopefully 5 stars).</li>
			<li>Did you find this plug-in useful? A small <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&currency_code=USD&business=LukeAmerica2020%40gmail.com&item_name=WP%20Code%20Snippets%20donation&amount=0.00&image_url=http://wpcodesnippets.info/files/paypal_header.png">donation</a> will support our continued WordPress development efforts. Enter any amount.</li>
		</ol>
		<br/>
		</div>


		<h2>&nbsp;Additional Information</h2>
		<div style="margin-left:20px; line-height:150%; font-size:14px;">
		Before using this plug-in, be SURE that your issues are not caused by plug-ins that modify category links, tag links, and/or canonical redirects ... by deactivating them.
		<br/><br/>
		Depending on your specific Web browser settings, you may need to:<br/><br/>
		<ol style="margin-left:40px;">
			<li>clear your browser's cache</li>
			<li>visit your home page</li>
			<li>refresh your browser (F5)</li>
			<li>and, then test your menus/dropdowns with categories and tags</li>
		</ol>
		<br/>
		IF you are ALSO using a BLOG CACHE plug-in, you should:<br/><br/>
		<ol style="margin-left:40px;">
			<li>activate this plug-in</li>
			<li>clear your entire blog cache (with that plug-in's admin panel)</li>
			<li>clear your browser's cache</li>
			<li>visit your home page</li>
			<li>refresh your browser twice (F5)</li>
			<li>and, then test your menus/dropdowns with categories and tags</li>
		</ol>
		<br/>
		Eventually, plug-in authors and WordPress will update their code. When you no longer need it, simply de-activate and/or remove this hotfix plug-in.
		<br/><br/>
<?php
		if (function_exists('wcs_hotfix_31_redirect_canonical'))
		{
			echo '<font color=#600000>Currently, you are also using our <b>wcs_hotfix_31_redirect_canonical()</b> ';
			echo 'function in your theme\'s <i>functions.php</i> file. It\'s best if you remove it since ';
			echo 'it performs the same task as this plug-in.</font>';
			echo '<br/><br/>';
		}
?>
		</div>


		<h2>&nbsp;Concentric/XO Communications Specific Issue</h2>
		<div style="margin-left:20px; line-height:150%; font-size:14px;">
		If your WordPress installation resides on a Concentric/XO Communications shared hosting platform, there is an additional issue with permalinks. In this case, you'll notice that category, tag, and pagination links work ... but your home page times out on this specific server configuration. If you experience this issue, complete the hotfix by:<br/><br/>
		<ol style="margin-left:40px;">
			<li>open this plug-in's <b>wcs-custom-permalinks-hotfix.php</b> file</li>
			<li>scroll down to line #153 (// if everything works but your home page times out)</li>
			<li>follow the simple instruction to COMMENT line #151 and then UNcomment line #158</li>
			<li>save and close the file</li>
			<li>visit your home page</li>
			<li>refresh your browser twice (F5)</li>
			<li>all fixes including the home page should be working now</li>
		</ol>
		</div>


		<h2>&nbsp;.htaccess File</h2>
		<div style="margin-left:20px; line-height:150%; font-size:14px;">
		If your WordPress installation resides on a LAMP server (<span style="font-size:12px;">Linux, Apache, MySQL, PHP/Python/Perl</span>), you should have a file named .htaccess in your root WordPress folder (<span style="font-size:12px;">the one that contains wp-config.php</span>).<br/><br/>

		When saved manually, the <b>.htaccess</b> file should utilize unix-style line-feeds (&#92;r) and not DOS-style line-feeds (&#92;r&#92;n). Also, servers with FontPage extensions, use a proprietary .htaccess file and should not be modified directly.<br/><br/>

		Also, note that direct manipulation of the .htaccess file should only be attempted by an experienced network administrator. Ergo, implement the following modifications with this <i>caveat</i> in mind.<br/><br/>


		<b>.htaccess File Creation:</b><br/>
		<ol style="margin-left:40px;">
			<li>this file is created/modified when you change your permalinks settings<br/>(Dashboard -> Settings -> Permalinks)</li>
			<li>by default, the access permission on this file is set to 644</li>
			<li>your server may not be able modify it as needed when you set custom permalinks</li>
			<li>temporarily CHMOD .htaccess to 777</li>
			<li>now switch back and forth between a default permalink structure and a custom permalink structure a couple of times ... saving the change each time</li>
			<li>now, CHOMD .htaccess back to 644</li>
			<li>open .htaccess to verify that it contains a segment similar to one of the following</li>
		</ol>
		<br/>
		<b>single-site baseline example to reconstruct .htaccess, if needed:</b><br/>
			<div style="margin-left:25px; font-size:12px;">
				# BEGIN WordPress Single-Site<br/>
				&#60;IfModule mod_rewrite.c><br/>
				RewriteEngine On<br/>
				RewriteBase /<br/>
				RewriteCond %{REQUEST_FILENAME} !-f<br/>
				RewriteCond %{REQUEST_FILENAME} !-d<br/>
				RewriteRule . /index.php [L]<br/>
				&#60;/IfModule><br/>
				# END WordPress Single-Site<br/>
			</div>
		<br/>
		<b>multi-site baseline example to reconstruct .htaccess, if needed:</b><br/>
			<div style="margin-left:25px; font-size:12px;">
				# BEGIN WordPress Multi-Site<br/>
				&#60;IfModule mod_rewrite.c><br/><br/>
				RewriteEngine On<br/>
				RewriteBase /<br/><br/>
				#uploaded files<br/>
				RewriteRule ^(.*/)?files/$ index.php [L]<br/>
				RewriteCond %{REQUEST_URI} !.*wp-content/plugins.*<br/>
				RewriteRule ^(.*/)?files/(.*) wp-includes/ms-files.php?file=$2 [L]<br/><br/>
				# add a trailing slash to /wp-admin<br/>
				RewriteCond %{REQUEST_URI} ^.*/wp-admin$<br/>
				RewriteRule ^(.+)$ $1/ [R=301,L]<br/><br/>
				RewriteCond %{REQUEST_FILENAME} -f [OR]<br/>
				RewriteCond %{REQUEST_FILENAME} -d<br/>
				RewriteRule . &#45; [L]<br/>
				RewriteRule  ^([_0-9a-zA-Z-]+/)?(wp-.*) $2 [L]<br/>
				RewriteRule  ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]<br/>
				RewriteRule . index.php [L]<br/>
				&#60;/IfModule><br/>
				# END WordPress Multi-Site<br/>
			</div>
		</div>

		<br/><br/>

	</td></tr>
	</table>
</div>
<br/><br/>
