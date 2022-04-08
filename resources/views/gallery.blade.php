<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gallery </title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
		integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ=="
		crossorigin="anonymous" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style type="text/css">

	</style>
</head>

<body style="background-color: lightyellow;">

			 <nav class="navbar navbar-expand-lg navbar-light container-fluid"style="background-color:rgb(21,82,11,0.3);">
				<a class="navbar-brand" href="#"><img src="/assets/logo.png" width="85" height="75" alt="" loading="lazy"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				  <ul class="navbar-nav">
					<li class="nav-item ">
					<li class="nav-item ">
			  <a class="nav-link" href="/">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="/gallery">Gallery</a>
			</li>
			<li class="nav-item active ">
			  <a class="nav-link " href="/news">News</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link " href="/payment">Payment </a>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="/about-us">About Us </a>
			</li>


				  </ul>
				</div>
		        @if (auth()->user())
            <a class="nav-link" href="/dashboard">Dashboard </a>
        @else
            <a class="nav-link" href="/login">Login </a>

            <a class="nav-link" href="/register">Register </a>
        @endif
			  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">!! Book !! </h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
					  <form>
				<div class="form-row">
				  <div class="form-group col-md-6">
					<label for="inputEmail4">First Name</label>
					<input type="text" class="form-control" id="firstName" placeholder="First Name">
				  </div>
				  <div class="form-group col-md-6">
					<label for="inputPassword4">Last Name</label>
					<input type="text" class="form-control" id="lastName" placeholder="Last Name">
				  </div>
				</div>
				<div class="form-group">
				  <label for="inputAddress">Address</label>
				  <input type="text" class="form-control" id="inputAddress" placeholder="Pokhara">
				</div>
				<div class="form-row">
				  <div class="form-group col-md-8">
					<label for="inputCity">Phone Number</label>
					<input type="tel" class="form-control" id="phoneNumber">
				  </div>
				  <div class="form-group col-md-4">
					<label for="inputState">Available Seat</label>
					<select id="inputState" class="form-control">
					  <option selected>Choose...</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					  <option>16</option>
					  <option>17</option>
					  <option>18</option>
					  <option>19</option>
					  <option>20</option>

					</select>
				  </div>
				  <div class="modal-footer col-md-4">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</div>
					<div class="modal-footer col-md-4">
					<button type="button" class="btn btn-primary">Reserve</button>
					</div>
				  </div>
				</div>
				</div>
			  </form>
					</div>
				  </div>
			  </nav>
	<section class="gallery">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 col-lg-4 thumb">
					<a class="lightbox" href="https://source.unsplash.com/900x900/?nature,Nepal,mardi" data-toggle="lightbox" data-gallery="images-gallery">
						<img src="https://source.unsplash.com/900x900/?nature,Nepal,mardi" alt="" class="art img-fluid">
						<figcaption class="fig-caption">this is for picture caption</figcaption>
					</a>
				</div>
				<div class="col-lg-4 col-md-6 thumb">
					<a class="lightbox" href="https://source.unsplash.com/900x900/?nature,Nepal,river" data-toggle="lightbox" data-gallery="images-gallery">
						<img src="https://source.unsplash.com/900x900/?nature,Nepal,river" alt="" class="art img-fluid">
						<figcaption class="fig-caption">this is for picture caption</figcaption>
					</a>
				</div>
				<div class="col-lg-4 col-md-6 thumb">
					<a class="lightbox" href="https://source.unsplash.com/900x900/?nature,Nepal,mountains" data-toggle="lightbox" data-gallery="images-gallery">
						<img src="https://source.unsplash.com/900x900/?nature,Nepal,mountains" alt="" class="art img-fluid">
						<figcaption class="fig-caption">this is for picture caption</figcaption>
					</a>
				</div>
				<div class="col-lg-4 col-md-6 thumb">
					<a class="lightbox" href="https://source.unsplash.com/900x900/?nature,Nepal,village" data-toggle="lightbox" data-gallery="images-gallery">
						<img src="https://source.unsplash.com/900x900/?nature,Nepal,village" alt="" class="art img-fluid">
						<figcaption class="fig-caption">this is for picture caption</figcaption>
					</a>
				</div>
				<div class="col-lg-4 col-md-6 thumb">
					<a class="lightbox" href="https://source.unsplash.com/900x900/?nature,Nepal,countryside" data-toggle="lightbox" data-gallery="images-gallery">
						<img src="https://source.unsplash.com/900x900/?nature,Nepal,countryside" alt="" class="art img-fluid">
						<figcaption class="fig-caption">this is for picture caption</figcaption>
					</a>
				</div>
				<div class="col-lg-4 col-md-6 thumb">
					<a class="lightbox" href="https://source.unsplash.com/900x900/?nature,Nepal,bridge" data-toggle="lightbox" data-gallery="images-gallery">
						<img src="https://source.unsplash.com/900x900/?nature,Nepal" alt="" class="art img-fluid">
						<figcaption class="fig-caption">this is for picture caption</figcaption>
					</a>
				</div>
			</div>

		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"
		integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA=="
		crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).on('click', '[data-toggle="lightbox"]', function (event) {
			event.preventDefault();
			$(this).ekkoLightbox();
		});
	</script>
</body>

</html>
