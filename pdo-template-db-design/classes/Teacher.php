 <?php include 'main.php'; ?>
 
 <?php


class Teacher extends Main{

    protected $table ='tbl_teacher';
    private $name="";
    private $dep;
    private $age;

    public function setName($name){
        $this->name = $name;
    }

    public function setDep($dep){
        $this->dep = $dep;
    }

    public function setAge($age){
        $this->age = $age;
    }
    // insert new student
    public function create(){
        $sql = "INSERT INTO {$this -> table} (name, dep, age) VALUES (:name, :dep, :age)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dep', $this->dep);
        $stmt->bindParam(':age', $this->age);
        return $stmt->execute();
    }
    // update new student
    public function update($id){
        $sql = "UPDATE {$this -> table} SET name = :name, dep = :dep, age = :age WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':dep',  $this->dep);
        $stmt->bindParam(':age',  $this->age); 
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    

}

?>

