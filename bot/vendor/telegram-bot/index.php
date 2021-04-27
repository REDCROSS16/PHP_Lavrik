<?php

header('Content-Type: text/html; charset=utf-8');
// подключаемся к API
require_once("../autoload.php");
// создаем переменную бота
const TOKEN = '1097199202:AAExEs1J-04GuygAW9MQ3CPLWb-rO0sAajQ';

$bot = new TelegramBot\Api\BotApi(TOKEN);


// если Телеграм-бот не зарегистрирован - регистрируем
if(!file_exists("registered.trigger")){
    /**
     * файл registered.trigger будет создаваться после регистрации бота.
     * если этого файла не существует, значит бот не
     * зарегистрирован в Телеграмм
     */
// URl текущей страницы
    $page_url = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    $result = $bot->setWebhook($page_url);
    if($result){
        file_put_contents("registered.trigger",time()); // создаем файл дабы остановить повторные регистрации
    }
}


// обязательное. Запуск бота
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
// помощь
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
/help - помощь';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
// запускаем обработку
$bot->run();