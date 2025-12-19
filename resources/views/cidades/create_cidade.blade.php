<x-layout title="Nova Cidade">
    <x-cidades.form :action="route('cidades.store')" :nome="old('nome_cidade')" :update="false"/>
</x-layout>
