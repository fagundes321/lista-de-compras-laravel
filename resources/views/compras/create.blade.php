<x-layout title="Nova Compra">

    <x-compras.form :action="route('compras.store')" :nome="old('nome')" :update="false"/>
</x-layout>
