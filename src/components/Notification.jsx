import React, { useState } from "react";
import "./Notification.css";
import Navbar from "./Navbar";

const Notification = () => {
    const [activeTab, setActiveTab] = useState("all");

    const showTab = (tabName) => {
        setActiveTab(tabName);
    };

    return (
        <div className="container">
            <Navbar />
            <div className="tabs">
                <button className={`tab ${activeTab === "all" ? "active" : ""}`} onClick={() => showTab("all")}>
                    All
                </button>
                <button className={`tab ${activeTab === "jobs" ? "active" : ""}`} onClick={() => showTab("jobs")}>
                    Jobs
                </button>
                <button className={`tab ${activeTab === "posts" ? "active" : ""}`} onClick={() => showTab("posts")}>
                    My posts
                </button>
                <button className={`tab ${activeTab === "mentions" ? "active" : ""}`} onClick={() => showTab("mentions")}>
                    Mentions
                </button>
            </div>
            
            <div className={`notification-list ${activeTab === "all" ? "visible" : "hidden"}`}>
                <div className="notification-item active">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>Suggested for you:</strong> Check out new job opportunities.</p>
                        <span className="time">14h ago</span>
                    </div>
                </div>
                <div className="notification-item">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>John Doe</strong> liked your post.<br /> 
                        <span className="connections">2 mutual connections</span></p>
                        <span className="time">2d ago</span>
                    </div>
                </div>
                <div className="notification-item">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>Jane Smith</strong> commented on your post.<br /> 
                        <span className="connections">2 mutual connections</span></p>
                        <span className="time">3d ago</span>
                    </div>
                </div>
                <div className="notification-item">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>Company ABC</strong> posted a new job.<br /> 
                        <span className="connections">5 applicants already applied</span></p>
                        <span className="time">4d ago</span>
                    </div>
                </div>
            </div>
            
            <div className={`notification-list ${activeTab === "jobs" ? "visible" : "hidden"}`}>
                <div className="notification-item">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>Company XYZ</strong> posted a new job: UI/UX Designer.<br />
                        <span className="connections">3 mutual connections</span></p>
                        <span className="time">2h ago</span>
                    </div>
                </div>
            </div>
            
            <div className={`notification-list ${activeTab === "posts" ? "visible" : "hidden"}`}>
                <div className="notification-item">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>You</strong> posted about a new design project.<br />
                        <span className="connections">5 reactions</span></p>
                        <span className="time">1d ago</span>
                    </div>
                </div>
            </div>
            
            <div className={`notification-list ${activeTab === "mentions" ? "visible" : "hidden"}`}>
                <div className="notification-item">
                    <div className="profile-pic"></div>
                    <div className="notification-content">
                        <p><strong>Mark Williams</strong> mentioned you in a comment.<br />
                        <span className="connections">2 mutual connections</span></p>
                        <span className="time">1w ago</span>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Notification;
