// Set Theme
const theme_dark = document.getElementById('dark');
const theme_light = document.getElementById('light');

if( window.matchMedia('(prefers-color-scheme: dark)').matches || localStorage.theme === 'dark' ) {
    document.documentElement.classList.add('dark');
    localStorage.theme = 'dark';
    theme_light.classList.remove('hidden');
} else {
    document.documentElement.classList.remove('dark');
    localStorage.theme = 'light';
    theme_dark.classList.remove('hidden');
}

const theme_toggle = document.getElementById('theme-toggle');
if( theme_toggle ) {
  theme_toggle.addEventListener('click', function(e) {
    if( localStorage.theme == 'dark' ) {
      document.documentElement.classList.remove('dark');
      localStorage.theme = 'light';
      theme_dark.classList.remove('hidden');
      theme_light.classList.add('hidden');
    } else {
      document.documentElement.classList.add('dark');
      localStorage.theme = 'dark';
      theme_dark.classList.add('hidden');
      theme_light.classList.remove('hidden');
    }
  });
}

// On Nav Scroll
let scrollpos = window.scrollY
const nav = document.getElementById('site-navigation');
const nav_height = nav.offsetHeight

const add_class_on_scroll = () => nav.classList.add("scrolled")
const remove_class_on_scroll = () => nav.classList.remove("scrolled")

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;

  if (scrollpos >= nav_height) {
    add_class_on_scroll();
  } else {
    remove_class_on_scroll();
  }
});

// Mobile Menu Toggle
const nav_toggle = document.getElementById('nav-toggle');
const nav_links = document.getElementById('nav-links');
const nav_close = document.getElementById('nav-close');
if( nav_toggle ) {
  nav_toggle.addEventListener('click', function(e) {
    document.body.classList.add('noscroll');
    nav_links.classList.add('open');
  });

  nav_close.addEventListener('click', function(e) {
    e.preventDefault();
    document.body.classList.remove('noscroll');
    nav_links.classList.remove('open');
  });
}
