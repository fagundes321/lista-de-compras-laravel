<x-layout title="Compras">

    <a href="{{route('compras.create')}}" class="btn btn-dark mb-2">Adicionar novas compras</a>

    <ul class="list-group">
        @foreach ($compras as $compra)
            <li class="list-group-item d-flex justify-content-between" name="{{ $compra->nome }}">
                {{ $compra->nome }}
                <form action="{{route('compras.destroy', $compra->id)}}" method="POST" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn btn-danger mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                        </svg>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>


    <script></script>
</x-layout>
