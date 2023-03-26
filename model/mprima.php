<?php

class MMprima{

public static function reinitDB(){
 echo "funció reinitDB() <br>";  

 // sql to create table
    $sql = "DROP TABLE e_materies";

    if (DBlink::getDBlink()->query($sql) === TRUE) {
      echo "Table materials deleted successfully<br>";
    } else {
      echo "Error deleting table: " . DBlink::getDBlink()->error."<br>";
    }


    $sql = "CREATE TABLE e_materies (
      Referencia varchar(10) NOT NULL default '',
      Nom varchar(10) NOT NULL default '',
      Umesura varchar(10) NOT NULL default '',
      Preu float NOT NULL default '0',
      Proveidor varchar(20) NOT NULL default '',
      PRIMARY KEY  (Referencia)
    );";
    
    if (DBlink::getDBlink()->query($sql) === TRUE) {
      echo "Table materials created successfully <br>";
    } else {
      echo "Error creating table: " . DBlink::getDBlink()->error. "<br>";
    }

}


//Reb per paràmetre:
//-Referència de la matèria
//-Unitat de mesura
//-Preu
//-Nom del proveidor
//Acció: Inserta en la BBDD l'article rebut
//Retorn: cap
public static function altaMprima($re, $nom, $me, $pre, $pro){

 echo "funció altaMprima(".$re.") <br>";  

 $sql = "INSERT INTO e_materies (Referencia, Nom, Umesura, Preu, Proveidor)
VALUES ('".$re."', '".$nom."', '".$me."', ".$pre.",'".$pro."')";

if (DBlink::getResult($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "--->" . DBlink::getDBlink()->error. "<br>";
}

}

//Reb per paràmetre:
//-Referència de la matèria
//Acció: Elimina de la BBDD la materia rebuda per paràmetre
//Retorn: cap
public static function baixaMprima($re){

    echo "funció baixaMprima(".$re.") <br>";  


    $sql = "DELETE FROM e_materies WHERE Referencia LIKE ".$re." ;";
    
    if (DBlink::getResult($sql) === TRUE) {
      echo "record deleted successfully <br>";
    } else {
      echo "Error: " . $sql . "--->" . DBlink::getDBlink()->error. "<br>";
    }
    

}

//Reb per paràmetre:
//-Referència de la matèria
//-Unitat de mesura
//-Preu
//-Nom del proveidor
//Acció: Actualitza les dades de la materia igual a la identificació de materia rebuda
//Retorn: cap
public static function modificaMprima($re, $nom, $me, $pre, $pro){
    echo "funció modificaMprima(".$re.") <br>";  

    $sql = "UPDATE e_materies SET Umesura = '".$me."' , Nom = ".$nom."' , Preu = ".$pre." , Proveidor= '".$pro."' WHERE Referencia LIKE ".$re.";";
    
    if (DBlink::getResult($sql) === TRUE) {
      echo "record updated successfully <br>";
    } else {
      echo "Error: " . $sql . "<br>" . DBlink::getlink()->error;
    }




}

//Reb per paràmetre:
//-Referència de la matèria
//Acció: Elimina de la BBDD la materia rebuda per paràmetre
//Retorn: cap
public static function cercaMprima($re){
    echo "funció cercaMprima(".$re.") <br>";  

    $sql="SELECT * FROM e_materies WHERE Referencia LIKE '".$re."';";

    $result = DBlink::getResult($sql);
    
 
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Resultat de la cerca ---> id: " . $row["Referencia"]. " - Materia: " . $row["Nom"]. " - Unitat de mesura: " . $row["Umesura"]. " Preu: " . $row["Preu"]. " Proveidor: " . $row["Proveidor"]. "<br>";
      }
    } else {
      echo "0 results <br>";
    }
  
  }
  

//mostra tot el contingut de la taula
public static function totMprima(){

  $sql="SELECT * FROM e_materies";

  $result = DBlink::getResult($sql);
  
  echo "<p style='color:blue;' >";

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["Referencia"]. " - Materia: " . $row["Nom"]. " - Unitat de mesura: " . $row["Umesura"]. " Preu: " . $row["Preu"]. " Proveidor: " . $row["Proveidor"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  echo "</p>";
}

}

