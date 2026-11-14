// Front Page Animation Header //
document.addEventListener("DOMContentLoaded", () => {
  const page = document.querySelector(".front-page");

  if (page) {
    requestAnimationFrame(() => {
      page.classList.add("is-loaded");
    });
  }
});

// Mobile Drawer //
document.addEventListener('DOMContentLoaded', () => {

  const headerDrawer = document.querySelector('.header-drawer');
  const openDrawer = document.querySelector('.mobile-toggle');
  const closeDrawer = document.querySelector('.close-toggle');

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

  const headerContainer = document.querySelector('.axis-header');
  const scrollThreshold = 900;

  window.addEventListener('scroll', function () {

    if (window.scrollY > scrollThreshold) {
      headerContainer.classList.add('is-sticky');
    } else {
      headerContainer.classList.remove('is-sticky');
    }

  });

});

// Careers Input Dropdown //
document.addEventListener('DOMContentLoaded', () => {

  const inputContainer = document.querySelector('.form-container');
  if (!inputContainer) return;

  const inputDropdown = inputContainer.querySelector('.form-dropdown');
  const input = inputContainer.querySelector('input');
  const items = inputDropdown.querySelectorAll('li');

  input.addEventListener('click', () => {
    inputDropdown.classList.add('is-open');
  });

  document.addEventListener('click', (e) => {

    if (!inputContainer.contains(e.target)) {
      inputDropdown.classList.remove('is-open');
    }

  });

  items.forEach(item => {

    item.addEventListener('click', () => {
      input.value = item.textContent.trim();
      inputDropdown.classList.remove('is-open');
    });

  });

});

// Ease out Animations //
document.addEventListener('DOMContentLoaded', () => {

  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.05
  };

  const scrollObserver = new IntersectionObserver((entries, observer) => {

    entries.forEach(entry => {

      if (entry.isIntersecting) {

        const target = entry.target;
        target.classList.add('is-visible');

        observer.unobserve(target);

      }

    });

  }, observerOptions);

  document.querySelectorAll('section').forEach(el => scrollObserver.observe(el));
  document.querySelectorAll('article').forEach(el => scrollObserver.observe(el));

});

// Assay List Display //
document.addEventListener("DOMContentLoaded", () => {
  const assays = [
    {
      code: "3011EU",

      name: "MultiClot Analyzer",

      category: "System",
    },

    {
      code: "1081EU",

      name: "EX - Extrinsic Activation",

      category: "Assay",
    },

    {
      code: "1061EU",

      name: "FIB - Functional Fibrinogen",

      category: "Assay",
    },

    {
      code: "1051EU",

      name: "AP - Fibrinolysis Inhibtion",

      category: "Assay",
    },

    {
      code: "1031EU",

      name: "IN - Intrinsic + Heparin",

      category: "Assay",
    },

    {
      code: "1041EU",

      name: "HI - Heparin Neutralisation",

      category: "Assay",
    },

    {
      code: "1021EU",

      name: "TPA - Fibrinolysis Activation",

      category: "Assay",
    },

    {
      code: "1071EU",

      name: "RVV - Anti-FXa (DOACs)",

      category: "Assay",
    },

    {
      code: "1011EU",

      name: "ECA - Anti-Ila (Dabigatran)",

      category: "Assay",
    },

    {
      code: "2011EU",

      name: "QC1 - Quality Control (Normal)",

      category: "QC",
    },

    {
      code: "2021EU",

      name: "QC2 - Quality Control (Anticoag)",

      category: "QC",
    },
  ];

  const assaysContainer = document.querySelector(".assays-list");

  if (!assaysContainer) return;

  const displayAssays = function (assays) {
    assaysContainer.innerHTML = "";

    assays.forEach((assay) => {
      const type = assay.category === "Assay" ? "green" : "red";

      const html = `<div class="assay-item">

                        <div class="assay-title">

                            <div class="assay-code">${assay.code}</div>

                            <div class="assay-name">${assay.name}</div>

                        </div>

                        <div class="assay-cat-${type}">${assay.category}</div>

                    </div>`;

      assaysContainer.insertAdjacentHTML("beforebegin", html);
    });
  };

  displayAssays(assays);
});

// Request Demo Modal
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("demoModal");
  const form = document.getElementById("demoRequest");
  const feedback = document.getElementById("feedbackMsg");
  const triggers = document.getElementById("demo-popup");
  const close = document.getElementById("closeModal");
  const overlay = document.querySelector(".demo-modal-overlay");

  if (!modal) return;

  if (triggers) {
    triggers.addEventListener("click", (e) => {
      e.preventDefault();
      modal.classList.add("modal-active");
      modal.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
    });
  }

  const closeModal = function () {
    modal.classList.remove("modal-active");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";

    if (feedback) {
      feedback.textContent = "";
      feedback.className = "feedback-msg";
    }
  };

  if (close) close.addEventListener("click", closeModal);
  if (overlay) overlay.addEventListener("click", closeModal);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.classList.contains("modal-active")) {
      closeModal();
    }
  });

  // AJAX Submission
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      if (feedback) {
        feedback.className = "feedback-msg";
        feedback.textContent = "Sending request...";
      }

      const formData = new FormData(form);
      formData.append("action", "submit_demo_request");
      if (typeof demo_ajax_obj !== "undefined") {
        formData.append("security", demo_ajax_obj.nonce);
      }

      fetch(demo_ajax_obj.ajax_url, {
        method: "POST",
        body: formData,
      })
        .then((res) => res.json())
        .then((response) => {
          if (response.success) {
            if (feedback) {
              feedback.classList.add("success");
              feedback.textContent = response.data;
            }
            form.reset();
            setTimeout(closeModal, 2500);
          } else {
            if (feedback) {
              feedback.classList.add("error");
              feedback.textContent =
                response.data || "Error submitting request!";
            }
          }
        })
        .catch(() => {
          if (feedback) {
            feedback.classList.add("error");
            feedback.textContent = "Network Error. Please try again later";
          }
        });
    });
  }
});

// Assay Image Card Transitions //
document.addEventListener("DOMContentLoaded", () => {
  const assayImages = document.getElementById("assayContainer");

  const assayItems = document.querySelectorAll(".assay-image-content");

  assayItems.forEach((item) => {
    item.addEventListener("click", () => {
      const isActive = item.classList.contains("active-content");

      assayItems.forEach((el) => el.classList.remove("active-content"));

      assayImages.classList.remove("active-section");

      if (!isActive) {
        item.classList.add("active-content");

        assayImages.classList.add("active-section");
      }
    });
  });
});

// Applications and Contact Forms Subsmissions AJAX //
document.addEventListener("DOMContentLoaded", () => {
  // Career Form
  const careerForm = document.getElementById("careerForm");
  const careerSuccess = document.getElementById("careerSuccessMsg");

  if (!careerForm) {
    return;
  }

  careerForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(careerForm);
    formData.append("action", "submit_career_form");

    const ajaxUrl =
      typeof demo_ajax_obj !== "undefined"
        ? demo_ajax_obj.ajax_url
        : "/wp-admin/admin-ajax.php";

    fetch(ajaxUrl, {
      method: "POST",
      body: formData,
    })
      .then((res) => res.json())
      .then((response) => {
        if (response.success) {
          if (careerSuccess) {
            careerSuccess.style.display = "flex";
          }

          careerForm.reset();
          careerForm.style.display = "none";
        } else {
          alert(
            response.data || "Error submitting application! Please try again!",
          );
        }
      })
      .catch(() => {
        alert("Network error!");
      });
  });

  // Contact Form
  const contactForm = document.getElementById("contactForm");
  const contactSuccess = document.getElementById("contactSuccessMsg");

  if (!contactForm) {
    return;
  }

  contactForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(contactForm);
    formData.append("action", "submit_contact_form");

    const ajaxUrl =
      typeof demo_ajax_obj !== "undefined"
        ? demo_ajax_obj.ajax_url
        : "/wp-admin/admin-ajax.php";

    fetch(ajaxUrl, {
      method: "POST",
      body: formData,
    })
      .then((res) => res.json())
      .then((response) => {
        if (response.success) {
          if (contactSuccess) {
            contactSuccess.style.display = "flex";
          }

          contactForm.reset();
          contactSuccess.style.display = "none";
        } else {
          alert(
            response.data ||
              "Error submitting contact message! Please try again!",
          );
        }
      })
      .catch(() => {
        alert("Network error!");
      });
  });
});


// Service Cards Pop-Ups //
document.addEventListener('DOMContentLoaded', () => {
  
	const popups = [...document.querySelectorAll('.service-popup')];

	if (!popups.length) return;

	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
	const shapes = 'path, line, rect, circle, ellipse, polyline, polygon';
	const minScale = 0.7;
	const minImageHeight = 140;
	let current = null;
	let trigger = null;
	let resizeFrame = null;

	const find = value => popups.find(popup => popup.dataset.serviceId === value || popup.dataset.serviceKey === value);

	const lockScroll = locked => {

		if (locked) {
			document.body.style.setProperty('--service-popup-scrollbar', `${window.innerWidth - document.documentElement.clientWidth}px`);
		}
		document.body.classList.toggle('service-popup-open', locked);

	};

	const prepareDrawing = popup => {

		if (reducedMotion.matches || popup.dataset.drawReady) return;

		popup.querySelectorAll('.service-popup-image svg').forEach(svg => {
			svg.querySelectorAll(shapes).forEach(shape => {
				const style = getComputedStyle(shape);

				if (typeof shape.getTotalLength !== 'function' || style.stroke === 'none' || style.strokeDasharray !== 'none') return;

				shape.style.setProperty('--service-path', Math.ceil(shape.getTotalLength()) + 1);
				shape.classList.add('service-path');
			});
		});

		popup.dataset.drawReady = 'true';

	};

	const fits = popup => {

		const card = popup.querySelector('.service-popup-card');
		const image = popup.querySelector('.service-popup-image');
		const content = popup.querySelector('.service-popup-content');
		const stacked = content.offsetLeft === image.offsetLeft;

		return content.scrollHeight <= content.clientHeight + 1
			&& content.offsetTop + content.offsetHeight <= card.clientHeight + 1
			&& (!stacked || image.offsetHeight >= minImageHeight);

	};

	const fitContent = popup => {

		const scalable = [...popup.querySelectorAll('.service-popup-title, .service-popup-text, .service-popup-list')];

		scalable.forEach(element => {
			element.style.fontSize = '';
		});

		const sizes = scalable.map(element => parseFloat(getComputedStyle(element).fontSize));
		let scale = 1;

		while (!fits(popup) && scale > minScale) {
			scale = Math.max(minScale, scale - 0.05);
			scalable.forEach((element, index) => {
				element.style.fontSize = `${(sizes[index] * scale).toFixed(2)}px`;
			});
		}

	};

	const open = (value, origin = null) => {

		const popup = find(value);

		if (!popup || popup === current) return;
		if (current) close();

		current = popup;
		trigger = origin;
		lockScroll(true);
		fitContent(popup);
		prepareDrawing(popup);
		popup.inert = false;
		popup.classList.add('is-open');
		history.replaceState(null, '', `#${popup.dataset.serviceKey}`);
		popup.querySelector('.service-popup-close').focus({ preventScroll: true });

	};

	const close = () => {

		if (!current) return;

		if (trigger && typeof trigger.focus === 'function') trigger.focus({ preventScroll: true });

		current.classList.remove('is-open');
		current.inert = true;
		current = null;
		trigger = null;
		lockScroll(false);
		history.replaceState(null, '', location.pathname + location.search);

	};

	const trapFocus = event => {

		const items = [...current.querySelectorAll('a[href], button:not([disabled])')].filter(item => item.getClientRects().length);

		if (!items.length) return;

		const first = items[0];
		const last = items[items.length - 1];

		if (event.shiftKey && document.activeElement === first) {
			event.preventDefault();
			last.focus();
		} else if (!event.shiftKey && document.activeElement === last) {
			event.preventDefault();
			first.focus();
		}

	};

	const openFromHash = () => {

		const key = decodeURIComponent(location.hash.slice(1));
		if (key && find(key)) open(key);

	};

	document.addEventListener('click', event => {

		const origin = event.target.closest('[data-service-popup]');

		if (origin) {
			event.preventDefault();
			open(origin.dataset.servicePopup, origin);
			return;
		}

		if (event.target.closest('[data-service-close]')) close();

	});

	document.addEventListener('keydown', event => {

		if (!current) return;

		if (event.key === 'Escape') close();
		if (event.key === 'Tab') trapFocus(event);

	});

	window.addEventListener('resize', () => {

		if (!current) return;

		cancelAnimationFrame(resizeFrame);
		resizeFrame = requestAnimationFrame(() => fitContent(current));

	});

	window.addEventListener('hashchange', openFromHash);

	(document.fonts ? document.fonts.ready : Promise.resolve()).then(openFromHash);
});

// Contact Tabs //
document.addEventListener('DOMContentLoaded', () => {

  const tabButtons = document.querySelectorAll('.tabs .tab');
  const tabs = document.querySelectorAll('.tab-card');

  tabButtons.forEach(function (button, index) {

    button.addEventListener('click', () => {

      tabButtons.forEach(btn => btn.classList.remove('active'));
      tabs.forEach(tab => tab.classList.remove('active'));

      button.classList.add('active');

      if (tabs[index]) {
        tabs[index].classList.add('active');
      }

    });

  });

});

// Hero Script //
document.addEventListener('DOMContentLoaded', () => {

	const hero = document.querySelector('.hc-hero');

	if (!hero || !hero.classList.contains('is-animated')) return;

	const shapes = hero.querySelectorAll('.hc-hero-walls path, .hc-hero-walls rect, .hc-hero-room-drawing path, .hc-hero-room-drawing line, .hc-hero-room-drawing rect, .hc-hero-room-drawing circle, .hc-hero-room-drawing polyline');

	shapes.forEach(shape => {

		if (typeof shape.getTotalLength !== 'function' || getComputedStyle(shape).strokeDasharray !== 'none') return;

		shape.style.setProperty('--hc-length', Math.ceil(shape.getTotalLength()) + 1);
		shape.classList.add('hc-hero-path');
    
	});

	requestAnimationFrame(() => {
		requestAnimationFrame(() => hero.classList.add('is-loaded'));
	});
  
});



