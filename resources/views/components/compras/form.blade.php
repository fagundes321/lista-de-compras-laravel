    <form action="{{ $action }}" method="POST">
        @csrf
        @if($update)

            @method('PUT')

        @endif

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input
            class="form-control"
            type="text"
            id="nome"
            name="nome"
            @isset($nome)
                value="{{$nome}}"
            @endisset
            >
            {{-- <select class="form-select" aria-label="Default select example">
        <option selected>Selecione o mercado</option>
        @foreach ($mercados as $mercado)
            <option value="2">{{$mercado->nome_mercado}}</option>
        @endforeach

        </select> --}}
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('compras.index') }}" class="btn btn-dark ">Voltar</a>

    </form>

