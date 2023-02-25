<aside
    class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-lg whitespace-nowrap text-slate-700" href="{{ route('homepage') }}">
            <img src="{{ asset('img/logos/r-logo.png') }}"
                class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="raitotec_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">aitotec Store</span>
        </a>
    </div>

    <hr class="h-px mb-3 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            {{-- Homepage :: Start --}}
            <li class="mt-0.5 w-full">
                <a class="{{ isset($title) && $title == 'Homepage' ? 'bg-white font-semibold shadow-soft-xl' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors"
                    href="{{ route('homepage') }}">
                    <div
                        class="{{ isset($title) && $title == 'Homepage' ? 'bg-gradient-to-tl from-blue-700 to-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                        <svg class="{{ isset($title) && $title == 'Homepage' ? 'text-white' : '' }}"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7H4Z" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Home</span>
                </a>
            </li>
            {{-- Homepage :: End --}}

            {{-- Users :: Start --}}
            <li class="mt-0.5 w-full">
                <a class="{{ isset($title) && $title == 'Users' ? 'bg-white font-semibold shadow-soft-xl' : '' }} py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors"
                    href="{{ route('users') }}">
                    <div
                        class="{{ isset($title) && $title == 'Users' ? 'bg-gradient-to-tl from-blue-700 to-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                        <svg class="{{ isset($title) && $title == 'Users' ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.5 12A2.5 2.5 0 0 0 19 9.5A2.5 2.5 0 0 0 16.5 7A2.5 2.5 0 0 0 14 9.5a2.5 2.5 0 0 0 2.5 2.5M9 11a3 3 0 0 0 3-3a3 3 0 0 0-3-3a3 3 0 0 0-3 3a3 3 0 0 0 3 3m7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75M9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13Z" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Users</span>
                </a>
            </li>
            {{-- Users :: End --}}

            {{-- New Invoice :: Start --}}
            <li class="mt-0.5 w-full">
                <a class="{{ isset($title) && $title == 'New Invoice' ? 'bg-white font-semibold shadow-soft-xl' : '' }} py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors"
                    href="{{ route('invoices.create') }}">
                    <div
                        class="{{ isset($title) && $title == 'New Invoice' ? 'bg-gradient-to-tl from-blue-700 to-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                        <svg class="{{ isset($title) && $title == 'New Invoice' ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M19 21.5H6A3.5 3.5 0 0 1 2.5 18V4.943c0-1.067 1.056-1.744 1.985-1.422c.133.046.263.113.387.202l.175.125a2.51 2.51 0 0 0 2.912-.005a3.52 3.52 0 0 1 4.082 0a2.51 2.51 0 0 0 2.912.005l.175-.125c.993-.71 2.372 0 2.372 1.22V12.5H21a.75.75 0 0 1 .75.75v5.5A2.75 2.75 0 0 1 19 21.5ZM17.75 14v4.75a1.25 1.25 0 0 0 2.5 0V14h-2.5ZM13.5 9.75a.75.75 0 0 0-.75-.75h-6a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 .75-.75Zm-1 3a.75.75 0 0 0-.75-.75h-5a.75.75 0 1 0 0 1.5h5a.75.75 0 0 0 .75-.75Zm.25 2.25a.75.75 0 1 1 0 1.5h-6a.75.75 0 0 1 0-1.5h6Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">New Invoice</span>
                </a>
            </li>
            {{-- New Invoice :: End --}}

            {{-- Invoices :: Start --}}
            <li class="mt-0.5 w-full">
                <a class="{{ isset($title) && $title == 'Invoices' ? 'bg-white font-semibold shadow-soft-xl' : '' }} py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors"
                    href="{{ route('invoices.index') }}">
                    <div
                        class="{{ isset($title) && $title == 'Invoices' ? 'bg-gradient-to-tl from-blue-700 to-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                        <svg class="{{ isset($title) && $title == 'Invoices' ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M14.5 7v5.5h-7v-9H11V6a1 1 0 0 0 1 1h2.5Zm-2-3.379L14.379 5.5H12.5V3.621ZM7 2a1 1 0 0 0-1 1H4a1 1 0 0 0-1 1H1a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2a1 1 0 0 0 1 1h2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5.414a1 1 0 0 0-.293-.707l-2.414-2.414A1 1 0 0 0 12.586 2H7Zm-1 9.5v-7H4.5v7H6Zm-3-1v-5H1.5v5H3Z" clip-rule="evenodd"/></svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Invoices</span>
                </a>
            </li>
            {{-- Invoices :: End --}}

            <hr class="h-px my-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

            @if (auth()->check())
                {{-- Log Out :: Start --}}
                <li class="mt-0.5 w-full">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                            class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors">
                            <div
                                class="bg-white shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m6.125 12.15l-2.325-1q-.5-.2-.588-.725t.288-.9l3.15-3.15q.35-.35.825-.5t.975-.05l1.3.275Q8.425 7.675 7.638 8.963T6.125 12.15Zm14.7-9.75q.2 0 .4.1t.35.25q.15.15.25.35t.1.4q.1 2.325-.987 4.825T17.875 12.8q-1.35 1.35-2.6 2.163t-2.95 1.537q-.325.125-.662.125t-.588-.25L7.95 13.25q-.25-.25-.25-.588T7.825 12q.725-1.675 1.538-2.938t2.162-2.612Q13.5 4.475 16 3.387t4.825-.987Zm-6.35 7.45q.575.575 1.413.575T17.3 9.85q.575-.575.575-1.412T17.3 7.025q-.575-.575-1.413-.575t-1.412.575Q13.9 7.6 13.9 8.438t.575 1.412Zm-2.3 8.35q1.9-.725 3.2-1.512t2.875-2.113l.25 1.3q.1.5-.05.988t-.5.837l-3.15 3.15q-.375.375-.9.275t-.725-.6l-1-2.325ZM4.05 16.045q.875-.87 2.13-.883q1.255-.012 2.125.863q.87.875.87 2.125T8.3 20.275q-.625.625-2.087 1.075t-4.038.8q.35-2.575.8-4.03q.45-1.454 1.075-2.075Z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Log Out</span>
                        </button>
                    </form>
                </li>
                {{-- Log out :: End --}}
            @else
                {{-- Sign In :: Start --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors"
                        href="{{ route('login') }}">
                        <div
                            class="bg-white shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M11 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3h-6zm1.293 6.293a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L13.586 13H5a1 1 0 1 1 0-2h8.586l-1.293-1.293a1 1 0 0 1 0-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Login</span>
                    </a>
                </li>
                {{-- Sign In :: End --}}

                {{-- Register :: Start --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 text-slate-700 transition-colors"
                        href="{{ route('register') }}">
                        <div
                            class="bg-white shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 0 1 0 1.5h-2.5a.25.25 0 0 0-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 0 1 0 1.5h-2.5A1.75 1.75 0 0 1 2 13.25Zm10.44 4.5l-1.97-1.97a.749.749 0 0 1 .326-1.275a.749.749 0 0 1 .734.215l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.749.749 0 0 1-1.275-.326a.749.749 0 0 1 .215-.734l1.97-1.97H6.75a.75.75 0 0 1 0-1.5Z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Register</span>
                    </a>
                </li>
                {{-- Register :: End --}}
            @endif
        </ul>
    </div>
</aside>
