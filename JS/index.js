
function user(name){
    console.log("Hello "+ name.Firstname);

}



var myV = {Firstname: "Buddhi"};
user.Firstname = "Buddhi";

user(myV);

console.log(user.Firstname);
