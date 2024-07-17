<div x-data="{ show: false, message: '', type: '' }" x-init="
    @if (session('success'))
        show = true; message = '{{ session('success') }}'; type = 'success';
        setTimeout(() => show = false, 3000);
    @elseif (session('error'))
        show = true; message = '{{ session('error') }}'; type = 'error';
        setTimeout(() => show = false, 3000);
    @endif
" x-show="show" x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform translate-y-4"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform translate-y-4"
     class="fixed top-5 right-5 z-50 w-full max-w-sm mx-auto">

    <div x-show="type === 'success'" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline" x-text="message"></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" @click="show = false">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 00-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 12.828l2.934 2.934a1 1 0 101.414-1.414L11.414 10l2.934-2.934z"/>
            </svg>
        </span>
    </div>

    <div x-show="type === 'error'" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline" x-text="message"></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" @click="show = false">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 5.652a1 1 0 00-1.414-1.414L10 7.172 7.066 4.238a1 1 0 00-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 12.828l2.934 2.934a1 1 0 101.414-1.414L11.414 10l2.934-2.934z"/>
            </svg>
        </span>
    </div>
</div>
