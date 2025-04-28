<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
                <h1 class="primario marginTop textShadow3">{{__('ui.Forgot1')}}</h1>
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label primario textShadow3">{{__('ui.Indirizzo Email')}}</label>
                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" required autofocus>
                        @error('email')
                            <div class="text-danger bg-warning p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">{{__('ui.Forgot2')}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>