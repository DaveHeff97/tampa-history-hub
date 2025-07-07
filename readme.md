Tampa History Hub

A professional, responsive website for exploring and submitting Tampa’s historical sites. Hosted for free on InfinityFree at tampahistory.rf.gd, this project showcases web development skills with a community-driven focus.

Features





Responsive Design: Mobile-first layout using Tailwind CSS (via CDN).



Historical Sites: Curated list of Tampa landmarks like Ybor City and Tampa Theatre.



User Submissions: Form for users to submit new historical sites, stored in sites.txt.



Interactive Map: Embedded Google Map centered on Tampa.



SEO Optimized: Meta tags for local visibility.



Smooth Scrolling: JavaScript for enhanced UX.

Tech Stack





Frontend: HTML, CSS (Tailwind via CDN), JavaScript



Backend: PHP (form handling)



Hosting: InfinityFree (free with tampahistory.rf.gd)



Development: Visual Studio Code

Setup Instructions





Clone the Repository:

git clone https://github.com/yourusername/tampa-history-hub.git



Open in VSCode:





Install extensions: Live Server, GitLens, Prettier.



Open the tampa-history-hub folder.



Test Locally:





Right-click tampahistorywebsite.html and select "Open with Live Server".



Note: PHP form requires server-side testing post-deployment.



Deploy to InfinityFree:





Sign up at InfinityFree and set up tampahistory.rf.gd.



Upload tampahistorywebsite.html and submit.php via File Manager.



Set sites.txt permissions to 666 after first submission.



Customize:





Replace [Your Name] with your name.



Update the Google Maps iframe with specific Tampa coordinates.



Push to GitHub:

git add .
git commit -m "Initial Tampa History Hub"
git push origin main

Project Structure

tampa-history-hub/
├── tampahistorywebsite.html  # Main page
├── submit.php               # PHP form handler
├── sites.txt                # Stores submissions
└── README.md                # Documentation

Future Improvements





Add a database (e.g., MySQL) for submissions.



Display submitted sites on the page.



Add images for sites using free hosting (e.g., Cloudinary).

Demo

Live at: tampahistory.rf.gd

License

MIT License