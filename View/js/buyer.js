function validbuyer(buyer) {
    let FirstNameErr = document.getElementById("FirstNameErr");
    let LastNameErr = document.getElementById("LastNameErr");
    let GenderErr = document.getElementById("GenderErr");
    let NumberErr = document.getElementById("NumberErr");
    let NIDErr = document.getElementById("NIDErr");
    let SoldErr = document.getElementById("SoldErr");


    FirstNameErr.innerHTML = "";
    LastNameErr.innerHTML = "";
    GenderErr.innerHTML = "";
    NumberErr.innerHTML = "";
    NIDErr.innerHTML = "";
    SoldErr.innerHTML = "";


    let FirstName = buyer.FirstName.value;
    let LastName = buyer.LastName.value;
    let Gender = buyer.Gender.value;
    let Number = buyer.Number.value;
    let NID = buyer.NID.value;
    let Sold = buyer.Sold.value;

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
    if (Number === "") {
        NumberErr.innerHTML = "❗Number should not empty!";
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


