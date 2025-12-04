<x-layout title="Nova Compra">

    <form action="{{route('compras.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
         <a href="{{route('compras.index')}}" class="btn btn-dark ">Voltar</a>

    </form>
</x-layout>
