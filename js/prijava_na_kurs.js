var kolaci = {};

function saveCookies() {
    kolaci["ime"] = document.forms['forma']['ime'].value;
    kolaci["prezime"] = document.forms['forma']['prezime'].value;

    document.cookie = "";
    var expires = new Date(Date.now() + 60 * 1000).toString();
    var smestamKolace = "";
    for (var key in kolaci) {
        smestamKolace = key + "=" + kolaci[key] + ";" + expires + ";";
        document.cookie = smestamKolace;
    }

    document.getElementById("out").innerHTML = document.cookie;
}

function loadCookies() {

    kolaci = {};
    var kv = document.cookie.split(";");
    for (var id in kv) {
        var cookie = kv[id].split("=");
        kolaci[cookie[0].trim()] = cookie[1];
    }
    if (kolaci["ime"] != undefined || kolaci["prezime"] != undefined) {
        document.forms['forma']['ime'].value = kolaci["ime"];
        document.forms['forma']['prezime'].value = kolaci["prezime"];
    }

}