<?php
	$roll_no=$_POST["roll_no"];
	$name=$_POST["name"];
	$f_name=$_POST["f_name"];
	$m_name=$_POST["m_name"];
	$python=$_POST["python"];
	$web_tech=$_POST["web_tech"];
	$inter_intera=$_POST["inter_intera"];
	$big_data=$_POST["big_data"];
	$soft_mange=$_POST["soft_mange"];
	$grand_total=$_POST["grand_total"];
	$result=$_POST["result"];
	$grade=$_POST["grade"];


?>
			
<table align="center">
 	<tr>
		<td>
			<b>Roll No</b>
		</td>
		<td>
			<?php echo $roll_no; ?>		
		</td>
		<br>
    </tr>
	<tr>
		<td>
			<b>Student Name</b>
		</td>
		<td>
			<?php echo $name; ?>
				
		</td>
		<br>
	</tr>

	<tr>
		<td>
			<b>Father's Name</b>
		</td>
		<td>
			<?php echo $f_name; ?>
				
		</td>
		<br>
	</tr>
	<tr>
		<td>
			<b>Mother's Name</b>
		</td>
		<td>
			<?php echo $m_name; ?>
				
		</td>
		<br>
	</tr>

</table>

	<table border=1  align=center WIDTH=50% HEIGHT=60%>
	  <tr>
		    <th>Sr.No</th>
		    <th>Subject Code</th> 
		    <th>Subject Name</th>
		    <th>Marks Obtained</th>
		    <th>Min pass Marks</th> 
			<th>Max Marks</th>
	  </tr>
	  	<tr>
		    <td align=center>1.</td>
		    <td align=center>MCA-501</td>
		    <td align=center>Python</td>
		    <td align=center><?php echo $python; ?></td>
		    <td align=center>25</td>
		    <td align=center>100</td>
        </tr>

        <tr>
		    <td align=center>2.</td>
		    <td align=center>MCA-502</td>
		    <td align=center>web tech</td>
		    <td align=center><?php echo $web_tech; ?></td>
		    <td align=center>25</td>
		    <td align=center>100</td>
        </tr>
        <tr>
		    <td align=center>3.</td>
		    <td align=center>MCA-503</td>
		    <td align=center>Internet&Intranet</td>
		    <td align=center><?php echo $inter_intera; ?></td>
		    <td align=center>25</td>
		    <td align=center>100</td>
        </tr>
        <tr>
		    <td align=center>4.</td>
		    <td align=center>MCA-504</td>
		    <td align=center>Big Data</td>
		    <td align=center><?php echo $big_data; ?></td>
		    <td align=center>25</td>
		    <td align=center>100</td>
        </tr>
        <tr>
		    <td align=center>5.</td>
		    <td align=center>MCA-504</td>
		    <td align=center>Software Management</td>
		    <td align=center><?php echo $soft_mange; ?></td>
		    <td align=center>25</td>
		    <td align=center>100</td>
        </tr>
        <tr>
        	<td colspan="3" align="center">GRAND TOTAL</td>
	        <td  align="center"><?php echo $grand_total; ?></td>
	        <td align="center">125</td>
	        <td align="center">500</td>
        </tr>
        <tr>
        	<td colspan="3" align="center">RESULT</td>
	        <td colspan="3" align="center"><?php echo $result; ?></td>
	       
        </tr>
        <tr>
        	<td colspan="3" align="center">GRADE</td>
	        <td colspan="3" align="center"><?php echo $grade; ?></td>
	       
        </tr>

	</table>
