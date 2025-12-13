    {{-- <x-compras.form :action="route('compras.update', $compra->id)" :nome="$compra->nome" :update="true"/> --}}

    <x-layout title="Editar: {{ $compra->nome }}">


        <form action="{{ route('compras.update', $compra->id) }}" method="POST"
            class="p-3 border rounded shadow-sm bg-light">
            @csrf
            @method('PUT')
            <div class="row g-3">

                {{-- Nome --}}
                <div class="col-md-6">
                    <label for="name" class="form-label fw-semibold">Nome do Produto:</label>
                    <input required class="form-control" type="text" id="nome"
                        name="nome" placeholder="Ex.: Arroz, Feijão..."
                        value="{{ old('nome', $compra->nome) }}" autofocus>
                </div>

                {{-- Mercado --}}
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Mercado:</label>
                    <select class="form-select" name="mercado_id">
                        <option selected disabled>Selecione o mercado</option>
                        @foreach ($mercados as $mercado)
                            <option value="{{ $mercado->id }}">
                                {{ $mercado->nome_mercado }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Cidade --}}
                {{-- <div class="col-md-3">
                <label class="form-label fw-semibold">Cidade:</label>
                <select class="form-select" name="mercado2_id">
                    <option selected disabled>Selecione a cidade</option>
                    @foreach ($mercados as $mercado)
                        <option value="{{ $mercado->id }}">
                            {{ $mercado->nome_mercado }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

                {{-- Preço --}}
                <div class="col-md-4">
                    <label for="preco" class="form-label fw-semibold">Preço:</label>
                    <input class="form-control" type="text" id="preco" name="preco" placeholder="Ex.: 12,50"
                        value="{{ old('preco', $compra->preco) }}" oninput="formatarMoeda(this)">
                </div>

                <script>
                    function formatarMoeda(input) {
                        let value = input.value.replace(/\D/g, "");

                        value = (value / 100).toFixed(2) + "";
                        value = value.replace(".", ",");
                        input.value = value;
                    }
                </script>

            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">Adicionar</button>
                <a href="{{ route('compras.index') }}" class="btn btn-secondary px-4">Voltar</a>
            </div>

        </form>

    </x-layout>
