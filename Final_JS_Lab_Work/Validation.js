function validating() {
    let name = document.getElementById('name').value;
    let id = document.getElementById('id').value;
    let designation = document.getElementById('designation').value;
    let email = document.getElementById('email').value;
    let bloodGroup = document.getElementById('bloodGroup').value;
    let phone = document.getElementById('phone').value;
    let address = document.getElementById('address').value;
    let password = document.getElementById('pass').value;
    let Cpassword = document.getElementById('cPass').value;
    let gender = document.getElementById('gender').value;
    let Dob = document.getElementById('dob').value;
    let profilePic = document.getElementById('profilePic').value;

    function name_validating() {
        if (name == "") {
            document.getElementById('msg1').innerHTML = "*name field cannot be empty";
        } else {
            if (uname.split(" ").length < 2) {
                document.getElementById('msg1').innerHTML = "*name must contain at least 2 words";
            }
        }
    }

    function id_validating() {
        if (id == "") {
            document.getElementById('msg2').innerHTML = "*id field cannot be empty";
        }
    }

    function designation_validating() {
        if (designation == "") {
            document.getElementById('msg3').innerHTML = "*designation field cannot be empty";
        }
    }

    function bloodGroup_validating() {
        if (bloodGroup == "") {
            document.getElementById('msg4').innerHTML = "*bloodGroup field cannot be empty";
        }
    }

    function email_validating() {
        if (email == "") {
            document.getElementById('msg5').innerHTML = "*email field cannot be empty";
        }
    }

    function phone_validating() {
        if (phone == "") {
            document.getElementById('msg6').innerHTML = "*phone field cannot be empty";
        } else {
            if (phone.length < 11 && phone.length > 11) {
                document.getElementById('msg6').innerHTML = "*length must be 11 characters";
            }
        }
    }

    function address_validating() {
        if (address == "") {
            document.getElementById('msg7').innerHTML = "**address cannot be empty";
        }
    }

    function password_validating() {
        if (password == "") {
            document.getElementById('msg8').innerHTML = "**password cannot be empty";
        }
        if (password.length < 6) {
            document.getElementById('msg8').innerHTML = "**password must be at least 6 letters";
        }
        if (Cpassword == "") {
            document.getElementById('msg9').innerHTML = "**confirm password cannot be empty";
        } else {
            if (password != cPass) {
                document.getElementById('msg9').innerHTML = "*please check your password and confirm password";
                document.getElementById('msg8').innerHTML = "*please check your password and confirm password";
            }
        }

        function gender_validating() {
            if (gender.checked == false) {
                document.getElementById('msg10').innerHTML = "*gender field cannot be empty";
            }
        }

        function dob_validating() {
            if (Dob == "") {
                document.getElementById('msg11').innerHTML = "**Date of Birth cannot be empty";
            }
        }

        function profilePic_validating() {
            if (profilePic == "") {
                document.getElementById('msg12').innerHTML = "**Picture cannot be empty";
            }
        }
    }




}