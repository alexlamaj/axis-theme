// Dropdown Filter Menu (Projects) //

const dropdown = document.querySelector('.subcat-dropdown');



if (dropdown) {



    const toggleBtn = document.querySelector('.drop-toggle');



    toggleBtn.addEventListener('click', function (e) {



        e.stopPropagation();

        dropdown.classList.toggle('open');



    });



    document.addEventListener('click', function (e) {



        if (!toggleBtn.contains(e.target)) {

            dropdown.classList.remove('open');

        }



    });



}



// Tabbed Elements (Contact Us Page) //

const tabButtons = document.querySelectorAll('.tab-toggle-buttons .btn-secondary');

const tabs = document.querySelectorAll('.tab');



tabButtons.forEach(function (button, index) {



    button.addEventListener('click', () => {



        tabButtons.forEach(btn => btn.classList.remove('toggle-active'));

        tabs.forEach(tab => tab.classList.remove('tab-active'));



        button.classList.add('toggle-active');



        if (tabs[index]) {

            tabs[index].classList.add('tab-active');

        }



    });



});



// Tabbed Templates (Company Page) //

const btnTabsCompany = document.querySelectorAll('.tab-btn-company .btn-secondary');

const customTabs = document.querySelectorAll('.elementor-custom-tab');



btnTabsCompany.forEach(function (button, index) {



    button.addEventListener('click', () => {



        btnTabsCompany.forEach(btn => btn.classList.remove('active'));

        customTabs.forEach(tab => tab.classList.remove('custom-tab-active'));



        button.classList.add('active');



        if (customTabs[index]) {

            customTabs[index].classList.add('custom-tab-active');

        }



    });



});



// Mobile Header Toggle //

document.addEventListener('DOMContentLoaded', () => {



    const openHeader = document.querySelector('.mobile-toggle');

    const closeHeader = document.querySelector('.close-drawer');

    const headerModal = document.querySelector('.header-drawer');



    if (openHeader && headerModal) {



        openHeader.addEventListener('click', () => {



            headerModal.classList.add('mobile-header-active');

            document.documentElement.style.overflow = 'hidden';

            document.body.style.overflow = 'hidden';

        

        });



    }



    if (closeHeader && headerModal) {



        closeHeader.addEventListener('click', () => {



            headerModal.classList.remove('mobile-header-active');

            document.documentElement.style.overflow = '';

            document.body.style.overflow = '';

        

        });



    }



});



// Mobile Header Toggle (Products) //

document.addEventListener('DOMContentLoaded', () => {



    const openProductHeader = document.querySelector('.mobile-pr-toggle');

    const closeProductHeader = document.querySelector('.close-pr-drawer');

    const headerProductModal = document.querySelector('.header-product-drawer');



    if (openProductHeader && headerProductModal) {



        openProductHeader.addEventListener('click', () => {



            headerProductModal.classList.add('mobile-header-pr-active');

            document.documentElement.style.overflow = 'hidden';

            document.body.style.overflow = 'hidden';



        });



    }



    if (closeProductHeader && headerProductModal) {



        closeProductHeader.addEventListener('click', () => {



            headerProductModal.classList.remove('mobile-header-pr-active');

            document.documentElement.style.overflow = '';

            document.body.style.overflow = '';



        });



    }



});



// Assay List Display //

document.addEventListener('DOMContentLoaded', () => {



    const assays = [



        {

            code: "3011EU",

            name: "MultiClot Analyzer",

            category: "System"

        },

        {

            code: "1081EU",

            name: "EX - Extrinsic Activation",

            category: "Assay"

        },

        {

            code: "1061EU",

            name: "FIB - Functional Fibrinogen",

            category: "Assay"

        },

        {

            code: "1051EU",

            name: "AP - Fibrinolysis Inhibtion",

            category: "Assay"

        },

        {

            code: "1031EU",

            name: "IN - Intrinsic + Heparin",

            category: "Assay"

        },

        {

            code: "1041EU",

            name: "HI - Heparin Neutralisation",

            category: "Assay"

        },

        {

            code: "1021EU",

            name: "TPA - Fibrinolysis Activation",

            category: "Assay"

        },

        {

            code: "1071EU",

            name: "RVV - Anti-FXa (DOACs)",

            category: "Assay"

        },

        {

            code: "1011EU",

            name: "ECA - Anti-Ila (Dabigatran)",

            category: "Assay"

        },

        {

            code: "2011EU",

            name: "QC1 - Quality Control (Normal)",

            category: "QC"

        },

        {

            code: "2021EU",

            name: "QC2 - Quality Control (Anticoag)",

            category: "QC"

        }



    ];



    const assaysContainer = document.querySelector('.assays-list');

    if (!assaysContainer) return;



    const displayAssays = function (assays) {



        assaysContainer.innerHTML = '';



        assays.forEach(assay => {



            const type = (assay.category === "Assay") ? 'green' : 'red';



            const html = `<div class="assay-item">

                        <div class="assay-title">

                            <div class="assay-code">${assay.code}</div>

                            <div class="assay-name">${assay.name}</div>

                        </div>

                        <div class="assay-cat-${type}">${assay.category}</div>

                    </div>`;



            assaysContainer.insertAdjacentHTML('beforebegin', html);



        });



    }



    displayAssays(assays);



});



// Request Demo Modal
document.addEventListener('DOMContentLoaded', () => {

    const modal = document.getElementById('demoModal');
    const form = document.getElementById('demoRequest');
    const feedback = document.getElementById('feedbackMsg');
    const triggers = document.getElementById('demo-popup');
    const close = document.getElementById('closeModal');
    const overlay = document.querySelector('.demo-modal-overlay');

    if (!modal) return;

    if (triggers) {
        triggers.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('modal-active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        });
    }

    const closeModal = function () {
        modal.classList.remove('modal-active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        
        if (feedback) {
            feedback.textContent = '';
            feedback.className = 'feedback-msg';
        }
    };

    if (close) close.addEventListener('click', closeModal);
    if (overlay) overlay.addEventListener('click', closeModal);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('modal-active')) {
            closeModal();
        } 
    });

    // AJAX Submission
    if (form) {
        form.addEventListener('submit', function (e) {

            e.preventDefault();
            if (feedback) {
                feedback.className = 'feedback-msg';
                feedback.textContent = 'Sending request...';
            }

            const formData = new FormData(form);
            formData.append('action', 'submit_demo_request');
            if (typeof demo_ajax_obj !== 'undefined') {
                formData.append('security', demo_ajax_obj.nonce);
            }

            fetch(demo_ajax_obj.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    if (feedback) {
                        feedback.classList.add('success');
                        feedback.textContent = response.data;
                    }
                    form.reset();
                    setTimeout(closeModal, 2500);
                } else {
                    if (feedback) {
                        feedback.classList.add('error');
                        feedback.textContent = response.data || 'Error submitting request!';
                    }
                }
            })
            .catch(() => {
                if (feedback) {
                    feedback.classList.add('error');
                    feedback.textContent = 'Network Error. Please try again later';
                }
            });

        });
    }

});



// Assay Image Card Transitions //

document.addEventListener('DOMContentLoaded', () => {



    const assayImages = document.getElementById('assayContainer');

    const assayItems = document.querySelectorAll('.assay-image-content');



    assayItems.forEach(item => {



        item.addEventListener('click', () => {



            const isActive = item.classList.contains('active-content');



            assayItems.forEach(el => el.classList.remove('active-content'));

            assayImages.classList.remove('active-section');



            if (!isActive) {

                item.classList.add('active-content');

                assayImages.classList.add('active-section');

            }



        });



    });



});



// Sticky Header Animation //

document.addEventListener('DOMContentLoaded', function () {



    const headerContainer = document.querySelector('.axis-header');

    const scrollThreshold = 900;



    window.addEventListener('scroll', function() {



        if (window.scrollY > scrollThreshold) {

            headerContainer.classList.add('is-sticky');

        } else {

            headerContainer.classList.remove('is-sticky');

        }



    });



});



// Sticky Product Header Animation //

document.addEventListener('DOMContentLoaded', function () {



    const productHeaderContainer = document.querySelector('.axis-product-header');

    const scrollThreshold = 900;



    window.addEventListener('scroll', function () {



        if (window.scrollY > scrollThreshold) {

            productHeaderContainer.classList.add('is-sticky');

        } else {

            productHeaderContainer.classList.remove('is-sticky');

        }



    });



});



// Smooth Scrolling Effect on Elements //

document.addEventListener('DOMContentLoaded', () => {



    const selectors = [



        '.site-main-content > *',

        '.main-layout > *',

        '.main-content > *',

        '.page-layout > *',

        '.blog-layout > *',

        '.error-layout > *',

        '.e-con.e-parent',

        '.elementor-top-section',

        '.axis-footer',

        'img',

        'p',

        'button',

        'input',

        'label'



    ].join(', ');



    const elementsToAnimate = document.querySelectorAll(selectors);



    if (!elementsToAnimate.length) {return;}



    elementsToAnimate.forEach(el => el.classList.add('scroll-reveal'));



    const observerOptions = {

        root: null,

        rootMargin: '0px 0px -20px 0px',

        threshold: 0.03

    };



    const revealObserver = new IntersectionObserver((entries, observer) => {



        const visibleEntries = entries.filter(entry => entry.isIntersecting);



        visibleEntries.forEach((entry, index) => {



            const target = entry.target;

            const delayVisibility = Math.min(index * 0.1, 0.6);

            target.style.setProperty('transition-delay', `${delayVisibility}s`, 'important');

            target.classList.add('is-visible');



            observer.unobserve(target);



        });



    }, observerOptions);



    requestAnimationFrame(() => {



        requestAnimationFrame(() => {



            elementsToAnimate.forEach(el => {

                revealObserver.observe(el);

            });



        });



    });



});

// Applications and Contact Forms Subsmissions AJAX //
document.addEventListener('DOMContentLoaded', () => {

    // Career Form
    const careerForm = document.getElementById('careerForm');
    const careerSuccess = document.getElementById('careerSuccessMsg');

    if (!careerForm) {
        return;
    }

    careerForm.addEventListener('submit', function (e) {

        e.preventDefault();

        const formData = new FormData(careerForm);
        formData.append('action', 'submit_career_form');

        const ajaxUrl = typeof demo_ajax_obj !== 'undefined' ? demo_ajax_obj.ajax_url : '/wp-admin/admin-ajax.php';

        fetch(ajaxUrl, {

            method: 'POST',
            body: formData
        
        }).then(res => res.json()).then(response => {

            if (response.success) {

                if (careerSuccess) {
                    careerSuccess.style.display = 'flex';
                }
                
                careerForm.reset();
                careerForm.style.display = 'none';

            } else {

                alert(response.data || 'Error submitting application! Please try again!');

            }

        }).catch(() => {

            alert('Network error!');

        });

    });

    // Contact Form
    const contactForm = document.getElementById('contactForm');
    const contactSuccess = document.getElementById('contactSuccessMsg');

    if (!contactForm) {
        return;
    }

    contactForm.addEventListener('submit', function (e) {

        e.preventDefault();

        const formData = new FormData(contactForm);
        formData.append('action', 'submit_contact_form');

        const ajaxUrl = typeof demo_ajax_obj !== 'undefined' ? demo_ajax_obj.ajax_url : '/wp-admin/admin-ajax.php';

        fetch(ajaxUrl, {

            method: 'POST',
            body: formData

        }).then(res => res.json()).then(response => {

            if (response.success) {

                if (contactSuccess) {
                    contactSuccess.style.display = 'flex';
                }

                contactForm.reset();
                contactSuccess.style.display = 'none';

            } else {

                alert(response.data || 'Error submitting contact message! Please try again!');

            }

        }).catch(() => {

            alert('Network error!');

        });

    });

});