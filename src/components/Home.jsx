import React from "react";
import Navbar from "./Navbar";
import "./Home.css";

const Home = () => {
  return (
    <div className="container">
      <header>
      <img src="/assets/Background.jpg" alt="Profile Banner" className="banner" />
      </header>

      <section className="profile-section">
        <div className="profile-pic">
          <img src="/assets/profile.jpg" alt="Profile Picture" />
        </div>
        <div className="profile-info">
          <h1>Username</h1>
          <p>Profession</p>
          <p>Description</p>
        </div>
      </section>

      <div className="general-info">
        <h2>General Information</h2>
        <p>Information</p>
      </div>

      <div className="posts">
        <h2>Posts</h2>
        <p>Your Posts</p>
      </div>

      <div className="experience">
        <h2>Experience</h2>
        <div className="experience-item">
          <div>
            <h3>Freelance UX/UI Designer</h3>
            <p>Jun 2022 - Present | 1 yr 4 mos</p>
            <p>Description</p>
          </div>
        </div>
        <div className="experience-item">
          <div>
            <h3>UX/UI Designer</h3>
            <p>Jun 2022 - Present | 3 mos</p>
            <p>Description</p>
          </div>
        </div>
      </div>

      <Navbar />
    </div>
  );
};

export default Home;
