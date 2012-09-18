<?php

/**
* ownCloud - user_redmine
*
* @author Steffen Zieger
* @copyright 2012 Steffen Zieger <me@saz.sh>
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

require_once('apps/user_drupal/user_drupal.php');

OCP\App::registerAdmin('user_drupal','settings');

// register user backend
OC_User::useBackend( 'drupal' );

// add settings page to navigation
$entry = array(
    'id'   => 'user_drupal_settings',
    'order'=> 1,
    'href' => OC_Helper::linkTo( "user_drupal", "settings.php" ),
    'name' => 'Drupal'
);

