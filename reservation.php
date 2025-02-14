<?php 
$pageTitle = "Rules and Reservation";
include 'header.php'; 
?>

<div class="flex-grow-1 p-4 d-flex">
    <!-- Rules and Regulations -->
    <div class="w-50 me-3">
        <div class="card" style="max-width: 40rem;">
            <div class="card-header text-white text-center" style="background-color:#FFA500;">
                <h5 class="mb-0">Rules and Regulations</h5>
            </div>
            <div class="card-body" style="max-height: 500px; overflow-y: auto;">
                <h5 class="text-center"><strong>University of Cebu</strong></h5>
                <p class="mb-2 text-center"><strong>COLLEGE OF INFORMATION & COMPUTER STUDIES</strong></p>
                <br>
                <p><strong>LABORATORY RULES AND REGULATIONS</strong></p>
                <p>To avoid embarrassment and maintain camaraderie with your friends and superiors at our laboratories, please observe the following:</p>
                <p>1. Maintain silence, proper decorum, and discipline inside the laboratory. Mobile phones, walkmans and other personal pieces of equipment must be switched off.</p>
                <p>2. Games are not allowed inside the lab. This includes computer-related games, card games and other games that may disturb the operation of the lab.</p>
                <p>3. Surfing the Internet is allowed only with the permission of the instructor. Downloading and installing of software are strictly prohibited.</p>
                <p>4. Getting access to other websites not related to the course (especially pornographic and illicit sites) is strictly prohibited.</p>
                <p>5. Deleting computer files and changing the set-up of the computer is a major offense.</p>
                <p>6. Observe computer time usage carefully. A fifteen-minute allowance is given for each use. Otherwise, the unit will be given to those who wish to "sit-in".</p>
                <p>7. Observe proper decorum while inside the laboratory.</p>
                <ul>
                    <li>Do not get inside the lab unless the instructor is present.</li>
                    <li>All bags, knapsacks, and the likes must be deposited at the counter.</li>
                    <li>Follow the seating arrangement of your instructor.</li>
                    <li>At the end of class, all software programs must be closed.</li>
                    <li>Return all chairs to their proper places after using.</li>
                </ul>
                <p>8. Chewing gum, eating, drinking, smoking, and other forms of vandalism are prohibited inside the lab.</p>
                <p>9. Anyone causing a continual disturbance will be asked to leave the lab. Acts or gestures offensive to the members of the community, including public display of physical intimacy, are not tolerated.</p>
                <p>10. Persons exhibiting hostile or threatening behavior such as yelling, swearing, or disregarding requests made by lab personnel will be asked to leave the lab.</p>
                <p>11. For serious offense, the lab personnel may call the Civil Security Office (CSU) for assistance.</p>
                <p>12. Any technical problem or difficulty must be addressed to the laboratory supervisor, student assistant or instructor immediately.</p>
                <br>
                <p><strong>DISCIPLINARY ACTION</strong></p>
                <ul>
                    <li>First Offense - The Head or the Dean or OIC recommends to the Guidance Center for a suspension from classes for each offender.</li>
                    <li>Second and Subsequent Offenses - A recommendation for a heavier sanction will be endorsed to the Guidance Center.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sit-In Reservation Form -->
    <div class="w-50 ms-3">
        <div class="card" style="max-width: 40rem;">
            <div class="card-header text-white text-center" style="background-color:#28A745;">
                <h5 class="mb-0">Sit-In Reservation</h5>
            </div>
            <div class="card-body">
                <form action="process_reservation.php" method="POST">
                   
                    <div class="mb-3">
                        <label for="lab" class="form-label">Select Laboratory</label>
                        <select class="form-select" id="lab" name="lab" required>
                            <option selected disabled>Select Laboratory</option>
                            <option value="Lab 1">Lab 1</option>
                            <option value="Lab 2">Lab 2</option>
                            <option value="Lab 3">Lab 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pcNumber" class="form-label">PC Number</label>
                        <input type="number" class="form-control" id="pcNumber" name="pcNumber" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Reserve</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
