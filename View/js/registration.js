function validregistration(registration) {
    let FirstNameErr = document.getElementById("FirstNameErr");
    let LastNameErr = document.getElementById("LastNameErr");
    let GenderErr = document.getElementById("GenderErr");
    let EmailErr = document.getElementById("EmailErr");
    let MobileNoErr = document.getElementById("MobileNoErr");
    let RoadErr = document.getElementById("RoadErr");
    // let CountryErr = document.getElementById("CountryErr");
    let UserErr = document.getElementById("UserErr");
    let PasswordErr = document.getElementById("PasswordErr");
    let ConpasswordErr = document.getElementById("ConpasswordErr");

    FirstNameErr.innerHTML = "";
    LastNameErr.innerHTML = "";
    GenderErr.innerHTML = "";
    EmailErr.innerHTML = "";
    MobileNoErr.innerHTML = "";
    RoadErr.innerHTML = "";
    // CountryErr.innerHTML = "";
    UserErr.innerHTML = "";
    PasswordErr.innerHTML = "";
    ConpasswordErr.innerHTML = "";


    let FirstName = registration.FirstName.value;
    let LastName = registration.FirstName.value;
    let Gender = registration.Gender.value;
    let email = registration.email.value;
    let number = registration.number.value;
    let road = registration.road.value;
    // let Country = registration.Country.value;
    let username = registration.username.value;
    let password = registration.password.value;
    let confirm_password = registration.confirm_password.value;

    let isvalid = true;
    let isEmpty = false;
    if (FirstName === "") {
        FirstNameErr.innerHTML = "❗FirstName should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (LastName === "") {
        LastNameErr.innerHTML = "❗ LastName should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (Gender === "") {
        GenderErr.innerHTML = "❗ Gender should not empty!";
        isvalid = false;
        isEmpty = true;
    }

    if (email === "") {
        EmailErr.innerHTML = "❗ Email should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (number === "") {
        MobileNoErr.innerHTML = "❗ MobileNo should not empty!";
        isvalid = false;
        isEmpty = true;
    }

    if (road === "") {
        RoadErr.innerHTML = "❗ Road should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    // if(Country === "") {
    //     CountryErr.innerHTML = "❗ Country should not empty!";
    //     isvalid = false;
    //     isEmpty = true;
    // }
    if (username === "") {
        UserErr.innerHTML = "❗ Username should not empty!";
        isvalid = false;
        isEmpty = true;
    }

    if (password === "") {
        PasswordErr.innerHTML = "❗  Password should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (confirm_password === "") {
        ConpasswordErr.innerHTML = "❗ Confirm Password should not empty!";
        isvalid = false;
        isEmpty = true;
    }

    return isvalid;
}


