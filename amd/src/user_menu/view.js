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
 * @module     local_contact_form/user_menu/view
 * @copyright  2024 ADSDR Scepter Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import $ from "jquery";
import { SELECTORS } from "./selectors";
import { TEMPLATES } from "./templates";
import { getLang, setLang } from "./config";
import Template from "core/templates";

/**
 * Renders the email-to-area tab content in the user menu.
 */
function renderEmailToAreaTab() {
  const userMenu = $(SELECTORS.CAROUSEL.MAIN);
  if (userMenu.length === 0) {
    return;
  }
  Template.render(TEMPLATES.ITEMS.EMAIL_TO_AREA, {
    lang: getLang(),
    moodleUrl: M.cfg.wwwroot,
  })
    .then((html) => {
      const divider = userMenu.find(SELECTORS.DIVIDER.DROPDOWN).first();
      if (divider.length) {
        divider.before(html);
      } else {
        userMenu.append(html);
      }
    })
    .catch((e) => {
      console.error(e); // eslint-disable-line no-console
    });
}

/**
 * Sets initial constants for the application.
 *
 * @param {string} lang The initial language code to set.
 */
const setInitialConstants = (lang) => {
  setLang(lang);
};

/**
 * Init Module
 * @param {*} lang user lang
 */
export const init = (lang) => {
  setInitialConstants(lang);
  renderEmailToAreaTab();
};
