const cardNames = document.querySelectorAll('#card-name');
const bioNames = document.querySelectorAll('#bio-name');
const bioLinks = document.querySelectorAll('#bio-link');
const bioInfo = document.querySelectorAll('#bio-Info');
const bioCard = document.querySelector('#bio-card')


for(const bioLink of bioLinks) {
    const bioCards = document.querySelectorAll('#bio-card');

    bioLink.addEventListener('click', (e) => {
        let attributeName = bioLink.getAttribute('name');
        console.log(attributeName);
        console.log(bioLink);
        //loop through bioCards 
        for(let bioCard of bioCards) {
            for(let bioName of bioNames) {
                if(attributeName === bioName.textContent){ 
                    bioCard.style.visibility = "visible";
                }
             }
        }
        
    });
}

 //exits the bio modal when called       
exitBio = () => {
    bioCard.style.visibility = "hidden";
}