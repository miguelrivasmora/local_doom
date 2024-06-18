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
 * View functions for the forum UI.
 *
 * @module     local_contact_form/user_menu/config
 * @copyright  2024 ADSDR Scepter Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

let lang;

/**
 * Retrieves the current language code.
 *
 * @returns {string} The current language code defined in the scope.
 */
export const getLang = () => {
  return lang;
};

/**
 * Updates the current language setting.
 *
 * @param {string} newLang The new language code to set.
 * @returns {void}
 */
export const setLang = (newLang) => {
  lang = newLang;
};
