<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Llistat d'imatges</h1>
                    @foreach ($images as $image)
                    <p>Imatge: {{ $image->id}} -- {{$image->image_path }}</p>
                    <p>Descripció: {{ $image -> description}}</p>
                    <p>Imatge de: {{ $image-> user->name}} {{ $image-> user->surname }}</p>
                    <p>LIKE: {{count($image->likes)}}</p>
                    @if (count($image->comments)>0)

                    <h4>Comentaris</h4>
                    @foreach ($image->comments as $comment)
                    <p>{{ $comment->user->name}}: {{ $comment->content}}</p>

                    @endforeach
                    @endif
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>