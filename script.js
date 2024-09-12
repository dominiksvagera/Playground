console.log('Hello, world!');

let nazev = 'Tome';

var vek = 25;

let pravda = true;



console.log(nazev);
console.log(vek);
console.log(pravda);

let vek2 = 100;

console.log(vek2);
console.log(vek2+vek);

var nazev2 = 'Ahoj';

console.log(nazev2 + " " + nazev);

const konstanta = 10;

console.log(konstanta);

var nazev2 = 'Hello';

console.log(nazev2);

function vypisCislo(cislo) {
    console.log(cislo);
}

function vypisJmeno(){
    console.log('Tome');
}

function nakrajejZeleninu(zelenina){
    console.log(zelenina);
}

function secti(a, b) {
    console.log(a + b);
}

secti(1, 2);
secti(10, 20);
secti(100, 200);


vypisCislo(5);
vypisCislo(10);
vypisCislo(100);
vypisCislo(1000);
vypisJmeno();

nakrajejZeleninu('mrkev');
nakrajejZeleninu('cuketa');
nakrajejZeleninu('rajče');
nakrajejZeleninu('okurka');

let pole = [1, 2, 3, 4, 5];
let pole1 = [2, 1, true, "jak", "ahoj"];
let pole2 = [2, 1, "se", "jak", "ahoj"];
let pole3 = [2, 1, true, "jak", ["ahoj", "nazdar"]];

let osoba = { 
    jmeno: 'Tome',
    vek: 25,
    pravda: true,
    zamestnani: true,
    kolegove: ['Petr', 'Jana', 'Karel'],
    stekej: function (){
        console.log('haf');
    },
zamestnavatel: {
    holding: {
        nazev: 'PPF Group',
        adresa: 'Praha 1',
        pocetFirem: 10
    },
    nazev: 'Google',
    adresa: 'Praha 1',
    pocetZamestnancu: 100
}
};

console.log(osoba.kolegove[1]);
console.log(osoba.zamestnavatel.holding.nazev);
console.log(osoba.stekej());


osoba.jmeno = 'Petr';
console.log(osoba.jmeno);

let button = document.getElementById('button');

let links = document.getElementsByTagName('a');



console.log(button);
console.log(links);
console.log(links[2]);

console.log(button.style.backgroundColor = 'green');



