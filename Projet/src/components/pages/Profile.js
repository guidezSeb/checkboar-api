import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';
import '../../styles/Element.css';

export default function Profile() {
  return(
    <>
       <div className='PageProfil'>
       <h2 className='Titre-page-produit'>Information</h2>
      <div className='tableau'>
      <table>
        <tr>
            <th>Photo</th>
            <th>Pseudo</th>
            <th>E-Mail</th>
        </tr>
        <tr>
          <td>image</td>
          <td>Sebgdu59</td>
          <td>Leonard.guidez@hotmail.fr</td>
        </tr>
      </table>
      </div>
      <div className='tableau-profil'>
        <table>
<td>
      <table>
        <tr>
            <th>Films Favoris</th>
        </tr>
        <tr>
          <td>Kill Bill</td>
          <td>Kill Bill 2</td>
          <td>Matrix 1</td>
        </tr>
      </table>
      </td>
      <td>
      <table>
        <tr>
            <th>Mangas Favoris</th>
        </tr>
        <tr>
          <td>Conan</td>
          <td>Grand Blue</td>
          <td>Eyeshield 21</td>
        </tr>
      </table>
      </td>
      </table>

      </div>

      </div>
    <Footer/>
    </>
  );
}