const odr = document.querySelector('#Order')
// let idno = (Math.random() * 1000000000000000000);

odr.addEventListener('click', function () {
    alert("Your Order Has Been Placed!");
})
var bill = localStorage.getItem("BillAmount");
console.log("bill is", bill);
// window.onload = alert(localStorage.getItem("BillAmount"));
let billBox = document.querySelector('#billAmt');
window.onload = () => {
    billBox.value = bill;


}