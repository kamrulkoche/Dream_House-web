function validchangepassword(changepassword) {
    let changepasswordErr = document.getElementById("changepasswordErr");
    let confirmpasswordErr = document.getElementById("confirmpasswordErr");

    changepasswordErr.innerHTML = "";
    confirmpasswordErr.innerHTML = "";

    let change_password = changepassword.change_password.value;
    let confirm_password = changepassword.confirm_password.value;

    let isvalid = true;
    let isEmpty = false;
    if (change_password === "") {
        changepasswordErr.innerHTML = "❗Changepasswor should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (confirm_password === "") {
        confirmpasswordErr.innerHTML = "❗Confirmpassword should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    return isvalid;
}


