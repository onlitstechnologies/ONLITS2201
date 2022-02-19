// const readline = require("readline");

// const rl = readline.createInterface({
//   input: process.stdin,
//   output: process.stdout,
// });


// let a, b;
// rl.question("Enter a number: ", function(answer){
//     a = answer;
// });
// rl.question("Enter another number: ", function(answer){
//     b = answer;
// });
// let c = a + b;
// console.log("The sum is " + c);
// -----------------------------------------------------------------------

function read(num) {
    // return num
    console.log(num)
}

function readSupport(message) {
    const readline = require('readline').createInterface({
        input: process.stdin,
        output: process.stdout
    })

    readline.question(message, num => {
        // a = console.log(`Hi ${name}!`)
        // a = name
        // console.log(a)
        read(num)
        readline.close()
    })

}

readSupport(`Enter a number: `)
// a = read()
// console.log(a);