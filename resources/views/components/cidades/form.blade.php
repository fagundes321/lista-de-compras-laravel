<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-5">

            <div class="card shadow-sm border border-dark">

                {{-- HEADER --}}
                <div class="card-header bg-dark text-white fw-semibold">
                    {{ $update ? 'Editar Cidade' : 'Nova Cidade' }}
                </div>

                <div class="card-body">

                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @if ($update)
                            @method('PUT')
                        @endif

                        {{-- NOME --}}
                        <div class="mb-3">
                            <label for="nome_cidade" class="form-label fw-semibold text-dark">
                                Nome da Cidade
                            </label>
                            <input
                                required
                                autofocus
                                class="form-control border-dark"
                                type="text"
                                id="nome_cidade"
                                name="nome_cidade"
                                placeholder="Ex.: São Paulo"
                                value="{{ $nome ?? '' }}"
                            >
                        </div>

                        <hr class="my-4 border-dark">

                        {{-- AÇÕES --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('cidades.index') }}"
                               class="btn btn-outline-dark px-4">
                                Voltar
                            </a>

                            <button type="submit"
                                    class="btn btn-dark px-4">
                                {{ $update ? 'Salvar Alterações' : 'Adicionar' }}
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
