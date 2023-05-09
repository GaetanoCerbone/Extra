<x-layout>
    <x-navbar />
    <x-header>
        <h1>
            Inserisci un libro
        </h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('book.store')}}" method="POST" class="m-3 p-5 shadow" enctype="multipart/form-data">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text"  name="title" class="form-control" id="title" value="{{old('title')}}">
                    </div>
            
                    <div class="mb-3">
                      <label for="author" class="form-label">Autore</label>
                      <input type="text" name="author" class="form-control" id="author" value="{{old('author')}}">
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Autore</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                      </div>
            
                    <div class="mb-3 form-check">
                        <label class="description" class="form-label">Trama</label>
                        <textarea name="description" id="description" cols="40" rows="10" class="form-control">{{old('description')}}</textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>