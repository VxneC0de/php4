<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <label for="head">Head:</label>
        <br>
        <input type="color" id="head" name="head"><br><br>

        <label for="body">Body:</label>
        <br>
        <input type="color" id="body" name="body"><br><br>

        <label for="footer">Footer:</label>
        <br>
        <input type="color" id="footer" name="footer"><br><br>
  
        <input type="submit" value="Send">

    </form>

    <?php
    
	    class Web {
            
            private $head;
            private $body;
            private $footer;

            public function initialize($head, $body, $footer)
            {
                $this->head=$head;
                $this->body=$body;
                $this->footer=$footer;
            }

            public function head_init()
            {
            ?><div style="width:100%;height:100px;background-color:
            <?php 
            echo $this->head; ?>"></div>
            <?php
            }

            public function body_init()
            {
            ?><div style="width:100%;height:300px;background-color:
            <?php 
            echo $this->body; ?>"></div>
            <?php
            }

            public function footer_init()
            {
            ?><div style="width:100%;height:70px;background-color:
            <?php 
            echo $this->footer; ?>"></div>
            <?php
            }
 
        }

        extract($_POST);
      
        $place = new Web();
        $place->initialize($head, $body, $footer);
        $place->head_init();
        $place->body_init();
        $place->footer_init();



    ?>
    
</body>
</html>