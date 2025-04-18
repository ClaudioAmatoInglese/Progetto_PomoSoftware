<x-layout>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Progetto Finale Presto By PomoSoftware</h1>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</x-layout>