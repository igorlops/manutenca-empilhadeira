@extends('layout.app')
@section('title','Manutenção de empilhadeira')
@section('content')
    <div id="container-content" class="py-5 flex flex-row justify-center">
        <div class="text-white p-8 rounded-lg shadow-lg text-center max-w-2xl z-40">
            <h2 class="text-3xl font-bold text-yellow-400 mb-4">
                🚜 Manutenção de Empilhadeiras com Agilidade e Segurança!
            </h2>

            <p class="text-lg mb-3">
                Sua empilhadeira parada significa <span class="font-bold text-red-500">prejuízo.</span>
                Não deixe isso acontecer! ⚠️
            </p>

            <p class="text-lg mb-3">
                🚧 <span class="font-semibold text-blue-400">Manutenção especializada, rápida e eficiente</span>
                para garantir que sua operação continue sem interrupções.
            </p>

            <p class="text-lg mb-3">
                Com técnicos experientes e <span class="font-semibold text-green-400">peças de qualidade</span>,
                evitamos falhas, reduzimos custos e aumentamos a vida útil do seu equipamento. 💪
            </p>

            <div class="text-left text-lg mt-6 space-y-2">
                <p>✅ <span class="text-yellow-300">Atendimento rápido e personalizado</span></p>
                <p>✅ <span class="text-yellow-300">Manutenção preventiva e corretiva</span></p>
                <p>✅ <span class="text-yellow-300">Suporte técnico especializado</span></p>
            </div>

            <p class="text-xl font-semibold text-white bg-red-500 py-3 px-6 rounded-lg mt-6 inline-block shadow-md">
                📢 Não perca tempo! Preencha o formulário e garanta a máxima eficiência para sua frota! 🚀
            </p>
        </div>

        <div class="bg-opacity-80 backdrop-blur-lg w-2xl p-6 shadow-lg rounded-lg z-40">
            @if (session('message'))
                <div class="@if(session('error_form')) bg-red-200 border border-red-700 @else bg-green-200 border border-green-700 @endif py-3 px-2">
                    <p class="@if(session('error_form')) text-red-700 @else text-green-700 @endif text-sm">{{session('message')}}</p>
                </div>
            @endif
            <form action="{{ route('form.store') }}" method="POST" class="space-y-4">
                @csrf
                @method('POST')

                <!-- Nome -->
                <div>
                    <label for="nome" class="block text-white font-semibold">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome aqui"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nome') border-red-500 @enderror"
                        value="{{ old('nome') }}"/>
                    @error('nome')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Telefone -->
                <div>
                    <label for="telefone" class="block text-white font-semibold">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone aqui"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('telefone') border-red-500 @enderror"
                        value="{{ old('telefone') }}"/>
                    @error('telefone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- E-mail -->
                <div>
                    <label for="email" class="block text-white font-semibold">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail aqui"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"/>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Mensagem -->
                <div>
                    <label for="mensagem" class="block text-white font-semibold">Mensagem:</label>
                    <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem aqui"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('mensagem') border-red-500 @enderror">{{ old('mensagem') }}</textarea>
                    @error('mensagem')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botão de Envio -->
                <div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">
                        Enviar Mensagem
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

