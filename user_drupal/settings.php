<?php

/**
 * ownCloud - user_redmine
 *
 * @author Patrik Karisch
 * @copyright 2012 Patrik Karisch <patrik.karisch@abimus.com>
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
$params = array(
		'drupal_db_host',
		'drupal_db_user',
		'drupal_db_password',
		'drupal_db_name',
		'drupal_db_prefix'
);

if ($_POST) {
	foreach($params as $param){
		if(isset($_POST[$param])){
			OC_Appconfig::setValue('user_drupal', $param, $_POST[$param]);
		}
	}
}

// fill template
$tmpl = new OC_Template( 'user_drupal', 'settings');
$tmpl->assign( 'drupal_db_host', OC_Appconfig::getValue('user_drupal', 'drupal_db_host', 'localhost'));
$tmpl->assign( 'drupal_db_name', OC_Appconfig::getValue('user_drupal', 'drupal_db_name', ''));
$tmpl->assign( 'drupal_db_user', OC_Appconfig::getValue('user_drupal', 'drupal_db_user', ''));
$tmpl->assign( 'drupal_db_password', OC_Appconfig::getValue('user_drupal', 'drupal_db_password', ''));
$tmpl->assign( 'drupal_db_prefix', OC_Appconfig::getValue('user_drupal', 'drupal_db_prefix', ''));

return $tmpl->fetchPage();
