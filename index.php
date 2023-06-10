<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 ">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container mt-2 ">
        <div class="row justify-content-center ">              
            <div class="col-sm-12 col-md-8 col-lg-6 card bg-info ">
                <div class="card-header">
                    Student Info..
                </div>
                <div class="card-body">  
                    <form>
                        <div class="mb-3 ">
                            <label for="exampleInputStudentName" class="form-label">Student Name</label>
                            <input type="email" class="form-control" id="exampleInputStudentName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputStudentEmail" class="form-label">Student Email</label>
                            <input type="email" class="form-control" id="exampleInputStudentEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputStudentPhone" class="form-label">Student Phone</label>
                            <input type="text" class="form-control" id="exampleInputStudentPhone" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputStudentSubject" class="form-label">Student Subject</label>
                            <input type="text" class="form-control" id="exampleInputStudentSubject" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputStudentImage" class="form-label">Student Image</label>
                            <input type="text" class="form-control" id="exampleInputStudentImage" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>