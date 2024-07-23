<x-app_layout>
    <h1>Editar Post:</h1>

     @if ($errors->any())
        <h2>Errores:</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>        
    @endif
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf 
        @method('PUT')

        <label for="">
            Titulo:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>

        <label for="">
            Slug:
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>

        <label for="">
            Contenido:
            <textarea name="content" id="" cols="30" rows="10"> {{old('content',$post->content)}}</textarea>
        </label>

        <button type="submit">Aceptar</button>
    </form>
 </x-app_layout>