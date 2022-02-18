// var, let, const

var name = 'sibe sibe';
console.log(name);

name = 'habiqi';
console.log(name);

// init var
var greeting;
console.log(greeting);
greeting = 'hello';
console.log(greeting);

// letter, number, _, $

var variable; // boleh
var _variable; // boleh
var vari_able; // boleh
var $variable; // boleh
var vari$able; // boleh
var variable123; // boleh
var vari123able123; // boleh

// multi words
var firstname;
var firstName;
var FirstName;
var first_name;

/**
 * multi line
 * comments
 */

let names;
names = 'sibe 123';
console.log(names);

names = 'habiqi 169';
console.log(names); 

// ini tidak bisa / error

// const nama = 'habi';
// console.log(nama);
// nama = 'nasrul';
// console.log(nama);

const person = {
    name : 'sibe',
    age : 18
}

person.name = 'habiqi';
person.age = 19;

// person = 'sibe';  ini error

console.log(person);

const number = [1,2,3,4,5];
number.push(6);
number.push(7,8);

// number = {
//     a : 1,
//     b : 2
//     c : 3
// }  ini juga error

console.log(number);