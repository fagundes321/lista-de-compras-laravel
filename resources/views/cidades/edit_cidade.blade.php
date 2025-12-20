<x-layout title="Editar Item: {{ $cidade->nome_cidade }}">
    <x-cidades.form :action="route('cidades.update', $cidade->id)" :nome="$cidade->nome_cidade" :update="true"/>
</x-layout>
