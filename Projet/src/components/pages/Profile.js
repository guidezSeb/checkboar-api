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
      <tr>
          <td>
      <table>
        <tr>
            <th>Favorite Movies</th>
        </tr>
        <table>
        <tr>
          <td>Kill Bill</td>
          <td>Kill Bill 2</td>
          <td>Matrix 1</td>
        </tr>
        </table>
      </table>
      </td>
      </tr>

      <tr>
      <td>
    
      <table>
        <tr>
            <th>Favorite Mangas</th>
          </tr>
          <table>
          <tr>
            <td>Conan</td>
            <td>Grand Blue</td>
            <td>Eyeshield 21</td>
          </tr>
          </table>
        </table>
        </td>
        </tr>

        <tr>
      <td>
      <table>
        <tr>
            <th>Favorite Anime</th>
          </tr>
          <table>
          <tr>
            <td>One Piece</td>
            <td>Yu-Gi-Oh</td>
            <td>Olive y Tom</td>
          </tr>
          </table>
        </table>
        </td>
        </tr>

        <tr>
      <td>
      <table>
        <tr>
            <th>Favorite Books</th>
          </tr>
          <table>
          <tr>
            <td>Le Seigneur des Anneaux : Les Deux Tours</td>
            <td>Le Sorceleur : Le Sang des elfes</td>
            <td>Le Nom du Vent</td>
          </tr>
          </table>
        </table>
        </td>
        </tr>

        </table>
        </div>
        </div>
    <Footer/>
    </>
  );
}