<?php
include("../app/file2.php");

 $person1 = new Company\MyProjects\Person();
 echo $person1->getName();


 use \Company\Myprojects\Person;
 $person2 = new Person();
 echo $person2->getName();
