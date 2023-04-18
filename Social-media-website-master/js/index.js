//sidebar
const menuItems = document.querySelectorAll('.menu-item');
const messagesNotification = document.querySelector('#messages-notifications');
const messages = document.querySelector('.messages');
const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');
const theme = document.querySelector('#theme')
const thememodel = document.querySelector('.customize-theme');
const fontsizee = document.querySelectorAll('.chooze-size span')

//remove active class from all menu items
const changeActiveItem = () => {
    menuItems.forEach(item => {
        item.classList.remove('active');
    })
}
 

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        changeActiveItem();
        item.classList.add('active');
        
        if (item.id != 'notifications') {
            document.querySelector('.notifications-popup').style.display = 'none';
        } else {
            document.querySelector('.notifications-popup').style.display = 'block';
            document.querySelector('#notifications .notification-count').style.display='none';
        }
    })
})


const searchMessage = () => {
    const val = messageSearch.value.toLowerCase();
    message.forEach(chat => {
        let name=chat.querySelector('h5').textContent.toLowerCase();
        if(name.indexOf(val) != -1){
            chat.style.display = 'flex';
        } else{
            chat.style.display = 'none';
        }
    })
}

messageSearch.addEventListener('keyup', searchMessage);


messagesNotification.addEventListener('click', () => {
    messages.style.boxShadow = '0 0 1rem var(--color-primary)';
    messagesNotification.querySelector('.notification-count').style.display = 'none';
    setTimeout(() => {
        messages.style.boxShadow = 'none';
    }, 2000);
})

let heart = document.querySelector(' .action-button, .interaction-button , .like-btn')
let activityContainer = document.querySelector('  .imgcontainer .photo ')

heart.addEventListener('click', () =>{
    activityContainer.classList.toggle('hide')
    changeicon(heart);
})

const changeicon =(icon)=>{
    let src = icon.src.split('-')[0];
    if( icon.src.includes('nofill')){
        icon.src = `${src}-fill.png`;
    }else{
       icon.src = `${src}-nofill.png`;
}}

const addInteractionsToPost = (post) => {
    let likebtn = post.querySelector('.like-btn');
    let likeimg = post.querySelector('.like-icon');
    likebtn.addEventListener('click', () => {
        if( likebtn.src.includes('nofill')){
            likeimg.classList.add('show');
        }
        changeicon(likebtn);
        setTimeout(()=>{
            likeimg.classList.remove('show');
        },2500);
    
}
)

}

let  posts = [...document.querySelectorAll('.feed')];
posts.map(post => addInteractionsToPost(post));

// get the timer element and reset button element
const timerEl = document.getElementById('timer');
const resetBtn = document.getElementById('reset-btn');

// get the start time from sessionStorage or set it to the current time
let startTime = sessionStorage.getItem('startTime') || Date.now();

// update the timer every second
setInterval(() => {
  // calculate the elapsed time
  const elapsed = Date.now() - startTime;

  // format the elapsed time into hours, minutes, and seconds
  const hours = Math.floor(elapsed / (1000 * 60 * 60));
  const minutes = Math.floor((elapsed / (1000 * 60)) % 60);
  const seconds = Math.floor((elapsed / 1000) % 60);

  // update the timer element with the formatted time
  timerEl.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
  
  // save the start time in sessionStorage
  sessionStorage.setItem('startTime', startTime);
}, 1000);

// when the reset button is clicked, reset the start time to the current time and update the timer element
resetBtn.addEventListener('click', () => {
  startTime = Date.now();
  timerEl.textContent = '00:00:00';
});


//theme customization



const openthememodel = () => {
    thememodel.style.display = 'grid';
}

const closethememodel = (e) => {
    if(e.target.classList.contains('customize-theme')){
        thememodel.style.display= 'none';
    }
}

thememodel.addEventListener('click', closethememodel);
theme.addEventListener('click', openthememodel);

fontsizee.forEach(size => {
    let fontsizes;

    if(size.classList.contains('font-size1')){
        fontsizes = '10px';
    }
    else if(size.classList.contains('font-size2')){
        fontsizes = '13px';}
    else if(size.classList.contains('font-size3')){
        fontsizes = '16px';}
    else if(size.classList.contains('font-size4')){
        fontsizes = '19px';}
    else if(size.classList.contains('font-size5')){
        fontsizes = '22px';}

    document.querySelector('html').style.fontsize = fontsizes;
})