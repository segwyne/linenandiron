<?php
 $db = mysqli_connect('192.168.1.150','judy','5dragons','Calendar')
 or die('Error connecting to MySQL server.');

include('header.php') ?>

<h1>Add an Event</h1>
<form id="add-event-form" class="event">
	<label for="event-title">Event Title</label>
	<input type="text" id="event-title">
	<label for="event-era">Era</label>
	<input type="radio" name="event-era" value="ancient">Ancient cultures (before 500 AD)<br>
	<input type="radio" name="event-era" value="middle">Middle Ages (500 AD - 1500 AD)<br>
	<input type="radio" name="event-era" value="renaissance">Renaissance (1300 AD - 1700 AD)<br>
	<input type="radio" name="event-era" value="colonial">Colonial (1500 AD - 1800 AD)<br>
	<input type="radio" name="event-era" value="fandi">French and Indian War (1754-1763)<br>
	<input type="radio" name="event-era" value="revwar">Revolutionary War (1775-1783)<br>
	<input type="radio" name="event-era" value="1812war">War of 1812 (1812-1815)<br>
	<input type="radio" name="event-era" value="civwar">Civil War (1860s)<br>
	<input type="radio" name="event-era" value="great">World War I<br>
	<input type="radio" name="event-era" value="wwii">World War II<br>
	<label for="event-host">Host Organization</label>
	<input type="text" id="event-host">
	<label for="event-start-date">Start Date</label>
	<input type="date" id="event-start-date">
	<label for="event-start-time">Start Time</label>
	<input type="time" id="event-start-time">
	<label for="event-end-date">End Date</label>
	<input type="date" id="event-end-date">
	<label for="event-end-time">End Time</label>
	<input type="time" id="event-end-time">
	<label for="event-external-link">External Link</label>
	<input type="text" id="event-external-link">
	<label for="event-contact-name">Contact Name</label>
	<input type="text" id="event-contact-name">
	<label for="event-fee">Fee</label>
	<input type="text" id="fee">
	<label for="event-membership">Membership required?</label>
	<input type="radio" name="event-membership" value="yes">Yes<br>
	<input type="radio" name="event-membership" value="no">No<br>
	<label for="event-venue-name">Venue Name</label>
	<input type="text" id="event-venue-name">
	<label for="event-venue-street">Street</label>
	<input type="text" id="event-venue-street">
	<label for="event-venue-city">City</label>
	<input type="text" id="event-venue-city">
	<label for="event-venue-state">State</label>
	<input type="text" id="event-venue-state">
	<label for="event-venue-zip">Zip code</label>
	<input type="text" id="event-venue-zip">
	<label for="event-details">Details</label>
	<input type="text" id="event-details">
	<label for="event-photo-link">Upload a photo</label>
	<input type="text" id="event-photo-link">
	<br><br>
	<input type="submit" value="Submit Event">
</form>

<?php 
mysqli_close($db);

include('footer.php') ?>
