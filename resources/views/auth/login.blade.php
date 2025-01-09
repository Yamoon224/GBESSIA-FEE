<x-app-layout>
    <div class="text-center mb-4">
        <h4 class="text-uppercase mt-0">@lang('locale.sign_in')</h4>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="mb-2">
            <x-label for="username">@lang('locale.username')</x-label>
            <x-input id="username" type="text" name="username" :value="old('username')" placeholder="{{ __('locale.username') }}" required autocomplete="username" autofocus />
        </div>

        <div class="mb-2">
            <x-label for="password">@lang('locale.password')</x-label>
            <x-input id="password" type="password" name="password" :value="old('password')" required placeholder="{{ __('locale.password') }}" autocomplete="password" />
        </div>

        <div class="mb-2 text-center d-grid">
            <button class="btn btn-primary"> @lang('locale.submit') </button>
        </div>

        <hr/>
        <div class="row">
            <div class="col-md-12">
                <p class="text-inverse text-left"><i class="fa fa-users"></i> <a href="{{ route('welcome') }}"><b>@lang('locale.adhesion')</b></a></p>
            </div>
        </div>
    </form>
    @push('scriptx')
        <script src="{{ asset('public/js/auth.js') }}"></script>
    @endpush
</x-app-layout>
