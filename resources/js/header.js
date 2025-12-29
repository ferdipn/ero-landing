

document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('site-header')
  const logoTitle = document.getElementById('logo-title')
  const logoSubtitle = document.getElementById('logo-subtitle')
  const mobileMenu = document.getElementById('mobile-menu')
  const toggleBtn = document.getElementById('mobile-menu-toggle')
  const iconMenu = document.getElementById('icon-menu')
  const iconClose = document.getElementById('icon-close')

  let isMobileOpen = false

  // Scroll behavior
  const onScroll = () => {
    const scrolled = window.scrollY > 20

    header.classList.toggle('bg-transparent', !scrolled)
    header.classList.toggle('bg-[var(--background)]/95', scrolled)
    header.classList.toggle('backdrop-blur-md', scrolled)
    header.classList.toggle('shadow-md', scrolled)

    logoTitle.classList.toggle('text-white', !scrolled)
    logoTitle.classList.toggle('text-[var(--primary)]', scrolled)

    logoSubtitle.classList.toggle('text-white/80', !scrolled)
    logoSubtitle.classList.toggle('text-[#6B6B6B]', scrolled)
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
