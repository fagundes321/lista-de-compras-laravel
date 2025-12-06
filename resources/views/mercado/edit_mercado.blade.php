<x-layout title="Editar Item: {{ $mercado->nome_mercado }}">
    <x-mercados.form :action="route('mercado.update', $mercado->id)" :nome="$mercado->nome_mercado" :update="true"/>
</x-layout>
