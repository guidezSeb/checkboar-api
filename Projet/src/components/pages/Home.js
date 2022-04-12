import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';

function Home() {
  return (
    <>
    <div className='Home'>
    <div className='Home-tab-books'>
    <table>
        <tr>
          <th>Book in Progress</th>
        </tr>
        <table>
          <tr>
            <td><img style={{width:80, height:80}} alt="book_image" src={require('../../Images/tmp/HP_T5.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="book_image" src={require('../../Images/tmp/HP_T5.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="book_image" src={require('../../Images/tmp/HP_T1.png')}/></td>
          </tr>
          </table>
        </table>
    </div>

    <div className='Home-tab-mangas'>
    <table>
        <tr>
          <th>Manga in Progress</th>
        </tr>
        <table>
          <tr>
            <td><img style={{width:80, height:80}} alt="manga_image" src={require('../../Images/tmp/conan_1.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="manga_image" src={require('../../Images/tmp/conan_1.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="manga_image" src={require('../../Images/tmp/conan_1.jpg')}/></td>
          </tr>
          </table>
        </table>
    </div>

    <div className='Home-tab-movies'>
    <table>
        <tr>
          <th>Movie plan to watch</th>
        </tr>
        <table>
          <tr>
            <td><img style={{width:80, height:80}} alt="movie_image" src={require('../../Images/tmp/IFSLSR.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="movie_image" src={require('../../Images/tmp/IFSLSR.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="movie_image" src={require('../../Images/tmp/IFSLSR.jpg')}/></td>
          </tr>
          </table>
        </table>
    </div>

    <div className='Home-tab-animes'>
    <table>
        <tr>
          <th>Animes in Progress</th>
        </tr>
        <table>
          <tr>
            <td><img style={{width:80, height:80}} alt="anime_image" src={require('../../Images/tmp/Naruto_shipu.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="anime_image" src={require('../../Images/tmp/Naruto_shipu.jpg')}/></td>
            <td><img style={{width:80, height:80}} alt="anime_image" src={require('../../Images/tmp/Naruto_shipu.jpg')}/></td>
          </tr>
          </table>
        </table>
    </div>
    </div>
  <Footer />
  </>
  );
}

export default Home;