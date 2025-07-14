
// Desktop Dropdown Menu
function toggleDropdown(id) {
    const dropdown = document.getElementById(id + '-dropdown');
    const arrow = document.getElementById(id + '-arrow');

    // Close all other dropdowns first
    const allDropdowns = document.querySelectorAll('[id$="-dropdown"]');
    const allArrows = document.querySelectorAll('[id$="-arrow"]');

    allDropdowns.forEach(dd => {
        if (dd.id !== id + '-dropdown') {
            dd.classList.add('opacity-0', 'invisible', 'translate-y-2');
            dd.classList.remove('opacity-100', 'visible', 'translate-y-0');
        }
    });

    allArrows.forEach(arrowEl => {
        if (arrowEl.id !== id + '-arrow') {
            arrowEl.classList.remove('rotate-180');
        }
    });

    // Toggle current dropdown
    if (dropdown.classList.contains('opacity-0') || dropdown.classList.contains('invisible')) {
        dropdown.classList.remove('opacity-0', 'invisible', 'translate-y-2');
        dropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
        arrow.classList.add('rotate-180');
    } else {
        dropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
        dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
        arrow.classList.remove('rotate-180');
    }
}

// Mobile Menu Toggle
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('mobile-menu-icon');
    const closeIcon = document.getElementById('mobile-close-icon');

    if (mobileMenu.classList.contains('hidden')) {
        // Show menu
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');

        // Smooth animation
        setTimeout(() => {
            mobileMenu.style.opacity = '1';
            mobileMenu.style.transform = 'translateY(0)';
        }, 10);
    } else {
        // Hide menu
        mobileMenu.style.opacity = '0';
        mobileMenu.style.transform = 'translateY(-10px)';

        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }, 300);
    }
}

// Mobile Dropdown Toggle - FIXED
function toggleMobileDropdown(id) {
    const dropdown = document.getElementById(id + '-dropdown');
    const arrow = document.getElementById(id + '-arrow');

    if (dropdown.classList.contains('open')) {
        // Close dropdown
        dropdown.classList.remove('open');
        arrow.classList.remove('rotate-180');
    } else {
        // Open dropdown
        dropdown.classList.add('open');
        arrow.classList.add('rotate-180');
    }
}

// Close dropdowns when clicking outside
document.addEventListener('click', function (event) {
    // Only close desktop dropdowns when clicking outside
    if (!event.target.closest('.relative') && !event.target.closest('#mobile-menu')) {
        const dropdowns = document.querySelectorAll('[id$="-dropdown"]:not([id*="mobile"])');
        const arrows = document.querySelectorAll('[id$="-arrow"]:not([id*="mobile"])');

        dropdowns.forEach(dropdown => {
            dropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
            dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
        });

        arrows.forEach(arrow => {
            arrow.classList.remove('rotate-180');
        });
    }
});

// Close mobile menu when clicking on navigation links
document.querySelectorAll('#mobile-menu a[href]').forEach(link => {
    link.addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('mobile-menu-icon');
        const closeIcon = document.getElementById('mobile-close-icon');

        mobileMenu.style.opacity = '0';
        mobileMenu.style.transform = 'translateY(-10px)';

        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }, 300);
    });
});

// Enhanced header effects on scroll
window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.backdropFilter = 'blur(30px)';
        header.style.boxShadow = '0 8px 32px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.backdropFilter = 'blur(25px)';
        header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
    }
});

// Initialize mobile menu styles on page load
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.style.opacity = '0';
    mobileMenu.style.transform = 'translateY(-10px)';
    mobileMenu.style.transition = 'all 0.3s ease';
});