<div class="col-md-4">

	<!-- Blog Search Well -->
	<div class="card">
	
		
		<div class="card-header">
			Blog Search
		</div>
		<div class="card-body">
			<h4 class="card-title">Search term</h4>
				<form action="search.php" method="post">
					<div class="input-group">
						<input name="search" type="text" class="form-control">
						<span class="input-group-btn">
							<button name="btnsearch" class="btn btn-primary" 
							type="submit">
							Search!</button>
						</span>
					</div>
				</form>
		</div>
		<div class="card-footer">
		By Uuuuggghhh.com
		</div>
	</div>
	
	

	<!-- Blog Categories Well -->
	<hr>
	<h5>List of Categories</h5>
	<ul class="list-group">
		<?php
			$query_categories="SELECT * FROM categories";
			$result_all_categories=mysqli_query($dbconn,$query_categories);
			
			while($cat=mysqli_fetch_array($result_all_categories)){
				echo "<li class='list-group-item justify-content-between'>".
					 $cat['title'].
					 " <span class='badge badge-secondary badge-pill'>15</span>
					 </li>";
			}
		?>
	</ul>
	<hr>
	<!-- Side Widget Well -->
	<div class="card">
		<div class="card-header">
			Blog Search
		</div>
		<div class="card-body">
			<div class="card-body">
				<h4 class="card-title">Ugg Boots</h4>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
			</div>
		</div>
		<div class="card-footer">
		By Uuuuggghhh.com
		</div>
	</div>
</div>