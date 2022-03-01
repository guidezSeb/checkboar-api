import './Navbar.css';
import React, {useState} from 'react'

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