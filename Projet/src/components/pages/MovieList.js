import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';
import '../../styles/Element.css';

export default function MovieList() {
  return(
    <>
    <div className='page-container MovieList'>
    <div className='wrap'>
      <h2 className='page-list-title'>In progress</h2>
      <div className='tableau'>
      <table>
        <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Director</th>
            <th>Nationality</th>
            <th>Year</th>
            <th>Category</th>
        </tr>
        <tr>
        <td>image</td>
          <td>La Ligne verte</td>
          <td>Frank Darabont</td>
          <td>US</td>
          <td>1999</td>
          <td>Drama</td>
        </tr>
      </table>
      </div>
      <h2 className='page-list-title'>Complete</h2>
      <div className='tableau'>
      <table>
        <tr>
        <th>Cover</th>
            <th>Title</th>
            <th>Director</th>
            <th>Nationality</th>
            <th>Year</th>
            <th>Category</th>
            <th>Score</th>
        </tr>
        <tr>
          <td>image</td>
          <td>Star Wars : La Menace Fantôme</td>
          <td>George Lucas</td>
          <td>US</td>
          <td>2001</td>
          <td>Science-Fiction</td>
          <td>3.5/5</td>
        </tr>
      </table>
      </div>
    </div>
    </div>
    <Footer/>
    </>
  );
}