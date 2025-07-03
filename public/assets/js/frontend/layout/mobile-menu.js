export function initMobileMenu() {
    const toggle = document.getElementById('mobileMenuToggle');
    const menu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('mobileMenuOverlay');
    const close = document.getElementById('closeMobileMenu');

    function show() {
        overlay.classList.add('active');
        menu.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function hide() {
        overlay.classList.remove('active');
        menu.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    if (toggle) toggle.addEventListener('click', show);
    if (close) close.addEventListener('click', hide);
    if (overlay) overlay.addEventListener('click', hide);
}
