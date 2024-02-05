<?php include 'header.php'; ?>
<section class="maincontent">

       <!-- magic method   -->
       <?php 

         class Student {
                public $name;
                public function describe(){
                        echo "I am a service Holder.<br>";
                }
                public function __get($property){
                        echo "You are trying to access a non-existent property: $property <br/>";
                 }
                 public function __set($property, $value){
                        echo "You are trying to set a non-existent property: $property to value: $value <br/>";
                 }

                 public function __call($method, $arguments){
                        echo "there is no <b>:". $method ."<b/> method and arguments: ".implode(', ', $arguments);
                 }
         }

       

         $sch = new Student();
         $sch -> describe();
         $sch -> Dilder;
         $sch -> age = "30";

         $sch -> notExistMethod('2,5,8');
         
        ?>


       



</section>

<?php include 'footer.php'; ?>