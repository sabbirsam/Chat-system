<?php
  require __DIR__ . '/vendor/autoload.php';


  if( $_POST['action']=='userjoined' ){

    
    $options = array(
      'cluster' => 'mt1',
      'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
      'c4884fa0f2d399c550d9',
      '6c6ec2c857cc460e254a',
      '1351927',
      $options
    );


    $data['username'] = $_POST['username'];

    $pusher->trigger('chatbox', 'my-event', $data);
  }else


  if( $_POST['action']=='sendmessage' ){

    $options = array(
    'cluster' => 'mt1',
    'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
      'c4884fa0f2d399c550d9',
      '6c6ec2c857cc460e254a',
      '1351927',
      $options
    );

    $data['name'] = $_POST['name'];
    $data['message'] = $_POST['message'];

    $pusher->trigger('chatbox', 'sendmessage', $data);
    echo 1;

  }

  
?>