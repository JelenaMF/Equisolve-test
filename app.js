
  
const cardNames = document.querySelectorAll('#card-name');
const bioNames = document.querySelectorAll('#bio-name');
const bioLinks = document.querySelectorAll('#bio-link');
const bioCard = document.querySelector('#bio-card')
let memberName = document.getElementById('bio-name').textContent;
const memberTitle = document.getElementById('bio-title').textContent;
const memberBio = document.getElementById('bio').textContent;


for(const bioLink of bioLinks) {
    const bioCards = document.querySelectorAll('#bio-card');

    bioLink.addEventListener('click', (e) => {
        //gets the name attribute from bioLink to compare with bioName.textContent
        let attributeName = bioLink.getAttribute('name');
        //set the bioLink that was clicked to active
        bioLink.classList.add('active');

        //loop through bioCards 
            
        for(let bioName of bioNames) {
            //checks for matching text to display the modal
            if(attributeName === bioName.textContent){ 
                for(let cardName of cardNames){
                    if(cardName.textContent === attributeName) {
                        for(let bioCard of bioCards){
                            console.log(bioCard);
                            memberName= attributeName;
                            if(memberName === cardName){
                                bioCard.style.visibility = 'visible';
                            } else {
                                bioCard.style.visibility = 'hidden';
                            }
                        }
                    }
                }
            }
                
        }
             
        
        
    });
}

const exitLinks = document.querySelectorAll('#close')
for(let exitLink of exitLinks){
    exitLink.addEventListener('click', (e) => {
        bioCard.style.visibility = "hidden";
    });
}

 //exits the bio modal when called       


// console.log(bioName.textContent);

// console.log(memberName);
// console.log(memberTitle);
// console.log(memberBio);