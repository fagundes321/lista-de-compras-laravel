<x-layout title="Compras">

    <a href="compras/criar">Adicionar novas compras</a>

    <ul>
        @foreach ($compras as $compra)
            <li>{{$compra}}</li>
        @endforeach
    </ul>

    <script>

    </script>
</x-layout>

