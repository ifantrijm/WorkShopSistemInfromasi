var myVariable = "This is a variable";
var number1 = 5;
number1 = 3;
console.log (number1);//3
window.alert(number1);//3
number1 = number1 + 5;// 3 + 5 = 8
number1 = number1 - 6;// 8 - 6 = 2
var number2 = number1 * 10;//2 (times) 10 = 20
var number3 = number2 / number1;//20(devided by) 2 = 10;
var myString = "I am a " + "string!";//"I am a string!"

var myInteger = 12;//32-bit number (from -2,147,483,648 to 2,147,483,647 )
var myLong = 9310141419482;//64-bit number(from - 9,223,372,036,854,775,808 to 9,223,372,036,854,775,807)
var myFloat = 5.5; // 32-bit floating-point number (decimal)
var myDouble = 9310141419482.22; // 64-bit floating-point number
var myBoolean = true; // 1-bit true/false (0 or 1)
var myBoolean2 = false;
var myNotANumber = NaN;
var NaN_Example = 0 / 0; // NaN: Division by Zero is not possible var notDefined; // undefined: we didn't define it to anything yet
window.alert (aRandomVariable); // undefined
var myNull = null;

var myArray = []; // empty array
var favoriteFruits = [ "apple", "orange", "strawberry" ];
var carsInParkingLot = [ "Toyota", "Ferrari", "Lexus" ];var employees = [ "Billy" , "Bob", "Joe" ];
var primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31 ]; var randomVariables = [ 2, "any type works", undefined, null, true, 2.51 ]; myArray = [ "zero", "one", "two" ];
window.alert (myArray[ 0 ]); // 0
elementNumber = 1; window.alert (myArray[ elementNumber]); // Billy
myObject = {};
john = { firstname: "John", lastname: "Doe", fullname: "John Doe" }; billy = {
firstname: "Billy",
lastname: undefined,
fullname: "Billy"
};
window.alert (john.fullname); // John Doe window.alert (billy.firstname); // Billy