<x-layout title="">

    <div class="container mt-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold text-dark m-0">
                Lista de Compras
            </h2>

            <div class="d-flex gap-2">
                <a href="{{ route('compras.create') }}" class="btn btn-dark">
                    + Nova Compra
                </a>

                <a href="{{ route('mercado.index') }}" class="btn btn-outline-dark">
                    Mercados
                </a>

                <a href="{{ route('cidades.index') }}" class="btn btn-outline-dark">
                    Cidades
                </a>
            </div>
        </div>

        {{-- Mensagem de sucesso --}}
        @isset($mensagemSucesso)
            <div class="alert alert-success border border-dark shadow-sm">
                {{ $mensagemSucesso }}
            </div>
        @endisset

        {{-- Card da tabela --}}
        <div class="card shadow-sm border border-dark">
            <div class="card-body p-0">

                <table class="table table-hover align-middle mb-0 text-center">

                    {{-- Cabeçalho --}}
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center" style="width: 60px;">#</th>
                            <th class="">Item</th>
                            <th>Marca</th>
                            <th>Mercado</th>
                            <th>Cidade</th>
                            <th>Qtd/Kg</th>
                            {{-- <th>Preço unitario</th> --}}
                            <th>Preço total</th>
                            <th class="text-center" style="width: 160px;">Ações</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider ">

                        @forelse ($compras as $compra)
                            <tr>
                                <th class="text-center">
                                    {{ $loop->iteration }}
                                </th>

                                <td class="fw-semibold text-dark">
                                    {{ $compra->nome }}
                                </td>
                                <td class="text-muted ">
                                    {{$compra->marca ?? '-'}}
                                </td>
                                <td class="text-muted">
                                    {{ $mercados->firstWhere('id', $compra->mercado_id)->nome_mercado ?? '-' }}
                                </td>

                                <td class="text-muted">
                                    {{ $cidades->firstWhere('id', $compra->cidade_id)->nome_cidade ?? '-' }}
                                </td>

                                <td class="fw-semibold text-muted">
                                    qtd
                                </td>
{{--
                                <td class="text-muted small">
                                    @if ($compra->preco !== null && $compra->preco !== '')
                                        R$ {{ number_format($compra->preco, 2, ',', '.') }}
                                    @else
                                        -
                                    @endif
                                </td> --}}

                                <td class="fw-bold text-success">
                                       @if ($compra->preco !== null && $compra->preco !== '')
                                        R$ {{ number_format($compra->preco, 2, ',', '.') }}
                                    @else
                                        -
                                    @endif
                                    <div class="text-muted small">
                                           @if ($compra->preco !== null && $compra->preco !== '')
                                       x * R$ {{ number_format($compra->preco, 2, ',', '.') }}
                                    @else
                                        -
                                    @endif
                                    </div>
                                </td>

                                {{-- Ações --}}
                                <td>
                                    <div class="d-flex justify-content-center gap-2">

                                        {{-- Editar --}}
                                        <a href="{{ route('compras.edit', $compra->id) }}"
                                            class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center"
                                            title="Editar" style="width: 36px; height: 36px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                            </svg>
                                        </a>

                                        {{-- Excluir --}}
                                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST"
                                            onsubmit="return confirm('Deseja excluir este item?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm d-flex align-items-center justify-content-center"
                                                title="Excluir" style="width: 36px; height: 36px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    Nenhum item cadastrado.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
        {{-- Resumo / Soma --}}
        <div class="row mt-4 mb-4">

            {{-- Total de Itens --}}
            <div class="col-md-4 mb-2">
                <div class="card border border-dark shadow-sm h-100">
                    <div class="card-body text-center">
                        <span class="text-muted fw-semibold text-uppercase small">
                            Total de Itens
                        </span>

                        <h3 class="fw-bold mt-2 mb-0">
                            {{ $compras->count() ?? 0 }}
                        </h3>
                    </div>
                </div>
            </div>

            {{-- Soma Total --}}
            <div class="col-md-8 mb-2">
                <div class="card border border-dark shadow-sm h-100 bg-dark text-white">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <span class="text-uppercase fw-semibold small">
                            Valor Total das Compras
                        </span>

                        <h2 class="fw-bold mt-2 mb-0">
                            R$ {{ number_format($totalCompras, 2, ',', '.') }}
                        </h2>


                        <small class="opacity-75 mt-1">
                            Soma de todos os itens cadastrados
                        </small>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layout>
