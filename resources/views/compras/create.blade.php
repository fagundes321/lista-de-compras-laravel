<x-layout title="Nova Compra">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <div class="card shadow-sm border border-dark">
                    {{-- Header --}}
                    <div class="card-header bg-dark text-white fw-semibold">
                        Nova Compra
                    </div>

                    <div class="card-body">

                        <form action="{{ route('compras.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                {{-- Nome --}}
                                <div class="col-md-6">
                                    <label for="nome" class="form-label fw-semibold text-dark">
                                        Nome do Produto
                                    </label>
                                    <input
                                        required
                                        class="form-control border-dark"
                                        type="text"
                                        id="nome"
                                        name="nome"
                                        placeholder="Ex.: Arroz, Feijão..."
                                        value="{{ old('nome') }}"
                                        autofocus
                                    >
                                </div>

                                {{-- Preço --}}
                                <div class="col-md-3">
                                    <label for="preco" class="form-label fw-semibold text-dark">
                                        Preço
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-dark text-dark">
                                            R$
                                        </span>
                                        <input
                                            class="form-control border-dark"
                                            type="text"
                                            id="preco"
                                            name="preco"
                                            placeholder="0,00"
                                            value="{{ old('preco') }}"
                                            oninput="formatarMoeda(this)"
                                        >
                                    </div>
                                </div>

                                {{-- Mercado --}}
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Mercado
                                    </label>
                                    <select class="form-select border-dark" name="mercado_id" required>
                                        <option value="" disabled selected>
                                            Selecione
                                        </option>
                                        @foreach ($mercados as $mercado)
                                            <option value="{{ $mercado->id }}">
                                                {{ $mercado->nome_mercado }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Cidade --}}
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold text-dark">
                                        Cidade
                                    </label>
                                    <select class="form-select border-dark" name="cidade_id" required>
                                        <option value="" disabled selected>
                                            Selecione
                                        </option>
                                        @foreach ($cidades as $cidade)
                                            <option value="{{ $cidade->id }}">
                                                {{ $cidade->nome_cidade }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <hr class="my-4 border-dark">

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('compras.index') }}"
                                   class="btn btn-outline-dark px-4">
                                    Voltar
                                </a>

                                <button type="submit"
                                        class="btn btn-dark px-4">
                                    Salvar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function formatarMoeda(input) {
            let value = input.value.replace(/\D/g, "");
            value = (value / 100).toFixed(2);
            input.value = value.replace(".", ",");
        }
    </script>

</x-layout>
