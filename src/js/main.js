// Event page

let addNewRow = () => {
    const rowContainer = document.querySelector('.row-container')
    let newRow = insertRow();
    rowContainer.appendChild(newRow)
}

/*
insertRow
1. make a div
 - give it a class - new row
    - start a for loop till length 2
        - create a div with class inline-block right-margin
            - create a div with class label
                - set innerhtml full name

            - create input


    return newRow;
*/

function insertRow() {
    let newRow = document.createElement('div')
    newRow.classList = 'new-row'
    for(let i=0;i<2;i++) {
        let innerDiv = document.createElement('div')
        innerDiv.classList = 'inline-block right-margin'
        let labelDiv = document.createElement('div')
        labelDiv.classList = 'label'
        let input = document.createElement('input')
        input.type = 'text'
        input.classList = 'input-field'
        input.id = 'contact-email'
        innerDiv.appendChild(labelDiv)
        innerDiv.appendChild(input)
        newRow.appendChild(innerDiv)
    }

    newRow.firstChild.firstChild.innerHTML = 'Full Name'
    newRow.lastChild.firstChild.innerHTML = 'Email'

    return newRow
}



// Toggle mobile menu
const menuToggleOpen = document.querySelector('.menu-toggle-open');
const menuToggleClose = document.querySelector('.menu-toggle-close');
const navMobileElement = document.querySelector('.nav-mobile');

menuToggleOpen.addEventListener('click',() => navMobileElement.classList.add('active'));
menuToggleClose.addEventListener('click', () => navMobileElement.classList.remove('active'));



// Toggle theme
const bodyElement = document.body;
const themeToggleBtn = document.querySelector('.theme-toggle-btn');
const currentTheme = localStorage.getItem('currentTheme');
const settingsDropdown = document.querySelector('.settings-dropdown')

if(currentTheme){
    bodyElement.classList.add('theme-light');
}

themeToggleBtn.addEventListener('click', () => {
    bodyElement.classList.toggle('theme-light');
    if(bodyElement.classList.contains('theme-light')){
        localStorage.setItem('currentTheme', 'themeActive');
    }
    else{
        localStorage.removeItem('currentTheme', 'themeActive');
    }
});



// Show dropdown menu
document.addEventListener('click', Element => {
    const dropdown = document.querySelector('.dropdown');
    if(dropdown.classList.contains('active')){
        dropdown.classList.remove('active');
        settingsDropdown.style.display = 'none'
    }else{
        
        dropdown.classList.add('active');
        settingsDropdown.style.display = 'block'
        settingsDropdown.style.position = 'absolute'
    }

});

let handleGetstarted = () => {
     window.location('/dashboard')
 }



 // Wishlist Page - toggle button
 let toggle = document.getElementById("mode");
 toggle.addEventListener('click',()=>{
     document.body.classList.toggle('dark');
})
