<?php
class Person {
  private $fname;
  private $lname;
  public function __construct($fn, $ln) {
    $this->fname = $fn;
    $this->lname = $ln;
  }
  public function getName() {
    return $this->fname . ' ' . $this->lname;
  }
}

class Student extends Person {
  private $rin;
  // Declare our own constructor.
  public function __construct($fn, $ln, $r) {
    // Call the parent constructor
    parent::__construct($fn, $ln);
    $this->rin = $r;
  }
  // We can override parent methods as you'd expect.
  public function getName() {
    return parent::getName() . ' - ' . $this->rin;
  }
}

class RPIStudent extends Student 
{
  private $course_list;
  public function __construct($fn, $ln, $r, $courses)
  {
    parent::__construct($fn, $ln, $r, $courses);
    $this->course_list = $courses;
  }
  public function getCourses()
  {
    return $this->course_list;
  }
}

// put code here
$me = new RPIStudent('Asad', 'Mehdi', '4030434034', array('WebSysI', 'MITR', 'OpSys', 'PsychAndLaw'));
$name = $me->getName();
$course_list = $me->getCourses();

?>
<!doctype html>
<html>
<head>
  <title>Lecture 14 - OOP</title>
</head>
<body>
  <h1><?php echo $name ?></h1>
  <ul>
  <?php foreach ($course_list as $course) { ?>
    <li><?php echo $course ?></li>
  <?php } ?>
  </ul>
</body>
</html>
