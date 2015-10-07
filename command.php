// NOTE: you can pass 'true' as the second argument to decode as array
$result= json_decode(file_get_contents('php://input'), true);
error_log(print_r($result, 1), 3, '/path/to/logfile.log');

$user_id = $result['message']['from']['id'];
$text = $result['message']['text'];

// TODO: use something like strpos() or strcmp() for more flexibility
switch (true)
{
    case $text == '/hi':
        $text_reply = 'Hello';
        break;

    case $text == '/yourname':
        // TODO: use the getMe API call to get the bot information
        $text_reply = 'jJoe';
        break;

    default:
        $text_reply = 'not sure what you want?';
        break;
}

$token = '';
$url = 'https://api.telegram.org/bot'.135239386:AAEi5ZWCc8Wg6weOP2Lo1Aok_O6JgJCs6uw.'/sendMessage?chat_id='.$user_id;
$url .= '&text=' .$text_reply;
$res = file_get_contents($url);  
