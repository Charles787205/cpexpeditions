<aside id="main-drawer" class="d">
    <div class="flex gap-3 p-2 items-center border-b-2 border-white">
        <button onclick="toggleDrawer()"><span class="material-symbols-outlined text-white text-[50px] mt-4">list</span></button>
        <a href="{{ route('dashboard') }}" class="flex">
            <h1 class="text-white">CPE</h1>
            <h1 class="text-primary-yellow">xpeditions</h1>
        </a>
    </div>
    <ul class="border-b-2 border-white">
        <li>
            <a href="{{ route('profile.edit') }}" class="aside-link">
                <span class=" material-symbols-outlined text-[40px]">
                    person
                </span>
                <p class="text-[20px]">My Profile</p>
            </a>

        </li>
        <li>
            <a href="{{ route('favorites.index') }}" class="aside-link">
                <span class=" material-symbols-outlined text-[40px]">
                    star
                </span>
                <p class="text-[20px]">My Favorites</p>
            </a>

        </li>
    </ul>
    <a href="{{ route('users.index') }}" class="aside-link">
        <span class="material-symbols-outlined text-[40px]">settings</span>
        <p class="text-[20px]">Users</p>
    </a>
    @if (Auth::user()->is_admin)
    <a href="{{route('thesis.create') }}" class="aside-link">
        <span class="material-symbols-outlined text-[40px]">post_add</span>
        <p class="text-[20px]">Add Thesis</p>
    </a>
    @endif

</aside>