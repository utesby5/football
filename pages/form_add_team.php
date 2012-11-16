<form action="actions/add_team.php" method="post" enctype="multipart/form-data">

	<div class="control-group">
		<label class="control-label" for="name">Opponent Name</label>
		<div class="controls">
			<input type="text" name="school" placeholder="School" /> <input type="text" name="mascot" placeholder="Mascot" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="name">Time</label>
		<div class="controls">
			<input type="datetime" name="time"/> 
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-group" for="name"></label>
		<div class="controls">
			<label><input type="radio" name="location" value="home"/>Home</label>
			<label><input type="radio" name="location" value="away"/>Away</label>
		</div>
	</div>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
	
	
	
</form>