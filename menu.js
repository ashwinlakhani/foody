// function up(max) {
//     document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
//     if (document.getElementById("myNumber").value >= parseInt(max)) {
//         document.getElementById("myNumber").value = max;
//     }
// }
// function down(min) {
//     document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
//     if (document.getElementById("myNumber").value <= parseInt(min)) {
//         document.getElementById("myNumber").value = min;
//     }
// }
let totalPrice = 0;
let total = 0;
function incrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
    var curPrice = 199;
    if (!isNaN(currentVal)) {
        parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        console.log(currentVal);
        totalPrice = (currentVal + 1) * 199;

        console.log(totalPrice);

    } else {
        parent.find('input[name=' + fieldName + ']').val(0);
    }
}

function decrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal) && currentVal > 0) {
        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        totalPrice = (currentVal - 1) * 199;
        console.log(totalPrice);
    } else {
        parent.find('input[name=' + fieldName + ']').val(0);
    }
}

$('.input-group').on('click', '.button-plus', function (e) {
    incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function (e) {
    decrementValue(e);
});


// let minusArr = document.querySelectorAll('.input-group .button-minus');
// let plusArr = document.querySelectorAll('.input-group .button-plus');

// for (let plusBut of plusArr) {
//     plusBut.addEventlistener('click', function () {
//         console.log('click')
//         let curPrice = plusBut.parentNode.parentNode.previousSibling.children[0].innerText;
//         console.log(curPrice);


//     })
// }
let addButtons = document.querySelectorAll('.add');;
for (let add of addButtons) {
    add.addEventListener('click', function () {
        total += totalPrice;
        alert('This item has been added to the cart!');
        console.log(total);
    })
}

