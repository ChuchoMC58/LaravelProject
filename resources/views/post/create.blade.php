<x-app_layout>
    <h1>Crear Post:</h1>
    {{-- @if ($errors->any())
        <h2>Errores:</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>        
    @endif --}}
        
   <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="">
            Titulo:
            <input type="text" name="title" value="{{old('title')}}">
        </label>
        @error('title')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
        <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Contenido:
            <textarea name="content" id="" cols="30" rows="10" > {{old('content')}}</textarea>
        </label>
        @error('content')
        <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Crear Post</button>
   </form>
</x-app_layout>