<x-layout>
    <x-navbar />
    <x-header>
        <h1>BIBLIOTECA</h1>
    </x-header>
    @if(session('bookCreated'))
        <div class="alert alert-success m-0">
            {{session('bookCreated')}}
        </div>
    @endif
    @if(session('emailSent'))
    <div class="alert alert-succes m-0">
        {{session('emailSent')}}
    </div>
    @endif
    <section class="biblioteca"></section>
    <x-footer />
</x-layout>