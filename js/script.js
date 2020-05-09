(function() {
    
    var navbar, navbarToggle, navbarNav, offset = 128;
    
    navbar = document.getElementById('navbar');
    navbarToggle = document.getElementById('navbar-toggle');
    navbarNav = document.getElementById('navbar-nav');
    
    navbarToggle.addEventListener('click', function() {
        if (navbarNav.classList.contains('visible'))
            navbarNav.classList.remove('visible');
        else
            navbarNav.classList.add('visible');
    });
    
    window.addEventListener('scroll', function() {
        if (window.scrollY >= (window.innerHeight - offset))
            navbar.classList.add('active');
        else
            navbar.classList.remove('active');
    });
    
})();

(function() { 
    
    var name, email, contactForm;
    
    name = document.getElementById('name');
    email = document.getElementById('email');
    contactForm = document.getElementById('contact-form');    

    
    contactForm.addEventListener('submit', function(e) {        
        e.preventDefault();
        
        if (name.value === '' || email.value === '') {
            alert('Name and Email are required');
        } else {
            this.submit();
        }
    });     
})();
