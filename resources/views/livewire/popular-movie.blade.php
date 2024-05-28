<div class="container mx-auto py-4 px-4">
    <div class="flex">
        <livewire:left-bar-filter />
        <div class="w-3/4 px-4">
            <div id="product-list" class="grid grid-cols-4 gap-4">
                <!-- Product Cards will be inserted here by JavaScript -->
                @foreach ($movies as $movie)
                <livewire:content.moviepopular :movie="$movie" :wire:key="$movie['id']" />
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="mt-6 flex justify-center">
                <button wire:click="prev()" id="prevPage"
                    class="px-4 py-2 bg-blue-500 text-white rounded mr-2">Previous</button>
                <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded mr-2">{{ $page }}</button>
                <button wire:click="next()" id="nextPage" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
            </div>
        </div>
    </div>
</div>