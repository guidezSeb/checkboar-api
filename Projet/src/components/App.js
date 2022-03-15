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
         <Route exact path="/" element={<Home/>}/>
          <Route exact path="/mangalist" element={<MangaList/>}/>
          <Route exact path="/movielist" element={<MovieList/>}/>
          <Route exact path="/profile" element={<Profile/>}/>
          <Route exact path="/booklist" element={<BookList/>}/>
          <Route exact path="/animelist" element={<AnimeList/>}/>
        </Routes>
      </Router>
    </>
  );
}

export default App;