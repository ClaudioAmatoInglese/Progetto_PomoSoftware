<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-5">
                <h1 class="primario marginTop">Login</h1>
                <div class="text-center">
                    <p class="primario">Non hai ancora un account? <a class="text-decoration-none terziario" href="{{ route('register') }}">Registrati!</a></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('login')}} ">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label primario">Indirizzo Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label primario">Inserisci Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a class="text-decoration-none secondario" href="{{ route('password.request') }}">Hai dimenticato la password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
            @if (request('message'))
                <div class="alert alert-warning mt-5 text-center">
                    {{ request('message') }}
                </div>
            @endif    
        </div>
    </div>    
</x-layout>