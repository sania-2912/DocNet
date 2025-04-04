import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Home from "./components/Home";
import Jobs from "./components/Jobs";
import Messages from "./components/Messages";
import Notifications from "./components/Notification";
import Profile from "./components/Profile";
import Navbar from "./components/Navbar";

const App = () => {
  return (
    <Router>
      <Navbar /> {Navbar}
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/jobs" element={<Jobs />} />
        <Route path="/messages" element={<Messages />} />
        <Route path="/notifications" element={<Notification />} />
        <Route path="/profile" element={<Profile />} />
      </Routes>
    </Router>
  );
};

export default App;
