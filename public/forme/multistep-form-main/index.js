var currentTab = 0;
const classes = ['first', 'second', 'third',]

var currentClass = classes[currentTab];
function updateClass() {
    currentClass = classes[currentTab]
}

document.addEventListener("DOMContentLoaded" , function(){
    let x = document.getElementsByClassName('tab');
    x[currentTab].classList.add('fade-in');
    x[currentTab].style.display = 'block';
    x[1].style.display = 'none';
    x[2].style.display = 'none';
    
    showTab(currentTab);
    
    window.addEventListener('keydown', function(e) {
        if(e.key === 'Enter') {
            if(currentTab == 2) {
                if(!areValidInputs()) {
                    handleValidationErrors();
                    return;
                }
                return;
            }
            e.preventDefault();
            nextTab();
        }
    });

    // document.getElementById('multiStepForm').addEventListener('submit', function(e) {
    //     e.preventDefault();
    //     // alert(getInputValues());
    // })
});

// function getInputValues() {
//     var obj = {};
//     document.querySelectorAll('input').forEach(v => {
//         obj[v.id] = v.value;
//     });
//     return `Your Email is: ${obj.email}
// Your Name is: ${obj.name} ${obj.surname}
// Your payment is beign proccesed. You'll get an email with the confirmation`;
// }

function getCurrentInputs() {
    return document.querySelectorAll(`.${currentClass} input`);
}

function showTab(current, prev = currentTab) {
    currentTab = current;
    updateClass();
    let x = document.getElementsByClassName('tab');
    if(prev !== current) {
        x[prev].classList.remove('fade-in');
        x[prev].classList.add('fade-out');
        x[prev].addEventListener('animationend', () => {
            x[prev].style.display = 'none';
            x[current].classList.remove('fade-out');
            x[current].classList.add('fade-in');
            x[current].style.display = 'block';
        }, {once: true});
    }
    x[current].addEventListener('animationend', () => {
        if (current === 0) document.getElementById('prevButton').style.display = 'none';
        else document.getElementById('prevButton').style.display = 'inline';
        
        if (current === (x.length - 1)) {
            document.getElementById('nextButton').style.display = 'none';
            document.getElementById('submitButton').style.display = 'inline';
        } else {
            document.getElementById('nextButton').style.display = 'inline';
            document.getElementById('submitButton').style.display = 'none';    
        }
        
        document.querySelectorAll('input').forEach(v => v.removeAttribute(''));
        let currentInputs = getCurrentInputs();
        currentInputs[0].focus();
        currentInputs.forEach((v, i) => v.setAttribute('', true));
    }, false);
}

function nextTab() {
    if(areValidInputs()) {
        currentTab++;
        document.querySelectorAll('nav button')[currentTab].removeAttribute('disabled');
        updateClass();
        showTab(currentTab, currentTab-1);
    } else handleValidationErrors();
}

function handleValidationErrors() {
    let inputs = getCurrentInputs();
    let invalidInputs = []; 
    inputs.forEach((v, i) => {
        if(v.validationMessage){
            invalidInputs.push(v);
            v.addEventListener('input', function(){
                if(!v.validationMessage) {
                    v.classList.remove('is-invalid', 'shake');
                };
            });
            v.addEventListener('animationend', () => {
                v.classList.remove('shake');
                if (invalidInputs[i] == v) {
                    document.getElementById('multiStepForm').reportValidity();
                }
            });
        }
    });
    invalidInputs[0].addEventListener('animationend', () => {
        window.setTimeout(() => invalidInputs[0].focus(), 0);
    });
}

function prevTab() {
    currentTab--;
    updateClass();
    showTab(currentTab, currentTab+1);
}

function areValidInputs() {
    let areValid = true;
    let inputs = getCurrentInputs();
    inputs.forEach((v) => {
        if(v.validationMessage) {
            v.classList.add('is-invalid', 'shake');
            areValid = false;
        }
    });
    return areValid;
}