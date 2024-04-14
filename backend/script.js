function showIframe(url, event) {
    event.preventDefault(); // Prevent the default behavior of the anchor tag
    var iframe = document.getElementById('dynamic-iframe');
    iframe.src = url;
    document.getElementById('iframe-container').style.display = 'block';
}

function toggleDropdown() {
    var dropdownMenu = document.getElementById("dropdownMenu");
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    } else {
        dropdownMenu.style.display = "block";
    }
}