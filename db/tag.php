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
 * Tag areas in component mod_moodleoverflow
 *
 * @package   mod_moodleoverflow
 * @copyright 2017 Andrew Hancox <andrewdchancox@googlemail.com>
 *            2022 Katja Hedemann <katja.hedemann@gmx.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$tagareas = array(
    array(
        'itemtype' => 'moodleoverflow_posts',
        'component' => 'mod_moodleoverflow',
        'callback' => 'mod_moodleoverflow_get_tagged_posts',
        'callbackfile' => '/mod/moodleoverflow/locallib.php',
    ),
);
