<?php include 'DB.php'; ?>

<?php
    // abastract factory design

abstract class Main {

protected $table;

abstract public function create();
abstract public function update($id);
    
  // get new student
public function readById($id){
$sql = "SELECT * FROM {$this -> table} WHERE id = :id";
$stmt = DB::prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
return $stmt->fetch();
}


public function readAll(){ 
    $sql = "SELECT * FROM {$this -> table}";
    $stmt = DB::prepare($sql);      
    $stmt->execute();
    return $stmt->fetchAll();
}


// delete  student

public function delete($id){
    $sql = "DELETE FROM {$this -> table} WHERE id = :id";
    $stmt = DB::prepare($sql);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}

}   


?>