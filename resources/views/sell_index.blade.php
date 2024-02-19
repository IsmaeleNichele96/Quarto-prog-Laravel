<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2 text center">Ecco tutti i nostri annunci</h1>
            </div>
            @foreach ($articles as $article)
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p class="card-text">{{ $article->object }} </p>
                            <p class="card-text">{{ $article->price }} </p>
                            <p class="card-text">{{ $article->description }} </p>
                            <a href="{{ route('articles_show', compact('article')) }}" class="btn btn-primary">Leggi di
                                più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
