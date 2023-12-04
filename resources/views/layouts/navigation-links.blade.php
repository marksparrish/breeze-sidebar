<div class="mb-4 space-y-2">
    <x-nav-link href="{{ route('dashboard') }}" :active="isActive('dashboard')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        Dashboard
    </x-nav-link>
    <hr class="border-gray-200" />
    <x-nav-link href="{{ route('your-profile') }}" :active="isActive('your-profile')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6c-2.21 0-4 1.79-4 4 0 2.21 1.79 4 4 4s4-1.79 4-4c0-2.21-1.79-4-4-4zM21 21v-2.76c0-1.05-.4-2.05-1.1-2.8-.75-.75-1.75-1.2-2.8-1.2H7.9c-1.05 0-2.05.45-2.8 1.2-.75.75-1.1 1.75-1.1 2.8V21M12 11c2.67 0 8 1.34 8 4v3H4v-3c0-2.66 5.33-4 8-4z" />
        </svg>
        Your Profile
    </x-nav-link>
    <x-nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
        </svg>
        <span class="sr-only">Sign out</span>
        <span class="my-auto" aria-hidden="true">Sign out</span>
        <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </x-nav-link>
</div>
