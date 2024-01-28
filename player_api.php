<?php

// Verificar se os parâmetros de consulta estão corretos
if(isset($_GET['username']) && $_GET['username'] === 'ZTV' && isset($_GET['password']) && $_GET['password'] === 'PLAY') {
    
    // Verificar se o parâmetro 'action' está presente e é igual a 'get_live_categories'
    if(isset($_GET['action']) && $_GET['action'] === 'get_live_categories') {
        // Se sim, fazer uma solicitação GET para a outra URL
        $url = 'https://raw.githubusercontent.com/DEYVIDYT/Z-tv-play/main/get_live_categories.php';
        $response = file_get_contents($url);
        // Exibir os dados brutos obtidos
        echo $response;
    } elseif(isset($_GET['action']) && $_GET['action'] === 'get_live_streams') {
        // Se o parâmetro 'action' for igual a 'get_live_streams'
        // Fazer uma solicitação GET para a outra URL
        $url = 'https://raw.githubusercontent.com/DEYVIDYT/Z-tv-play/main/get_live_streams.php';
        $response = file_get_contents($url);
        // Exibir os dados brutos obtidos
        echo $response;
    } elseif(isset($_GET['action']) && $_GET['action'] === 'get_vod_categories') {
        // Se o parâmetro 'action' for igual a 'get_vod_categories'
        // Fazer uma solicitação GET para a outra URL
        $url = 'https://raw.githubusercontent.com/DEYVIDYT/Z-tv-play/main/get_vod_categories.php';
        $response = file_get_contents($url);
        // Exibir os dados brutos obtidos
        echo $response;
    } elseif(isset($_GET['action']) && $_GET['action'] === 'get_vod_streams') {
        // Se o parâmetro 'action' for igual a 'get_vod_streams'
        // Fazer uma solicitação GET para a outra URL
        $url = 'https://raw.githubusercontent.com/DEYVIDYT/Z-tv-play/main/get_vod_streams.php';
        $response = file_get_contents($url);
        // Exibir os dados brutos obtidos
        echo $response;
    } else {
        // Se não, exibir os dados do JSON já presente no código
        $response = array(
            "user_info" => array(
                "username" => "ZTV",
                "password" => "PLAY",
                "message" => null,
                "auth" => 1,
                "status" => "Active",
                "exp_date" => "1707951600",
                "is_trial" => "0",
                "active_cons" => 2,
                "created_at" => null,
                "max_connections" => "2",
                "allowed_output_formats" => array("m3u8","ts","rtmp")
            ),
            "server_info" => array(
                "xui" => true,
                "version" => "1.5.5",
                "revision" => 2,
                "url" => "warez.la",
                "port" => "80",
                "https_port" => "443",
                "server_protocol" => "http",
                "rtmp_port" => "8880",
                "timestamp_now" => 1706388007,
                "time_now" => "2024-01-27 17:40:07",
                "timezone" => "America/Sao_Paulo"
            )
        );

        // Retorna o JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // Se os parâmetros de consulta estiverem incorretos, retornar erro ou mensagem de acesso negado
    echo "Acesso negado.";
}
?>
