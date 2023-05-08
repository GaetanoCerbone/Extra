<x-layout>
    <x-navbar />
    <x-header>
        <h1>BIBLIOTECA</h1>
    </x-header>
    @if(session('bookCreated'))
        <div class="alert alert-success">
            {{session('bookCreated')}}
        </div>
    @endif
    <section class="biblioteca"></section>
    <x-footer />
</x-layout>