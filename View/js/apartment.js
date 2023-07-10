function validlapartment(apartment) {
    let BDTErr = document.getElementById("BDTErr");
    let RoadErr = document.getElementById("RoadErr");
    let ApartmentErr = document.getElementById("ApartmentErr");
    let EmailErr = document.getElementById("EmailErr");
    let MobileErr = document.getElementById("MobileErr");




    BDTErr.innerHTML = "";
    RoadErr.innerHTML = "";
    ApartmentErr.innerHTML = "";
    EmailErr.innerHTML = "";
    MobileErr.innerHTML = "";

    let BDT = apartment.BDT.value;
    let Road = apartment.Road.value;
    let Apartment = apartment.Apartment.value;
    let Email = apartment.Email.value;
    let Mobile = apartment.Mobile.value;

    let isvalid = true;
    let isEmpty = false;
    if (BDT === "") {
        BDTErr.innerHTML = "❗BDT should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (Road === "") {
        RoadErr.innerHTML = "❗Road should not empty!";
        isvalid = false;
        isEmpty = true;
    }
    if (Apartment === "") {
        ApartmentErr.innerHTML = "❗Apartment should not empty!";
        isvalid = false;
        isEmpty = true;
    }



    if (Email === "") {
        EmailErr.innerHTML = "❗Email should not empty!";
        isvalid = false;
        isEmpty = true;
    }

    if (Mobile === "") {
        MobileErr.innerHTML = "❗Mobile should not empty!";
        isvalid = false;
        isEmpty = true;
    }






    return isvalid;
}


