<x-mail::message>

# Correo por Aprobar

<x-mail::panel> Se ha creado un nuevo post </x-mail::panel> 

<x-mail::button :url="route('posts.show', $post)"
    color="primary">
    Click para probar
</x-mail::button>

</x-mail::message>
