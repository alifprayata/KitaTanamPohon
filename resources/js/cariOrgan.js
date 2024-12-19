
function searchOrganizations() {
    const searchInput = document.getElementById('search').value.toLowerCase(); 
    const organizationList = document.getElementById('organization-list'); 
    const cards = organizationList.getElementsByClassName('card');
    
    Array.from(cards).forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        if (title.includes(searchInput)) {
            card.style.display = ''; 
        } else {
            card.style.display = 'none';
        }
    });
}

document.querySelector('.search-button').addEventListener('click', searchOrganizations);

document.getElementById('search').addEventListener('input', searchOrganizations);

function resetFilters() {
    const searchInput = document.getElementById('search');
    searchInput.value = ''; 

    const organizationList = document.getElementById('organization-list');
    const cards = organizationList.getElementsByClassName('card');

    Array.from(cards).forEach(card => {
        card.style.display = '';
    });
}

document.querySelector('.reset-button').addEventListener('click', resetFilters);
