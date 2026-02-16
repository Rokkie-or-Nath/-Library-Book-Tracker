let books = [
    { id: 1, title: "The Great Gatsby", author: "F. Scott Fitzgerald", category: "Classic" },
    { id: 2, title: "To Kill a Mockingbird", author: "Harper Lee", category: "Fiction" },
    { id: 3, title: "1984", author: "George Orwell", category: "Dystopian" },
    { id: 4, title: "Pride and Prejudice", author: "Jane Austen", category: "Romance" },
    { id: 5, title: "The Catcher in the Rye", author: "J.D. Salinger", category: "Fiction" }
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
