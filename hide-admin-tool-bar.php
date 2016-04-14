<?php 
/*
Plugin Name: Hide Admin Bar Toolbar
Plugin URI: https://wordpress.org/plugins/global-admin-bar-hide-or-remove/
Description: Hide WordPress 3.1+ Admin Bar or 3.3+ Toolbar frontend manager according to Administrators and Users Roles Profiles (2014-04-16) This become obsolete if <strong>Core Team</strong> adds global options <a href="https://make.wordpress.org/core/features-as-plugins/">features are being developed plugins first</a>. The configuration is Automatic and this plugin is No Logo!
Author: sLaNGjI's Team
Author URI: https://slangji.wordpress.com/plugins/
Requires at least: 3.1
Tested up to: 4.5
Version: 1.6.1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
 *
 * Approved 2011-2-24
 * Build 2014-04-16
 * Donate link https://slangji.wordpress.com/donate/
 * Indentation GNU style coding standard
 * Indentation URI https://www.gnu.org/prep/standards/standards.html
 * Humans We are the humans behind
 * Humans URI https://humanstxt.org/Standard.html
 *
 * Plugin Owner  <a href="https://slangji.wordpress.com/plugins/">sLaNGjIs</a>
 * Plugin Master <a href="https://www.fischercreativemedia.com/">D.J.Fischer</a> (prophecy2040)
 *
 * LICENSING - license.txt
 *
 * [Global Hide Admin Tool Bar](https://wordpress.org/plugins/global-admin-bar-hide-or-remove/)
 *
 * Global Hide Front End Admin Tool Bar Manager According to User Roles
 *
 * Copyright (C) 2013-2016 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlegmail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](https://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * on an "AS IS", but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](https://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](https://www.gnu.org/licenses/gpl-2.0.html)
 * and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This global-hide-admin-tool-bar.php uses (or it parts) code derived from:
 *
 * global-admin-bar-hide-or-remove.php by Donald J. Fischer (email: <dfischer [at] fischercreativemedia [dot] com>)
 * Copyright (C) 2011-2013 [prophecy2040](https://www.fischercreativemedia.com/) (email: <dfischer [at] fischercreativemedia [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later) this uses or it parts code was derived.
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author
 * and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2014 [sLaNGjIs](https://slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 * Copyright (C) 2011-2013 Donald J. Fischer (email: <dfischer [at] fischercreativemedia [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](https://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](https://wordpress.org/plugins/about/guidelines/)
 * paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](https://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](https://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * HUMANS - humans.txt
 *
 * We are the Humans behind this project [humanstxt.org](https://humanstxt.org/Standard.html)
 *
 * This software meet detailed humans rights belongs to your own author and to their respective other authors.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THANKS
 *
 * Thanks to Donald J. Fischer a.k.a prophecy2040 @ www.fischercreativemedia.com for this plugin! (prophecy2040)
 *
 * TODOLIST
 *
 * [to-do list and changelog](https://wordpress.org/plugins/global-admin-bar-hide-or-remove/changelog/)
 */

	/**
	 * @package     WordPress Plugin
	 * @subpackage  Global Hide Admin Tool Bar
	 * @description Global Hide Front End Admin Tool Bar Manager According to User Roles
	 * @author      slangji
	 * @status      Code in Becoming!
	 * @since       3.1+
	 * @branche     2014
	 * @version     1.6.1.1
	 * @build       2014-04-16 1ST - 2014-04-14
	 */

	if ( ! function_exists( 'add_action' ) )

		{

			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );

				exit;

		}

	defined( 'ABSPATH' ) or exit;

	defined( 'WPINC' ) or exit;

	global $wp_version;

	if ( $wp_version < 3.1 )

		{

			wp_die( __( 'This plugin requires WordPress 3.1+ or greater: Activation Stopped.' ) );

		}

	function ghatb_1st()

		{

			$wp_path_to_this_file = preg_replace( '/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR . "/$2", __FILE__ );
			$this_plugin          = plugin_basename( trim( $wp_path_to_this_file ) );
			$active_plugins       = get_option( 'active_plugins' );
			$this_plugin_key      = array_search( $this_plugin, $active_plugins );

			if ( $this_plugin_key )

				{

					array_splice( $active_plugins, $this_plugin_key, 1 );
					array_unshift( $active_plugins, $this_plugin );
					update_option( 'active_plugins', $active_plugins );

				}

		}

	add_action( 'activated_plugin', 'ghatb_1st', 0 );

	global $show_admin_bar;

	add_action( 'admin_init', 'global_adminbar_settings' );
	add_action( 'admin_menu', 'global_adminbar_menu' );

	add_filter( 'show_admin_bar', 'global_show_hide_admin_bar' );

	function myplugin_activate()

		{

			$checkprofiles = get_option( 'global-admin-bar-profiles', 0 );
			$checkroles    = get_option( 'global-admin-bar-roles', 0 );
			$pluginset     = get_option( 'global-admin-bar-plugin-setting', 0 );
			$usersset      = get_option( 'global-admin-bar-plugin-user-setting', 0 );
			$okroles       = get_usable_clean_roles();

			/**
			 * Don Fischer 2014-04-18
			 */
			$adminkey = array_search( "administrator", $okroles );

			/**
			 * Don Fischer 2014-04-18
			 */
			if( $adminkey !== false )

				{

					unset( $okroles [ $adminkey ] );

				}

			if ( $pluginset == 0 )

				{

					add_option( 'global-admin-bar-plugin-setting', '1' );

				}

			if ( $usersset == 0 )

				{

					add_option( 'global-admin-bar-plugin-user-setting', '0' );

				}

			if ( $checkroles == 0 )

				{

					add_option( 'global-admin-bar-roles', $okroles );

				}

			if ( $checkprofiles == 0 )

				{

					add_option( 'global-admin-bar-profiles', $okroles );

				}

		}

	register_activation_hook( __FILE__, 'myplugin_activate' );

	function ghatb_clnp()

		{

			delete_option( 'global-admin-bar-plugin-profiles' );
			delete_option( 'global-admin-bar-plugin-roles' );

		}

	register_deactivation_hook( __FILE__, 'ghatb_clnp' );

		if ( ! is_multisite() )

			{

				add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ghatb_paml', 10, 1 );

			}

		if ( is_multisite() )

			{

				add_action( 'network_admin_plugin_action_links_' . plugin_basename( __FILE__ ), 'ghatb_paml_ms', 10, 1 );

			}

	function ghatb_paml( $links )

		{

				{

					$links[] = '<a title="' . __( 'Plugin Options Settings Page' ) . '" href="' . admin_url( 'options-general.php?page=global-hide-toolbar' ) . '">' . __( 'Set' ) . '</a>';

				}

			return $links;

		}

	function ghatb_paml_ms( $links )

		{

				{

					$links[] = '<a title="' . __( 'Plugin Options Settings Page' ) . '" href="' . admin_url( 'options-general.php?page=global-hide-toolbar' ) . '">' . __( 'Set' ) . '</a>';

				}

			return $links;

		}

	function ghatb_prml( $links , $file )

		{

			if ( $file == plugin_basename( __FILE__ ) )

				{

					$links[] = '<a title="' . __( 'Offer a Beer to sLa' ) . '" href="https://slangji.wordpress.com/donate/">' . __( 'Donate' ) . '</a>';

					$links[] = '<a title="' . __( 'Bugfix and Suggestions' ) . '" href="https://slangji.wordpress.com/contact/">' . __( 'Contact' ) . '</a>';

				}

			return $links;

		}

	add_filter( 'plugin_row_meta', 'ghatb_prml', 10, 2 );

	function ghatb_shfl()

		{

			echo "\n<!--Plugin Global Hide Admin Tool Bar Active-->\n";
			echo "\n<!-- This website is patched against a big problem not solved from WordPress 3.3+ to date -->\n\n";

		}

	add_action( 'wp_head', 'ghatb_shfl', 0 );
	add_action( 'wp_footer', 'ghatb_shfl', 0 );

	function get_current_user_role()

		{

			global $wp_roles;

			$current_user = wp_get_current_user();
			$roles        = $current_user->roles;
			$role         = array_shift( $roles );

			return $role;
	
		}

	function get_profile_user_role()

		{

			global $wp_roles, $user_id;

			$user_id      = (int) $user_id;
			$current_user = wp_get_current_user();
			$profileuser  = get_user_to_edit( $user_id );

			if ( $user_id != $current_user->ID )

				{

					$roles = $profileuser->roles;
					$role  = array_shift( $roles );

					return $role;

				}

			return;

		}

	function global_show_hide_admin_bar( $showvar )

		{

			global $show_admin_bar;

			$theroles = get_option( 'global-admin-bar-roles' );
			$userrole = get_current_user_role();

			if ( get_option( 'global-admin-bar-plugin-setting' ) == '1' && in_array( $userrole, $theroles ) )
	
				{

					$show_admin_bar = false;
					return false;

				}

			else

				{

					return $showvar;

				}

		}

	function global_profile_hide_admin_bar()

		{

			$checkprofiles = get_option( 'global-admin-bar-roles' ); // global-admin-bar-profiles
			$userrole      = get_profile_user_role();

			if ( get_option( 'global-admin-bar-plugin-user-setting' ) == '1' && in_array( $userrole , $checkprofiles ) )

				{

							add_action( 'edit_user_profile', 'hide_your_profile_admin_tool_bar' );
							add_action( 'show_user_profile', 'hide_your_profile_admin_tool_bar' );

				}

			else

				{

					return;

				}

		}

	function hide_your_profile_admin_tool_bar()

		{

			echo '<style type="text/css">.show-admin-bar{display:none !important}</style>';

		}

	function global_adminbar_menu()

		{

			$current_user = wp_get_current_user();

			if ( ! is_multisite() && is_admin() && current_user_can( 'manage_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options' ), __( 'Hide Admin Bar' ), 'manage_options', 'global-hide-toolbar', 'ghatb_admin_bar_page' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options' ), __( 'Hide Toolbar Options' ), 'manage_options', 'global-hide-toolbar', 'ghatb_admin_bar_page' );

						}

				}

			elseif ( is_multisite() && is_super_admin() && current_user_can( 'manage_network_options' ) )

				{

					global $wp_version;

					if ( $wp_version < 3.3 )

						{

							add_options_page( __( 'Hide Admin Bar Options' ), __( 'Hide Admin Bar' ), 'manage_network_options', 'global-hide-toolbar', 'ghatb_admin_bar_page' );

						}

					global $wp_version;

					if ( $wp_version >= 3.3 )

						{

							add_options_page( __( 'Hide Toolbar Options' ), __( 'Hide Toolbar Options' ), 'manage_network_options', 'global-hide-toolbar', 'ghatb_admin_bar_page' );

						}

				}

		}

	function global_adminbar_settings()

		{

			register_setting( 'global-admin-bar-group', 'global-admin-bar-plugin-setting' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-plugin-user-setting' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-roles' );
			register_setting( 'global-admin-bar-group', 'global-admin-bar-profiles' );

			$checkroles    = get_option( 'global-admin-bar-roles' );
			$checkprofiles = get_option( 'global-admin-bar-profiles' );
			$okroles       = get_usable_clean_roles();

			if ( $checkroles == '0' )

				{

					update_option( 'global-admin-bar-roles', $okroles );

				}

			if ( $checkprofiles == '0' )

				{

					update_option( 'global-admin-bar-profiles', $okroles );

				}

		}

	function get_usable_clean_roles()

		{

			global $wp_roles;

			$all_roles      = $wp_roles->roles;
			$newArr         = array();
			$editable_roles = apply_filters( 'editable_roles', $all_roles );

			if ( count( $editable_roles ) > 0 )

				{
					foreach ( $editable_roles as $key => $roledata )

						{

							$newArr[] = $key;

						}

				}

			return $newArr;

		}

	function get_usable_roles( $name = 'roles' )

		{

			if ( ( is_multisite() && is_super_admin() ) || ( ! is_multisite() && current_user_can( 'manage_options' ) ) )

				{

					global $wp_roles;

					$theroles       = get_option( 'global-admin-bar-' . $name );
					$newArr         = array();
					$all_roles      = $wp_roles->roles;
					$editable_roles = apply_filters( 'editable_roles', $all_roles );

					if ( ! is_array( $theroles ) )

						{

							$theroles = array();

						}

					if ( count( $editable_roles ) > 0 )

						{

							$newArr[] = '<ul style="width:400px;padding-left:8px;">';

							foreach ( $editable_roles as $key => $roledata )

								{

									if ( in_array( $key, $theroles ) )

										{

											$newArr[] = '<li style="width:130px;float:left;">&nbsp;&nbsp;<input type="checkbox" checked="checked" name="global-admin-bar-' . $name . '[]" value="' . $key . '"/> ' . $key . '</li>';

										}

									else

										{

											$newArr[] = '<li style="width:130px;float:left;">&nbsp;&nbsp;<input type="checkbox" name="global-admin-bar-' . $name . '[]" value="' . $key . '"/> ' . $key . '</li>';

										}

								}

							$newArr[] = '</ul>';
							$newArr[] = '<div style="clear:both;"></div>';

						}

					return $newArr;

				}

		}

	function ghatb_admin_bar_page()

		{

?>
<div class="wrap">
<h2 class="nav-tab-wrapper">
<a href="?page=global-hide-toolbar" class="nav-tab"><?php _e( 'Settings' ) ?></a>
<?php

	global $wp_version;

	if ( $wp_version < 3.3 )

		{

			_e( 'Global Hide Admin Bar - 1.6.1.1' );

		}

	global $wp_version;

	if ( $wp_version >= 3.3 )

		{

			_e( 'Global Hide Toolbar - 1.6.1.1' );

		}

?>
</h2>
<form method="post" action="options.php">
<?php settings_fields( 'global-admin-bar-group' ); ?>
<table class="form-table">
<tr valign="top">
<td style="text-align:left;vertical-align:top" colspan="2">
<?php _e( 'This plugin turn off the <strong>FRONT END</strong> Toolbar that is displayed for logged in users in WordPress 3.1+ or later.' );?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;width:25px">
<input type="checkbox" name="global-admin-bar-plugin-setting" value="1"
<?php

	if ( get_option( 'global-admin-bar-plugin-setting' ) == '1' )

		{

			echo 'checked="checked"';

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<strong>
<?php _e( 'Hide Toolbar on Front End for Logged In Users' ); ?>
</strong>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;width:25px">&nbsp;</td>
<td style="text-align:left; vertical-align: top;line-height:14px">
<div style="margin:-10px 0 8px 15px;font-style:italic">
<?php _e( 'Hide only for the following roles:' ); ?>
<br><br>
</div>
<?php

	$uroles = get_usable_roles();

	echo implode( "\n", $uroles );

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;width:25px">
<input type="checkbox" name="global-admin-bar-plugin-user-setting" value="1"
<?php

	if ( get_option( 'global-admin-bar-plugin-user-setting' ) == '1' )

		{

			echo 'checked="checked"';

		}

?>/>
</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<strong>
<?php _e( 'Hide "Show Toolbar when viewing site" on <a href="' . admin_url( 'profile.php' ) . '">Your Profile</a> users page - <strong>(Beta Option Not for Production Sites)</strong>' ); ?>
</strong>
</td>
</tr>
<tr valign="top">
<td style="text-align:right;vertical-align:top;width:25px">&nbsp;</td>
<td style="text-align:left;vertical-align:top;line-height:14px">
<div style="margin:-10px 0 8px 15px;font-style:italic">
<?php _e( 'Hide only for the following roles:' ); ?>
<br><br>
</div>
<?php

	$uroles = get_usable_roles( 'profiles' );

	echo implode( "\n", $uroles );

?>
</td>
</tr>
<tr valign="top">
<td style="text-align:left;vertical-align:top" colspan="2">
<?php _e( 'It may become obsolete when <strong>Core Team</strong> add their own global option <a title="WordPress features are being developed plugins first" href="https://make.wordpress.org/core/features-as-plugins/">features are being developed plugins first</a>.' ); ?>
</td>
</tr>
</table>
<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>"/></p>
</form>
</div>
<?php

		}
?>