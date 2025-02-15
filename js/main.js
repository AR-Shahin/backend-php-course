// console.log("Hello");

// var varName = "Shahin";

// varName = 120

// var pi = 3.1416



let person = {
    'name' : 'shahin',
    'age' : 27,
    'is_graduate' : true
}

// console.log(person.name)
var varName = 3;
{let another = "ashin";}
// console.log(typeof varName)
varName = "shahin";



// console.log(typeof varName)
const PI = 9.9;



let a  = 10;
let b = 20;


// console.log(a+b)


pi = 5;


function sum(a,b){
    return a + b;
}


const sub = (a,b) => {
    return a - b;
}

const test = (a) => a + 10;


// console.log(sub(200,80))



let nums = [10,30,"ars",person];


// for(let i = 0;i<nums.length;i++){
//     console.log(nums[i])
// }


// for(let p in person){
//     console.log(p)
// }

// switch(ch){
//     case 3:
//         console.log("00");
//         break;
//     default:
//         console.log("000")
// }


// if(10 > 20){
//     console.log("NO");
// }else{
//     console.log("Yes");
// }


// class Test{
//     a(){
//         console.log("A")
//     }
// }

// let c = new Test();

// c.a();



// let ourH1 = document.getElementById("heading");
// let title = document.getElementsByClassName("title");
// let h1 = document.getElementsByTagName("h1");

let title = document.querySelector("h1");
let btn = document.getElementById("btn")
let p = document.getElementsByTagName("p")[0];

let add = document.getElementById("add");
//let remove = document.getElementById("remove");
let tbody = document.getElementsByTagName("tbody")[0];

// title.innerText = "changed title";
// title.innerHTML = "<i>hello</i>"

title.style.color = "red";
title.style.marginTop = "100px";

// title.classList.add("tansform");
// title.classList.remove("")
// console.log(title);

// btn.addEventListener("click", function(){
//     title.classList.toggle("tansform");
//     p.classList.toggle("d-none");
// });

add.addEventListener("click", function(){
    let tr = document.createElement("tr");
    let h = "<td></td>";
    let html = `
                <td>1</td>
                <td>John Doe</td>
            `;
    tr.innerHTML = html;

    tbody.appendChild(tr);
});



let jH1 = $("#heading");


jH1.css("color", "blue");



$("#btn").click(function(){
    $("#heading").toggleClass("tansform");
})