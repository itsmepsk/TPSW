
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
function validatename() {
	name=$("#name").val();
	nameregex=/^?$/;
	if(!nameregex.test(name) || name=='')
	{
		document.getElementById('name_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('name_error').style.display = 'none';
		return true;
	}
}
function validateregistration_no() {
	registration_no=$("#registration_no").val();
	registration_noregex=/^?$/;
	if(!registration_noregex.test(registration_no) || registration_no=='')
	{
		document.getElementById('registration_no_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('registration_no_error').style.display = 'none';
		return true;
	}
}
function validatecur_sem() {
	cur_sem=$("#cur_sem").val();
	if(cur_sem=='0')
	{
		document.getElementById('cur_sem_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('cur_sem_error').style.display = 'none';
		return true;
	}
}
function validatesex() {
	sex=$("#sex").val();
	if(sex=='0')
	{
		document.getElementById('sex_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sex_error').style.display = 'none';
		return true;
	}
}
function validatedob() {
	dob=$("#dob").val();
	dobregex=/^?$/;
	if(!dobregex.test(dob) || dob=='')
	{
		document.getElementById('dob_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('dob_error').style.display = 'none';
		return true;
	}
}
function validatecategory() {
	category=$("#category").val();
	if(category=='0')
	{
		document.getElementById('category_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('category_error').style.display = 'none';
		return true;
	}
}
function validateemail() {
	email=$("#email").val();
	emailregex=/^?$/;
	if(!emailregex.test(email) || email=='')
	{
		document.getElementById('email_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('email_error').style.display = 'none';
		return true;
	}
}
function validatecontact_no_1() {
	contact_no_1=$("#contact_no_1").val();
	contact_no_1regex=/^?$/;
	if(!contact_no_1regex.test(contact_no_1) || contact_no_1=='')
	{
		document.getElementById('contact_no_1_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('contact_no_1_error').style.display = 'none';
		return true;
	}
}
function validatecontact_no_2() {
	contact_no_2=$("#contact_no_2").val();
	contact_no_2regex=/^?$/;
	if(!contact_no_2regex.test(contact_no_2) || contact_no_2=='')
	{
		document.getElementById('contact_no_2_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('contact_no_2_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_1() {
	sgpa_1=$("#sgpa_1").val();
	sgpa_1regex=/^?$/;
	if(!sgpa_1regex.test(sgpa_1) || sgpa_1=='')
	{
		document.getElementById('sgpa_1_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_1_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_2() {
	sgpa_2=$("#sgpa_2").val();
	sgpa_2regex=/^?$/;
	if(!sgpa_2regex.test(sgpa_2) || sgpa_2=='')
	{
		document.getElementById('sgpa_2_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_2_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_3() {
	sgpa_3=$("#sgpa_3").val();
	sgpa_3regex=/^?$/;
	if(!sgpa_3regex.test(sgpa_3) || sgpa_3=='')
	{
		document.getElementById('sgpa_3_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_3_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_4() {
	sgpa_4=$("#sgpa_4").val();
	sgpa_4regex=/^?$/;
	if(!sgpa_4regex.test(sgpa_4) || sgpa_4=='')
	{
		document.getElementById('sgpa_4_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_4_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_5() {
	sgpa_5=$("#sgpa_5").val();
	sgpa_5regex=/^?$/;
	if(!sgpa_5regex.test(sgpa_5) || sgpa_5=='')
	{
		document.getElementById('sgpa_5_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_5_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_6() {
	sgpa_6=$("#sgpa_6").val();
	sgpa_6regex=/^?$/;
	if(!sgpa_6regex.test(sgpa_6) || sgpa_6=='')
	{
		document.getElementById('sgpa_6_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_6_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_7() {
	sgpa_7=$("#sgpa_7").val();
	sgpa_7regex=/^?$/;
	if(!sgpa_7regex.test(sgpa_7) || sgpa_7=='')
	{
		document.getElementById('sgpa_7_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_7_error').style.display = 'none';
		return true;
	}
}
function validatesgpa_8() {
	sgpa_8=$("#sgpa_8").val();
	sgpa_8regex=/^?$/;
	if(!sgpa_8regex.test(sgpa_8) || sgpa_8=='')
	{
		document.getElementById('sgpa_8_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('sgpa_8_error').style.display = 'none';
		return true;
	}
}
function validatecgpa() {
	cgpa=$("#cgpa").val();
	cgparegex=/^?$/;
	if(!cgparegex.test(cgpa) || cgpa=='')
	{
		document.getElementById('cgpa_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('cgpa_error').style.display = 'none';
		return true;
	}
}
function validate12_obtained_marks() {
	12_obtained_marks=$("#12_obtained_marks").val();
	12_obtained_marksregex=/^?$/;
	if(!12_obtained_marksregex.test(12_obtained_marks) || 12_obtained_marks=='')
	{
		document.getElementById('12_obtained_marks_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('12_obtained_marks_error').style.display = 'none';
		return true;
	}
}
function validate12_total_marks() {
	12_total_marks=$("#12_total_marks").val();
	12_total_marksregex=/^?$/;
	if(!12_total_marksregex.test(12_total_marks) || 12_total_marks=='')
	{
		document.getElementById('12_total_marks_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('12_total_marks_error').style.display = 'none';
		return true;
	}
}
function validate12_percent() {
	12_percent=$("#12_percent").val();
	12_percentregex=/^?$/;
	if(!12_percentregex.test(12_percent) || 12_percent=='')
	{
		document.getElementById('12_percent_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('12_percent_error').style.display = 'none';
		return true;
	}
}
function validate10_obtained_marks() {
	10_obtained_marks=$("#10_obtained_marks").val();
	10_obtained_marksregex=/^?$/;
	if(!10_obtained_marksregex.test(10_obtained_marks) || 10_obtained_marks=='')
	{
		document.getElementById('10_obtained_marks_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('10_obtained_marks_error').style.display = 'none';
		return true;
	}
}
function validate10_total_marks() {
	10_total_marks=$("#10_total_marks").val();
	10_total_marksregex=/^?$/;
	if(!10_total_marksregex.test(10_total_marks) || 10_total_marks=='')
	{
		document.getElementById('10_total_marks_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('10_total_marks_error').style.display = 'none';
		return true;
	}
}
function validate10_percent() {
	10_percent=$("#10_percent").val();
	10_percentregex=/^?$/;
	if(!10_percentregex.test(10_percent) || 10_percent=='')
	{
		document.getElementById('10_percent_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('10_percent_error').style.display = 'none';
		return true;
	}
}
function validatefather_name() {
	father_name=$("#father_name").val();
	father_nameregex=/^?$/;
	if(!father_nameregex.test(father_name) || father_name=='')
	{
		document.getElementById('father_name_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('father_name_error').style.display = 'none';
		return true;
	}
}
function validatemother_name() {
	mother_name=$("#mother_name").val();
	mother_nameregex=/^?$/;
	if(!mother_nameregex.test(mother_name) || mother_name=='')
	{
		document.getElementById('mother_name_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('mother_name_error').style.display = 'none';
		return true;
	}
}
function validateheight() {
	height=$("#height").val();
	heightregex=/^?$/;
	if(!heightregex.test(height) || height=='')
	{
		document.getElementById('height_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('height_error').style.display = 'none';
		return true;
	}
}
function validateweight() {
	weight=$("#weight").val();
	weightregex=/^?$/;
	if(!weightregex.test(weight) || weight=='')
	{
		document.getElementById('weight_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('weight_error').style.display = 'none';
		return true;
	}
}
function validatepower_left() {
	power_left=$("#power_left").val();
	power_leftregex=/^?$/;
	if(!power_leftregex.test(power_left) || power_left=='')
	{
		document.getElementById('power_left_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('power_left_error').style.display = 'none';
		return true;
	}
}
function validatepower_right() {
	power_right=$("#power_right").val();
	power_rightregex=/^?$/;
	if(!power_rightregex.test(power_right) || power_right=='')
	{
		document.getElementById('power_right_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('power_right_error').style.display = 'none';
		return true;
	}
}
function validatedisability() {
	disability=$("#disability").val();
	disabilityregex=/^?$/;
	if(!disabilityregex.test(disability) || disability=='')
	{
		document.getElementById('disability_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('disability_error').style.display = 'none';
		return true;
	}
}
function validatedisability_type() {
	disability_type=$("#disability_type").val();
	disability_typeregex=/^?$/;
	if(!disability_typeregex.test(disability_type) || disability_type=='')
	{
		document.getElementById('disability_type_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('disability_type_error').style.display = 'none';
		return true;
	}
}
function validatedisability_percent() {
	disability_percent=$("#disability_percent").val();
	disability_percentregex=/^?$/;
	if(!disability_percentregex.test(disability_percent) || disability_percent=='')
	{
		document.getElementById('disability_percent_error').style.display = 'block';
		return false;
	}
	else
	{
		document.getElementById('disability_percent_error').style.display = 'none';
		return true;
	}
}