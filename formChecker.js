function checkin(){
    let name = document.getElementById("name");
    let pass = document.getElementById("pass");
    let item1 = document.getElementById("i1");
    let item2 = document.getElementById("i2");
    let item3 = document.getElementById("i3");
    let ship = document.getElementsByName("ship");
    let valid = true;
    if(name.value=="")
    {
	valid = false;
    }
    if(pass.value=="")
    {
	valid = false;
    }
    if(item1.value=="")
    {
	valid = false;
    }
    if(item2.value=="")
    {
	valid = false;
    }
    if(item3.value=="")
    {
	valid = false;
    }
    if(!valid)
    {
	alert("not valid input");
    }
    //alert(valid);
    console.log(valid);
}
