{{-- ? Modifica annunci --}}

<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Modifica annuncio</h1>
            </div>
            <div class="col-6">
                <form class="container" method="POST" action="{{ route('articles_update', compact('article')) }}"
                    enctype="multipart/form-data">
                    @method('PUT') {{-- ? OVERRIDE DEL METODO --}}
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="mail" class="form-label">Email</label>
                        <input value="{{ $article->mail }}" name="mail" type="email" class="form-control"
                            id="mail" aria-describedby="emailHelp">
                        @error('mail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Non divulghiamo la tua mail a nessuno</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input name="name" type="text" class="form-control" id="name"
                            value="{{ $article->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="object" class="form-label">Oggetto</label>
                        <input value="{{ $article->object }}" name="object" type="text" class="form-control"
                            id="object">
                        @error('object')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input value="{{ $article->price }}" name="price" type="text" class="form-control"
                            id="price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine</label>
                        <img src="{{ Storage::url($article->img) }}" alt="" width="250">
                        <input name="img" type="file" class="form-control" id="img">
                        @error('img')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">

                        <textarea name="description" class="form-control" placeholder="Descrizione oggetto" id="description"
                            style="height: 150px">{{ $article->description }}</textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <a href=""><button type="submit" class="btn btn-primary mt-3">Applica Modifiche</button></a>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div> --}}
                </form>
            </div>
        </div>

    </div>
</x-layout>
