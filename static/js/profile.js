$(document).ready(function(){
    
    $('#disability').on('change', function() {
        
              if ( this.value == 'y') {
                $("#disabilityyes1").show();
              }
              else {
                $("#disabilityyes1").hide();
              }
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
    
    $('input[id=lefile]').change(function() {
        
            $('#photoCover').val($(this).val());
            
    });
    
    function validate() {
        
        $('#disability').on('change', function() {
            
            if ( this.value === 'y') {
                
              $("#disabilityyes1").show();
              
            }
            else {
                
              $("#disabilityyes1").hide();
              
            }
            
        });
    }
});

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

$("#lefile").change(function(){
    if (this.files && this.files[0]) 
    {
            var reader = new FileReader();
            reader.onload = function (e) 
            {
                    $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
    }
});

$('input[id=lefile]').change(function() {
    $('#photoCover').val($(this).val());
});