departments=['bt','ce','ch','cs','ec','ee','it','me','mm'];
function replaceAll(find, replace, str) {
  return str.replace(new RegExp(find, 'g'), replace);
}
function validate(rollno)
{
	rollno=replaceAll('/','',rollno);
	rollno=replaceAll('-','',rollno);
	rollno=rollno.toLowerCase();
	year=rollno.substring(0,2);
	dept=rollno.substring(2,4);
	roll=rollno.substring(4);
	return (rollno.length<8 && !isNaN(year) && parseInt(year)>=12 && departments.indexOf(dept)>=0 && !isNaN(roll));
}
function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}