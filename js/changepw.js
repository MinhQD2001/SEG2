console.log("hello");

var changePW = document.getElementById('changePW');
var dynamicChange = document.getElementsByClassName('dynamicChange');
changePW.onclick = function() {
    console.log(dynamicChange[0].childElementCount);
    if (dynamicChange[0].childElementCount == 0) {
        let div1 = document.createElement('div');
        div1.setAttribute('class', 'col-md-6');

        let label1 = document.createElement('label');
        label1.innerHTML = 'Current Password';

        let input1 = document.createElement('input');
        input1.setAttribute('type', 'password');
        input1.setAttribute('name', 'password');
        input1.setAttribute('class', 'bg-light form-control');

        div1.appendChild(label1);
        div1.appendChild(input1);

        let div2 = document.createElement('div');
        div2.setAttribute('class', 'col-md-6');

        let label2 = document.createElement('label');
        label2.innerHTML = 'Confirm Password';

        let input2 = document.createElement('input');
        input2.setAttribute('type', 'password');
        input2.setAttribute('name', 're_password');
        input2.setAttribute('class', 'bg-light form-control');

        div2.appendChild(label2);
        div2.appendChild(input2);
        
        dynamicChange[0].appendChild(div1);
        dynamicChange[0].appendChild(div2);
    }
    else {
        dynamicChange[0].innerHTML = '';
    }

};


