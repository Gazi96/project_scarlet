<?php
if($this->data['activation'] != 'done'){
    echo '<h3>Potwierdź swojego maila!</h3>';
}
?>
<style>
    #submit {
	visibility: hidden;
}
</style>
<script type="text/javascript" >
var e = 0;
var e2 = 0;

function initElement()
{
	
	elem = document.getElementById("name");
	elem2 = document.getElementById("surname");
	elem3 = document.getElementById("email");
	elem.onblur = doEvent;
	elem2.onblur = doEvent;
	elem3.onblur = czyemail;
};
function doEvent()
{

	reg = /^[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ]{2,20}$/;
	wyn = this.value.match(reg);
	if(wyn == null) {
		
		
		document.getElementById("i"+this.id).innerHTML = "Imie lub nazwisko powinno zawierać od 2 do 20 liter";
		e = 1;
		return false;
	}
		
	else 
	{
		document.getElementById("i"+this.id).innerHTML = "";
		e=0;
		return true;
	}
  
  
}
window.onload = initElement;


function active()
	{
		var cos1 = document.getElementById("name");
                var cos2 = document.getElementById("surname");
                var cos3 = document.getElementById("email");
                var coss1 = document.getElementById("name").value;
                var coss2 = document.getElementById("surname").value;
                var coss3 = document.getElementById("email").value;
		var cos = document.getElementById("submit2")
		if(cos.value =="edytuj"){
		document.getElementById('name').disabled= false;
		document.getElementById('surname').disabled= false;
		document.getElementById('email').disabled= false;
		var square = document.getElementById("submit")
		square.style.visibility ="visible";
		
		cos.value = "anuluj";
		}
		else if(cos.value=="anuluj")
		{
			cos1.value=cos1.getAttribute("coss1");
			cos2.value=console.log(coss2);
                        cos3.value=console.log(coss3);
			cos.value="edytuj";
			
		}
	}
	


function czyemail(){
	reg = /^[a-zA-Z0-9ąćęłńóśżźĄĆĘŁŃÓŚŻŹ.,<>/?;:'"|\*-+-]{1,30}@[a-zA-Z0-9ąćęłńóśżźĄĆĘŁŃÓŚŻŹ.,<>/?;:'"|\*-+-]+(\.[a-zA-Z0-9ąćęłńóśżźĄĆĘŁŃÓŚŻŹ.,<>/?;:'"|\*-+-]+)+$/;
    wyn = this.value.match(reg);
	if (wyn === null) {
		document.getElementById("i"+this.id).innerHTML = "Podano niepoprawny e-mail. E-mail musi zawierac @ oraz kropke";
		e2 = 1;
		return false;
	}
	else
	{
		document.getElementById("i"+this.id).innerHTML = "";
		e2=0;
		return true;
	}
}
window.onsubmit = function(){
	if(e===0&&e2===0){
		
		return true;
	}
	else{
		return false;
	}
}
</script>
<form id="contactform" method="post" action="<?php echo URL; ?>dashboard/update" >
<h1>Account info</h1>
<table>
    <tr>
        <td>First name:</td>
        <td>Last Name:</td>
    </tr>
    <tr>
        <td><input type="text" disabled="disabled" name="name" id="name" value="<?php echo $this->data['name']; ?>"></input></td>
        <td><div id="iname" ></div></td>
        <td><input type="text" disabled="disabled" name="surname" id="surname" value="<?php echo $this->data['surname']; ?>"</input></td>
        <td><div id="isurname" ></div></td>
    </tr>
    <tr><td>Email:</td></tr>
    <tr><td><input type="text" disabled="disabled" name="email" id="email" value="<?php echo $this->data['login']; ?>"</input></td></tr>
    <td><div id="iemail" ></div></td>
    <tr><td>Favourite course:</td></tr>
    <tr><td><?php echo $this->data['course']; ?></td></tr>
	
</table>
<input type="button" value="edytuj" id="submit2" onclick="active();"/>
<input type="submit" value="zapisz" id="submit" />
</form>
