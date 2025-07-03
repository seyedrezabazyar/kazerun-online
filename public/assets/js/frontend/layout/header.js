export function initHeaderAccordion() {
    const categoryGrid = document.getElementById('categoryGrid');
    if (!categoryGrid) return;

    categoryGrid.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', (e) => {
            e.preventDefault();
            const content = header.nextElementSibling;
            const isActive = content.classList.contains('active');
            categoryGrid.querySelectorAll('.accordion-content.active').forEach(item => {
                if (item !== content) item.classList.remove('active');
            });
            content.classList.toggle('active', !isActive);
        });
    });

    const desktopSearch = document.getElementById('categorySearch');
    if (desktopSearch) {
        desktopSearch.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const headers = categoryGrid.querySelectorAll('.accordion-header');
            headers.forEach(header => {
                const content = header.nextElementSibling;
                const items = content.querySelectorAll('a');
                const matches = [header.textContent.toLowerCase(), ...Array.from(items).map(i => i.textContent.toLowerCase())]
                    .some(t => t.includes(searchTerm));
                header.parentElement.style.display = matches ? 'block' : 'none';
            });
        });
    }
}
