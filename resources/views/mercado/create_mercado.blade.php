<x-layout title="Novo Mercado">
    <x-mercados.form :action="route('mercado.store')" :nome="old('nome_mercado')" :update="false"/>
</x-layout>
