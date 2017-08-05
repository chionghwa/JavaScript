//function Person(){
//}
//Person.prototype.name = "Nicholas";
//Person.prototype.age = 29;
//Person.prototype.job = "Software Engineer";
//Person.prototype.sayName = function(){
//    alert(this.name);
//};
//var person1 = new Person();
//var person2 = new Person();

//console.info(person1.__proto__);

(function(){
    var name = "";
     Person = function(value){
         name = value;
     };
     Person.prototype.getName = function(){
         return name;
     };
     Person.prototype.setName = function (value){
         name = value;
     };
})();

var p1 = new Person("Tom");
console.log(p1.getName());
//console.log(name);