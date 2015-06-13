function checkdisability() {
    dis = $("#disability").val();
    if ( dis == 'yes') {
        document.getElementById('disabilityyes').style.display = 'block';
        document.getElementById('disabilityyes1').style.display = 'block';
    }
    else {
        document.getElementById('disabilityyes').style.display = 'none';
        document.getElementById('disabilityyes1').style.display = 'none';
    }
}
$(document).ready(function(){
    $('#disability').on('change', checkdisability);
    checkdisability();
    $('#cur_sem').on('change', sems);
    sems();
    $("#lecv").change(function(){
        this.form.submit();
    });
    $("#lefile").change(function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    $("#cancelpic").click(function(){
        $('#preview').attr('src',$('#pic').attr('src'));
//		bug here
    });
});
function sems(){
    cur=$("#cur_sem").val();
    if(cur == 1)
    {
        for(i=1;i<=2;i++)
        {
            document.getElementById('cgpa'.concat(i)).style.display = 'none';
            document.getElementById('supplies'.concat(i)).style.display = 'none';
            document.getElementById('active_supplies'.concat(i)).style.display = 'none';
        }
        document.getElementById('pass').style.display = 'block';
        document.getElementById('pass1').style.display = 'block';
    }
    else
    {
        for(i=1;i<=2;i++)
        {
            document.getElementById('cgpa'.concat(i)).style.display = 'block';
            document.getElementById('supplies'.concat(i)).style.display = 'block';
            document.getElementById('active_supplies'.concat(i)).style.display = 'block';
        }
        document.getElementById('pass').style.display = 'none';
        document.getElementById('pass1').style.display = 'none';
    }
    for(i=1;i<cur;i++)
    {
        document.getElementById('sgpa'.concat(i)).style.display = 'block';
        document.getElementById('gpa'.concat(i)).style.display = 'block';
    }
    for(i=cur;i<=8;i++)
    {
        document.getElementById('sgpa'.concat(i)).style.display = 'none';
        document.getElementById('gpa'.concat(i)).style.display = 'none';
    }
}
function readURL(input) {
    if (input.files && input.files[0])
    {
        var reader = new FileReader();
        reader.onload = function (e)
        {
            document.getElementById('prevImage').src=e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function confirmDelete() {
    return confirm("Do you really want to delete your photo?");
}

function show(target1,target2) {
    document.getElementById(target1).style.display = 'block';
    document.getElementById(target2).style.display = 'none';
}