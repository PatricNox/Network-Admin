/**
* Network-Admin
* Javascript file for Animation and clicking-arounds
*
* @author PatricNox <hello@PatricNox.info>
*
*/

/* Search Sys
**************/
const sinp = document.querySelector('.form-control');
const ssub = document.querySelector('.btn');
const allConns = document.querySelectorAll('.text-gray-dark');

ssub.addEventListener('click', (event) => {
    event.preventDefault();
    resetBoard();
    let query    = sinp.value.toLowerCase();

    if (!(query))
        return;

    allConns.forEach(conn => {
        var host = conn.innerHTML.toLowerCase();
        if (!(host.includes(query)))
            conn.parentNode.parentNode.parentNode.classList.add('q');
    });
})

function resetBoard() {
    allConns.forEach(conn => {
        if (conn.parentNode.parentNode.parentNode.classList.contains('q'))
            conn.parentNode.parentNode.parentNode.classList.remove('q');   
    });
}
