import React from 'react';
import '../../styles/App.css';
import '../../styles/Element.css';

export default function BookList() {
  return (
    <div className='BookList'>
      <h2 className='Titre-page-produit'>Reading</h2>
      <div className='tableau'>
      <table>
        <tr>
            <th></th>
            <th>Title</th>
            <th>Score</th>
            <th>Progress</th>
            <th>Type</th>
        </tr>
        <tr>
          <td>image</td>
          <td>Harry Potter et la chambre des secrets</td>
          <td>4.5</td>
          <td>17/23</td>
          <td>Roman</td>
        </tr>
      </table>
      </div>
      <h2 className='Titre-page-produit'>Complete</h2>
      <div className='tableau'>
      <table>
        <tr>
            <th></th>
            <th>Title</th>
            <th>Score</th>
            <th>Progress</th>
            <th>Type</th>
        </tr>
        <tr>
          <td>image</td>
          <td>Harry Potter à l'école des Sorciers</td>
          <td>4.5</td>
          <td>20/20</td>
          <td>Roman</td>
        </tr>
      </table>
      </div>
    </div>
  );

}