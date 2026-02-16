let books = [
    { id: 1, title: "The Great Gatsby", author: "F. Scott Fitzgerald", category: "Classic", favorite: false },
    { id: 2, title: "To Kill a Mockingbird", author: "Harper Lee", category: "Fiction", favorite: true },
    { id: 3, title: "1984", author: "George Orwell", category: "Dystopian", favorite: false },
    { id: 4, title: "Pride and Prejudice", author: "Jane Austen", category: "Romance", favorite: true },
    { id: 5, title: "The Catcher in the Rye", author: "J.D. Salinger", category: "Fiction", favorite: false }
];

function searchBooks() {
    const query = document.getElementById('search').value.toLowerCase();
    const resultsContainer = document.getElementById('searchResults');
    
    if (!query) {
        resultsContainer.innerHTML = '';
        return;
    }
    
    const matches = books.filter(b => 
        b.title.toLowerCase().includes(query) || 
        b.author.toLowerCase().includes(query) || 
        b.category.toLowerCase().includes(query)
    );
    
    resultsContainer.innerHTML = matches.map(b => `
        <div class="search-result-item">
            <div class="search-result-title">${b.title}</div>
            <div class="search-result-author">by ${b.author} | ${b.category}</div>
        </div>
    `).join('') || '<div style="color: #666; padding: 10px; text-align: center;">No books found</div>';
}

function showCalendar() {
    document.getElementById('calendarModal').classList.add('active');
}

function closeCalendar() {
    document.getElementById('calendarModal').classList.remove('active');
}

function saveGoal() {
    const date = document.getElementById('goalDate').value;
    const booksCount = document.getElementById('goalBooks').value;
    
    if (date && booksCount) {
        alert(`Goal saved! Read ${booksCount} books by ${date}`);
        closeCalendar();
    } else {
        alert('Please fill in all fields');
    }
}

function showFavorites() {
    const modal = document.getElementById('favoritesModal');
    const favoritesList = document.getElementById('favoritesList');
    const favorites = books.filter(b => b.favorite);
    
    if (favorites.length === 0) {
        favoritesList.innerHTML = '<div class="no-favorites">No books favorited yet. Start adding your favorite books!</div>';
    } else {
        favoritesList.innerHTML = favorites.map(b => `
            <div class="favorite-item">
                <div class="favorite-item-info">
                    <h4>${b.title}</h4>
                    <p>by ${b.author} | ${b.category}</p>
                </div>
                <button class="unfavorite-btn" onclick="toggleFavorite(${b.id})">⭐</button>
            </div>
        `).join('');
    }
    
    modal.classList.add('active');
}

function closeFavorites() {
    document.getElementById('favoritesModal').classList.remove('active');
}

function toggleFavorite(id) {
    const book = books.find(b => b.id === id);
    if (book) {
        book.favorite = !book.favorite;
        showFavorites();
    }
}
