


var validatePhone = function(e) {
    e.target.value =  e.target.value.replace(/\D/g,'')
    console.log(e.target.value)
}

var validatePassword = function(e) {
   var password = document.getElementById("password").value
   if(password !== e.target.value) {
       alert("your passwords don't match")
   }
}

function sure() {

    if (confirm("Are you sure of all your information?") == true) {

        return true;
    } else {

        return false;
        
    }

}

function notsure(){

    if (confirm("Are you sure you want to cancel?") == true) {
        window.location.replace("index.php");
    } else {

        window.location.replace("login.php");
        
    }

}



// for the EXISTING CUSTOMER
var hintArray1 = ["Enter your Phone Number in this input box ", // element 0
    "Enter your password.", // element 1
    "" // element 2 
];

function mesg1(field, messageNum) {

    var x = document.getElementsByTagName("span");
    x[field].innerHTML = hintArray1[messageNum];
    x[field].style.color = '#746dd4';
}

// end for the EXISTING CUSTOMER

// for REGISTER AN ACCOUNT
var hintArray2 = ["Enter your real name ", "Enter your e-mail address in this input box ", // element 0
    "Enter your password.", // element 1
    "Re enter your password.", // element 3
    "Enter your phone number .", // element 4
    " Choose your Gender.", // element 5
    " select your city.", // element 6
    "  In this box, discribe your address", // element 7
    ""
]; // element 8

function mesg2(field2, messageNum2) {

    var x = document.getElementsByTagName("span");
    x[field2].innerHTML = hintArray2[messageNum2];
    x[field2].style.color = '#746dd4';
}

// end for the REGISTER AN ACCOUNT