<x-app_layout>
    <a href="{{route('posts.create')}}">Crear Post</a>
    @foreach ($posts as $item)
        <ul>
            <li>
                <a href="{{route('posts.show', $item)}}">
                    {{ $item->title }}
                </a>                
            </li>
        </ul>

         <a href="{{route('posts.edit', $item)}}">Editar</a>
    @endforeach

    {{ $posts->links() }}
</x-app_layout>