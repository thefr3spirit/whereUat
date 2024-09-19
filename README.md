Real-Time Location Sharing for Socializing at MUST

Introduction
At Mbarara University of Science and Technology, students often face difficulty when it comes to locating their friends on campus and in neighboring areas, especially after classes and on weekends. This has made it difficult to plan casual hangouts, reducing social interaction and collaboration opportunities. The need for a reliable, real-time solution to help students find each other quickly is clear.

Problem Definition
The primary issue is the difficulty students experience when trying to find their friends on or around campus. Specific challenges include:
Difficulty in Locating Friends. Students often don't know where their friends are, especially on large campuses or when friends are in nearby areas off-campus. This can lead to missed hangout opportunities.  
Time consuming Communication. Arranging to meet with friends can involve making lots of phone calls or sending several texts that sometimes may not be replied to, which can be time consuming and inefficient.
Safety Concerns: Some students may be concerned about their friend’s and their own safety when moving around campus or nearby areas at night. A reliable system to share their location with trusted friends could help eliminate these concerns.

Proposed Solution
A real-time location-sharing application, specifically designed for students at Mbarara University, would allow them to see where their friends are at and meet up more easily and quickly. The client-server model is ideal for the proposed solution.

Client-Server Architecture
Server: The server would store and manage the location data of all users. It would be responsible for handling requests from clients, updating location information in real-time, and ensuring that data is securely transmitted.
Clients: Clients would be the mobile devices especially smartphones of the students. Each client would have an app that allows users to share their location with selected friends, view their friends' locations on a map, and communicate via messaging.


Feasibility of the solution.
Location Services: Most smartphones and other mobile devices come equipped with a GPS, which allows them to share accurate real-time location data. The technology has been proven to be both effective and reliable when used in other existing applications, such as Google Maps.
Existing Frameworks: Existing frameworks and APIs can simplify the development process, such as Google’s Firebase for backend services and various SDKs for location tracking.
User Base: The initial user base would be manageable since the app would be specifically developed for students at Mbarara University, which allows for a phased evaluation and testing period.

Implementation Considerations
Privacy: Considering that user’s privacy has to be maintained, implementing robust privacy controls would be crucial. Users should have the ability to choose who can see their location and to turn off sharing at any time. 
Energy efficiency: Constant location tracking can drain battery life, so the app would need to be optimized to ensure minimal energy consumption as it updates location data.
Server load: The server would need to be capable of handling potentially thousands of simultaneous connections, depending on the size of the student body. However, with modern cloud services, scaling the server to meet demand could be considered.
Data Security: Implementing encryption for data transmission and storage would be necessary to protect users’ sensitive information.

Benefits of this Client-Server Model
The server can efficiently handle multiple location updates from clients in real-time, ensuring that students always have up-to-date information about the location of their friends.
Privacy and security: The server can implement strong privacy controls, allowing users to choose who can see their location and ensuring that data is encrypted.
Ease of use: The app would simplify the process of finding friends, reducing the need for multiple calls or messages and making socializing more instantaneous.


Potential Challenges
Getting students to adopt the app might require some promotion and incentives, as people may be hesitant to share their location due to privacy concerns.
Reliable network coverage on and around campus is essential for the app to function well. Any areas with poor connectivity could affect the application’s performance.

Conclusion
Implementing a real-time location-sharing app for Mbarara University students would greatly enhance their ability to connect with friends, particularly during their free time. By utilizing a client-server model, the app can provide reliable, secure, and efficient service, making it easier for students to socialize and stay connected.
