<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a JavaScript program to perform phone number validation.</h1>
    <hr>
    <div class="p-4"> <form id="myform">
        <div>
            <label for="myform_phone">Phone:</label>
            <input type="text" id="myform_phone" name="phone" />
            <div id="phone_error" class="error hidden">Please enter a valid phone number</div> </div>
            <div class="mt-2">
            <button type="submit">Submit</button> 
        </div>
        </form>
    </div>
</body>
<script>
    function validatePhoneNumber(input_str) {
        var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        return re.test(input_str); 
    }
    function validateForm(event) {
        var phone = document.getElementById('myform_phone').value; 
        if (!validatePhoneNumber(phone)) {
            document.getElementById('phone_error').classList.remove('hidden'); 
        } else {
            document.getElementById('phone_error').classList.add('hidden');
            alert("validation success") }
            event.preventDefault(); 
        }
        document.getElementById('myform').addEventListener('submit', validateForm); 
</script>
</html>