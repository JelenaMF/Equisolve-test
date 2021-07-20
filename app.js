const cardNames = document.querySelectorAll('#card-name');
const bioNames = document.querySelectorAll('#bio-name');
const bioLinks = document.querySelectorAll('#bio-link');
const bioInfo = document.querySelectorAll('#bio-Info');

for(const bioLink of bioLinks) {
    const bioCards = document.querySelectorAll('#bio-card');

    bioLink.addEventListener('click', (e) => {
        //loop through bioCards 
        for(let bioCard of bioCards) {
            for(let bioName of bioNames) {
                console.log(bioName);
                if(e.target.value === bioName.textContent){ 
                    bioCard.style.visibility = "visible";
                    console.log(bioCard);
                }
             }
        }
        
    });
}




 //exits the bio modal when called       
exitBio = (card) => {

    card.style.visibility = "hidden";
}