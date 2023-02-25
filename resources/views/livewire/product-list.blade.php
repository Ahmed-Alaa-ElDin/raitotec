<div class="px-9 my-4 flex flex-col gap-3">
    <div class="flex justify-between items-center w-100">
        {{-- Search --}}
        <div class="flex items-center">
            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span
                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 pl-3 text-center font-normal text-slate-500 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m19.6 21l-6.3-6.3q-.75.6-1.725.95Q10.6 16 9.5 16q-2.725 0-4.612-1.887Q3 12.225 3 9.5q0-2.725 1.888-4.613Q6.775 3 9.5 3t4.613 1.887Q16 6.775 16 9.5q0 1.1-.35 2.075q-.35.975-.95 1.725l6.3 6.3ZM9.5 14q1.875 0 3.188-1.312Q14 11.375 14 9.5q0-1.875-1.312-3.188Q11.375 5 9.5 5Q7.625 5 6.312 6.312Q5 7.625 5 9.5q0 1.875 1.312 3.188Q7.625 14 9.5 14Z" />
                    </svg>
                </span>
                <input type="text" wire:model="search"
                    class="pl-12 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-300 focus:outline-none focus:transition-shadow"
                    placeholder="Type here..." />
            </div>
        </div>

        {{-- perPage --}}
        <select wire:model="perPage"
            class="w-16 text-center rounded-xl pr-6 focus:shadow-soft-primary-outline ease-soft border border-solid border-gray-300 bg-white bg-clip-padding py-2 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-300 focus:outline-none focus:transition-shadow cursor-pointer">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
        </select>
    </div>

    {{-- Products :: Start --}}
    <div class="grid grid-cols-4 gap-4 justify-center items-center">
        @forelse ($products as $product)
            {{-- Product :: Start --}}
            <div class="col-span-1 bg-white rounded-lg shadow p-3 flex flex-col gap-3 items-center justify-center">
                {{-- Image --}}
                <img src="{{ asset('img/products/' . $product->image_name) }}" alt="{{ $product->name }}"
                    class="w-100 max-w-100">
                {{-- Name --}}
                <div class="font-bold text-xl text-center text-gray-900">
                    {{ $product->name }}
                </div>
                {{-- Price --}}
                <div class="font-bold text-green-500">
                    <span class="text-lg">
                        {{ explode('.', $product->price)[0] }}
                    </span>
                    <sup class="text-xs">
                    {{ explode('.', $product->price)[1] }}
                    </sup>
                    <span class="text-sm text-gray-500">
                        &nbsp; {{ 'EGP' }}
                    </span>
                </div>
            </div>
            {{-- Product :: End --}}
        @empty
        @endforelse

        {{-- Pagination --}}
        <div class="col-span-4">
            {{ $products->links() }}
        </div>
    </div>
    {{-- Products :: End --}}
</div>
