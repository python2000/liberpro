$string = json_decode(file_get_contents('php://input'));

    function objectToArray( $object )
    {
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map( 'objectToArray', $object );
    }

    $result = objectToArray($string);
    $user_id = $result['message']['from']['id'];
    $text = $result['message']['text'];
    if($text == 'Hi')
    $text_reply = 'Hi';
if($text == 'Your name')
    $text_reply = 'jJoe';

    $token = '';
    $text_reply = 'Got you Buddy.';

    $url = 'https://api.telegram.org/bot'.135239386:AAEi5ZWCc8Wg6weOP2Lo1Aok_O6JgJCs6uw.'/sendMessage?chat_id='.$user_id;
    $url .= '&text=' .$text_reply;


    $res = file_get_contents($url);  
