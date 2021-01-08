
<!DOCTYPE html>
<html>
    <head>
        Input two numbers whose product is between 0 and 100 <br> <br> <hr>
    </head>
    
    <body>
            <form>
                <br>
                First Number: <input type = "number" name = "num1" placeholder = "First Number">
                Second Number: <input type = "number" name = "num2" placeholder = "Second Number">
                <button type = "submit" name = "submit" value = "submit"> Enter </button>
            </form>
            
            <?php
                 if(isset($_GET['submit'])) {
                    $result1 = $_GET['num1'];
                    $result2 = $_GET['num2'];
                    $total = intval($result1) + intval($result2);

                        if($total > 100 || $total < 0){
                            echo "Please enter numbers that when combined are between 0 - 100 ";
                        }else if (empty ($_GET['num1']) || empty ($_GET['num2']) ) {
                            echo "Please input TWO numbers.";

                        }else{
                            echo "Result: ".$total;
                        }
                                            }

            ?>
    </body>
</html>
