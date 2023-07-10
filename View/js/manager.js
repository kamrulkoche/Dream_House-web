function validmanager(manager) {
    let FirstNameErr = document.getElementById("FirstNameErr");
    let LastNameErr = document.getElementById("LastNameErr");
    let GenderErr = document.getElementById("GenderErr");
    let NIDErr = document.getElementById("NIDErr");
    let SoldErr = document.getElementById("SoldErr");


    FirstNameErr.innerHTML = "";
    LastNameErr.innerHTML = "";
    GenderErr.innerHTML = "";
    NIDErr.innerHTML = "";
    SoldErr.innerHTML = "";


    let FirstName = manager.FirstName.value;
    let LastName = manager.LastName.value;
    let Gender = manager.Gender.value;
    let NID = manager.NID.value;
    let Sold = manager.Sold.value;

    let isvalid = true;
    let isEmpty = false;

    if (FirstName === "") {
        FirstNameErr.innerHTML = "❗FirstName should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (LastName === "") {
        LastNameErr.innerHTML = "❗LastName should not empty!";
        isvalid = false;
        isEmpty = true;
    }

    if (Gender === "") {
        GenderErr.innerHTML = "❗Gender should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (NID === "") {
        NIDErr.innerHTML = "❗NID should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (Sold === "") {
        SoldErr.innerHTML = "❗Sold should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    return isvalid;
}


