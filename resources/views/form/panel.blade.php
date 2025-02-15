@extends('layout.app')
@section('title','Manutenção de empilhadeira')
@section('content')
    <h2>Formulários preenchidos</h2>
    <div class="py-5 flex flex-col gap-5 justify-around items-center">
        <table class="max-w-7xl table-auto rounded-lg shadow-md overflow-hidden">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Nome</th>
                    <th class="py-3 px-4 text-left">Telefone</th>
                    <th class="py-3 px-4 text-left">E-mail</th>
                    <th class="py-3 px-4 text-left">Mensagem</th>
                    <th class="py-3 px-4 text-left">Criado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactsSaved as $item)
                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-300">
                        <td class="py-3 px-4">{{ $item->nome }}</td>
                        <td class="py-3 px-4"><a href="tel:{{ $item->telefone }}" class="text-blue-500 hover:text-blue-700">{{ $item->telefone }}</a></td>
                        <td class="py-3 px-4"><a href="mailto:{{ $item->email }}" class="text-blue-500 hover:text-blue-700">{{ $item->email }}</a></td>
                        <td class="py-3 px-4">{{ $item->mensagem }}</td>
                        <td class="py-3 px-4">{{ $item->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $contactsSaved->links('pagination::tailwind') }}
        </div>
    </div>
@endsection

