<x-app-layout>
<div class="bg-white">
    @slot('header')
       <x-navbar/>
    @endslot
    
    <x-hero/>
    
    @slot('footer')
        <x-footer/>
    @endslot
</div>
</x-app-layout>
