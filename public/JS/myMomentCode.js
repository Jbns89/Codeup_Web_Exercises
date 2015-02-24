var now = moment();
console.log(now.calendar());
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//returning a day
console.log(moment().format('dddd'));
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//returns a string inside of a time (Y/M/D)
console.log(moment().format('YYYY [is the same as] YYYY'));
console.log(moment().format('dddd [is the same as] dddd'));
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//a counter from a certain moment in time
var daysFromBirth = moment("19890116" , "YYYYMMDD").fromNow();
console.log(daysFromBirth);
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//Start of day in current hours
var startOf = moment().startOf('hour').fromNow();
console.log(startOf); 
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//Tells what day it is when you subtract
//so many days from now
console.log(moment().subtract(10, 'days').calendar());
console.log(moment().subtract(6, 'days').calendar());
console.log(moment().subtract(3, 'days').calendar());
console.log(moment().subtract(1, 'days').calendar());
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//Tells you current time and today
console.log(moment().calendar());
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");

//Tells what day it is when you add
//so many days from now
console.log(moment().add(1, 'days').calendar());
console.log(moment().add(3, 'days').calendar());
console.log(moment().add(10, 'days').calendar());
console.log(":^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:^:");
