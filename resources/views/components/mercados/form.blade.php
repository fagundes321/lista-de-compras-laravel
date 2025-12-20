<form action="{{ $action }}" method="POST">
    @csrf

    @if ($update)
        @method('PUT')
    @endif

    {{-- Nome --}}
    <div class="mb-4">
        <label for="nome_mercado" class="form-label fw-semibold text-dark">
            Nome do Mercado
        </label>

        <input
            required
            autofocus
            type="text"
            id="nome_mercado"
            name="nome_mercado"
            class="form-control border-dark"
            placeholder="Ex.: Supermercado Central"
            value="{{ old('nome_mercado', $nome ?? '') }}"
        >
    </div>

    <hr class="border-dark">

    {{-- Botões --}}
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('mercado.index') }}"
           class="btn btn-outline-dark">
            Voltar
        </a>

        <button type="submit" class="btn btn-dark">
            {{ $update ? 'Salvar Alterações' : 'Adicionar Mercado' }}
        </button>
    </div>
</form>
