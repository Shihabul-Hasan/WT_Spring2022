<!DOCTYPE html>
<html>
<body>

<h2>The input Element</h2>
<hr>

<form action="/action_page.php">
	<table>
    
    <tr>
	<td>First Name:</td>
    <td><input type= "text" name= "First Name" > </td>
    </tr>
    
    <tr>
	<td>Last Name:</td>
    <td><input type= "text" name= "Last Name"> </td>
    </tr>
    
    <tr>
	<td>Age:</td>
    <td><input type= "number" name= "Age"> </td>
    </tr>
    
    <tr>
    <td>Designation:</td>
    <td>
    <input type = "radio" name= "Designation"> Junior Programmer
    <input type = "radio" name= "Designation"> Senior Programmer
    <input type = "radio" name= "Designation"> Project Lead
    </td>
    </tr>
    
    <tr>
    <td>Preferred Language:</td>
    <td>
    <input type = "checkbox" name= "Preferred Language"> JAVA
    <input type = "checkbox" name= "Preferred Language"> PHP
    <input type = "checkbox" name= "Preferred Language"> C++
    </td>
    </tr>
    
    <tr>
	<td>E-mail:</td>
    <td><input type= "text" name= "E-mail" > </td>
    </tr>
    
    <tr>    
    <td>Password:</td>
    <td><input type= "password" name= "Password" > </td>
    </tr>
    
    <tr>    
    <td><label for="myfile">Please choose a file:</label></td> 
    <td><input type="file" id="myfile" name="myfile"><br><br></td>
    </tr>
    
    </table>
    
    <br>
    <input type = "Submit" name= "Submit" value = "Submit">
    <input type = "Reset" name= "Reset" value = "Reset">

</form>



</body>
</html>

