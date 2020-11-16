// JavaScript source code


function validation() {
    var flname = document.getElementById("unm").value;
    var nmbr = document.getElementById("mobile").value;
    var e = document.getElementById("eid").value;
    var userid = document.getElementById("uid").value;
    var re;

    re = /^[A-Z][a-z]{2,}\s[A-Z][a-z]{2,}$/;
    if (!re.test(flname))
    {
        document.getElementById("fullnm").innerHTML = "*Invalid Full name";
        return;
    }
    else
    {
        document.getElementById("fullnm").innerHTML = "";
    }

    re = /^\d{10}$/;
    if (!re.test(nmbr))
    {
        document.getElementById("num").innerHTML = "*Invalid Number";
        return;
    }
    else
    {
        document.getElementById("num").innerHTML = "";
    }

    re = /^[\w.-.]{4,}@[a-z]{3,}\.[a-z]{2,}$/;
    if (!re.test(e))
    {
        document.getElementById("mail").innerHTML = "*Invalid Email";
        return;
    }
    else
    {
        document.getElementById("mail").innerHTML = "";
    }

    re = /^UID\d{5}$/;
    if (!re.test(userid))
    {
        document.getElementById("ud").innerHTML = "*Invalid user id name";
        return;
    }
    else
    {
        document.getElementById("ud").innerHTML = "";
    }


    var pwd = document.val.pass1.value;
    if (pwd.length < 5)
    {
        document.getElementById("pwderror").innerHTML = "Password should be atleast 5 chars long";
        return;
    }
    else
    {
        document.getElementById("pwderror").innerHTML = "";
    }
    var numflag = false;
    var spflag = false;
    var onenum = /[0-9]{1,}/;

    if (onenum.test(pwd))
    {
        numflag = true;
    }

    var onesp = /[^0-9A-Za-z]{1,}/

    if (onesp.test(pwd))
    {
        spflag = true;
    }

    if (numflag || spflag)
    {
        document.getElementById("pwderror").innerHTML = "Average Password";
    }

    if (!numflag && !spflag)
    {
        document.getElementById("pwderror").innerHTML = "Weak Password";
    }

    if (numflag && spflag)
    {
        document.getElementById("pwderror").innerHTML = "Strong Password";

    }

    if (document.val.pass1.value != document.val.pass2.value)
    {
        document.getElementById("matcherror").innerHTML = "Password does not match";
        return;
    }
    else
        document.getElementById("matcherror").innerHTML = "";

    alert("Data Submitted")
    document.val.submit();

}