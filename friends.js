let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: YOUR_LAT, lng: YOUR_LNG }, // Replace with user's current location
        zoom: 14,
    });
    loadFriendsMarkers();
}

// Open and close the add friend modal
function openAddFriendModal() {
    document.getElementById("addFriendModal").style.display = "block";
}
function closeAddFriendModal() {
    document.getElementById("addFriendModal").style.display = "none";
}

// Search users from the database
function searchUsers(query) {
    fetch(`search_users.php?query=${query}`)
        .then(response => response.json())
        .then(data => {
            const suggestionsList = document.getElementById("suggestionsList");
            suggestionsList.innerHTML = "";
            data.forEach(user => {
                const listItem = document.createElement("li");
                listItem.textContent = user.username;
                listItem.onclick = () => addFriend(user.username);
                suggestionsList.appendChild(listItem);
            });
        });
}

// Add selected friend to the friend list and update map
function addFriend(username) {
    fetch("add_friend.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ username: username })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const friendsList = document.getElementById("friendsList");
            const newFriend = document.createElement("li");
            newFriend.textContent = username;
            friendsList.appendChild(newFriend);
            closeAddFriendModal();
            loadFriendsMarkers();
        }
    });
}

// Load markers for existing friends on the map
function loadFriendsMarkers() {
    fetch("get_friends_locations.php")
        .then(response => response.json())
        .then(data => {
            data.forEach(friend => {
                const marker = new google.maps.Marker({
                    position: { lat: parseFloat(friend.latitude), lng: parseFloat(friend.longitude) },
                    map: map,
                    title: friend.username,
                });
            });
        });
}
