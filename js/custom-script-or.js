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

    const headerContainer = document.querySelector('.axis-header-or');
    const scrollThreshold = 900;

    window.addEventListener('scroll', function () {

        if (window.scrollY > scrollThreshold) {
            headerContainer.classList.add('is-sticky');
        } else {
            headerContainer.classList.remove('is-sticky');
        }

    });

});

// Features Scroll Bar //
document.addEventListener('DOMContentLoaded', () => {

    const cards = document.querySelectorAll('.feature-card');
    const navLinks = document.querySelectorAll('.features-link');
    const navContainer = document.querySelector('.features-list');

    if (!cards.length || !navLinks.length) return;

    const observerOptions = {
        root: null,
        rootMargin: '-30% 0px -65% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                setActiveLink(id);
            }

        });

    }, observerOptions);

    cards.forEach(card => observer.observe(card));

    function setActiveLink(id) {

        navLinks.forEach(link => {

            const isActive = link.getAttribute('data-target') === id;
            link.classList.toggle('active', isActive);

            if (isActive && window.innerWidth <= 900 && navContainer) {
                link.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center'
                });
            }

        });

    }

    navLinks.forEach(link => {

        link.addEventListener('click', (e) => {

            e.preventDefault();
            const targetId = link.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({behavior: 'smooth'});
            }

        });

    });

});