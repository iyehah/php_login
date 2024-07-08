var profileLink = document.getElementById('profile-link');
        var profileCard = document.getElementById('profile-card');
        var isDragging = false;
        var offsetX, offsetY;
        profileLink.addEventListener('click', function(event) {
            event.preventDefault();
            profileCard.style.display = profileCard.style.display === 'none' || profileCard.style.display === '' ? 'block' : 'none';            profileCard.style.right = '70px'; 
            profileCard.style.top = '100px';
        });
        profileCard.addEventListener('mousedown', function(event) {
            isDragging = true;
            offsetX = event.offsetX;
            offsetY = event.offsetY;
        });
        document.addEventListener('mouseup', function(event) {
            isDragging = false;
        });
        document.addEventListener('mousemove', function(event) {
            if (isDragging) {
                profileCard.style.left = (event.pageX - offsetX) + 'px';
                profileCard.style.top = (event.pageY - offsetY) + 'px';
            }
        });