<?php
class operation{
    function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->databasename = "ctf";
        // Create connection
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->databasename);
                          }
                      function login($username, $password)
                      {
                          $this->sql = "select * from log where username='$username' AND password='$password'";
                      }
                      function signup($name,$college,$username,$email,$password){
                        $this->sql = "INSERT INTO log (name,college,username, email,password,avatar) VALUES('$name', '$college', '$username', '$email', '$password',6)";
                      }
                      function details($username){
                        $this->sql = "SELECT id,name,college,username,email,avatar FROM log WHERE username='$username'";
                      }
                      function avatarUpate($avatar,$id){
                        $this->sql = "UPDATE log SET avatar = '$avatar' WHERE id = '$id'";
                      }
                      function boardInsert($username){
                        $this->sql="INSERT INTO board (avatar,username,flag,rank) VALUES (6,'$username',0,0)";
                      }
                      function boardUpdate($score,$rank,$username){
                        $this->sql="UPDATE board SET flag='$score',rank='$rank' WHERE username='$username'";
                      }
                      function scoreview($username){
                        $this->sql="SELECT flag FROM board WHERE username='$username'";
                      }
                      function bordAvatar($username,$avatar){
                        $this->sql="UPDATE board SET avatar='$avatar' WHERE username='$username'";
                      }
                      function rankPublish(){
                        $this->sql="UPDATE board b JOIN ( SELECT id, RANK() OVER (ORDER BY flag DESC) AS new_rank FROM board ) ranked_board ON b.id = ranked_board.id SET b.rank = ranked_board.new_rank";
                      }
                      function rankBoard(){
                        $this->sql="SELECT * FROM board";
                      }
                      function executeQuery()
                      {
                          $this->result = mysqli_query($this->conn, $this->sql);
                          return $this->result;
                      }
     }
?>