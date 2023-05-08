<x-layout>
    <x-navbar />
    <x-header>
        <h1>LISTA LIBRI</h1>
    </x-header>
    <div class="container my-5">
        <div class="row">
            @foreach($books as $book)
                <div class="col-12 col-md-3 p-4">
                    <div class="card">
                        <img src="https://picsum.photos/200" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">{{$book->author}}</p>
                        <p class="card-text">{{$book->description}}</p>
                        
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>