<x-layout>
    <x-navbar />
    <x-header>
        <h1>
            CONTATTACI
        </h1>
    </x-header>
    @if (session('emailError'))
    <div class="alert alert-danger text-center m-0">
        {{session('emailError')}}
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('contact.us')}}" method="POST" class="m-3 p-5 shadow">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text"  name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" name="surname" class="form-control" id="surname">
                      </div>
            
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
            
                    <div class="mb-3 form-check">
                        <label class="notation" class="form-label">Messaggio</label>
                        <textarea name="notation" id="notation" cols="40" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>