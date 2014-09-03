var planets=['Mercury','Venus','earth','Mars','Jupiter','Saturn','Uranus','Neptune'];
function logPlanets()
{
    console.log('Here is the list of planets:');
    console.log(planets);
}
console.log('Adding "The Sun" to the beginning of the planets array.');
planets.unshift('The Sun');
logPlanets();

console.log('Adding "Pluto" to the end of the planets array.');
planets.push('Pluto');
logPlanets();

console.log('Removing "The Sun" from the beginning of the planets array.');
var sun=planets.shift();
logPlanets();

console.log('Removing "Pluto" from the end of the planets array.');
var pluto=planets.pop();
logPlanets();

console.log('Finding and logging the index of "Earth" in the planets array.');
var ei=planets.indexOf('earth');
console.log('Earth is at index of '+ ei);

console.log('Using splice to remove the planet after Earth.');
var removed=planets.splice(ei + 1,1);
logPlanets();

console.log('Using splice to add back the planet after Earth.');
planets.splice(ei+1,0,removed[0]);
logPlanets();

console.log('Reversing the order of the planets array.');
planets.reverse();
logPlanets();

console.log('Sorting the planets array.');
planets.sort();
logPlanets();
