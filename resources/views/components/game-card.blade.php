<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex-none">
    <a href="{{route('game.show', ['game'=> $game->id])}}">
        <img class="px-6 pt-6 pb-4 rounded-t-lg dark:text-white object-cover w-full h-64" src="{{asset('storage/thumbnails/'.$game->image)}}" alt="({{$game->title}} image)" />
    </a>
    <div class="px-5 pb-5">
        <a href="{{route('game.show', ['game'=> $game->id])}}">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$game->title}}</h5>
        </a>
        <h6 class="mt-1 text-base font-light tracking-tight text-gray-900 dark:text-white">Category: <a href="{{route('category.show', ['category' => $game->category->id])}}" class = "hover:underline">{{$game->category->name}}</a></h6>
        <h6 class="mt-1 text-sm font-light tracking-tight text-gray-900 dark:text-white">Developer: {{$game->developer}}</h6>
        <div class="flex items-center mt-5 mb-5">
            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $game->average_rating())
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    @else
                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    @endif
                @endfor
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{$game->average_rating()}}.0</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp.{{$game->price}}</span>
            <form action = "{{route('cart.add', $game->id)}}" method = "POST">
                @csrf
                <button type="submit" class = "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 no-underline">Add to cart</button>
            </form>
        </div>
    </div>
</div>
