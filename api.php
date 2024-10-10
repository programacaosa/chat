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
}
?>
