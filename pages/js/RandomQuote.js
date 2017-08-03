var quotes = ["Креативность означает позволить себе ошибаться. Искусство означает знать, какие именно ошибки надо сохранить"];
var authors =["-Генри Адамс"];

var randomNum = Math.floor(Math.random() * quotes.length);
var author = author[randomNum];
var quote = quotes[randomNum];
document.querySelectorAll(".quote__text")[0].innerHTML = quote;
document.querySelectorAll(".quote__text")[1].innerHTML = author;