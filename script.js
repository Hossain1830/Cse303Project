function loadContent(page) {
    var contentDiv = document.getElementById('content');
    var content = '';

    if (page === 'home') {
        content = '<h1>Welcome to our website!</h1><p>This is the home page content.</p>';
    } else if (page === 'about') {
        content = '<h1>About Us</h1><p>Learn more about our company.</p>';
    } else if (page === 'contact') {
        content = '<h1>I am here</h1>';
    }

    contentDiv.innerHTML = content;
}
