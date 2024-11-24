const modalOverlay = document.getElementById('modalOverlay');
    const openModalLink = document.getElementById('openModal');
    const closeModalBtn = document.getElementById('closeModal');

    openModalLink.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent the default navigation
      modalOverlay.classList.add('active');
    });

    closeModalBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('active');
    });

    // Close modal on overlay click
    modalOverlay.addEventListener('click', (event) => {
      if (event.target === modalOverlay) {
        modalOverlay.classList.remove('active');
      }
});