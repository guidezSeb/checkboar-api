import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';
import '../../styles/Element.css';

export default function MangaList() {
  return(
    <>
   <div className='page-container MangaList'>
     <div className='wrap'>
      <h2 className='page-list-title'>Reading</h2>
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
          <td>One Piece : Tome 2</td>
          <td>4</td>
          <td>5/6</td>
          <td>Manga</td>
        </tr>
      </table>
      </div>
      <h2 className='page-list-title'>Complete</h2>
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
          <td>One Piece : Tome 2</td>
          <td>5</td>
          <td>10/10</td>
          <td>Manga</td>
        </tr>
      </table>
      </div>
      </div>
    </div>
    <Footer/>
    </>
   );
}