// Mobile Drawer //
document.addEventListener('DOMContentLoaded', () => {

    const headerDrawer = document.querySelector('.or-header-drawer');
    const openDrawer = document.querySelector('.or-mobile-toggle');
    const closeDrawer = document.querySelector('.or-close-toggle');

    if (headerDrawer && openDrawer) {

        openDrawer.addEventListener('click', () => {

            headerDrawer.classList.add('active');
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden';

        });

    }

    if (headerDrawer && closeDrawer) {

        closeDrawer.addEventListener('click', () => {

            headerDrawer.classList.remove('active');
            document.body.style.overflow = '';
            document.documentElement.style.overflow = '';

        });

    }

});

// Sticky Header //
document.addEventListener('DOMContentLoaded', () => {

    const headerContainer = document.querySelector('axis-header-or');
    const scrollThreshold = 900;

    window.addEventListener('scroll', function () {

        if (window.scrollY > scrollThreshold) {
            headerContainer.classList.add('is-sticky');
        } else {
            headerContainer.classList.remove('is-sticky');
        }

    });

});