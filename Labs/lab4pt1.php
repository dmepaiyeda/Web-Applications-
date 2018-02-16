<!DOCTYPE html>
<html>

    <head>
      <title> PHP is an Object-Oriented Programming Language </title>
    </head>

<body>
    <p>
      <?php
        class Student {
            public $firstName;
            public $lastName;
            public $Id;

            public function __construct($firstname, $lastname, $id)
            {
              $this->firstName = $firstname;
              $this->lastName = $lastname;
              $this->Id = $id;
            }

            public function set_fname($fname)
            {
                $this->firstName = $fname;
            }

            public function get_fname()
            {
                return $this->firstName;
            }

            public function set_lname($lname)
            {
                $this->lastName = $lname;
            }
            public function get_lname()
            {
                return $this->lastName;
            }

            public function set_id($id)
            {
                $this->Id = $id;
            }

            public function get_id()
            {
                return $this->Id;
            }
            public function newStudent()
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



