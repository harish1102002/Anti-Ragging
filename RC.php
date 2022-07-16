<html>
<head><I><h1 style="color:red;font-size:50px">Register<font color="blue"> Complaint</h1></head>
<body bgcolor="black" style="font-size:40px">
<font color="green">
<form method="get" action="UD.php">
<fieldset>
<legend>Personal Information</legend>
<font size="6">
<font color="blue">
Victim's Name :<input placeholder="Name" required name="a1"></input><br><br>
Victim Regno : <input placeholder="Reg No" style="height:30px" required name="a2"></input><br><br><label for="dep">
Victim Deptm :  </label> 
<input list="dep" required name="a3"></input><br>
<datalist id="dep">
<option value="CSE" /><option value="CIVIL" /><option value="EEE" /><option value="ECE" /><option value="MECH" />
<option value="METT" /></datalist>
Suspect Name:   <input placeholder="Name" required name="a4"></input>
Case Description : <textarea placeholder="Case" style="width:600px;height:60px" name="a7"></textarea><br><br>
Suspect Dept : <input list="dept" required name="a5"></input><br>
<datalist id="dept">
<option value="CSE" /><option value="CIVIL" /><option value="EEE" /><option value="ECE" /><option value="MECH" />
<option value="METT" /></datalist><br>
Incident Date :<input type="date" required name="a6"></input><br><br>
<button type="submit" name="ok">Submit</button>
</fieldset>
</form>
</body>
</html>