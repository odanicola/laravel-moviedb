<div class="w-3/4 px-4">
    <div id="product-list" class="grid grid-cols-4 gap-4">
        <!-- Product Cards will be inserted here by JavaScript -->
        @foreach ($movies as $movie)
        <div class="bg-white rounded shadow p-4" wire:key={{ $movie['id'] }}>
            <img src="https://image.tmdb.org/t/p/w185/{{ $movie['poster_path'] }}" alt="Product 1" class="mb-4">
            <h3 class="text-lg font-semibold">{{ $movie['title'] }}</h3>
            <p class="text-gray-600">{{ $movie['popularity'] }}</p>
        </div>
        @endforeach
    </div>
    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
        <button id="prevPage" class="px-4 py-2 bg-blue-500 text-white rounded mr-2">Previous</button>
        <button id="nextPage" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
    </div>
</div>