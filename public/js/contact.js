var form = document.querySelector('#contact-form');
var gracias = document.querySelector('#gracias')
form.addEventListener('submit', function(event) {
    event.preventDefault();
    let formData = new FormData(form);
    gracias.style.display = "block";
    form.reset();
    fetch("contact.php",
    {
        body: formData,
        method: "post"
    });
});