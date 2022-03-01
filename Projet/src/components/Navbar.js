<<<<<<< HEAD
import './Navbar.css';
import React, {useState} from 'react'
=======
import '../styles/Navbar.css';
import React from 'react'
>>>>>>> df798a0c4442a11a79c5cb51775b26d38a50b06e

function Navbar(){
    return(
        <>
            <nav classname="navbar">
                <div classname="navbar-container">
                    <Link to="/" className="navbar-Log">
                    Test    
                    </Link> 
                </div>
            </nav>
        </>
    )
}

export default Navbar