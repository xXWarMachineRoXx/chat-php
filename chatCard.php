<?php

include 'dbconnect.php';
class Card extends Connection
{

    protected $conn_str;
    protected $connection;
    public function __construct()
    {
        $connection = new Connection();
        $this->conn_str = $connection->connect();
    }


    function db_connect()
    {
        echo '<br> this is test connection <br>';
        var_dump($this->conn_str);
    }
    function chatCard($name, $lastchat, $online)
    {
        $shtml = '<div class="card" aria-hidden="true">
       <img src="assets/img/avatar.png" class="card-img-top m-3" style="height:10%;width:10%;" alt="...">
       <div class="card-body">
           <h5 class="card-title placeholder-glow">
               ' . $name . '
           </h5>
           <p class="card-text placeholder-glow">
               <span class="placeholder col-7">' . $lastchat . '</span>
               <span class="placeholder col-4">' . $online . '</span>
               <span class="placeholder col-4"></span>
               <span class="placeholder col-6"></span>
               <span class="placeholder col-8"></span>
           </p>
           <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
       </div>
   </div>';
        return $shtml;
    }







}

