<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <label for="name">Name:</label>
        <br>
        <input type="text" id="name" name="name"><br><br>

        <label for="apellido">Last Name:</label>
        <br>
        <input type="text" id="lastName" name="lastName"><br><br>
  
        <input type="submit" value="Send">

    </form>

    <?php
    extract($_POST);
    
    if(isset($name)){
	    class Persona {
        private $name;
        private $lastName;
        public function initialize($name,$lastName)
            {
                $this->name=$name;
	            $this->lastName=$lastName;
            }

            public function print()
            {
                echo $this->name;
                echo '<br>';
	            echo $this->lastName;
            }
        }

    $per1=new Persona();
    $per1->initialize($name,$lastName);
    $per1->print();

    }

    ?>
    
</body>
</html>