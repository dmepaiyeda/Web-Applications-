<!DOCTYPE html>
<html>

    <head>
      <title> PHP is an Object-Oriented Programming Language </title>
    </head>

<body>
    <p>
      <?php
        class Student {
            private $firstName;
            private $lastName;
            private $Id;

            private function __construct($firstname, $lastname, $id)
            {
              $this->firstName = $firstname;
              $this->lastName = $lastname;
              $this->Id = $id;
            }

            private function set_fname($fname)
            {
                $this->firstName = $fname;
            }

            private function get_fname()
            {
                return $this->firstName;
            }

            private function set_lname($lname)
            {
                $this->lastName = $lname;
            }
            private function get_lname()
            {
                return $this->lastName;
            }

            private function set_id($id)
            {
                $this->Id = $id;
            }

            private function get_id()
            {
                return $this->Id;
            }
            private function newStudent()
            {
                return " New Student is " . $this->firstName . " " . $this->lastName . " " . $this->Id ;
            }
        }
        $st_obj = new Student('firstName1', 'lastName1', 100000);
        echo $st_obj->newStudent();
        echo "<br>";
        echo $st_obj->set_fname('Sarah');
        echo $st_obj->get_fname();
        echo "<br>";
        echo $st_obj->set_lname('MacCallum');
        echo $st_obj->get_lname();
        echo "<br>";
        echo $st_obj->set_id('500684097');
        echo $st_obj->get_id();
        echo "<br>";
        echo $st_obj->newStudent();
        ?>
      </p>
    </body>
</html>



