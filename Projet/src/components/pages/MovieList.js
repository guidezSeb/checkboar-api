import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';
import '../../styles/Element.css';

export default function MovieList() {
  return(
    <>
    <div className='MovieList'>
      <h2 className='Titre-page-produit'>In progress</h2>
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
      <h2 className='Titre-page-produit'>Complete</h2>
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
    <Footer/>
    </>
  );
}