<x-layout title="Editar Item: {{ $mercados->nome }}">
    <x-mercados.form :action="route('compras.update', $mercados->id)" :nome="$mercados->nome_mercado" :update="true"/>
</x-layout>
