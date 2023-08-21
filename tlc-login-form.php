<?php

/**
 * Plugin Name: TLC Login Form
 * Plugin URI: https://github.com/mikemayer67/tlc-login-form
 * Description: Plugin for modifying the Wordpress login form
 * Version: 0.0.1
 * Author: Michael A. Mayer
 * Requires PHP: 5.3.0
 * License: GPLv3
 * License URL: https://www.gnu.org/licenses/gpl-3.0.html
 */

if( ! defined('WPINC') ) { die; }


function tlc_login_message()
{
  $subject = "subject=Website login";
  $cc = "cc=mikemayer67@vmwishes.com";
  $body = "body=Please send me a userid and password for logging into the Trinity website";
  $args = "?$subject&$cc&$body";

  echo "<p class='tlc-login-message'>The page you are requesting requires that you are logged in as a member of the Trinity Lutheran community.</p>";
  echo "<p class='tlc-login-message contact'>Please contact the <a href='mailto:office@trinityelca.org$args'>Trinity office</a> for help logging in.</p>";
}

add_action('login_message','tlc_login_message');
