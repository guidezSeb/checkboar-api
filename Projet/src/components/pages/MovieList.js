import React from 'react';
import '../../styles/App.css';

export default function MovieList() {
  return(
    <div className='MovieList'>
      <h2 className='Titre-page-produit'>In progress</h2>
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
          <td>La Ligne verte</td>
          <td>5</td>
          <td>65%</td>
          <td>Drame</td>
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
          <td>Star Wars : La Menace Fantôme</td>
          <td>3.5</td>
          <td>100%</td>
          <td>Film culte</td>
        </tr>
      </table>
      </div>
    </div>

  );
}