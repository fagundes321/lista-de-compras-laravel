<x-layout title="Nova Compra">

    <form action="{{ route('compras.store') }}" method="POST">
        @csrf

        <div class="row mb-3">

            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input
                    class="form-control"
                    type="text"
                    autofocus
                    id="nome"
                    name="nome"
                    value="{{ old('nome') }}"
                >
            </div>

            <div class="col-2">
                <label class="form-label">Mercado:</label>
                <select class="form-select" name="mercado1_id">
                    <option selected>Selecione o mercado</option>
                    @foreach ($mercados as $mercado)
                        <option value="{{ $mercado->id }}">
                            {{ $mercado->nome_mercado }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-2">
                <label class="form-label">Cidade:</label>
                <select class="form-select" name="mercado2_id">
                    <option selected>Selecione a cidade</option>
                    @foreach ($mercados as $mercado)
                        <option value="{{ $mercado->id }}">
                            {{ $mercado->nome_mercado }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('compras.index') }}" class="btn btn-dark">Voltar</a>
    </form>

</x-layout>
