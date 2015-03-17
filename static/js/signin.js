function toggle(target,a,b,c) {
	tmp=document.getElementById(a).style.display;
	tmp1=document.getElementById(target).style.display;
    document.getElementById(target).style.display = tmp;
    document.getElementById(a).style.display = tmp1;
    document.getElementById(b).style.display = tmp1;
    document.getElementById(c).style.display = tmp1;
}
function validateroll() {
	roll=$("#roll_no").val();
	rollregex=/^[0-9][0-9](\/|-)?[a-zA-Z][a-zA-Z](\/|-)?[0-9][0-9]?[0-9]?$/;
	if(!rollregex.test(roll) || roll=='')
	{
		document.getElementById('roll_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('roll_error').style.display = 'none';
		return true;
	}
}
function validatepwd() {
	password=$("#pwd").val();
	passregex=/^[a-zA-Z0-9_@]*$/;
	if(!passregex.test(password) || password=='' || password.length<8)
	{
		document.getElementById('pwd_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('pwd_error').style.display = 'none';
		return true;
	}
}
function isvalid(){
	return validateroll() && validatepwd();
}
$(document).ready(function(){
	$('#roll_no').on('blur', validateroll);
	$('#pwd').on('blur', validatepwd);
});