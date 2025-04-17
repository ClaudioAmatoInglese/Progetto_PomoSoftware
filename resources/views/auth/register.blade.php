<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Registrati</h1>
                <div class="text-center mx-2 fs-5">
                    <p>Hai già un account? <a class="text-decoration-none" href="{{ route('login') }}">Accedi!</a></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="mb-3">
                    <label for="user-name" class="form-label">Nome Utente</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="user-name" aria-describedby="emailHelp" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Inserisci Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password-confirmation" class="form-label">Conferma Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>