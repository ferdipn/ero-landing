

document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('site-header')
  const mobileMenu = document.getElementById('mobile-menu')
  const toggleBtn = document.getElementById('mobile-menu-toggle')
  const iconMenu = document.getElementById('icon-menu')
  const iconClose = document.getElementById('icon-close')
  const menuBtns = document.querySelectorAll('.nav-link')

  let isMobileOpen = false

  // Scroll behavior
  const onScroll = () => {
    const scrolled = window.scrollY > 20

    header.classList.toggle('bg-transparent', !scrolled)
    header.classList.toggle('bg-[var(--orange-main)]/10', scrolled)
    header.classList.toggle('backdrop-blur-md', scrolled)
    header.classList.toggle('shadow-md', scrolled)

    menuBtns.forEach(btn => {
      btn.classList.toggle('text-white/90', !scrolled)
      btn.classList.toggle('text-[var(--orange-main)]', scrolled)
    })
  }

  window.addEventListener('scroll', onScroll)

  // Smooth scroll
  document.querySelectorAll('[data-href]').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.querySelector(btn.dataset.href)
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' })
      }

      if (isMobileOpen) toggleMobile()
    })
  })

  // Mobile menu
  const toggleMobile = () => {
    isMobileOpen = !isMobileOpen
    mobileMenu.classList.toggle('hidden', !isMobileOpen)
    iconMenu.classList.toggle('hidden', isMobileOpen)
    iconClose.classList.toggle('hidden', !isMobileOpen)
  }

  toggleBtn.addEventListener('click', toggleMobile)
})
