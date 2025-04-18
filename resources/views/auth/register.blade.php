<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="primario marginTop">Registrati</h1>
                <div class="text-center mx-2 fs-5">
                    <p class="primario">Hai già un account? <a class="text-decoration-none terziario" href="{{ route('login') }}">Accedi!</a></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="mb-3">
                    <label for="user-name" class="form-label primario">Nome Utente</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="user-name" aria-describedby="emailHelp" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label primario">Indirizzo Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label primario">Inserisci Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password-confirmation" class="form-label primario">Conferma Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="justify-content-center d-flex">
                  <button type="submit" class="btn btn-primary mb-3">Crea</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>