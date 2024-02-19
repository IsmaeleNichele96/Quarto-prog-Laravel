<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Accedi</h1>
            </div>
            <div class="col-6">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password"type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Loggati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
