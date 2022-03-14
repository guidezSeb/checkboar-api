import '../styles/Navbar.css';
import React, {useState} from 'react'
import {Link} from 'react-router-dom'

function Navbar(){
    const [click, setClick] = useState(false);
    const handleClick = () => setClick(!click);
    const closeMobileMenu = () => setClick(false)

    return(
        <>
            <nav classname="navbar">
                <div classname="navbar-container">
                    <Link to='/' className='navbar-logo'>
                        Test <i className=''/>
                    </Link>
                <div classname='menu-icon' onClick={handleClick}>
                    <i className={click ? 'fas fa-times' : 'fas fa-bars'}/>
                </div>
                <ul className={click ? 'nav-menu active' : 'nav-menu'}>
                <li className='nav-item'>
                    <Link to='/' className='nav-links' onClick={closeMobileMenu}>
                        Home
                    </Link>
                </li>
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
                    <Link to='/moovielist' className='nav-links' onClick={closeMobileMenu}>
                        Movie List
                    </Link>
                </li>
                </ul>
                </div>
            </nav>
        </>
    )
}

export default Navbar