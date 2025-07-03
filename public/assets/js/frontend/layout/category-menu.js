export function initCategoryMenu() {
    const toggle = document.getElementById('categoryMenuFromMain');
    const menu = document.getElementById('mobileCategoryMenu');
    const overlay = document.getElementById('mobileCategoryOverlay');
    const close = document.getElementById('closeCategoryMenu');
    const backBtn = document.getElementById('categoryBackBtn');
    const title = document.getElementById('categoryTitle');
    const main = document.getElementById('mainCategories');
    const sub = document.getElementById('subCategories');
    const accordion = document.getElementById('accordionCategories');
    const search = document.getElementById('mobileCategorySearch');

    function reset() {
        title.textContent = 'دسته‌بندی‌ها';
        backBtn?.classList.remove('active');
        sub?.classList.remove('active');
        if (main) main.style.transform = 'translateX(0)';
    }

    function show() {
        overlay?.classList.add('active');
        menu?.classList.add('active');
        document.body.style.overflow = 'hidden';
        reset();
    }

    function hide() {
        overlay?.classList.remove('active');
        menu?.classList.remove('active');
        document.body.style.overflow = 'auto';
        reset();
    }

    function showSubCategory(key) {
        const categories = {
            restaurant: { title: 'رستوران', items: ['فست فود', 'رستوران‌های ایرانی', 'رستوران‌های خارجی', 'کافه و قهوه‌خانه', 'شیرینی و قنادی', 'آبمیوه و بستنی'] },
            entertainment: { title: 'تفریحی', items: ['سینما', 'تئاتر', 'کنسرت', 'پارک‌های تفریحی', 'بازی‌های کامپیوتری', 'اسکیپ روم'] },
            travel: { title: 'سفر', items: ['هتل', 'بلیط هواپیما', 'تور مسافرتی', 'اجاره خودرو', 'بیمه مسافرتی', 'ویزا'] },
            education: { title: 'آموزشی', items: ['آموزش زبان', 'دوره‌های آنلاین', 'کتاب و مجله', 'آموزش موسیقی', 'آموزش کامپیوتر', 'آموزش مهارت‌های زندگی'] },
            sports: { title: 'ورزشی', items: ['باشگاه بدنسازی', 'استخر', 'زمین‌های ورزشی', 'لوازم ورزشی', 'مربی شخصی', 'رشته‌های رزمی'] },
            beauty: { title: 'زیبایی', items: ['آرایشگاه زنانه', 'آرایشگاه مردانه', 'سالن زیبایی', 'ماساژ', 'لوازم آرایشی', 'پوست و مو'] },
            medical: { title: 'پزشکی', items: ['دندانپزشکی', 'چشم‌پزشکی', 'آزمایشگاه', 'داروخانه', 'فیزیوتراپی', 'مشاوره روان‌شناسی'] },
            services: { title: 'خدمات', items: ['خشکشویی', 'تعمیرات', 'نظافت', 'باربری', 'عکاسی', 'چاپ و تبلیغات'] }
        };

        const category = categories[key];
        if (!category || !title || !sub || !main) return;

        title.textContent = category.title;
        backBtn?.classList.add('active');
        main.style.transform = 'translateX(100%)';
        sub.innerHTML = `<ul class="space-y-4">${category.items.map(i => `
            <li><a href="#" class="block py-3 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">${i}</a></li>`).join('')}</ul>`;
        sub.classList.add('active');
    }

    if (toggle) toggle.addEventListener('click', show);
    if (close) close.addEventListener('click', hide);
    if (overlay) overlay.addEventListener('click', hide);
    if (backBtn) backBtn.addEventListener('click', reset);

    if (accordion) {
        accordion.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', (e) => {
                e.preventDefault();
                const content = header.nextElementSibling;
                const isActive = content.classList.contains('active');
                accordion.querySelectorAll('.accordion-content.active').forEach(item => {
                    if (item !== content) item.classList.remove('active');
                });
                content.classList.toggle('active', !isActive);
                if (content.classList.contains('active')) {
                    showSubCategory(header.dataset.category);
                } else {
                    reset();
                }
            });
        });
    }

    if (search) {
        search.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            accordion?.querySelectorAll('.accordion-header').forEach(header => {
                const content = header.nextElementSibling;
                const items = content.querySelectorAll('a');
                const matches = [header.textContent.toLowerCase(), ...Array.from(items).map(i => i.textContent.toLowerCase())]
                    .some(t => t.includes(term));
                header.parentElement.style.display = matches ? 'block' : 'none';
            });
        });
    }

    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            hide();
        }
    });
}
