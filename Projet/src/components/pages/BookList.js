import React from 'react';
import '../../styles/App.css';

export default function BookList() {
  return (
    <div className='BookList'>
      <h2 className='Titre-page-produit'>Reading</h2>
      <thead>
        <tr>
          <div className='entetes-page-produit'>
            <th>Title</th>
            <th>Score</th>
            <th>Progress</th>
            <th>Type</th>
         </div>
        </tr>
      </thead>
      <h2 className='Titre-page-produit'>Complete</h2>
      <thead>
        <tr>
          <div></div>
          <th>Title</th>
          <th>Score</th>
          <th>Progress</th>
          <th>Type</th>
        </tr>
      </thead>
    </div>
  );

}