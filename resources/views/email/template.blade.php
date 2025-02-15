<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Recebido</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#ddd;color: #fff;padding:30px">
    <div style="background-color: white;color:black;max-width:700px;margin:0 auto;padding:50px 30px;border:1px solid #bbb;border-radius:15px">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('image/logo.PNG'))) }}" alt="Logo Ntec Manutenção" width="100px">
        <br>
        <br>
        <h2 style="color: #0056b3;">📩 Novo Contato Recebido</h2>

        <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
        <p><strong>Telefone:</strong> {{ $dados['telefone'] }}</p>
        <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>

        @if (!empty($dados['mensagem']))
            <p><strong>Mensagem:</strong></p>
            <p>{{ $dados['mensagem'] }}</p>
        @endif
    </div>

    <hr>
    <p style="font-size: 12px; color: #777; text-align: center;">Este e-mail foi gerado automaticamente pelo sistema.</p>
</body>
</html>
