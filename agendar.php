<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];

    // Aqui você faria a requisição para a API em Node.js para armazenar esses dados
    // Exemplo de requisição usando cURL (mude a URL para a URL correta da sua API)
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://sua-api-url/endpoint");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone,
        'data' => $data
    )));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Aqui você pode adicionar lógica para lidar com a resposta da API
    if ($response) {
        echo "Agendamento realizado com sucesso!";
    } else {
        echo "Erro ao realizar agendamento.";
    }
}
?>
