<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1 class="primario marginTop textShadow3">{{__('ui.Forgot3')}}</h1>
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="mb-3">
                        <label for="email" class="form-label primario textShadow3">{{__('ui.Indirizzo Email')}}</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ $email ?? old('email') }}"
                            required
                            autofocus
                        />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label primario textShadow3">{{__('ui.Inserisci Password')}}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label primario textShadow3">{{__('ui.Conferma Password')}}</label>
                        <input id="password_confirmation" type="password"  class="form-control @error ('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
                        @error('password_confirmation')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">Reset</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>