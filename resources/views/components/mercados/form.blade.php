    <form action="{{ $action }}" method="POST">
        @csrf
        @if($update)

            @method('PUT')

        @endif

        <div class="mb-3">
            <label for="nome_mercado" class="form-label">nome_mercado:</label>
            <input
            class="form-control"
            type="text"
            id="nome_mercado"
            name="nome_mercado"
            @isset($nome_mercado)
                value="{{$nome_mercado}}"
            @endisset
            >
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('compras.index') }}" class="btn btn-dark ">Voltar</a>

    </form>
