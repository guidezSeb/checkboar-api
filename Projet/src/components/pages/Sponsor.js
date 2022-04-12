import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';

export default function Sponsor() {
  return(
    <>
    <div>
        <img style={{width:80, height:80}} alt="Ankama" src={require('../../Images/Ankama.png')}/><br/>
        <img style={{width:120, height:60}} alt="Babelio" src={require('../../Images/Babelio.png')}/><br/>
        <img style={{width:80, height:80}} alt="Zemmour" src={require('../../Images/GZ.png')}/><br/>
        <img style={{width:120, height:80}} alt="Microsoft" src={require('../../Images/Microsoft.webp')}/><br/>
        <img style={{width:120, height:80}} alt="cocobongo" src={require('../../Images/cocobongo.jpg')}/><br/>
        <img style={{width:120, height:80}} alt="Catho" src={require('../../Images/eveque.png')}/><br/>
    </div>
    <Footer/>
    </>
   );
}