<footer class="bg-slate-100 dark:bg-neutral-900 py-6 px-4 md:px-8">
    <div class="flex justify-between items-center flex-col lg:flex-row flex-wrap gap-6 text-center">
        <p class="text-sm text-slate-600 dark:text-slate-400">© {{ date('Y') }} Bryan Thungadhi Jaya. All rights reserved.</p>

        <ul class="flex space-x-6 gap-y-4 max-lg:justify-center flex-wrap text-sm text-slate-600 dark:text-slate-400">
            @foreach (['Terms of Service', 'Privacy Policy', 'Contact'] as $label)
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">{{ $label }}</a></li>
            @endforeach
        </ul>
    </div>
</footer>