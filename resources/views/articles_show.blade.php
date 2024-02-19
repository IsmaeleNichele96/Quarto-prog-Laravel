<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center">Dettagli</h1>
            </div>
            <div class="col-6">
                <h2>{{ $article->name }}</h2>
                <h4>{{ $article->price }} $/notte</h4>
                <p>{{ $article->description }} </p>
            </div>
            <div class="col-6 pt-5">
                <img src="{{ Storage::url($article->img) }} " alt="" width="600">
            </div>
            @auth
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('articles_edit', compact('article')) }}" class="btn btn-warning">Modifica
                            Annuncio</a>
                    </div>
                    <div class="col-4">
                        <form method="post" action="{{ route('article_delete', compact('article')) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Elimina Annuncio</button>
                        </form>
                    </div>
                </div>


            @endauth


        </div>
    </div>
</x-layout>
