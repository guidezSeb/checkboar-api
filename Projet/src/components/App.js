import React from 'react';
import Navbar from '../components/Navbar';
import '../styles/App.css';
import Home from '../components/pages/Home';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import MangaList from '../components/pages/MangaList';
import MovieList from '../components/pages/MovieList';
import BookList from '../components/pages/BookList';
import Profile from '../components/pages/Profile';
import AnimeList from '../components/pages/AnimeList';

function App() {
  return (
    <>
      <Router>
        <Navbar />
        <Routes>
          <Route path='/' exact component={Home} />
          <Route path='/mangalist' component={MangaList} />
          <Route path='/movielist' component={MovieList} />
          <Route path='/profile' component={Profile} />
          <Route path='/booklist' component={BookList} />
          <Route path='/animelist' component={AnimeList} />
        </Routes>
      </Router>
    </>
  );
}

export default App;