document.getElementById('showAd').addEventListener('click', () => {
    if (typeof show_8599697 !== 'undefined') {
        show_8599697().then(() => {
            alert('You have seen an ad!');
        }).catch((error) => {
            console.error('Error displaying the ad:', error);
        });
    } else {
        alert('Ad script is not loaded yet. Please try again later.');
    }
});
