document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-scroll]').forEach(el => {
    el.addEventListener('click', () => {
      const target = document.querySelector(el.dataset.scroll)
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' })
      }
    })
  })
})