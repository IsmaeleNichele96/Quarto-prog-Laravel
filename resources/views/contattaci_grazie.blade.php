<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text center">Grazie per averci contattato {{$name}}</h1>
                <h3 class="display-5 text center">Ci sentiremo al più presto!</h3>
            </div>
            <a href="{{ route('welcome') }}"><button class="btn btn-primary">Torna alla home</button></a>
        </div>
    </div>
</x-layout>
