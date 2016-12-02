var showDialogSmoothly = function(dialog) {
        registerDialog.style.opacity = 0;
        registerDialog.style.display = 'block';

        var opacier = function(opacity) {
            if (opacity <= 1) {
                registerDialog.style.opacity = opacity;
                setTimeout(_ => opacier(opacity + 0.05), 50);
            }
        };
        opacier(0);
    };

    var registerButton = document.getElementById('registerButton');
    registerButton.onclick = function() {
        var registerDialog = document.getElementById('registerDialog');
        var display = registerDialog.style.display;
        if (registerDialog.style.display === 'none') {
            showDialogSmoothly(registerDialog);
        } else {
            registerDialog.style.display = 'none';
        }
    };

    function Validate(obj){
        var user=obj.user.value;
        var password=obj.pass.value;
        var passagain=obj.reppass.value;
        var email=obj.mail.value;
        var errors="";

        if(user=="" || password=="" || passagain=="" || email==""){
            alert("Please fill all fields!!!!");
            return false;
        }

        if(password.length<6){
            errors+="Password is too short!!!\n";
        }

        if(password!=passagain){
            errors+="Passwords do not match!!!\n";
        }

        var reg=/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
        if(!reg.test(email)){
            errors+="E-mail is incorrect!!!\n";
        }



        if(errors==""){
            alert("All is OK!!!");
            return true;
        }

        else{
            alert(errors);
            return false;
        }



    }