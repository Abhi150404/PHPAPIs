
<html>
<head>
<title>Form in Table</title>
<style>
    tr{ 
    align-content:center; 
    background-color: limegreen;

    }
    #submit{
        background-color: blue;
        color: whitesmoke;
        padding: 5px;
        border-radius: 5px;
        outline: none;
        border: 1px solid whitesmoke;
        cursor: pointer;
    }

    #reset{
        background-color: red;
        color: whitesmoke;
        padding: 5px;
        border-radius: 5px;
        outline: none;
        border: 1px solid whitesmoke;
        cursor: pointer;
    }
    #tb{
        border: 1px solid black;
        padding: 10px;
    }
    
</style>
</head>
<body>
<form>



<table id="tb" border="1" width="40%" height="600px" align="center" bgcolor="white">

<tr align="center" bgcolor="">
<th colspan="2"><font size="10">Adhar Card</font></th>
</tr>


<tr>
<th><font color="black">
<label>Name</label></th>
<th><input type="text"></th>
</tr>


<tr>
<th><font color="black"><label>Date Of Birth</label></th>
<th><input type="date"></th>
</tr>


<tr >
<th><font color="black">
<label>Mobile No.</label></th>
<th><input type="number"></th>
</tr>


<tr >
<th><font color="black">
<label>Email</label></th>
<th><input type="email"></th>
</tr>


<tr >
<th><font color="black">
<label>Gender</label></th>
<th><font color="black">
<input type="radio" name="gender">Male 
<input type="radio" name="gender">Female
</th>
</tr>


<tr >
<th><font color="black">
<label>Country</label></th>
<th>
<select name="city">
<option value="India">India</option>
<option value="South Africa">South Africa</option>
<option value="America">America</option>
<option value="Japan">Japan</option>
</th>
</tr>


<tr align="center" bgcolor="black">
<th colspan="2"><input id="Submit" type="Submit" >
<input id="reset" type="reset">
</th>
</tr>

</table>
</form>

</body>
</html>
