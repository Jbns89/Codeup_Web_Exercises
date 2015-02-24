
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'green'; // todo, change this to your favorite color from the list
var msg = (color == favorite) ? console.log("You matched my favorite color!") : console.log("");
if (color == "red") 
{
    console.log("Red is the color of the sky.");
        
}
else if (color == "orange") 
{
    console.log("Orange is the color of bananas.");
        
}
else if (color == "yellow") 
{
    console.log("Yellow is the color of the grass.");
        
}
else if (color == "green") 
{
    console.log("Green is the color of flamingos");    
    
}
else if (color == "blue") 
{
    console.log("Blue is the color of ducks.");
        
}
else
{
    console.log("I do not know anything by that color.");
}
console.log("<^><^><^><^><^><^><^><^><^>");
console.log("I'm also color blind......");


