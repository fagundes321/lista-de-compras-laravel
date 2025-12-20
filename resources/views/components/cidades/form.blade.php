    <form action="{{ $action }}" method="POST">
        @csrf
        @if($update)

            @method('PUT')

        @endif

        <div class="mb-3">
            <label for="nome_cidade" class="form-label">Nome:</label>
            <input
            required
            class="form-control"
            type="text"
            id="nome_cidade"
            name="nome_cidade"
            @isset($nome)
                value="{{$nome}}"
            @endisset
            >
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('cidades.index') }}" class="btn btn-dark ">Voltar</a>

    </form>
