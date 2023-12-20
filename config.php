<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * remlocal config.
 *
 * @package   theme_remlocal
 * @copyright 2016 Frédéric Massart
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');

// The first setting we need is the name of the theme. Must be the same as the directory
$THEME->name = 'remlocal';

// This setting list the style sheets we want to include in our theme.
$THEME->sheets = ['fontawesome','v4-shims','fonts','main','extra'];

// Tell Moodle to use remui theme as the parent theme
$THEME->parents = ['remui'];

// Backward compatibility
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();

// load js file in header
$THEME->javascripts = array('bootstrap.bundle.min', 'lottie-player-2.0.2', 'lottie-interactivity.min', 'dotlottie-player');

// required to customize renderers
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// a function from ./lib.php to add custom css styles as array;
$THEME->csspostprocess = 'theme_remlocal_process_css';

// other settings required by Moodle
$THEME->requiredblocks = "";
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
$THEME->usefallback = true;

