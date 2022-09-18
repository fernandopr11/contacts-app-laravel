const alert = document.querySelector('.alert');

const removeElement = element => {
  setTimeout(() => {
    element.remove();
  }, 2000);
};

!alert ? null : removeElement(alert);
