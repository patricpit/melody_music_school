@csrf

<div class="flex flex-wrap">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ __('Name') }}:
    </label>

    <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
        name="name" value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset" required autocomplete="name" autofocus>

    @error('name')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>

<div class="flex flex-wrap">
    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ __('E-Mail Address') }}:
    </label>

    <input id="email" type="email"
        class="form-input w-full @error('email') border-red-500 @enderror" name="email"
        value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset" required autocomplete="email">

    @error('email')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>

<div class="flex flex-wrap">
    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ __('Phone') }}:
    </label>

    <input id="phone" type="text" class="form-input w-full @error('phone')  border-red-500 @enderror"
        name="phone" value="{{ old('phone') }} @isset($user) {{ $user->phone }} @endisset" required autocomplete="phone" autofocus>

    @error('phone')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>

<div class="flex flex-wrap">
    <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ __('Address') }}:
    </label>

    <input id="address" type="text" class="form-input w-full @error('address')  border-red-500 @enderror"
        name="address" value="{{ old('address') }} @isset($user) {{ $user->address }} @endisset" required autocomplete="address" autofocus>

    @error('address')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>

@isset($create)
<div class="flex flex-wrap">
    <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ __('Password') }}:
    </label>

    <input id="password" type="password"
        class="form-input w-full @error('password') border-red-500 @enderror" name="password"
        required autocomplete="new-password">

    @error('password')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>
<div class="flex flex-wrap">
    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
        {{ __('Password Confirm') }}:
    </label>

    <input id="password_confirmation" type="password"
        class="form-input w-full @error('password_confirmation') border-red-500 @enderror" name="password_confirmation"
        required autocomplete="password_confirmation">

    @error('password_confirmation')
    <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
    </p>
    @enderror
</div>

@endisset
<hr>
<div class="mb-3">
      @foreach($roles as $role)
        <div class="form-check">
            <input class="form-check-input" name="roles[]"
                    type="checkbox" value="{{ $role->id }}" id="{{ $role->name }}"
                @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
            <label class="form-check-label" for="{{ $role->name }}">
                {{ $role->name }}
            </label> 
        </div>
      @endforeach
</div>

<div class="flex flex-wrap">
    <button type="submit"
        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
        {{ __('Submit') }}
    </button>
</div>