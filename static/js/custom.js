

function toggle(a,b){
	
	tmp=document.getElementById(a).style.display;
	tmp1=document.getElementById(b).style.display;
	document.getElementById(a).style.display=tmp1;
	document.getElementById(b).style.display=tmp;
	
}

var valid=[false, false];
$(document).ready(function(){
        $('#roll_no').on('blur', function() {
                roll=this.value;
                rollregex=/^[0-9][0-9](\/|-)?[a-zA-Z][a-zA-Z](\/|-)?[0-9][0-9]?[0-9]?$/;
                if(!rollregex.test(roll) || roll=='' || roll==null)
                {
                        document.getElementById('roll_error').style.display = 'block';
                }
                else
                {
                        valid[0] = true;
                        document.getElementById('roll_error').style.display = 'none';
                }
        });
        $('#pwd').on('blur', function() {
                password=this.value;
                passregex=/^[a-zA-Z0-9_@]*$/;
                if(!passregex.test(password) || password=='' || password==null)
                {
                        document.getElementById('pwd_error').style.display = 'block';
                }
                else
                {
                        valid[1] = true;
                        document.getElementById('pwd_error').style.display = 'none';
                }
        });
       
});
function isvalid() {
        validhai=valid[0] && valid[1];
        if(!valid[0])
        {
                document.getElementById('roll_error').style.display = 'block';
        }
        if(!valid[1])
        {
                document.getElementById('pwd_error').style.display = 'block';
        }
        return validhai;
}
function show(target) {
    document.getElementById(target).style.display = 'block';
    document.getElementById("buttonfp").style.display = 'none';
    document.getElementById("signin").style.display = 'none';
    document.getElementById("loginform").style.display = 'none';
}
function hide(target) {
    document.getElementById(target).style.display = 'none';
    document.getElementById("buttonfp").style.display = 'block';
    document.getElementById("signin").style.display = 'block';
    document.getElementById("loginform").style.display = 'block';
}

window.onload = function() {
  document.getElementById("roll_no").focus();
};