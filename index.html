<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $curl = curl_init();

    $input = json_decode(file_get_contents('php://input'), true);
    $userMessage = $input['content'];

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://adult-gpt.p.rapidapi.com/adultgpt",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $userMessage
                ]
            ],
            'genere' => 'ai-gf-1',
            'bot_name' => '',
            'temperature' => 0.9,
            'top_k' => 10,
            'top_p' => 0.9,
            'max_tokens' => 200
        ]),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "x-rapidapi-host: adult-gpt.p.rapidapi.com",
            "x-rapidapi-key: 78bed8bd1amsh5891935fc1437bcp172f37jsnffe0b1b4f9c6"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo json_encode(["response" => "cURL Error: " . $err]);
    } else {
        echo $response;
    }
    exit; // Para evitar que o HTML seja exibido após a execução da API
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat com API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .chat-container {
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        .messages {
            max-height: 400px;
            overflow-y: auto;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-group {
            display: flex;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="chat-container">
    <h2>Chat com API</h2>
    <div class="messages" id="messages"></div>
    <div class="input-group">
        <input type="text" id="userInput" placeholder="Digite sua mensagem...">
        <button onclick="sendMessage()">Enviar</button>
    </div>
</div>

<script>
    async function sendMessage() {
        const userInput = document.getElementById('userInput');
        const messagesDiv = document.getElementById('messages');
        const userMessage = userInput.value;

        if (!userMessage) return;

        // Adiciona a mensagem do usuário na área de mensagens
        messagesDiv.innerHTML += `<div><strong>Você:</strong> ${userMessage}</div>`;
        userInput.value = '';

        // Faz a requisição à API
        try {
            const response = await fetch('index.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ content: userMessage })
            });

            if (!response.ok) {
                throw new Error('Erro na requisição à API');
            }

            const data = await response.json();

            // Adiciona a resposta da API na área de mensagens
            messagesDiv.innerHTML += `<div><strong>API:</strong> ${data.response}</div>`;
            messagesDiv.scrollTop = messagesDiv.scrollHeight; // Rola para baixo
        } catch (error) {
            messagesDiv.innerHTML += `<div><strong>Erro:</strong> ${error.message}</div>`;
        }
    }
</script>

</body>
</html>
