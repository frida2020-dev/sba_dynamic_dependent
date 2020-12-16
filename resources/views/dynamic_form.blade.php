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

    <form name="newappointment" id="newappointment" >
    <p class="form-group">
    <div class="row">
        <div class="column">
            <b><font color="green">Please enter National ID number to validate</font></b>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div class="form-group">
                <label for="firstname">National ID Number</label>
                <input id="id_number" name="id_number" min="0" max="99999999" step="1" placeholder="National ID Number" value=""  type="text" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div style="margin: 30px" class="column">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input id="firstname" readonly name="firstname" value="" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input id="middlename" readonly name="middlename" value="" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input id="lastname" readonly name="lastname" value="" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input id="dob" readonly name="dob" value="" type="text" class="form-control date" />
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id='gender' readonly name='gender' class='form-control'>
                        <option value=''>Select...</option><option value='M'>M</option><option value='F'>F</option></select>			</div>
            <div class="form-group">
                <label for="placeofbirth">Place Of Birth</label>
                <input id="placeofbirth" readonly name="placeofbirth" value="" type="text" class="form-control date" />
            </div>
            <div class="form-group">
                <label for="phone">Contact Mobile Phone</label>
                <div class="input-group">
                    <span class="input-group-addon" disabled="disabled" id="basic-addon1"></span>
                    <input id="phone" name="phone" value="" placeholder="07XXXXXXXX" type="text" class="form-control" />
                </div>
            </div>
        </div>
        <div style="margin: 30px" class="column">			
            <div>				
                <label for="service">Service Centre</label>
                <select class="form-control" name="centre_id" id="centre_id">
                        <option value="" selected>Select Huduma Center</option>
                        <option value='1'>GPO HUDUMA CENTRE</option><option value='2'>CITY SQUARE HUDUMA CENTRE</option><option value='3'>EASTLEIGH HUDUMA CENTRE</option><option value='4'>KIBRA HUDUMA CENTRE</option><option value='5'>MAKADARA HUDUMA CENTRE</option>		</select>
            </div>
            <div style="margin-top: 20px">				
                <label for="service">Service</label>
                <select class="form-control" name="centre_id" id="centre_id">
                        <option value="" selected>Select Huduma Service</option>
                        <option value='6'>NATIONAL ID APPLICATION </option><option value='7'>BIRTH CERTIFICATE APPLICATION</option><option value='8'>LOST CERTIFICATES</option><option value='9'>CERTIFICATE OF GOOD-CONDUCT</option><option value='10'>DEATH CERTIFICATE APPLICATION</option>		</select>
            </div>
            <div id="services" size="250" ></div><br>			
            <div class="form-group">
                <label for="service">Appointment Date and Time</label><br>

                <form action="/action_page.p">
                    <label for="birthday">Select a date:</label>
                    <input type="date" id="date" name="date">
                    <label for="appt">Select a time:</label>
                    <input type="time" id="appt" name="appt">
                </form>
            </div>
            <div class="form-group">				
                <label for="county_id">County of Residence</label>
                <select class="form-control" name="county_id" id="county_id" >
                    <option value="">Select...</option>
                    <option value='30'>Baringo</option><option value='36'>Bomet</option><option value='39'>Bungoma</option><option value='40'>Busia</option><option value='28'>Elgeyo/Marakwet</option><option value='14'>Embu</option><option value='7'>Garissa</option><option value='43'>Homa Bay</option><option value='11'>Isiolo</option><option value='34'>Kajiado</option><option value='37'>Kakamega</option><option value='35'>Kericho</option><option value='22'>Kiambu</option><option value='3'>Kilifi</option><option value='20'>Kirinyaga</option><option value='45'>Kisii</option><option value='42'>Kisumu</option><option value='15'>Kitui</option><option value='2'>Kwale</option><option value='31'>Laikipia</option><option value='5'>Lamu</option><option value='16'>Machakos</option><option value='17'>Makueni</option><option value='9'>Mandera</option><option value='10'>Marsabit</option><option value='12'>Meru</option><option value='44'>Migori</option><option value='1'>Mombasa</option><option value='21'>Murang'a</option><option value='47'>Nairobi</option><option value='32'>Nakuru</option><option value='29'>Nandi</option><option value='33'>Narok</option><option value='46'>Nyamira</option><option value='18'>Nyandarua</option><option value='19'>Nyeri</option><option value='25'>Samburu</option><option value='41'>Siaya</option><option value='6'>Taita Taveta</option><option value='4'>Tana River</option><option value='13'>Tharaka - Nithi</option><option value='26'>Trans Nzoia</option><option value='23'>Turkana</option><option value='27'>Uasin Gishu</option><option value='38'>Vihiga</option><option value='8'>Wajir</option><option value='24'>West Pokot</option>				</select>
                <div id="residencemsg" name="residencemsg" style="color:green; font-style: italic;" size="250" ></div>
            </div>
            <div class="form-group">
                <label for="emailaddress">Contact Email Address(Optional)</label>
                <input id="emailaddress" name="emailaddress" value="" placeholder="Email address" type="text" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="">
            <div class="form-group" style="padding-left:15px; padding-right:15px;">
                <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-success btn-lg btn-login-submit btn-block">BOOK APPOINTMENT</button>
            </div>
        </div>
    </div>
</form>

</body>
</html>
