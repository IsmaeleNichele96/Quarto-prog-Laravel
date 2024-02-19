<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text center">Inserisci quello che vuoi vendere</h1>
            </div>
        </div>
    </div>
    <form class="container" method="POST" action="{{ route('sell_store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-6">

                <div class="mb-3 mt-3">
                    <label for="mail" class="form-label">Email</label>
                    <input value="{{ old('mail') }}" name="mail" type="email" class="form-control" id="mail"
                        aria-describedby="emailHelp">
                    @error('mail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div id="emailHelp" class="form-text">Non divughiamo la tua mail a nessuno</div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input name="name" type="text" class="form-control" id="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="object" class="form-label">Oggetto</label>
                    <input value="{{ old('object') }}" name="object" type="text" class="form-control"
                        id="object">
                    @error('object')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input value="{{ old('price') }}" name="price" type="text" class="form-control"
                        id="price">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Immagine</label>
                    <input value="{{ old('img') }}" name="img" type="file" class="form-control"
                        id="img">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">

                    <textarea name="description" class="form-control" placeholder="Descrizione oggetto" id="description"
                        style="height: 150px">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <a href=""><button type="submit" class="btn btn-primary mt-3">Pubblica Annuncio</button></a>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div> --}}
            </div>
        </div>

    </form>

</x-layout>
