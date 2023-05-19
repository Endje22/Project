<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
        case '/2':
            require_once __DIR__ . DIRECTORY_SEPARATOR . '2.html';
            break;
            case '/3':
                require_once __DIR__ . DIRECTORY_SEPARATOR . '3.html';
                break;
                case '/4':
                    require_once __DIR__ . DIRECTORY_SEPARATOR . '4.php';
                    break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR.'404.php';
}