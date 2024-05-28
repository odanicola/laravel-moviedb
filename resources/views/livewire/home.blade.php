<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List with Filter and Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 p-4 bg-white rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Filters</h2>
            <div class="mb-4">
                <h3 class="text-lg font-medium">Category</h3>
                <ul>
                    <li><input type="checkbox" id="category1" class="mr-2"><label for="category1">Category 1</label></li>
                    <li><input type="checkbox" id="category2" class="mr-2"><label for="category2">Category 2</label></li>
                    <li><input type="checkbox" id="category3" class="mr-2"><label for="category3">Category 3</label></li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-medium">Price</h3>
                <ul>
                    <li><input type="checkbox" id="price1" class="mr-2"><label for="price1">Under $50</label></li>
                    <li><input type="checkbox" id="price2" class="mr-2"><label for="price2">$50 - $100</label></li>
                    <li><input type="checkbox" id="price3" class="mr-2"><label for="price3">Over $100</label></li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-medium">Brand</h3>
                <ul>
                    <li><input type="checkbox" id="brand1" class="mr-2"><label for="brand1">Brand 1</label></li>
                    <li><input type="checkbox" id="brand2" class="mr-2"><label for="brand2">Brand 2</label></li>
                    <li><input type="checkbox" id="brand3" class="mr-2"><label for="brand3">Brand 3</label></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 p-4">
            <div id="product-list" class="grid grid-cols-3 gap-4">
                <!-- Product Cards will be inserted here by JavaScript -->
            </div>
            <!-- Pagination -->
            <div class="mt-6 flex justify-center">
                <button id="prevPage" class="px-4 py-2 bg-blue-500 text-white rounded mr-2">Previous</button>
                <button id="nextPage" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
            </div>
        </div>
    </div>
</div>

<script>
    const products = [
        // Array of product objects
        { id: 1, name: 'Product 1', price: '$50', image: 'https://via.placeholder.com/150' },
        { id: 2, name: 'Product 2', price: '$75', image: 'https://via.placeholder.com/150' },
        { id: 3, name: 'Product 3', price: '$100', image: 'https://via.placeholder.com/150' },
        { id: 4, name: 'Product 4', price: '$50', image: 'https://via.placeholder.com/150' },
        { id: 5, name: 'Product 5', price: '$75', image: 'https://via.placeholder.com/150' },
        { id: 6, name: 'Product 6', price: '$100', image: 'https://via.placeholder.com/150' },
        { id: 7, name: 'Product 7', price: '$50', image: 'https://via.placeholder.com/150' },
        { id: 8, name: 'Product 8', price: '$75', image: 'https://via.placeholder.com/150' },
        { id: 9, name: 'Product 9', price: '$100', image: 'https://via.placeholder.com/150' },
        { id: 10, name: 'Product 10', price: '$50', image: 'https://via.placeholder.com/150' },
        { id: 11, name: 'Product 11', price: '$75', image: 'https://via.placeholder.com/150' },
        { id: 12, name: 'Product 12', price: '$100', image: 'https://via.placeholder.com/150' },
        // Add more products as needed
    ];

    const itemsPerPage = 6;
    let currentPage = 1;

    function renderProducts(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const paginatedProducts = products.slice(start, end);

        const productList = document.getElementById('product-list');
        productList.innerHTML = '';

        paginatedProducts.forEach(product => {
            const productCard = document.createElement('div');
            productCard.className = 'bg-white rounded shadow p-4';
            productCard.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="mb-4">
                <h3 class="text-lg font-semibold">${product.name}</h3>
                <p class="text-gray-600">${product.price}</p>
            `;
            productList.appendChild(productCard);
        });
    }

    function updatePaginationButtons() {
        document.getElementById('prevPage').disabled = currentPage === 1;
        document.getElementById('nextPage').disabled = currentPage * itemsPerPage >= products.length;
    }

    document.getElementById('prevPage').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderProducts(currentPage);
            updatePaginationButtons();
        }
    });

    document.getElementById('nextPage').addEventListener('click', () => {
        if (currentPage * itemsPerPage < products.length) {
            currentPage++;
            renderProducts(currentPage);
            updatePaginationButtons();
        }
    });

    // Initial render
    renderProducts(currentPage);
    updatePaginationButtons();
</script>

</body>
</html>
