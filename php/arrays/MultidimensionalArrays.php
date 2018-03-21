<?php
$student1 = [
			'test1','test2','test3'
			];

$test = array(
		'shivam' => 'bsss',
		'test'   => 123,
		'name'   => 'test123'
	    );

$student2 = array(
	       'shivam'=>array('age'=>'25','marks'=>'99','class'=>'mca'),
	       'himanshu'=>array('age'=>26,'marks'=>98,'class'=>'mca')
	       );

 print_r($student1);
echo "<br>";
 print_r($test);
 echo "<br>";
 print_r($student2);

 echo "<br>";
 print_r($student2['shivam']['age']);
 echo "<br>";
 print_r($student2['shivam']['marks']);
print_r($test);

	
?>