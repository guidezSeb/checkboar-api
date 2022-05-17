import React from 'react';
import '../../styles/App.css';
import '../../styles/Home.css';
import '../../styles/Global.css';
import Footer from '../Footer';

fetch("https://checkboar-api.herokuapp.com/api/elements/", {
  "method": "GET",
  "headers": {
    "host":"checkboar-api.herokuapp.com",
    "content-type": "application/json",
    "accept": "application/json"
  },
  "body": JSON.stringify({
    name: this.state.name,
    notes: this.state.notes
  })
});

function Home() {
  return (
    <>
    <div className='page-container Home'>
    <div className='Home-tabs'>

    {/* SECTION BOOKS */}
    <section className='Home-tab-section Home-tab-books'>
          <p className='Home-tab-title'>Book in Progress</p>
          <div className='Home-tab-container'>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/HP_T5.jpg')}/>
            </div>
            <div>
             <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/HP_T5.jpg')}/> 
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/HP_T5.jpg')}/>
            </div>
          </div>
    </section>
    {/* /SECTION BOOKS */}

    {/* SECTION MANGAS */}

    <section className='Home-tab-section Home-tab-mangas'>
          <p className='Home-tab-title'>Book in Progress</p>
          <div className='Home-tab-container'>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/conan_1.jpg')}/>
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/conan_1.jpg')}/>
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/conan_1.jpg')}/>
            </div>
          </div>
    </section>
    {/* SECTION /MANGAS */}

    {/* SECTION MOVIES */}
    <section className='Home-tab-section Home-tab-movies'>
          <p className='Home-tab-title'>Book in Progress</p>
          <div className='Home-tab-container'>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/IFSLSR.jpg')}/>
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/IFSLSR.jpg')}/>
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/IFSLSR.jpg')}/>
            </div>
          </div>
    </section>
    {/* SECTION MOVIES */}

    {/* SECTION ANIME */}
    <section className='Home-tab-section Home-tab-animes'>
          <p className='Home-tab-title'>Book in Progress</p>
          <div className='Home-tab-container'>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/Naruto_shipu.jpg')}/>
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/Naruto_shipu.jpg')}/>
            </div>
            <div>
              <img style={{}} alt="book_image" className='thumbnail-img' src={require('../../Images/tmp/Naruto_shipu.jpg')}/>
            </div>
          </div>
    </section>
    {/* SECTION ANIME */}

   
    </div>
    </div>
  <Footer />
  </>
  );
}

export default Home;