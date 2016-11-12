<?php 
  abstract class Operation 
  {
    protected $operand_1;
    protected $operand_2;
    public function __construct($o1, $o2) 
    {
      // Make sure we're working with numbers...
      if (!is_numeric($o1) || !is_numeric($o2)) 
      {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
      $this->operand_2 = $o2;
    }
    public abstract function operate();
    public abstract function getEquation(); 
  }

  class Addition extends Operation 
  {
    public function operate() 
    {
      return $this->operand_1 + $this->operand_2;
    }
    public function getEquation() 
    {
      return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

// Part 1 - Add subclasses for Subtraction, Multiplication and Division here

  class Subtraction extends Operation 
  {
    public function operate() 
    {
      return $this->operand_1 - $this->operand_2;
    }
    public function getEquation()
    {
      return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Multiplication extends Operation 
  {
    public function operate() 
    {
      return $this->operand_1 * $this->operand_2;
    }
    public function getEquation() 
    {
      return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Division extends Operation 
  {
    public function operate() 
    {
      if ($this->operand_2 == 0)
      {
        throw new Exception('Division by zero.');
      }
      else
      {
        return $this->operand_1 / $this->operand_2;
      }
    }
    public function getEquation() 
    {
      return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Cube extends Operation 
  {
    public function operate() 
    {
      return $this->operand_1 * $this->operand_1 * $this->operand_1;
    }
    public function getEquation() 
    {
      return $this->operand_1 . '^3' . ' = ' . $this->operate();
    }
  }

  class Factorial extends Operation
  {
    public function operate()
    {
      $num = 1;
      while ($this->operand_1 >= 1)
      {
        $num = $num * $this->operand_1;
        $this->operand_1 = $this->operand_1 - 1;
      }
      return $num;
    }
    public function getEquation()
    {
      return $this->operand_1 . '! = ' . $this->operate();
    }
  }

// End Part 1

// Some debugs - un comment them to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";

// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') 
  {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();

// Part 2 - Instantiate an object for each operation based on the values returned on the form
//          For example, check to make sure that $_POST is set and then check its value and 
//          instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs

  try 
  {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') 
    {
      $op = new Addition($o1, $o2);
    }
// Put the code for Part 2 here  \/
    else if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract')
    {
      $op = new Subtraction($o1, $o2);
    }
    else if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply')
    {
      $op = new Multiplication($o1, $o2);
    }
    else if (isset($_POST['div']) && $_POST['div'] == 'Divide')
    {
      $op = new Division($o1, $o2);
    }
    else if (isset($_POST['cube']) && $_POST['cube'] == 'Cube')
    {
      if (empty($o2))
      {
        $o2 = 0;
      }
      $op = new Cube($o1, $o2);
    }
    else if (isset($_POST['fact']) && $_POST['fact'] == 'Factorial')
    {
      if (empty($o2))
      {
        $o2 = 0;
      }
      $op = new Factorial($o1, $o2);
    }

// End of Part 2   //

  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>Lab 6</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="lab6.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <h1>Plotka Calculator</h1>
  <h3>Hi! My name is Professor Plotka, I'm an all-around baller. Ask me any arithmetic question, and I'll answer for you!</h3>
  <img id='plotka' src='plotka.jpg' alt='' />
  <pre id="result">
  <?php 
    if (isset($op)) {
      try {
        $answer = $op->getEquation();
        echo "<p>Hmm, I think the answer is...</p>";
        echo "<div id='answer'>" . $answer . "</div>";
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }
      
    foreach($err as $error) {
        echo "<p>AGHHHHHHH, I got an error! >:( </p>";
        echo "<p>ERROR: " . $error . "\n</p>";
    } 
  ?>
  </pre>
  <form class="form" method="post" action="lab6.php">
    <div class="form">
      <input class="first" type="text" name="op1" id="name" value="" />
      <input class="second" type="text" name="op2" id="name" value="" />
    <br/>
      <!-- Only one of these will be set with their respective value at a time -->
      <input class="ui-button ui-widget ui-corner-all" type="submit" name="add" value="Add" />  
      <input class="ui-button ui-widget ui-corner-all" type="submit" name="sub" value="Subtract" />  
      <input class="ui-button ui-widget ui-corner-all" type="submit" name="mult" value="Multiply" />  
      <input class="ui-button ui-widget ui-corner-all" type="submit" name="div" value="Divide" />  
      <input class="ui-button ui-widget ui-corner-all" type="submit" name="cube" value="Cube" />
      <input class="ui-button ui-widget ui-corner-all" type="submit" name="fact" value="Factorial" />
      <p>Note: For "Cube" and "Factorial" operations, only the first operand will be used.</p>
      <p>A second operand is not needed for those operations</p>
      <br/>
      <p>Make sure you include both operands for all other operations, and be careful not to divide by zero!</p>
      <p>Errors make me ANNNNGGGGRRYYYYYY!!!</p>
    </div>
  </form>
</body>
</html>