import React from 'react';
import '../../styles/App.css';
import '../../styles/Element.css';
import Footer from '../Footer';

export default function BookList() {
  return (
    <>
    <div className='BookList'>
      <h2 className='Titre-page-produit'>Reading</h2>
      <div className='tableau'>
      <table>
        <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Nationality</th>
            <th>Year</th>
            <th>Type</th>
            <th>Progress</th>
        </tr>
        <tr>
          <td>image</td>
          <td>Harry Potter et la chambre des secrets</td>
          <td>JK Rowling</td>
          <td>British</td>
          <td>1998</td>
          <td>Roman</td>
          <td>Chapter 6</td>
        </tr>
      </table>
      </div>
      <h2 className='Titre-page-produit'>Complete</h2>
      <div className='tableau'>
      <table>
        <tr>
        <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Nationality</th>
            <th>Year</th>
            <th>Type</th>
            <th>Score</th>
        </tr>
        <tr>
          <td>image</td>
          <td>Harry Potter à l'école des Sorciers</td>
          <td>JK Rowling</td>
          <td>British</td>
          <td>1997</td>
          <td>Roman</td>
          <td>4.5/5</td>
        </tr>
      </table>
      </div>
    </div>
    <Footer/>
    </>
  );

}