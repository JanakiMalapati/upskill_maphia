document.getElementById('profileBtn').addEventListener('click', function() {
    // Replace these placeholders with actual user data
    var username = sessionStorage.getItem('username');
    var em = sessionStorage.getItem('email');
    var userData = {
        name:username,
        email:em
    };

    // Update profile information

    // Toggle dropdown visibility
    var dropdownContent = document.getElementById('profileInfo');
    dropdownContent.classList.toggle('show');
});

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName('dropdown-content');
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
