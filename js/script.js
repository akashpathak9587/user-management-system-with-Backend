document.querySelector('#navButton').addEventListener('click', () => {
    document.querySelector('#mainPage').classList.toggle('active');
})

document.querySelector('#profileButton').addEventListener('click', () => {
    document.querySelector('.profile-box').classList.toggle('active');
})