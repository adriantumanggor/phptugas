document.addEventListener('DOMContentLoaded', function () {
    const currentLocation = window.location.href;
    const navbarItems = document.querySelectorAll('.navbar-item');
  
    navbarItems.forEach(item => {
      if (item.href === currentLocation) {
        item.classList.add('active');
      } else {
        item.classList.remove('active'); // Menghapus kelas active dari item navbar lainnya
      }
    });
  });
  