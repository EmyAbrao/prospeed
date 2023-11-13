<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Atualize sua senha') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Redefina sua senha para aumentar a segurança de sua conta.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Editar Login</h5>
                    <div class="card-body">
                        <div>
                            <x-input-label for="current_password" class="form-label" :value="__('Current Password')" />
                            <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="form-text" />
                        </div>
                
                        <div>
                            <x-input-label for="password" class="form-label" :value="__('New Password')" />
                            <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="form-text" />
                        </div>
                
                        <div>
                            <x-input-label for="password_confirmation" class="form-label" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="form-text" />
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                
                            @if (session('status') === 'password-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                        <div class="flex items-center gap-4" style="margin-top: 20px">
                            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
                            <div class="row">
                                <div class="col-2"> 
                                    <button type="submit" class="btn btn-outline-warning">Salvar</button>
                                </div>
                                <div class="col-10" style="align-content: center; align-items: center;">
                                    @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Salvo.') }}</p>
                                    @endif 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           </form>
</section>
