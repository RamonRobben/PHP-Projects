<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CV Ramon Robben</title>
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <!-- 
    Okay then. You wanted to see the code behind the page hmm...
    Luckily I like code. I really hate when its messy or missing closing divs or end tags.
    If you think anything can be improved just let me know. We can all learn from eachother.
    Ah btw this site is using Laravel but no front-end framework yet.
		I haven't actually found time to learn a good front-end framework.
   -->

  <div class="nav">
    <div class="container">
      <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">

						@guest
            	<li class="nav-item active"><a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a></li>
						@else
							<li class="nav-item active"><a class="nav-link" href="{{ route('logout') }}">{{ __('logout') }}</a></li>
						@endguest

          </ul>
        </div>
      </nav>
    </div>
  </div>

  <div class="banner">
    <div class="container wrapper">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="image">
            <img src="img/final_logo.gif" alt="I don't have a good picture of me yet" width="200px" height="200px">
          </div>
        </div>
        <div class="col-12 col-lg-9">
          <div class="content">
            <h2>Ramon Robben</h2>
            <p><i class="fa fa-map-marker"></i> Gelderland, Nijmegen, Parents Basement</p>
            <p>My name is Ramon Robben. I am a very enthusiastic programmer and I like learning new languages and frameworks. I am also a very quick learner and almost completely self-taught. And the most important thing is that I'm always up for a challenge.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">

      <div class="col-12 col-lg-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-12 col-lg-12">
              <div class="about tile">
                <h3 class="title">About</h3>
                <p>I am Ramon Robben and I'm 20 years old. I got into web development in 2013 when I was doing my Grafi-Media training. Ever since I have been developing websites using basic web languages. Now I create web applications using technologies like NodeJS, RethinkDB and Docker.</p>
              </div>
            </div>         
      
            <div class="col col-12 col-lg-12">
              <div class="about tile">
                <h3 class="title">Links</h3>
                <ul>
                  <li>website: <br><a href="https://ramonrobben.nl">ramonrobben.nl</a></li>
                  <li>linkedin: <br><a href="https://linkedin.com/ramonrobben">RamonRobben</a></li>
                </ul>
              </div>
            </div>
              
            <div class="col col-12 col-lg-12">
              <div class="about tile">
                <h3 class="title">Contact</h3>
                <ul class="mt-2">
                  <li><a href="mailto:ramon.robben@live.nl">Send me an email</a></li>
                </ul>
              </div>
            </div>
          </div>        
        </div>
      </div>

      <div class="col-12 col-lg-9">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-12 col-lg-12">
              <div class="about tile">
                <h3 class="title mb-2">Skills</h3>
                <span class="badge badge-pill badge-primary">NodeJS</span>
                <span class="badge badge-pill badge-primary">Docker</span>
                <span class="badge badge-pill badge-primary">Web Development</span>
                <span class="badge badge-pill badge-primary">HTML</span>
                <span class="badge badge-pill badge-primary">CSS</span>
                <span class="badge badge-pill badge-primary">PHP</span>
                <span class="badge badge-pill badge-primary">C#</span>
              </div>
            </div>         
      
            <div class="col col-12 col-lg-12">
              <div class="work tile">
                <h3 class="title">Work &amp; Internship @guest @else <button type="button" class="btn btn-sm btn-primary" style="float:right;">Add New</button> @endguest</h3>
								@foreach($work as $item)
	                <div class="tile-item">
										<hr>
										<h4 class="title">{{ $item->title }}</h4>
										<p class="job_title">{{ $item->position }}</p>
										<p class="duration">{{ date('M Y', strtotime($item->start_date)) }} - {{ date('M Y', strtotime($item->end_date)) }}</p>
										<p class="location">{{ $item->location }}</p>
										<p class="summary">
											{{ $item->description }}
										</p>

										@guest
										@else
                      <button type="button" name="edit" id="edit" class="btn btn-sm btn-warning" onclick="showEditModal({{ $item->category_id }}, {{ $item->id }})">EDIT</button>
											<a name="delete" id="delete" class="btn btn-sm btn-danger" href="/work/delete/{{ $item->id }}" role="button">DELETE</a>
										@endguest
									</div>
								@endforeach

              </div>
            </div>

            <div class="col col-12 col-lg-12">
              <div class="education tile">
                <h3 class="title">Education</h3>

								@foreach($internship as $item)
	                <div class="tile-item">
										<hr>
										<h4 class="title">{{ $item->title }}</h4>
										<p class="job_title">{{ $item->position }}</p>
										<p class="duration">{{ date('M Y', strtotime($item->start_date)) }} - {{ date('M Y', strtotime($item->end_date)) }}</p>
										<p class="location">{{ $item->location }}</p>
										<p class="summary">
											{{ $item->description }}
										</p>

										@guest
										@else
                      <button type="button" name="edit" id="edit" class="btn btn-sm btn-warning" onclick="showEditModal({{ $item->category_id }}, {{ $item->id }})">EDIT</button>
											<a name="delete" id="delete" class="btn btn-sm btn-danger" href="/work/delete/{{ $item->id }}" role="button">DELETE</a>
										@endguest

									</div>
								@endforeach

              </div>
            </div>
              
            <div class="col col-12 col-lg-12">
              <div class="certification tile">
                <h3 class="title">Certifications</h3>

								@foreach ($certifications as $item)
                <div class="tile-item">
                  <hr>
                  <p class="job_title">{{ $item->title }}</p>
                  <p class="duration">Completed at {{ date('M Y', strtotime($item->received_date)) }}</p>
										@guest
										@else
											<a name="edit" id="edit" class="btn btn-sm btn-warning" href="/work/edit/{{ $item->id }}" role="button">EDIT</a>
											<a name="delete" id="delete" class="btn btn-sm btn-danger" href="/work/delete/{{ $item->id }}" role="button">DELETE</a>
										@endguest
                </div>
								@endforeach

              </div>
            </div>
          </div>  
        </div>
      </div>

    </div>
  </div>

  @guest
  @else
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form action="/api/work/edit">

            <input type="text" id="editId" hidden>
            <input type="text" id="editCategory" hidden>

            <div class="form-group">
              <label for="editTitle">Title:</label>
              <input type="text" class="form-control" name="editTitle" id="editTitle" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="editPosition">Position:</label>
              <input type="text" class="form-control" name="editPosition" id="editPosition" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="editDescription">Description</label>
              <textarea class="form-control" name="editDescription" id="editDescription" rows="4"></textarea>
            </div>

            <div class="form-group">
              <label for="editLocation">Location</label>
              <input type="text" class="form-control" name="editLocation" id="editLocation" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="editStartDate">Start Date:</label>
              <input class="form-control" id="editStartDate" name="editStartDate" type="text" placeholder="yyy-mm-dd">
            </div>

            <div class="form-group">
              <label for="editEndDate">End Date:</label>
              <input class="form-control" id="editEndDate" name="editEndDate" type="text" placeholder="yyy-mm-dd">
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="saveEdit()">Save Edit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">new</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form action="/api/new">

            <div class="form-group">
              <label for="newTitle">Title:</label>
              <input type="text" class="form-control" name="newTitle" id="newTitle" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="newPosition">Position:</label>
              <input type="text" class="form-control" name="newPosition" id="newPosition" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="newDescription">Description</label>
              <textarea class="form-control" name="newDescription" id="newDescription" rows="4"></textarea>
            </div>

            <div class="form-group">
              <label for="newStartDate">Start Date:</label>
              <input class="form-control" id="newStartDate" name="newStartDate" type="text" placeholder="yyy-mm-dd">
            </div>

            <div class="form-group">
              <label for="newEndDate">End Date:</label>
              <input class="form-control" id="newEndDate" name="newEndDate" type="text" placeholder="yyy-mm-dd">
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  @endguest


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
	<script src="js/fontawesome.min.js"></script>
  <script>
    function showEditModal(category, id) {
      $.ajax({
        type: "POST",
        url: "/api/work",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { 'category': category, 'id': id },
        success: function (response) {
          if (response.length > 0) {
            response = response[response.length - 1];

            $('#editId').val(id);
            $('#editCategory').val(category);
            $('#editTitle').val(response.title);
            $('#editPosition').val(response.position);
            $('#editDescription').val(response.description);
            $('#editLocation').val(response.location);
            $('#editStartDate').val(response.start_date);
            $('#editEndDate').val(response.end_date);

            $('#editModal').modal('show');
          }
        },
        error: function (response) {
          console.log('An error has occured');
          console.log(response);
        }
      });
    }

    function saveEdit() {

      console.log('saving edits');

      let id = $('#editId').val();
      let category = $('#editCategory').val();
      let title = $('#editTitle').val();
      let position = $('#editPosition').val();
      let description = $('#editDescription').val();
      let location = $('#editLocation').val();
      let startdate = $('#editStartDate').val();
      let enddate = $('#editEndDate').val();

      $.ajax({
        type: "POST",
        url: "/api/work/edit",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { 
          'category': category,
          'id': id,
          'title': title,
          'position': position,
          'description': description,
          'location': location,
          'startdate': startdate,
          'enddate': enddate
          },
        success: function (response) {
          console.log(response);
          if (response.success) {
            $('#editModal').modal('hide');
            window.location.replace("/");
          }else{
            alert('there was an error updating the item');
          }
        },
        error: function (response) {
          console.log('An error has occured');
          console.log(response);
        }
      });
    }
  </script>

</body>
</html>