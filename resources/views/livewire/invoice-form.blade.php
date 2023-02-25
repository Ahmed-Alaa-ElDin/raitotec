<div>
    <div class="px-9 py-4 my-4 flex flex-col gap-3 bg-white mx-9 rounded shadow">

        {{-- Invoice No --}}
        <div class="flex flex-col m-auto text-center justify-center items-center gap-2 mb-4">
            <label for="invoive_num" class="font-bold text-blue-800">Invoice Number</label>
            <input type="text" class="text-center rounded-xl border-2 border-blue-700" id="invoice_num"
                value="{{ $invoice->id }}" disabled>
        </div>

        <hr class="h-px my-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <form action="">
            {{-- User --}}
            <h4 class="text-center w-100">User</h4>

            <div class="flex justify-between items-center">
                <div class="flex items-center justify-center gap-3">
                    <label for="user" class="font-bold text-blue-800">User Name</label>
                    <div>
                        <select wire:model="user_id" id="user"
                            class="p-2 text-center rounded-xl border-2 border-blue-700 pr-6 overflow-hidden">
                            <option value="">Select a user</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>

                        @error('user_id')
                            <div class="bg-red-100 text-red-800 px-2 py-1 rounded-xl mt-1 text-sm font-bold text-center">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-center gap-3">
                    @if ($address)
                        <label for="address" class="font-bold text-blue-800">Address</label>
                        <div class="p-2 text-center rounded-xl border-2 border-blue-700">
                            {{ $address }}
                        </div>
                    @endif
                </div>
            </div>

            <hr class="h-px my-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

            <h4 class="text-center w-100">Products</h4>

            <div class="flex flex-col justify-center items-center gap-3">

                @foreach ($selected_products as $key => $selected_product)
                    <div class="flex flex-wrap justify-between items-center w-full" wire:key="{{ 'product_' . $key }}">
                        {{-- Product Id --}}
                        <div class="flex items-center justify-center gap-3">
                            <label for="product_id_{{ $key }}" class="font-bold text-blue-800">Product
                                Name</label>
                            <div>
                                <select wire:model="selected_products.{{ $key }}.id"
                                    wire:change="selectedProductsUpdated({{ $key }})"
                                    id="product_id_{{ $key }}"
                                    class="p-2 text-center rounded-xl border-2 border-blue-700 pr-6 overflow-hidden">
                                    <option value="">Select a product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->name . ' - ' . $product->price . ' EGP' }}</option>
                                    @endforeach
                                </select>

                                @error("selected_products.$key.id")
                                    <div
                                        class="bg-red-100 text-red-800 px-2 py-1 rounded-xl mt-1 text-sm font-bold text-center">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Quantitiy --}}
                        <div class="flex items-center justify-center gap-3">
                            @if ($selected_products[$key]['id'])
                                <label for="quantity_{{ $key }}"
                                    class="font-bold text-blue-800">Quantity</label>
                                <div class="text-center">
                                    <input type="number" id="quantity_{{ $key }}"
                                        wire:model.lazy="selected_products.{{ $key }}.quantity"
                                        class="p-2 text-center rounded-xl border-2 border-blue-700 w-24">
                                    @error("selected_products.$key.quantity")
                                        <div
                                            class="bg-red-100 text-red-800 px-2 py-1 rounded-xl mt-1 text-sm font-bold text-center">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endif
                        </div>

                        {{-- Delete Item --}}
                        <div>
                            @if (count($selected_products) > 1)
                                <button type="button" wire:click="deleteItem({{ $key }})"
                                    id="delete_{{ $key }}" class="bg-red-600 rounded-circle w-8 h-8 text-xs">
                                    <svg class="text-xs font-bold text-white" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach

                {{-- Add Product --}}
                <button type="button" wire:click="addProduct"
                    class="bg-green-600 rounded-xl px-3 py-1 text-white text-sm font-bold">
                    + Add Product
                </button>
            </div>

            {{-- Products --}}
        </form>


        {{-- Total --}}
        @if (count($selected_products) > 1 || $selected_products[array_key_first($selected_products)]['quantity'] != 0)

            <hr class="h-px my-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
            <div>
                <h4 class="text-center w-100">Invoice Summary</h4>

                <table class="bg-white w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 bg-blue-200 text-center text-xs leading-4 font-bold text-blue-900 uppercase tracking-wider">
                                Product Name
                            </th>
                            <th
                                class="px-6 py-3 bg-blue-200 text-center text-xs leading-4 font-bold text-blue-900 uppercase tracking-wider">
                                Unit Price
                            </th>
                            <th
                                class="px-6 py-3 bg-blue-200 text-center text-xs leading-4 font-bold text-blue-900 uppercase tracking-wider">
                                Quantity
                            </th>
                            <th
                                class="px-6 py-3 bg-blue-200 text-center text-xs leading-4 font-bold text-blue-900 uppercase tracking-wider">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Product :: Start --}}
                        @foreach ($selected_products as $selected_product)
                            <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-blue-100' : '' }}">
                                <td class="text-center font-bold">{{ $selected_product['name'] }}</td>
                                <td class="text-center ">{{ $selected_product['price'] . ' EGP' }}</td>
                                <td class="text-center ">{{ $selected_product['quantity'] }}</td>
                                <td class="text-center ">
                                    {{ $selected_product['quantity'] * $selected_product['price'] . ' EGP' }}</td>
                            </tr>
                        @endforeach
                        {{-- Product :: End --}}
                    </tbody>
                    <tfoot>
                        <tr class="bg-blue-800 text-white">
                            <th>
                                Total
                            </th>
                            <td class="text-center" colspan="3">
                                {{ $total ?? "0" }} EGP
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        @endif
    </div>

    {{-- buttons --}}
    <div class="px-9 flex justify-between items-center gap-3 w-full pb-4">
        <button class="bg-blue-600 rounded-xl px-3 py-1 text-white font-bold" wire:click="save">Save</button>
        <button class="bg-red-600 rounded-xl px-3 py-1 text-white font-bold" wire:click="clearAll">Clear All</button>
    </div>
</div>
