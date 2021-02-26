<?php 
    function sendNotification(){
        $url = "https://fcm.googleapis.com/fcm/send";

        $fields =array(
            "to" => $_REQUEST['token'],
            "notification"=>array(
                "body" => $_REQUEST['message'],
                "title" => $_REQUEST['title'],
                "icon" => $_REQUEST['icon'],
                "click_action" => "https://google.com"
            )
         );
         $headers = array(
        'Authorization: key=AAAA4l02VD8:APA91bHI7UEMle89_prNJe0LQKHMElFHPU5osWpbvpDq80vJeBTXDTaHGtzuJ1oanwwLLPbqGiwvy_reL49ksFhsiX6aY4XpHh7nFBnXCcwBmfxukqbw75ByIj_yXbD6vRmID6vQMDs5',
             'Content-Type: application/json'
         ); 
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
         $result = curl_exec($ch);
         print_r($result);
         curl_close($ch);
               
    }
    sendNotification();

        //  send_notification.php?title=Title&message=Message&token=

        //  send_notification.php?title=Title of Notification&message=Message of Notification &token=

        // https://www.youtube.com/watch?v=TZSIaD1YOm8&t=182s

        // https://www.youtube.com/watch?v=G2Z19ZGZHy0&list=PLb-NlfexLTk-cm5-_K_NMHmjdsjPF7dOp


?>


