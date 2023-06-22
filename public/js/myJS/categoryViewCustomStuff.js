function toggleCollapse(target) {
  const targetElement = document.getElementById(target);
  const filterCard = document.getElementById('filterCard');
  const addThreadCard = document.getElementById('addThreadCard');

  const isOpen = targetElement.classList.contains('show');

  filterCard.classList.remove('show');
  addThreadCard.classList.remove('show');

  if (!isOpen) {
    targetElement.classList.add('show');
  }
}