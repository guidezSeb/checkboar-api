import '../styles/Navbar.css';
import {Link} from 'react-router-dom'
import React, { useState, useEffect } from 'react';
import { faHome } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { Button } from './Button';

function Navbar(){
    const [click, setClick] = useState(false);
    const [button, setButton] = useState(true);
    const handleClick = () => setClick(!click);
    const closeMobileMenu = () => setClick(false)
    const showButton = () => {
        if (window.innerWidth <= 960) {
          setButton(false);
        } else {
          setButton(true);
        }
      };
    
      useEffect(() => {
        showButton();
      }, []);
    
      window.addEventListener('resize', showButton);
    
    return(
        <>
            <nav className="navbar">
                <div className="navbar-container">
                    <Link to='/' className='navbar-logo'>
                        <img style={{width:80, height:80}} alt="CheckBoar" src={require('../Images/logo_medium.svg').default}/>
                    </Link>
                <div className='menu-icon' onClick={handleClick}>
                    <i className={click ? 'fas fa-times' : 'fas fa-bars'}/>
                </div>
                <ul className={click ? 'nav-menu active' : 'nav-menu'}>
                <li className='nav-item'>
                    <Link to='/profile' className='nav-links' onClick={closeMobileMenu}>
                        Profile
                    </Link>
                </li>
                <li className='nav-item'>
                    <Link to='/mangalist' className='nav-links' onClick={closeMobileMenu}>
                        Manga List
                    </Link>
                </li>
                <li className='nav-item'>
                    <Link to='/animelist' className='nav-links' onClick={closeMobileMenu}>
                        Anime List
                    </Link>
                </li>
                <li className='nav-item'>
                    <Link to='/booklist' className='nav-links' onClick={closeMobileMenu}>
                        Book List
                    </Link>
                </li>
                <li className='nav-item'>
                    <Link to='/movielist' className='nav-links' onClick={closeMobileMenu}>
                        Movie List
                    </Link>
                </li>
                 <li>
                    <div className="search">
                        <form action="/" method="get">
                                <input
                                    type="text"
                                    id="header-search"
                                    placeholder="Search"
                                    name="search" 
                                />
                            <button className='btn--outline' type="submit">Search  <FontAwesomeIcon icon={faHome} /></button>
                        </form>
                    </div>
                </li> 
                <li>
                    <Link
                        to='/sign-up'
                        className='nav-links-mobile'
                     onClick={closeMobileMenu}
                    >
                    Sign Up
                    </Link>
                    <div className='button-signup'>
                     {button && <Button buttonStyle='btn--outline'>SIGN UP</Button>}
                    </div>
                </li>
            </ul>
            </div>
        </nav>
    </>
    )
}

export default Navbar