@extends('layout.app')
@section('title','Manutenção de empilhadeira')
@section('content')
    <div id="container-content" class="py-5 flex flex-col justify-center min-h-[100vh]">
        <div class="container mx-auto container-cta-form z-[999] flex flex-col-reverse gap-5 lg:gap-0 justify-center items-center lg:flex-row lg:justify-around py-[70px]">
            <div class="text-white text-left max-w-2xl z-40 font-[Roboto]">
                <h2 class="text-[30px] sm:text-[40px] md:text-[50px] font-bold text-white uppercase">
                    Manutenção de Empilhadeiras com Agilidade e Segurança!
                </h2>
                <p class="text-md sm:text-xl mb-3">
                    Sua empilhadeira parada significa prejuízo.
                    Não deixe isso acontecer!
                </p>

                <p class="text-md sm:text-xl mb-3">
                    <span class="font-semibold text-blue-400">Manutenção especializada, rápida e eficiente</span>
                    para garantir que sua operação continue sem interrupções.
                </p>

                <p class="text-md sm:text-xl mb-3">
                    Com técnicos experientes e <span class="font-semibold text-green-400">peças de qualidade</span>,
                    evitamos falhas, reduzimos custos e aumentamos a vida útil do seu equipamento.
                </p>

                <div class="text-left text-md sm:text-xl mt-6 space-y-2">
                    <p>
                        <span class="text-yellow-300 font-bold flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[30px] h-[30px] bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                            </svg>
                            Atendimento rápido e personalizado
                        </span>
                    </p>
                    <p>
                        <span class="text-yellow-300 font-bold flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[30px] h-[30px] bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                            </svg>
                            Manutenção preventiva e corretiva
                        </span>
                    </p>
                    <p>
                        <span class="text-yellow-300 font-bold flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[30px] h-[30px] bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                            </svg>
                            Suporte técnico especializado
                        </span>
                    </p>
                </div>

                <p class="text-xl font-semibold text-white bg-yellow-500 py-3 px-6 rounded-lg mt-6 inline-block shadow-md pulse cursor-pointer" onclick="onFocusInputNome()">
                    📢 Não perca tempo! Preencha o formulário e garanta a máxima eficiência para sua frota! 🚀
                </p>
            </div>

            <div class="backdrop-blur-lg shadow-lg rounded-lg z-40 flex flex-col lg:self-start items-center lg:sticky top-10 overflow-hidden" style="background-color: #1e5d8e71">
                <div class="bg-white w-full top-0 p-5 font-bold font-[Roboto] mt-0">
                    <p class="text-2xl text-center text-[#398AC8]">Solicite a manutenção da sua empilhadeira</p>
                </div>

                <form action="{{ route('form.store') }}" method="POST" class="space-y-4 w-full p-6">
                    @csrf
                    @method('POST')

                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block text-white font-semibold">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome"
                            class="w-full px-4 py-3 text-white border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#398AC8] border-white focus:border-none @error('nome') border-red-500 @enderror"
                            value="{{ old('nome') }}"/>
                        @error('nome')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Telefone -->
                    <div>
                        <label for="telefone" class="block text-white font-semibold">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone"
                            class="w-full px-4 py-3 text-white border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#398AC8] border-white focus:border-none @error('telefone') border-red-500 @enderror"
                            value="{{ old('telefone') }}"/>
                        @error('telefone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- E-mail -->
                    <div>
                        <label for="email" class="block text-white font-semibold">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail"
                            class="w-full px-4 py-3 text-white  border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#398AC8] border-white focus:border-none @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}"/>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mensagem -->
                    <div>
                        <label for="mensagem" class="block text-white font-semibold">Mensagem:</label>
                        <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem"
                            class="w-full px-4 py-3 text-white border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#398AC8] border-white focus:border-none @error('mensagem') border-red-500 @enderror">{{ old('mensagem') }}</textarea>
                        @error('mensagem')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Botão de Envio -->
                    <div>
                        <button type="submit" class="w-full hover:bg-[#398AC8] hover:text-[#fff] bg-[#fff] text-[#398AC8] font-bold py-4 font-[Roboto] px-4 rounded-lg transition">
                            Enviar Mensagem
                        </button>
                    </div>
                    @if (session('message'))
                        <div class="@if(session('error_form')) bg-red-200 border border-red-700 @else bg-green-200 border border-green-700 @endif w-full rounded py-3 px-2 text-center">
                            <p class="@if(session('error_form')) text-red-700 @else text-green-700 @endif text-sm">{{session('message')}}</p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection

