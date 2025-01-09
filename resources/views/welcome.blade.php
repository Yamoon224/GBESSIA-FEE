<x-app-layout>
    
    <div class="text-center mb-4">
        <h4 class="text-uppercase mt-0">@lang('locale.adhesion')</h4>
    </div>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <div class="mb-2">
            <x-label for="firstname">@lang('locale.firstname') <span class="text-danger">*</span></x-label>
            <x-input type="text" id="firstname" name='firstname' placeholder="{{ __('locale.firstname') }}" required />
        </div>
        <div class="mb-2">
            <x-label for="name">@lang('locale.name') <span class="text-danger">*</span></x-label>
            <x-input type="text" id="name" name='name' placeholder="{{ __('locale.name') }}" required />
        </div>
        <div class="mb-2">
            <x-label for="phone">@lang('locale.phone') <span class="text-danger">*</span></x-label>
            <x-input type="tel" id="phone" name='phone' placeholder="{{ __('locale.phone') }}" required />
        </div>
        <div class="mb-2">
            <x-label for="email">@lang('locale.email') <span class="text-danger">*</span></x-label>
            <x-input type="email" id="email" name='email' placeholder="{{ __('locale.email') }}" required />
        </div>
        <div class="mb-2">
            <x-label for="gender">@lang('locale.gender') <span class="text-danger">*</span></x-label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="">-- @lang('locale.select') --</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>
        <div class="mb-2">
            <x-label for="study">@lang('locale.study') <span class="text-danger">*</span></x-label>
            <select name="study" id="study" class="form-control" required>
                <option value="">-- @lang('locale.select') --</option>
                <option>CEP</option>
                <option>BEPC</option>
                <option>BACCALAUREAT UNIQUE</option>
                <option>LICENCE</option>
                <option>MASTER</option>
                <option>DOCTORAT</option>
                <option>PROFESSORAT</option>
            </select>
        </div>
        <div class="mb-2">
            <x-label for="reason">@lang('locale.reasons')</x-label>
            <textarea name="reason" id="reason" class="form-control" style="resize: none"></textarea>
        </div>
        
        <div class="mb-2">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signup" required>
                <label class="form-check-label" for="checkbox-signup">@lang('locale.read_and_accept') <a href="javascript: void(0);" class="text-dark">@lang('locale.terms') &amp; @lang('locale.conditions')</a></label>
            </div>
        </div>
        <div class="mb-2 text-center d-grid">
            <button class="btn btn-primary"> @lang('locale.submit') </button>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <p class="text-inverse text-left"><i class="fa fa-sign-in"></i> <a href="{{ route('login') }}"><b>@lang('locale.sign_in')</b></a></p>
            </div>
        </div>
    </form>

    @push('scriptx')
        <script src="{{ asset('public/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('public/js/form.js') }}"></script>
    @endpush
</x-app-layout>
