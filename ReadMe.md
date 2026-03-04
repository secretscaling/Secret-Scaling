# Your Agency - Professional Business Website

A stunning, award-worthy business website showcasing web development, social media marketing, and AI API development services.

## 🎨 Features

### Design & Aesthetics
- **Bold & Professional Design**: Dark theme with electric cyan/blue gradients
- **Custom Cursor**: Interactive magnetic cursor that follows mouse movement
- **Smooth Animations**: GSAP-powered scroll triggers, parallax effects, and micro-interactions
- **Award-Worthy UI**: Inspired by Awwwards.com winning sites
- **Distinctive Typography**: Syne (display) + Manrope (body) for unique character
- **Fully Responsive**: Perfect on desktop, tablet, and mobile

### Pages Included
1. **Home Page**
   - Hero section with animated background
   - Services overview with interactive cards
   - Why choose us section with stats
   - Call-to-action section

2. **Main Services Page**
   - Detailed service breakdowns
   - Tech stack showcases
   - Interactive platform icons

3. **Sub-Service Pages** (3 total)
   - Web & App Development (6 sub-services)
   - Social Media Marketing (6 sub-services)
   - AI API Development (6 sub-services)

4. **About Page**
   - Company story
   - Core values grid

5. **Contact Page**
   - Multi-field contact form
   - Contact information
   - Social media links

### Technical Features
- **Single-Page Application**: Smooth page transitions without reloads
- **GSAP Animations**: Professional-grade animation library
- **Scroll Triggers**: Elements animate as you scroll
- **Form Validation**: Built-in HTML5 validation
- **Custom Cursor**: Desktop-only, automatically disabled on mobile
- **Performance Optimized**: Lazy loading and efficient animations
- **Accessible**: Keyboard navigation support
- **SEO Ready**: Semantic HTML structure

## 📁 Files Included

- `index.html` - Main HTML structure with all pages
- `styles.css` - Complete styling with animations
- `script.js` - Interactive functionality and GSAP animations

## 🚀 How to Use

### Option 1: Simple Local Setup
1. Download all three files to a folder
2. Open `index.html` in your browser
3. That's it! The website works offline.

### Option 2: Deploy to Web Hosting
Upload all files to your web hosting service (like Netlify, Vercel, GitHub Pages, etc.)

### Option 3: Development Server
```bash
# If you have Python installed
python -m http.server 8000

# If you have Node.js installed
npx serve

# Then visit: http://localhost:8000
```

## ✏️ Customization Guide

### 1. Replace Placeholder Content

#### Company Name & Logo
Find and replace in `index.html`:
- `YOUR AGENCY` → Your company name
- Update the logo structure if needed

#### Contact Information
In the Contact page section of `index.html`, update:
```html
<p>hello@youragency.com</p>  <!-- Your email -->
<p>+1 (555) 123-4567</p>      <!-- Your phone -->
<p>Your City, Country</p>      <!-- Your location -->
```

#### Social Media Links
Update the `href` attributes:
```html
<a href="#" class="social-link">LinkedIn</a>  <!-- Add your URLs -->
```

### 2. Colors & Branding

Edit CSS variables in `styles.css`:
```css
:root {
    --color-accent: #00d9ff;           /* Your primary color */
    --color-accent-secondary: #0099ff; /* Your secondary color */
    --color-gradient-start: #00d9ff;   /* Gradient start */
    --color-gradient-end: #0066ff;     /* Gradient end */
}
```

### 3. Add Your Content

#### Services
Each service card has this structure in `index.html`:
```html
<div class="service-card">
    <div class="service-icon"><!-- SVG icon --></div>
    <h3>Service Name</h3>
    <p>Service description goes here</p>
    <a href="#service-web" class="service-link">Explore Service</a>
</div>
```

#### Stats
Update the numbers in the "Why Choose Us" section:
```html
<span class="stat-number">150+</span>  <!-- Your actual stat -->
<span class="stat-label">Projects Delivered</span>
```

### 4. Add Images

To add images (like team photos, project screenshots):

1. Create an `images` folder
2. Add your images
3. In HTML, add:
```html
<img src="images/your-image.jpg" alt="Description">
```

4. For lazy loading:
```html
<img data-src="images/your-image.jpg" alt="Description">
```

### 5. Typography

The site uses Google Fonts (loaded via CDN). To change fonts:

1. Visit [Google Fonts](https://fonts.google.com/)
2. Select your fonts
3. Replace the font link in `index.html`:
```html
<link href="https://fonts.googleapis.com/css2?family=Your+Font&display=swap" rel="stylesheet">
```
4. Update CSS variables in `styles.css`:
```css
--font-display: 'Your Display Font', sans-serif;
--font-body: 'Your Body Font', sans-serif;
```

## 🎯 Next Steps (Week Ahead)

### Content Creation
- [ ] Write compelling copywriting for each service
- [ ] Create "About Us" story
- [ ] Gather testimonials (if available)
- [ ] Prepare case studies/portfolio items

### Media Assets
- [ ] Professional logo design
- [ ] Service icons/illustrations
- [ ] Team photos (if applicable)
- [ ] Project screenshots/mockups

### Framework Migration (Optional)
When you're ready to learn frameworks, you can migrate to:
- **React/Next.js**: Best for complex interactivity and SEO
- **Vue/Nuxt**: Easier learning curve
- **Svelte**: Smallest bundle size

The current vanilla JS structure makes migration straightforward.

## 🔧 Technical Details

### Libraries Used
- **GSAP 3.12.5**: Animation library (loaded via CDN)
- **ScrollTrigger**: GSAP plugin for scroll animations
- **Google Fonts**: Syne + Manrope

### Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

### Performance
- Lightweight: ~50KB total (before images)
- No jQuery or heavy frameworks
- Optimized animations using CSS when possible
- Smooth 60fps animations

## 📱 Responsive Breakpoints

- Desktop: 1024px+
- Tablet: 768px - 1023px
- Mobile: Below 768px
- Small mobile: Below 480px

## 🎨 Design Inspiration

This design takes inspiration from:
- Modern SaaS landing pages
- Awwwards.com winning sites
- Contemporary tech company aesthetics
- Bold, confident branding

## 🐛 Troubleshooting

### Animations not working?
- Check browser console for errors
- Ensure GSAP CDN is loading (check network tab)
- Try a different browser

### Custom cursor not showing?
- Cursor only works on desktop (disabled on mobile)
- Ensure JavaScript is enabled

### Form not submitting?
- Currently logs to console (check DevTools)
- Integrate with backend or service like Formspree

## 📈 Future Enhancements

Consider adding:
- Blog/articles section
- Portfolio/case studies
- Client testimonials with photos
- Video backgrounds
- Chatbot integration
- Multi-language support
- Dark/light theme toggle
- Newsletter signup

## 🎓 Learning Resources

To understand and customize this site:
- **HTML/CSS**: [MDN Web Docs](https://developer.mozilla.org/)
- **JavaScript**: [JavaScript.info](https://javascript.info/)
- **GSAP**: [GreenSock Docs](https://greensock.com/docs/)
- **Responsive Design**: [CSS-Tricks](https://css-tricks.com/)

## 📝 License

This website template is provided as-is for your business use. Feel free to modify and customize as needed.

## 🤝 Support

If you need help customizing or have questions:
1. Review the code comments
2. Check browser console for errors
3. Refer to this README
4. Test changes incrementally

---

**Ready to launch?** Replace the placeholder content, add your branding, and deploy! 🚀

**Need React/frameworks later?** The current structure is designed to be easily migrated when you're ready.

Good luck with your business! إن شاء الله (Insha'Allah) 🙏
Thank you. <3>