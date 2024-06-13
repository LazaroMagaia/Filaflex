<!DOCTYPE html>
<html>
<head>
    <title>Nova Mensagem de Contato</title>
</head>
<body>
    <h1>Nova Mensagem de Contato</h1>
    <p><strong>Nome:</strong> {{ $details['name'] }}</p>
    <p><strong>Contato:</strong> {{ $details['contact'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Assunto:</strong> {{ $details['subject'] }}</p>
    <p><strong>Mensagem:</strong> {{ $details['message'] }}</p>
</body>
</html>
