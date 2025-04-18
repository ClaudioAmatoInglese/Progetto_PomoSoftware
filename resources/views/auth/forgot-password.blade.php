<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h2>Hai dimenticato la password?</h2>
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
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" required autofocus>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Invia link di reset</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>