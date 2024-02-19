<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 header d-flex justify-content-center">
                <h1 class="display-1 text-center">Benvenuti sul mio sito</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            @foreach ($articles as $article)
                <div class="col-4 d-flex justify-content-center my-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p class="card-text">{{ $article->object }} </p>
                            <p class="card-text">{{ $article->price }} </p>
                            <p class="card-text">{{ $article->description }} </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
