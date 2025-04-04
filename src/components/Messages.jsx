import React from "react";
import Navbar from "./Navbar";
import "./Messages.css"; 

const Messages = () => {
  return (
    <div className="container">
      <div className="sidebar">
        <div className="search">
          <input type="text" placeholder="Search" />
        </div>
        <div className="chat-list">
          <div className="chat-item">Person 1</div>
          <div className="chat-item">Person 2</div>
          <div className="chat-item">Person 3</div>
        </div>
        <button className="new-chat-btn">Start New Chat</button>
      </div>

      <div className="chat-window">
        <div className="chat-header">
          <h3>Chat with Person 1</h3>
          <div className="shared-media">Shared Media</div>
        </div>
        <div className="chat-footer">
          <input type="text" placeholder="Write your message" />
          <button className="send-btn">Send</button>
        </div>
      </div>

      <Navbar />
    </div>
  );
};

export default Messages;
