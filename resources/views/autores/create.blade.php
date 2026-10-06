@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Cadastrar Autor</h1>

    <form action="{{ route('autores.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="nome" class="block mb-1 font-medium">Nome</label>
            <input
                type="text"
                id="nome"
                name="nome"
                value="{{ old('nome') }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('nome')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="nacionalidade" class="block mb-1 font-medium">
                Nacionalidade
            </label>
            <input
                type="text"
                id="nacionalidade"
                name="nacionalidade"
                value="{{ old('nacionalidade') }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('nacionalidade')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-3">
            <button type="submit"
                class="rounded bg-blue-600 text-white px-4 py-2">
                Salvar
            </button>

            <a href="{{ route('autores.index') }}"
                class="rounded border px-4 py-2">
                Voltar
            </a>
        </div>
    </form>
</div>
@endsection