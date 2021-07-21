const cardNames = document.querySelectorAll('#card-name');
const bioNames = document.querySelectorAll('#bio-name');
const bioLinks = document.querySelectorAll('#bio-link');
const bioCard = document.querySelector('#bio-card')



for(const bioLink of bioLinks) {
    const bioCards = document.querySelectorAll('#bio-card');

    bioLink.addEventListener('click', (e) => {
        //gets the name attribute from bioLink to compare with bioName.textContent
        let attributeName = bioLink.getAttribute('name');
        //set the bioLink that was clicked to active
        bioLink.classList.add('active');

        console.log(attributeName);
        console.log(bioLink);
        //loop through bioCards 
            
        for(let bioName of bioNames) {
            //checks for matching text to display the modal
            if(attributeName === bioName.textContent){ 
                console.log(bioLink);
            }
                
        }
             
        
        
    });
}

 //exits the bio modal when called       
exitBio = () => {
    bioCard.style.visibility = "hidden";
}