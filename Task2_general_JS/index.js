
//problem 1 
function reverse() {
    x = 32243;
    i = 0;
    for (i; Math.floor(x) > 0; x = x / 10) {
        i = i * 10;
        i = i + (Math.floor(x) % 10);

    }
    // console.log (i);

}

// ===============================================================//
//Problem 2

function orderr(s) {

    s = s.split("");//TO MAKE IT ARRAY
    for (i = 0; i < s.length; i++) {
        for (j = i + 1; j < s.length; j++) {

            if (s[i] > s[j]) {
                temp = s[i];
                s[i] = s[j];
                s[j] = temp;


            }
        }
    }
    console.log(s.join(""));

}
function order() {  //put function name in button in html
    orderr("webmaster");
}

// ===============================================================//
// problem 3

function countvaulss(v) {
    v = v.split(""); //TO MAKE IT ARRAY
    c = 0;
    for (i = 0; i < v.length; i++) {
        if ((v[i] == 'i' || v[i] == 'o') || (v[i] == 'e' || v[i] == 'a') || (v[i] == 'u') || (v[i] == 'I' || v[i] == 'O') || (v[i] == 'E' || v[i] == 'A') || (v[i] == 'U ')) {
            c++;
        }
    }
    console.log(c);
}
function countvauls() {
    countvaulss("aouieee"); //REMOVE COMMENT TO TRY THIS FUNCTION
}

// ===============================================================//
//problem 4
function uppercase() {
    x = "the quick brown fox";
    y = "";
    c = x[0];
    // console.log(c); 
    for (i = 0; i < x.length; i++) {
        if (i == 0) {
            const char = x[i];
            const charCode = char.charCodeAt(0);
            const integerValue = parseInt(charCode);
            const up = (integerValue - 32);
            const t = String.fromCharCode(up);
            y += t;

        }
        else if (x[i] == " ") {
            i++;
            const char = x[i];
            const charCode = char.charCodeAt(0);
            const integerValue = parseInt(charCode);
            const up = (integerValue - 32);
            const t = String.fromCharCode(up);
            y += t;


        }
        else {
            y += x[i];
        }
        if (x[i + 1] == " ") y += " ";

    }
    // console.log(y);
}

// ===============================================================//
// problem 5
function largenumber() {
    arr = [1, 3, 10, -1, 5];
    large = arr[0];
    for (i = 1; i < arr.length; i++) {
        if (arr[i] > large) {
            large = arr[i];
        }
    }
    // console.log(large);

}
// ===============================================================//
// problem 6
function sortt(arr) {
    try {


        if (arr.trim() == "") throw "empty";
        for (i = 0; i < arr.length; i++) {
            for (j = i + 1; j < arr.length; j++) {

                if (arr[i] > arr[j]) {
                    temp = arr[i];
                    arr[i] = arr[j];
                    arr[j] = temp;


                }
            }
        }
        console.log(arr);
    }
    catch (e) {
        console.error(e);
        console.log("No input")

    }

}
function sort() {
    arr = [9, -1, 0, 3, 5, 2, 6, 3, 6];
    arr2 = ['a', 'c', 'd', 'a', 'z', 'e', 'b'];
    sortt();
}
// ===============================================================//
// problem 7

function palandromm(p) {
    try {
        if (p.trim() == "") throw "empty";

        cp = "";
        for (i = p.length - 1; i > -1; i--) {
            cp += p[i];
        }
        if (p == cp)
            console.log("Palandrom");
        else
            console.log("NOT Palandrom " + p + " not equql " + cp);
    }
    catch {
        console.log("Not string");
    }

}
function palandrom() {

    palandromm("122221");


}
// ===============================================================//
// problem 8

function factorialn(n) {
    try {

        if (isNaN(n)) throw "not a number";
        // if(n.trim() == "") throw "empty";

        if (n < 1) return -1;
        if (n == 1) return 1;
        else
            return (n * factorialn(n - 1));

    }
    catch (e) {
        console.error(e);

    }
}
function factorial() {
    // console.log(factorialn("")); //error empty
    // f="q"; //error not number
    f = 7;
    console.log(factorialn(f));

}