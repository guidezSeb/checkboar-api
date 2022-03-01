import '../styles/Navbar.css';
import React, {useState} from 'react'
import {Link} from 'react-router-dom'

function Navbar(){
    return(
        <>
            <nav classname="navbar">
                <div classname="navbar-container">
                    <Link to='/' className='navbar-logo'>
                        Test <i className=''/>
                    </Link>
                <div classname='menu-icon'>
                    <></>
                </div>
                </div>
            </nav>
        </>
    )
}

export default Navbar