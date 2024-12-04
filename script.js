const main_content = document.getElementById('main-content');
const profile = document.getElementById('profile');
const profile_form = document.getElementById('profile-form');
const dashboard = document.getElementById('dash');

profile.addEventListener('click',change);
dashboard.addEventListener('click',change2);
function change(){
    main_content.style.display='none';
    profile_form.style.display= 'block';
    profile_form.style.opacity= 1;
    
}

function change2(){
    main_content.style.display='block';
    profile_form.style.display= 'none';
    profile_form.style.opacity= 0;
}

