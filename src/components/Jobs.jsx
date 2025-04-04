import React, { useState, useEffect } from "react";
import Navbar from "./Navbar"; // Import the Navbar component
import "./Jobs.css";

const Jobs = () => {
    const [jobTitle, setJobTitle] = useState("");
    const [jobDescription, setJobDescription] = useState("");
    const [jobs, setJobs] = useState([]);

    // Fetch jobs from the backend
    useEffect(() => {
        fetch("http://localhost:5000/jobs") // Adjust URL based on backend
            .then((response) => response.json())
            .then((data) => setJobs(data))
            .catch((error) => console.error("Error fetching jobs:", error));
    }, []);

    // Handle form submission
    const handleSubmit = async (e) => {
        e.preventDefault();
        if (!jobTitle || !jobDescription) {
            alert("Please fill all fields.");
            return;
        }

        const newJob = { title: jobTitle, description: jobDescription };

        try {
            const response = await fetch("http://localhost:5000/jobs", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(newJob),
            });

            if (response.ok) {
                setJobs([...jobs, newJob]); // Update UI
                setJobTitle("");
                setJobDescription("");
            } else {
                console.error("Failed to add job.");
            }
        } catch (error) {
            console.error("Error:", error);
        }
    };

    return (
        <div className="container">
            <Navbar /> {/* Use the separate Navbar component */}

            {/* Job Submission Form */}
            <div className="add-job-section">
                <h2>Add a Job</h2>
                <form onSubmit={handleSubmit}>
                    <input
                        type="text"
                        placeholder="Job Title"
                        value={jobTitle}
                        onChange={(e) => setJobTitle(e.target.value)}
                        required
                    />
                    <textarea
                        rows="4"
                        placeholder="Job Description"
                        value={jobDescription}
                        onChange={(e) => setJobDescription(e.target.value)}
                        required
                    />
                    <button type="submit" className="add-job-btn">Add Job</button>
                </form>
            </div>

            {/* Job Listings */}
            <div className="jobs-section">
                <h2>Jobs For You</h2>
                <div className="jobs-container">
                    {jobs.length > 0 ? (
                        jobs.map((job, index) => (
                            <div className="job-card" key={index}>
                                <div className="job-info">
                                    <h3>{job.title}</h3>
                                    <p>{job.description}</p>
                                </div>
                                <button className="more-btn">Learn More</button>
                            </div>
                        ))
                    ) : (
                        <p>No jobs available.</p>
                    )}
                </div>
            </div>
        </div>
    );
};

export default Jobs;
