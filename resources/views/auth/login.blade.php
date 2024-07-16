<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="text" name="email" required />
    <input type="password" name="password" required>
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>
    <button type="submit">Se connecter</button>
</form>
