<?php include 'header.php'; ?>
<section class="maincontent">

       <!-- interface   -->
        <?php 
                interface School{
                        public function mySchool();
                }

                interface College{
                        public function myCollege();
                }

                interface University{
                        public function myUniversity();
                }

                class Teacher implements School, College, University{
                        public function __construct(){
                                $this ->mySchool();
                                $this ->myCollege();
                                $this ->myUniversity();
                        }

                        public function mySchool(){
                                echo "Im a school Teacher.<br>";
                        }

                        public function myCollege(){
                                echo "Im a College Teacher.<br>";
                        }
                        
                        public function myUniversity(){
                                echo "Im a University Teacher.<br> ";
                        }
                }


                class Student implements School, College, University{
                        public function __construct(){
                                $this ->mySchool();
                                $this ->myCollege();
                                $this ->myUniversity();
                        }

                        public function mySchool(){
                                echo "Im a school Student.<br>";
                        }
                        public function myCollege(){
                                echo "Im a College Student.<br>";
                        }
                        public function myUniversity(){
                                echo "Im a University Student.";
                        }
                }


                $teacher = new Teacher(); 
                $student = new Student();
                
               

                
        
        ?>

       



</section>

<?php include 'footer.php'; ?>