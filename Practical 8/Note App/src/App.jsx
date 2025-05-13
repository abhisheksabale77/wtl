import React, { useState, useEffect } from 'react';
import { nanoid } from 'nanoid';
import NoteList from './components/NoteList';
import Header from './components/Header';

const App = () => {
  const [notes, setNotes] = useState([
    {
      id: nanoid(),
      text: 'This is my first note!',
      date: new Date().toLocaleDateString(),
    },
  ]);

  const [darkMode, setDarkMode] = useState(false);

  useEffect(() => {
    const savedNotes = JSON.parse(localStorage.getItem('react-notes-app-data'));
    if (savedNotes) setNotes(savedNotes);
  }, []);

  useEffect(() => {
    localStorage.setItem('react-notes-app-data', JSON.stringify(notes));
  }, [notes]);

  const addNote = (text) => {
    const newNote = {
      id: nanoid(),
      text,
      date: new Date().toLocaleDateString(),
    };
    setNotes([...notes, newNote]);
  };

  const deleteNote = (id) => {
    const updatedNotes = notes.filter((note) => note.id !== id);
    setNotes(updatedNotes);
  };

  return (
    <div className={`${darkMode ? 'dark-mode' : ''}`}>
      <div className="container">
        <Header handleToggleDarkMode={setDarkMode} />
        <NoteList notes={notes} handleAddNote={addNote} handleDeleteNote={deleteNote} />
      </div>
    </div>
  );
};

export default App;