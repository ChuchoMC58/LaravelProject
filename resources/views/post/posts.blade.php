<x-app_layout>
    <a href="{{route('posts.index')}}">Regresar</a>
    <h1> <strong>Titulo:</strong>{{$post->title}} </h1>

    <p>{{$post->content}}</p>
    <br>
    
     <form action="{{route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</x-app_layout>