import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';

function Home() {
  return (
    <>
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
  <Footer />
  </>
  );
}

export default Home;