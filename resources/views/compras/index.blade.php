<x-layout title="Lista de Compras">

    <a href="{{ route('compras.create') }}" class="btn btn-dark mb-2">Adicionar novas compras</a>
    <a href="{{ route('mercado.index') }}" class="btn btn-secondary mb-2">Mercados</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <table class="table table-hover align-middle shadow-sm rounded overflow-hidden">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item</th>
                <th scope="col">Mercado</th>
                <th scope="col">Preço</th>
                <th scope="col" class="text-center">Ação</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @foreach ($compras as $index => $compra)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>

                    <td class="fw-semibold">
                        {{ $compra->nome }}
                    </td>

                    <td class="text-muted">
                        Mercado opção
                    </td>

                    <td class="text-muted">
                        Preço da opção
                    </td>

                    <td class="text-center d-flex gap-2 justify-content-center"> <a
                            href="{{ route('compras.edit', $compra->id) }}" class="btn btn-success mb-2 "> <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg> </a>
                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST"
                            class="bd-highlight ms-2"> @csrf @method('DELETE') <button type="submit"
                                class=" btn btn-danger mb-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg> </button> </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    <script></script>
</x-layout>
