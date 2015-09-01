<?php

/**
 *
 * h2first - simple module for Contao 3 to change the ordering for the headlines
 * to not start with a h1
 *
 * Copyright (C) 2015  Friedrich Pfitzmann Software Solutions
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'] = array('h2', 'h3', 'h4', 'h5', 'h6', 'h1');
$GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte'] = '../modules/h2first/templates/tinyMCE_h2first';