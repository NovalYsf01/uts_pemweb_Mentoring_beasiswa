function showForm(formType) {
    document.getElementById('form-mahasiswa').style.display = 'none';
    

    if (formType === 'mahasiswa') {
        document.getElementById('form-mahasiswa').style.display = 'block';
        populateMentorList();
    } else if (formType === 'mentor') {
        document.getElementById('form-mentor').style.display = 'block';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('form-mahasiswa').style.display = 'none';
    
});

window.addEventListener('resize', function() {
    adjustLayout();
});

function adjustLayout() {
    const container = document.querySelector('.container');
    const width = window.innerWidth;
    if (width < 600) {
        container.style.width = '100%';
        container.style.padding = '10px';
    } else {
        container.style.width = '90%';
        container.style.padding = '20px';
    }
}

adjustLayout();


function handleMentorSubmit(event) {
    event.preventDefault();

    // Simulate form submission
    alert("Form Mentor submitted!");
}
