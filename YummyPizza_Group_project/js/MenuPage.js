
defer;

var pizzaNum = 0;

updateNum();

function increment(id, pizzaNum) {
    updateNum(++pizzaNum, id);
    pizzaNum=(pizzaNum<0) ? pizzaNum=0 :pizzaNum;
}

function Decrement(id, pizzaNum) {
    updateNum(--pizzaNum, id);
    pizzaNum=(pizzaNum<0) ? pizzaNum=0 :pizzaNum;
}
function updateNum(Num, id) {
    
    Num=(Num<0) ? Num=0 :Num;

    document.getElementById(id).innerHTML = Num;
    
};