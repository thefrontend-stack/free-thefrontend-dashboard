
<script>
        // DOM Elements
        const menuToggleBtn = document.getElementById('menu-toggle-btn');
        const closeMobileMenu = document.getElementById('close-mobile-menu');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobile-overlay');
        const userDropdownBtn = document.getElementById('user-dropdown-btn');
        const userDropdown = document.getElementById('user-dropdown');
        const submenuTriggers = document.querySelectorAll('.submenu-trigger');

        // 1. Mobile Menu Manipulation (Animated Open and Close)
        function toggleMobileMenu() {
            const isHidden = sidebar.classList.contains('-translate-x-full');
            if (isHidden) {
                sidebar.classList.remove('-translate-x-full');
                mobileOverlay.classList.remove('hidden');
                setTimeout(() => mobileOverlay.classList.add('opacity-100'), 10);
                menuToggleBtn.classList.add('menu-btn-active');
            } else {
                sidebar.classList.add('-translate-x-full');
                mobileOverlay.classList.remove('opacity-100');
                menuToggleBtn.classList.remove('menu-btn-active');
                setTimeout(() => mobileOverlay.classList.add('hidden'), 300);
            }
        }

        // 2. Desktop Sidebar Collapse System (Shrink Effect)
        function toggleDesktopCollapse() {
            const isCollapsed = sidebar.classList.contains('md:w-16');
            if (isCollapsed) {
                // Expand
                sidebar.classList.remove('md:w-16');
                sidebar.classList.add('md:w-64');
                document.querySelectorAll('.sidebar-text, .sidebar-search').forEach(el => el.classList.remove('md:hidden'));
            } else {
                // Shrink
                sidebar.classList.remove('md:w-64');
                sidebar.classList.add('md:w-16');
                document.querySelectorAll('.sidebar-text, .sidebar-search').forEach(el => el.classList.add('md:hidden'));
                // Closes submenus that open when shrinking
                document.querySelectorAll('.submenu-content').forEach(el => el.classList.add('hidden'));
                document.querySelectorAll('.submenu-chevron').forEach(el => el.classList.remove('rotate-90'));
            }
        }

        // Event Router for the Upper Left Button
        menuToggleBtn.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                toggleMobileMenu();
            } else {
                toggleDesktopCollapse();
            }
        });

        // Mobile app closes when the overlay or X button is clicked.
        closeMobileMenu.addEventListener('click', toggleMobileMenu);
        mobileOverlay.addEventListener('click', toggleMobileMenu);

        // 3. Accordion-style dropdowns of submenus (sidebar)
        submenuTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                // If the sidebar is collapsed on desktop, the internal submenu will not expand.
                if (window.innerWidth >= 768 && sidebar.classList.contains('md:w-16')) return;

                const content = trigger.nextElementSibling;
                const chevron = trigger.querySelector('.submenu-chevron');
                
                content.classList.toggle('hidden');
                chevron.classList.toggle('rotate-90');
            });
        });

        // 4. DROPDOWN (AVATAR TOP)
        userDropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userDropdown.classList.toggle('hidden');
        });

        // Close dropdown 
        document.addEventListener('click', (e) => {
            if (!userDropdown.contains(e.target) && e.target !== userDropdownBtn) {
                userDropdown.classList.add('hidden');
            }
        });

       // Resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                mobileOverlay.classList.remove('opacity-100');
                menuToggleBtn.classList.remove('menu-btn-active');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('md:w-16');
                sidebar.classList.add('md:w-64');
                document.querySelectorAll('.sidebar-text, .sidebar-search').forEach(el => el.classList.remove('md:hidden'));
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
    
    const skeletonElement = document.getElementById('meta-skeleton');
    const contentElement = document.getElementById('meta-content');
    const h1Target = document.getElementById('meta-h1-target');
    const urlTarget = document.getElementById('meta-url-target');

    
    const pageH1 = document.querySelector('h1') ? document.querySelector('h1').innerText.trim() : 'Dashboard';
    const pageUrl = window.location.href;

    
    h1Target.innerText = pageH1;
    urlTarget.innerText = pageUrl;
    urlTarget.setAttribute('title', pageUrl); // Tooltip 

    
    setTimeout(() => {
        // fade-in
        contentElement.classList.remove('opacity-0');
        contentElement.classList.add('opacity-100');
        
        setTimeout(() => {
            skeletonElement.remove();
        }, 300);
    }, 750); 
});
    </script>
</body>
</html>