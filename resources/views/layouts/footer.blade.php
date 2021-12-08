<footer class="bg-green-800 py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2
    border-green-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-100">
                <li class="pb-1">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/blog">
                        Blog
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/about">
                        About
                    </a>
                </li>
                @can('logged-in')
                <li class="pb-1">
                    <a href="/music_lessons">
                        Online-Classes
                    </a>
                </li>
                @endcan
                @can('is-admin')
                <li class="pb-1">
                    <a href="{{ route('admin.users.index') }}">
                        Users
                    </a>
                </li>
                @endcan
                @guest
                <li class="pb-1">
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                @if (Route::has('register'))
                <li class="pb-1">
                    <a href="{{ route('register') }}">
                        Enroll
                    </a>
                </li>
                @endif
                @endguest
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Find Us
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-100">
                <li class="pb-1">
                    <a href="/">
                        What we do
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Address
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Phone
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Latest Posts
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-100">
                <li class="pb-1">
                    <a href="/">
                        Why we love music
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Musical instruments
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        4 most used chords in music
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Musical notes
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6 lead text-center">
        Copyright &copy; 2021 code with Peter Ndiuwem Patrick. All rights Reserved
    </p>
</footer>