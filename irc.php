#!/usr/bin/env php
<?php
/*
 * Copyright (C) 2014  <singh@devilcode.org>
 * Modified and Relicensed by <f0o@devilcode.org> under the expressed
 * permission by the Copyright-Holder <singh@devilcode.org>.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * */

chdir(dirname($argv[0]));
require_once 'includes/defaults.inc.php';
require_once 'config.php';
require_once 'includes/definitions.inc.php';
require_once 'includes/functions.php';
require_once 'includes/discovery/functions.inc.php';
require_once 'html/includes/authentication/'.$config['auth_mechanism'].'.inc.php';
error_reporting(E_ERROR);

$irc = new LibreNMS\IRCBot();
