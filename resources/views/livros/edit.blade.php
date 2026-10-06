@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Editar Livro</h1>

    <form action="{{ route('livros.update', $livro) }}"
        method="POST" class="space-y-4">

        @csrf
        @method('PUT')

        <div>
            <label for="titulo" class="block mb-1 font-medium">
                Título
            </label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                value="{{ old('titulo', $livro->titulo) }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('titulo')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="ano_publicacao" class="block mb-1 font-medium">
                Ano de publicação
            </label>
            <input
                type="number"
                id="ano_publicacao"
                name="ano_publicacao"
                value="{{ old('ano_publicacao', $livro->ano_publicacao) }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('ano_publicacao')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="isbn" class="block mb-1 font-medium">ISBN</label>
            <input
                type="text"
                id="isbn"
                name="isbn"
                value="{{ old('isbn', $livro->isbn) }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('isbn')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="autor_id" class="block mb-1 font-medium">
                Autor
            </label>

            <select id="autor_id" name="autor_id"
                class="w-full rounded border px-3 py-2">

                <option value="">Selecione um autor</option>

                @foreach ($autores as $autor)
                    <option
                        value="{{ $autor->id }}"
                        {{ old('autor_id', $livro->autor_id) == $autor->id ? 'selected' : '' }}
                    >
                        {{ $autor->nome }}
                    </option>
                @endforeach
            </select>

            @error('autor_id')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-3">
            <button type="submit"
                class="rounded bg-blue-600 text-white px-4 py-2">
                Atualizar
            </button>

            <a href="{{ route('livros.index') }}"
                class="rounded border px-4 py-2">
                Voltar
            </a>
        </div>
    </form>
</div>
@endsection