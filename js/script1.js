// JavaScript Document

function myFunction() {
    const Companyname = document.getElementById("companyname").value;
    const Email = document.getElementById("email").value;
    const Password = document.getElementById("password").value;
    const Contact = document.getElementById("contactno").value;
    alert("Execution done upto getting elements upto contactno..");
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1=' + Companyname + '&email1=' + Email + '&password1=' + Password + '&contact1=' + Contact;
    if (Companyname == '' || Email == '' || Password == '' || Contact == '') {
        alert("Please Fill All Fields");
    } else {
        // AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "ajaxjs.php",
            data: dataString,
            cache: false,
            success: function (html) {
                alert(html);
            }
        });
    }
    return false;
}