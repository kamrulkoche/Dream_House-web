function validseller(seller) {
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


    let FirstName = seller.FirstName.value;
    let LastName = seller.LastName.value;
    let Gender = seller.Gender.value;
    let NID = seller.NID.value;
    let Sold = seller.Sold.value;

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


