<?php include 'header.php'; ?>
<section class="maincontent">

       <!-- abastract class   -->
       <?php 

        abstract class Student{
                public $stuName;
                public $stuRoll;
                public $stuDep;

                public function __construct($name ="", $roll="", $dep=""){
                        $this->stuName = $name;
                        $this->stuRoll = $roll;
                        $this->stuDep = $dep;
                }

                function getStudent(){
                        echo "Student Name : ".$this->stuName."<br>";
                        echo "Student Roll : ".$this->stuRoll."<br>";
                        echo "Student Department : ".$this->stuDep."<br>";
                }

                abstract public function School();
        }

        class boy extends Student{
                public function describe() {
                        return parent::getStudent()." And I am a high school student.<br>";
                }

                public function School(){
                        return parent::getStudent()." I am a University Studernt.<br>";
                }
        }


        

        $s = new boy();

        $s->stuName = "Rahim";
        $s->stuRoll = "01";
        $s->stuDep = "CSE";

        echo $s->School();

        ?>


       



</section>

<?php include 'footer.php'; ?>