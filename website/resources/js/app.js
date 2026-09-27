const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuIcon = document.getElementById('mobile-menu-icon');
const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

const themeToggle = document.getElementById('theme-toggle');
const themeToggleIcon = document.getElementById('theme-toggle-icon');
const savedTheme = localStorage.getItem('portfolio-theme');

const languageToggle = document.getElementById('language-toggle');
const languageMenu = document.getElementById('language-menu');

if (mobileMenuButton && mobileMenu && mobileMenuIcon) {
    const closeMobileMenu = () => {
        mobileMenu.classList.add('hidden');

        mobileMenuButton.setAttribute('aria-expanded', 'false');
        mobileMenuButton.setAttribute('aria-label', 'Abrir menu');

        mobileMenuIcon.classList.remove('fa-xmark');
        mobileMenuIcon.classList.add('fa-bars');

        document.body.classList.remove('overflow-hidden');
    };

    const openMobileMenu = () => {
        mobileMenu.classList.remove('hidden');

        mobileMenuButton.setAttribute('aria-expanded', 'true');
        mobileMenuButton.setAttribute('aria-label', 'Fechar menu');

        mobileMenuIcon.classList.remove('fa-bars');
        mobileMenuIcon.classList.add('fa-xmark');

        document.body.classList.add('overflow-hidden');
    };

    mobileMenuButton.addEventListener('click', () => {
        const isOpen =
            mobileMenuButton.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    });

    mobileMenuLinks.forEach((link) => {
        link.addEventListener('click', closeMobileMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMobileMenu();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 640) {
            closeMobileMenu();
        }
    });
}

const applyTheme = (theme) => {
    const html = document.documentElement;

    if (theme === 'light') {
        html.classList.add('light');

        themeToggleIcon?.classList.remove('fa-sun');
        themeToggleIcon?.classList.add('fa-moon');

        themeToggle?.setAttribute('aria-label', 'Ativar modo escuro');
    } else {
        html.classList.remove('light');

        themeToggleIcon?.classList.remove('fa-moon');
        themeToggleIcon?.classList.add('fa-sun');

        themeToggle?.setAttribute('aria-label', 'Ativar modo claro');
    }
};

applyTheme(savedTheme ?? 'dark');

themeToggle?.addEventListener('click', () => {
    const currentTheme = document.documentElement.classList.contains('light')
        ? 'light'
        : 'dark';

    const newTheme = currentTheme === 'dark'
        ? 'light'
        : 'dark';

    localStorage.setItem('portfolio-theme', newTheme);

    applyTheme(newTheme);
});

if (languageToggle && languageMenu) {
    languageToggle.addEventListener('click', () => {
        const isOpen =
            languageToggle.getAttribute('aria-expanded') === 'true';

        languageToggle.setAttribute(
            'aria-expanded',
            String(!isOpen)
        );

        languageMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', (event) => {
        if (
            !languageToggle.contains(event.target) &&
            !languageMenu.contains(event.target)
        ) {
            languageMenu.classList.add('hidden');
            languageToggle.setAttribute('aria-expanded', 'false');
        }
    });
}

