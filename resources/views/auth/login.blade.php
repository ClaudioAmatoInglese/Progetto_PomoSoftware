<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
                <h1 class="primario marginTop textShadow3">{{__('ui.Accedi')}}</h1>
                <div class="text-center">
                    <p class="primario textShadow3">{{__('ui.Login1')}} <a class="text-decoration-none terziario" href="{{ route('register') }}">{{__('ui.Registrati')}}</a></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('login')}} ">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label primario textShadow3">{{__('ui.Indirizzo Email')}}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div id="popup-success" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label primario textShadow3">{{__('ui.Inserisci Password')}}</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        <div id="popup-success" class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a class="text-decoration-none secondario textShadow2" href="{{ route('password.request') }}">{{__('ui.Forgot1')}}</a>
                    </div>
                    <div class="d-flex justify-content-center">
                       <button type="submit" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle">{{__('ui.Accedi')}}</button>
                    </div>
                </form>
            </div>
            @if (request('message'))
                <div id="popup-success" class="alert alert-warning mt-5 text-center">
                    {{ request('message') }}
                </div>
            @endif    
        </div>
    </div>    
</x-layout>