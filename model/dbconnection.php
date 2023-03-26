<?php


class DBlink{

  private static $dblink=' ';


  // Creació de l'enllaç
  public static function openDBlink(){

    self::$dblink = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    // Comprovació de la connexió
    if (self::$dblink->connect_error) {
      die("Connexió fallida: " . self::$dblink->connect_error);
    }
    // echo "Connexió aconseguida.";

  }
  
  // Retirna l'enllaç
  public static function getDBlink(){
  
    if ((strcmp(self::$dblink, ' ') !== 0)){
      return self::$dblink;
    }
    else {
      self::openDBlink();
      return self::$dblink;
    }

  }
  
  public static function getResult($sql){
 
    return self::getDBlink()->query($sql);

  }
  
  public static function closeDBlink(){
    self::$dblink->close();
  }
  
  }