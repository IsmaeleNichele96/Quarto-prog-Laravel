<x-layout>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-6">

                <form method="POST" action="{{ route('contattaci_submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="EmailUtente" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="EmailUtente"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="NomeUtente" class="form-label">Nome Completo</label>
                        <input name="name" type="name" class="form-control" id="NomeUtente">
                    </div>
                    <div class="mb-3">
                        <label for="TestoUtente">Messaggio</label>
                        <textarea name="text" class="form-control" placeholder="Inserisci qui il tuo messaggio" id="TestoUtente"
                            style="height: 100px"></textarea>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
    </div>

</x-layout>
