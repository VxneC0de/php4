<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form action="" method="post">

        <div class="data">
                <label id="name-label" for="name" class="data-label">Name</label>
                <br>
                <input type="text" name="name" id="name" class="data-input" placeholder="Enter your Name" required/>
        </div>

        <div class="data">
                <label id="name-label" for="lastName" class="data-label">Last Name</label>
                <br>
                <input type="text" name="lastName" id="lastName" class="data-input" placeholder="Enter your Last Name" required/>
        </div>

        <div class="data">
            <button type="submit" id="submit" class="submit-button">Submit</button>
        </div>

    </form>

    <?php

    extract($_POST);
    if(isset($_name)){
        class Person{
            private $name;
            private $lastName;
            public function initialize($nameForm, $lastNameForm){
                $this->name=$nameForm;
                $this->name=$lastNameForm;
            }

            public function print(){
                echo $this->name;
                echo '<br>';
                echo $this->lastName;
            }
        }
    }

    $person_One = new Person();
    $person_One -> initialize($nameForm, $lastNameForm);
    $person_One -> print(); 

    ?>
    
</body>
</html>