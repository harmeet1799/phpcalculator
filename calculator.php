                <!DOCTYPE html>
                <html lang="en">
                
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>PHP calculator</title>

                    <link rel="stylesheet" href="style.css">
                </head>
                
                <body>
                    <div class="container">
                        <div class="wrapper">
                            <div class="left">
                                <img src="rock.svg" alt="">
                            </div>
                            <div class="right">
                                <h3>PHP CALCULATOR</h3>
                                <form action=""  method="POST">
                                    <input type="number" class="input" name="first" required placeholder="Enter Number" id="">
                                    <input type="number" class="input" name="second" required placeholder="Enter Number" id="">
                                    <div class="select">
                                        <select name="operation" class="input" id="select">
                                            <option value="option">-Select-</option>
                                            <option value="add">Addition</option>
                                            <option value="sub">Substraction</option>
                                            <option value="mul">Multiplication</option>
                                            <option value="div">Division</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="submit" class="btn" value="Calculate">
                                </form>
                            </div>
                        </div>
                        <div class="result">
                            <div class="text">
                                     <?php
                                            if(isset($_POST['submit']))
                                            {
                                                $num1 = $_POST['first'];
                                                $num2 = $_POST['second'];

                                            
                                                
                                                $operation = $_POST['operation'];

                                            switch ($operation) {
                                                case 'add': $sum = $num1 + $num2;
                                                    echo "The Addition of {$num1} + {$num2} is {$sum}";
                                                    break;
                                                case 'sub': $sub = $num1 - $num2;
                                                    echo "The Substraction of {$num1} - {$num2} is {$sub}";
                                                    break;
                                                case 'mul': $mul = $num1 * $num2;
                                                    echo "The Multiplication of {$num1} * {$num2} is {$mul}";
                                                    break;
                                                case 'div': $div = $num1 / $num2;
                                                    echo "The Division of {$num1} / {$num2} is {$div}";
                                                    break;
                                                
                                                default:
                                                   echo "No Selection Made"; 
                                                    break;
                                            }




                                            }

                                     ?>           
                            </div>
                        </div>
                    </div>
                </body>
                
                </html>       
      