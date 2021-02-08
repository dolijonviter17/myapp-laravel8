<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Question') }}

            <a href="{{route('questions.index')}}">Back Question</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="post">
                         @include ("questions._form", ['buttonText' => "Ask Question"])
                    </form>
                 </div>
               
        </div>
    </div>
</x-app-layout>
