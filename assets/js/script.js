var count = 0;
var aantalkeergeklikt = 0;
var allusers = [];
var votesperuser = [];
var totaalaantalvotes = 0;
var next = document.querySelector("#Next");
var eindscore = 0;
//Pagina moet voor de eerste keer geladen worden.
if (count == 0) {
    Eerstekeerladenvandepagina();
}
//Trekt de votes binnen en verandert de buttons op basis van de scores
function GetVotes(id) {
    console.log(id);
    fetch("https://sortinghat.mezapc.be/assets/api/GetVotes.php?id=" + id)
        .then(function (response) {
            return response.json();
        }).then(function (data) {
            console.log(data);
            var scores = [data[0].vote, data[1].vote, data[2].vote, data[3].vote];
            for (var index = 0; index < scores.length; index++) {
                eindscore += parseInt(scores[index]);
            }
            console.log(eindscore);
            document.getElementById("1").innerHTML = 
                Math.round((scores[0] / eindscore) * 100) +
                "% Gryffondor";
            document.getElementById("2").innerHTML =
                Math.round((scores[1] / eindscore) * 100) +
                "% Slytherin";
            document.getElementById("3").innerHTML =
                Math.round((scores[2] / eindscore) * 100) +
                "% Ravenclaw";
            document.getElementById("4").innerHTML =
                Math.round((scores[3] / eindscore) * 100) +
                "% Hufflepuff";
        });
        eindscore=0;
}
   //Html page opmaken.
function AddInfo(index) {
    document.getElementById("1").innerHTML = "This is a Gryffondor!!";
    document.getElementById("2").innerHTML = "This is a Slytherin!!";
    document.getElementById("3").innerHTML = "This is a Ravenclaw!!";
    document.getElementById("4").innerHTML = "This is a Hufflepuff!!";
    document.getElementById("Naam-boven").innerHTML = allusers[index].Firstname;
    document.getElementById("Naam").innerHTML = "Naam: " + allusers[index].Firstname + " " + allusers[index].Lastname;
    document.getElementById("Gender").innerHTML = "Gender: " + allusers[index].Gender;
    document.getElementById("Age").innerHTML = "Age: " + allusers[index].Age;
    document.getElementById("Telefoonnummer").innerHTML = "Telefoonnummer: 0" + allusers[index].Telefoonnummer;
    document.getElementById("intresses").innerHTML = "Intresses: " + allusers[index].Interesses;
}
//functie om mijn pagina voor de eerste keer te laden dan wordt het aangevoerd door de next knop.
function Eerstekeerladenvandepagina() {
    fetch("https://sortinghat.mezapc.be/assets/api/Getinfo.php")
        .then(function (response) {
            return response.json();
        }).then(function (data) {
            for (var index = 0; index < data.length; index++) {
                allusers.push(data[index]);
            }
            AddInfo(0);
        });
}

//Next button laten zien en vote sturen naar database maar set timeout aangezien ik uptodate code wil. Aantalkeergeklikt wordt op 1 gezegd zodat eventuele clicks niks meer doen.
function reply_click(clicked_id) {
    if (aantalkeergeklikt == 0) {
        next.style.visibility = "visible";
        Vote(clicked_id, allusers[count].PersoonID);
        aantalkeergeklikt = 1;
        setTimeout(function () { GetVotes(count + 1) }, 10);
    }
}
//Zal bij de laatste persoon mijn eindpagina zien anders laat het gewoon de volgende persoon zien
next.addEventListener("click", function () {
    if (count == allusers.length - 1) {
        window.location.replace("https://sortinghat.mezapc.be/einde.php");
    }
    else {
        next.style.visibility = "hidden";
        ++count;
        AddInfo(count);
        aantalkeergeklikt = 0;
    }
});

//zorgt ervoor dat een vote wordt verstuurd en alle kliks erna tellen niet mee
function Vote(house, id) {
    if (aantalkeergeklikt == 0) {
        fetch("https://sortinghat.mezapc.be/assets/api/Addvote.php?HouseID=" + house + "&id=" + id)
        AddInfo(count);
    }
}
