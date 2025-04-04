import React from "react";
import Navbar from "./Navbar";
import "./Profile.css";

const Profile = () => {
  return (
    <div className="profile-container">
      {/* Profile Header */}
      <div className="profile-header">
        <div className="cover-photo"></div>
        <div className="profile-details">
          <div className="profile-photo">
            <img src="/assets/profile.jpg" alt="Profile" />
          </div>
          <div className="profile-info">
            <h2>Dmitry Kargiev</h2>
            <p>Freelancer UX/UI Designer</p>
            <button className="connect-btn">Link</button>
            <button className="message-btn">Message</button>
          </div>
        </div>
      </div>

      {/* Profile Body */}
      <div className="profile-body">
        {/* About Section */}
        <div className="about-section">
          <h3>About</h3>
          <p>
            I'm experienced in eCommerce web projects and mobile banking apps, with a passion for creating beautiful, user-centric digital experiences.
          </p>
        </div>

        {/* Skills Section */}
        <div className="skills-section">
          <h3>Skills & Endorsements</h3>
          <div className="skill">
            <p>User Experience (UX)</p>
            <span className="endorsement-count">7</span>
          </div>
          <div className="skill">
            <p>User Interface (UI)</p>
            <span className="endorsement-count">3</span>
          </div>
          <div className="skill">
            <p>Brand Identity</p>
            <span className="endorsement-count">5</span>
          </div>
        </div>

        {/* Experience Section */}
        <div className="experience-section">
          <h3>Experience</h3>
          <div className="experience-item">
            <h4>Homoeopathy</h4>
            <p>Studied from GMC,Nagpur</p>
          </div>
          <div className="experience-item">
            <h4>Dentist</h4>
            <p>Worked with BJ hospital, Pune</p>
          </div>
        </div>

        {/* Education Section */}
        <div className="education-section">
          <h3>Education</h3>
          <div className="education-item">
            <h4>Moscow State Linguistic University</h4>
            <p>Bachelor's in Design</p>
          </div>
        </div>
      </div>

      {/* Sidebar */}
      <div className="sidebar">
        <div className="profile-stats">
          <h4>Your Dashboard</h4>
          <p>367 profile views</p>
          <p>15 posts</p>
          <p>9 connections</p>
        </div>

        <div className="profiles-section">
          <div className="header">
            <span>MORE PROFILES FOR YOU</span>
            <a href="#" className="view-all">VIEW ALL</a>
          </div>

          {/* Profile Suggestions */}
          {[
            { name: "Darlene Black", job: "Job description", img: "profile.jpg" },
            { name: "Audrey Alexander", job: "Job description", img: "profile.jpg" },
            { name: "Kyle Fisher", job: "Job description", img: "profile.jpg" }
          ].map((profile, index) => (
            <div className="profile-card" key={index}>
              <img src={profile.img} alt="Profile" className="profile-img" />
              <div className="profile-info">
                <h4>{profile.name}</h4>
                <p>{profile.job}</p>
                <a href="#" className="link-btn">Link</a>
              </div>
            </div>
          ))}
        </div>
      </div>

      {/* Navigation Bar */}
      <Navbar />
    </div>
  );
};

export default Profile;
