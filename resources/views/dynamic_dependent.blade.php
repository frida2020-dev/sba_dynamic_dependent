<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dynamic dependent dropbox</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
    }
</style>

</head>
<body>

    <br/>

    <div class="container box">
        <h3 align="center">Ajax dynamic Dependent Dropdown in laravel</h3>
        <br/>

        <div class="form-group">
            <select name="country" id="country" class="form-control input-lg dynamic" data-dependent="state">
                <option value="">Select country</option>

                @foreach($country_list as $country)
                
                    <option value="{{ $country->country}}">
                    {{ $country->country}}</option>
                @endforeach
            </select>
        </div>
        <br/>

        <div class="form-group">
            <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
            <option value="">Select State</option>
            </select>
        </div>
        <br/>
        <div class="form-group">
            <select name="city" id="city" class="form-control input-lg dynamic" >
                <option value="">Select City</option>
            </select>
        </div>

        {{ csrf_field() }}
        <br/>

    </div>

</body>
</html>

<script>
$(document).ready(function(){
    $('.dynamic').change(function () {
        if ($(this).val() != '') {
            var select = $(this).attr("id");
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            console.log(dependent);

            if (dependent === undefined) {
                return null;
            }
            $.ajax({
                url:"{{ route('dynamicdependent.fetch') }}",
                method:"GET",
                data:{select:select, value:value, _token:_token, dependent:dependent},
                success:function(result)
                {
                    $('#'+dependent).html(result);
                }
            });
        }
    })
})
</script>
