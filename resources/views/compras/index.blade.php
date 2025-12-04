<x-layout title="Compras">

    <a href="compras/criar" class="btn btn-dark mb-2">Adicionar novas compras</a>

    <ul class="list-group">
        @foreach ($compras as $compra)
            <li class="list-group-item">{{$compra}}</li>
        @endforeach
    </ul>


    <script>

    </script>
</x-layout>

