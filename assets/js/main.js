/* Funtime - Main JavaScript */

(function () {
    var el = document.getElementById('copyright-year');
    if (el) el.textContent = new Date().getFullYear();
})();

(function () {
    var productsGroup = document.getElementById('products-nav-group');
    var productsBridge = document.getElementById('products-dropdown-bridge');
    var productsPanel = document.getElementById('products-dropdown-panel');
    var productsCloseTimeout = null;
    var closeDelay = 280;

    function openProductsDropdown() {
        if (productsCloseTimeout) {
            clearTimeout(productsCloseTimeout);
            productsCloseTimeout = null;
        }
        if (productsBridge) productsBridge.classList.add('is-open');
        if (productsPanel) productsPanel.classList.add('is-open');
    }

    function closeProductsDropdown() {
        productsCloseTimeout = setTimeout(function () {
            productsCloseTimeout = null;
            if (productsBridge) productsBridge.classList.remove('is-open');
            if (productsPanel) productsPanel.classList.remove('is-open');
        }, closeDelay);
    }

    if (productsGroup) {
        productsGroup.addEventListener('mouseenter', openProductsDropdown);
        productsGroup.addEventListener('mouseleave', closeProductsDropdown);
    }
    if (productsBridge) {
        productsBridge.addEventListener('mouseenter', openProductsDropdown);
        productsBridge.addEventListener('mouseleave', closeProductsDropdown);
    }
    if (productsPanel) {
        productsPanel.addEventListener('mouseenter', openProductsDropdown);
        productsPanel.addEventListener('mouseleave', closeProductsDropdown);
    }
})();

(function () {
    var btn = document.getElementById('mobile-menu-btn');
    var closeBtn = document.getElementById('mobile-menu-close');
    var menu = document.getElementById('mobile-menu');
    var overlay = document.getElementById('mobile-menu-overlay');
    var iconBars = document.getElementById('mobile-icon-bars');
    var iconClose = document.getElementById('mobile-icon-close');
    var productsToggle = document.getElementById('mobile-products-toggle');
    var productsContent = document.getElementById('mobile-products-content');
    var productsChevron = document.querySelector('.mobile-products-chevron');

    function openMenu() {
        menu.classList.remove('translate-x-full');
        menu.setAttribute('aria-hidden', 'false');
        overlay.classList.remove('opacity-0', 'invisible');
        overlay.classList.add('md:opacity-0', 'md:invisible', 'md:pointer-events-none');
        if (iconBars) {
            iconBars.classList.add('hidden');
            iconBars.setAttribute('aria-hidden', 'true');
        }
        if (iconClose) {
            iconClose.classList.remove('hidden');
            iconClose.setAttribute('aria-hidden', 'false');
        }
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        menu.classList.add('translate-x-full');
        menu.setAttribute('aria-hidden', 'true');
        overlay.classList.add('opacity-0', 'invisible');
        if (iconBars) {
            iconBars.classList.remove('hidden');
            iconBars.setAttribute('aria-hidden', 'false');
        }
        if (iconClose) {
            iconClose.classList.add('hidden');
            iconClose.setAttribute('aria-hidden', 'true');
        }
        document.body.style.overflow = '';
    }

    if (productsToggle && productsContent) {
        productsToggle.addEventListener('click', function () {
            var expanded = productsToggle.getAttribute('aria-expanded') === 'true';
            if (expanded) {
                productsContent.style.maxHeight = '0';
                productsToggle.setAttribute('aria-expanded', 'false');
                productsContent.setAttribute('aria-hidden', 'true');
                if (productsChevron) productsChevron.style.transform = 'rotate(0deg)';
            } else {
                productsContent.style.maxHeight = productsContent.scrollHeight + 24 + 'px';
                productsToggle.setAttribute('aria-expanded', 'true');
                productsContent.setAttribute('aria-hidden', 'false');
                if (productsChevron) productsChevron.style.transform = 'rotate(180deg)';
            }
        });
    }

    if (btn) btn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (overlay) overlay.addEventListener('click', closeMenu);
    if (menu) {
        menu.querySelectorAll('a').forEach(function (a) {
            a.addEventListener('click', closeMenu);
        });
    }
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && menu && !menu.classList.contains('translate-x-full')) {
            closeMenu();
        }
    });
})();

(function () {
    var triggers = document.querySelectorAll('.faq-trigger');
    if (!triggers || !triggers.length) return;

    function closeAll(exceptBtn) {
        triggers.forEach(function (btn) {
            if (exceptBtn && btn === exceptBtn) return;
            var panel = btn.parentElement ? btn.parentElement.querySelector('.faq-panel') : null;
            var chevron = btn.querySelector('.faq-chevron');
            if (panel) panel.classList.add('hidden');
            if (chevron) chevron.style.transform = 'rotate(0deg)';
            btn.setAttribute('aria-expanded', 'false');
        });
    }

    triggers.forEach(function (btn, idx) {
        var panel = btn.parentElement ? btn.parentElement.querySelector('.faq-panel') : null;
        if (!panel) return;

        // Accessibility wiring
        var panelId = panel.id || ('faq-panel-' + idx);
        panel.id = panelId;
        btn.setAttribute('aria-controls', panelId);
        btn.setAttribute('aria-expanded', 'false');

        btn.addEventListener('click', function () {
            var isOpen = !panel.classList.contains('hidden');
            closeAll(btn);
            if (isOpen) {
                panel.classList.add('hidden');
                btn.setAttribute('aria-expanded', 'false');
                var ch1 = btn.querySelector('.faq-chevron');
                if (ch1) ch1.style.transform = 'rotate(0deg)';
                return;
            }
            panel.classList.remove('hidden');
            btn.setAttribute('aria-expanded', 'true');
            var ch2 = btn.querySelector('.faq-chevron');
            if (ch2) ch2.style.transform = 'rotate(180deg)';
        });
    });
})();

(function () {
    var form = document.getElementById('contact-form');
    if (!form) return;

    var validators = {
        name: function (value) {
            if (!value) return 'Please enter your name.';
            if (value.length < 2) return 'Name should be at least 2 characters.';
            return '';
        },
        email: function (value) {
            if (!value) return 'Please enter your email.';
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return 'Please enter a valid email address.';
            return '';
        },
        phone: function (value) {
            if (!value) return 'Please enter your phone number.';
            var normalized = value.replace(/[^\d+]/g, '');
            if (!/^\+?[0-9]{10,15}$/.test(normalized)) return 'Please enter a valid phone number.';
            return '';
        },
        subject: function (value) {
            if (!value) return 'Please enter a subject.';
            if (value.length < 3) return 'Subject should be at least 3 characters.';
            return '';
        },
        message: function (value) {
            if (!value) return 'Please enter your message.';
            if (value.length < 10) return 'Message should be at least 10 characters.';
            return '';
        }
    };

    function setError(field, message) {
        var wrapper = field.parentElement;
        if (!wrapper) return;
        var error = wrapper.querySelector('.contact-error');
        field.classList.remove('border-gray-300', 'border-red-500');
        field.classList.add(message ? 'border-red-500' : 'border-gray-300');
        if (error) {
            error.textContent = message;
            error.classList.toggle('hidden', !message);
        }
    }

    function validateField(field) {
        var name = field.name;
        var validator = validators[name];
        if (!validator) return true;
        var value = field.value.trim();
        var errorMessage = validator(value);
        setError(field, errorMessage);
        return !errorMessage;
    }

    Object.keys(validators).forEach(function (fieldName) {
        var field = form.elements[fieldName];
        if (!field) return;
        field.addEventListener('input', function () {
            validateField(field);
        });
        field.addEventListener('blur', function () {
            validateField(field);
        });
    });

    form.addEventListener('submit', function (event) {
        var firstInvalidField = null;
        var allValid = true;

        Object.keys(validators).forEach(function (fieldName) {
            var field = form.elements[fieldName];
            if (!field) return;
            var isValid = validateField(field);
            if (!isValid && !firstInvalidField) firstInvalidField = field;
            allValid = allValid && isValid;
        });

        if (!allValid) {
            event.preventDefault();
            if (firstInvalidField) firstInvalidField.focus();
            return;
        }

        event.preventDefault();
        form.reset();
        Object.keys(validators).forEach(function (fieldName) {
            var field = form.elements[fieldName];
            if (field) setError(field, '');
        });
        alert('Thank you! Your enquiry has been submitted.');
    });
})();
