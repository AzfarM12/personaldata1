let selectedCategory = '';

function setCategory(category) {
    selectedCategory = category;
    filterResults();
}

function filterResults() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const results = document.querySelectorAll('.result-item');

    results.forEach(item => {
        const text = item.textContent.toLowerCase();
        const itemCategory = item.getAttribute('data-category');

        // Check if the item matches the selected category and search input
        const matchesCategory = selectedCategory === '' || itemCategory === selectedCategory;
        const matchesSearch = text.includes(searchInput);

        // Display or hide item based on matches
        item.style.display = matchesCategory && matchesSearch ? 'block' : 'none';
    });
}
