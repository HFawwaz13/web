<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Rafli Khiyanuran Bazhari</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                <a class="nav-link active" href="{{ route('about') }}">About</a>
                <a class="nav-link active" href="{{ route('project') }}">Project</a>
                <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </div>
</nav>
<!--End of navbar-->    