import React from 'react';
import '../styles/Footer.css';
import { Link } from 'react-router-dom';

function Footer() {
  return (
    <div className='footer-container'>
      <div class='footer-links'>
        <div className='footer-link-wrapper'>
          <div class='footer-link-items'>
            <h2>About Us</h2>
            <Link to='/sign-up'>How it works</Link>
            <Link to='/'>Testimonials</Link>
            <Link to='/'>Careers</Link>
            <Link to='/'>Investors</Link>
            <Link to='/'>Terms of Service</Link>
          </div>
          <div class='footer-link-items'>
            <h2>Contact Us</h2>
            <Link to='/contact'>Contact</Link>
            <Link to='/'>Support</Link>
            <Link to='/'>Destinations</Link>
            <Link to='/sponsorship'>Sponsorships</Link>
          </div>
        </div>
        <div className='footer-link-wrapper'>
          <div class='footer-link-items'>
            <h2>Browse</h2>
            <Link to='/'>All Movies</Link>
            <Link to='/'>All Mangas</Link>
            <Link to='/'>All Anime</Link>
            <Link to='/'>All Books</Link>
          </div>
          <div class='footer-link-items'>
            <h2>Social Media</h2>
            <a href='https://www.instagram.com/?hl=fr' target='_blank'>Instagram</a>
            <a href='https://www.facebook.com/' target='_blank'>Facebook</a>
            <a href='https://www.youtube.com/' target='_blank'>Youtube</a>
            <a href='https://twitter.com/?lang=fr' target='_blank'>Twitter</a>
          </div>
        </div>
      </div>
      <section class='social-media'>
        <div class='social-media-wrap'>
          <div class='footer-logo'>
            <Link to='/' className='footer-logo-image'>
            <img style={{width:100, height:100}} alt="CheckBoar" src={require('../Images/logo_medium.svg').default}/>
            </Link>
          </div>
          <small class='website-rights'>CheckBoar © 2022</small>
        </div>
      </section>
    </div>
  );
}

export default Footer;