import { initHeaderAccordion } from './layout/header.js';
import { initMobileMenu } from './layout/mobile-menu.js';
import { initCategoryMenu } from './layout/category-menu.js';
import { initFooter } from './layout/footer.js';

document.addEventListener('DOMContentLoaded', () => {
    initHeaderAccordion();
    initMobileMenu();
    initCategoryMenu();
    initFooter();
});
