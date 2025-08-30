// Smooth scroll
document.querySelectorAll('#policyNav a').forEach(a=>{
  a.addEventListener('click',e=>{
    e.preventDefault();
    document.querySelector(a.getAttribute('href'))
      .scrollIntoView({behavior:'smooth', block:'start'});
  });
});

// Highlight current section
const navLinks=[...document.querySelectorAll('#policyNav a')];
const sections=navLinks.map(a=>document.querySelector(a.getAttribute('href')));
const io=new IntersectionObserver(entries=>{
  entries.forEach(ent=>{
    const i=sections.indexOf(ent.target);
    if(i>-1 && ent.isIntersecting){
      navLinks.forEach(n=>n.classList.remove('active','bg-white/5'));
      navLinks[i].classList.add('active','bg-white/5');
    }
  });
},{rootMargin:'-40% 0px -50% 0px', threshold:0.01});
sections.forEach(s=>io.observe(s));
