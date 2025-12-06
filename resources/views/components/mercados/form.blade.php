    <form action="{{ $action }}" method="POST">
        @csrf
        @if($update)

            @method('PUT')

        @endif

        <div class="mb-3">
            <label for="nome_mercado" class="form-label">Nome:</label>
            <input
            class="form-control"
            type="text"
            id="nome_mercado"
            name="nome_mercado"
            @isset($nome)
                value="{{$nome}}"
            @endisset
            >
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('mercado.index') }}" class="btn btn-dark ">Voltar</a>

    </form>
