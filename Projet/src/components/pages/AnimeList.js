import React from 'react';
import '../../styles/App.css';
import Footer from '../Footer';
import '../../styles/Element.css';

export default function AnimeList() {
  return(
    <>
<div className='page-container AnimeList'>
<div className='wrap'>
      <h2 className='page-list-title'>In progress</h2>
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
          <td>Le Château dans le ciel</td>
          <td>4</td>
          <td>30%</td>
          <td>Film d'Animation</td>
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
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      </div>
    </div>
    </div>
    <Footer/>
    </>
  );

}

