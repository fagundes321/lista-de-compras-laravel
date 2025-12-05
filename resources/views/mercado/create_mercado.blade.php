<x-layout title="Nova Mercado">
    <x-compras.form :action="route('compras.store')" :nome="old('nome')" :update="false"/>
</x-layout>
