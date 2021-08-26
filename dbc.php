<?php
ini_set('display_errors', 1);
Class Db{
    public function dbc(){
        try{
          
            $pdo = new PDO('mysql:host=localhost;dbname=php1;charset=UTF8;', 'root', 'root'); 
            return $pdo;
    
        }catch(PDOException $e){
          
        }
        
    }
    public function get_message(){
        $sql = 'select * from content';
        $stmt = $this->dbc()->query($sql);
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }
    public function show($id){
        $sql = 'select * from content where id=?';
        $arr=[];
        $arr[]=$id;
        $stmt = $this->dbc()->prepare($sql);
        $stmt->execute($arr);
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    
    }
    public static function h($str){
        return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
    }
}
