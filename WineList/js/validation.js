
$(document).ready(e=>{

    $('#wineForm').submit(function(e) {
        console.log('Form Submitted');

        let name = $('#name').val(),
            country = $('#country').val(),
            cost = $('#cost').val(),
            year = $('#year').val();

        $('#nameError').text('');
        $('#countryError').text('');
        $('#costError').text('');
        $('#year').text('');

        let valid = true;

        if(name === '' || name==='undefined'){

            valid = false;
            $('#nameError').text("Name is invalid");

        }
        if(country === '' || country==='undefined'){
            valid = false;
            $('#countryError').text("Country is invalid");
        }
        if(cost === '' || cost==='undefined'){
            valid = false;
            $('#costError').text("COST is invalid");;
        }
        if(year === '' || year==='undefined'){
            var regex = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;

            if(!regex.test(year)){
                valid = false;  
                console.log('Regex is false');        
                $('#publishedError').text("Published date is invalid");
            }
        }

        if(!valid){
            e.preventDefault();
        }
     });
    
});