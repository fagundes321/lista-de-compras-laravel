<x-layout title="Editar Item: {{ $compra->nome }}">
    <x-compras.form :action="route('compras.update', $compra->id)" :nome="$compra->nome" :update="true"/>
</x-layout>
