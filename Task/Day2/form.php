<html>
	<body>

		<form action="formdb.php" method="post">
			<table width="393" border="1">
				
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>Name: <input type="text" name="name"></td>
			
			</tr>
			<tr>
				<td>College Name: <input type="text" name="clgname"></td>
			
			</tr>
			<tr>
				<td>DOB: <input type="date" name="dob"></td>
			
			</tr>
			<tr>
				<td>Address: <input type="textarea" name="address"></td>
			
			</tr>
			<tr>
				<td>Age: <input type="text" name="age"></td>
			
			</tr>
			<tr>
				<td>Gender: <input type="radio" value="Male" name="gender">Male
							 <input type="radio" value="Female" name="gender">Female</td>
			
			</tr>
			<tr>
				<td>Class: <input type="checkbox" value="first" name="class">First Year<br>
							<input type="checkbox" value="second" name="class">Second Year<br>
							<input type="checkbox" value="third" name="class">Third Year<br>
							<input type="checkbox" value="fourth" name="class">Fourth Year<br></td>
			
			</tr>
			<tr>
				<td>Hobbies: <input type="checkbox" value="cricket" name="hobbies">Cricket<br>
							<input type="checkbox" value="singing" name="hobbies">Singing<br>
							<input type="checkbox" value="dancing" name="hobbies">Dancing<br>
							<input type="checkbox" value="reading"name="hobbies">Reading<br></td>
			
			</tr>
			<tr>
				<td>Upload Photo: <input type="file" name="file"></td>
			
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" name="submit" value="submit"/>
				<input type="reset" value="Reset"/></td>
				
			</tr>
			</table>
			
		</form>

	</body>
</html>