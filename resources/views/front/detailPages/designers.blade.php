@extends("front.layout")
@section("content")
    <div class="container">
        <div class="designers-input m-3">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" style="display: flex">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>

        <div class="profile-list-item">
            <div class="list-row header-list">
                <div class="col-12 col-md-6 list-item name">
                    <button type="button" class="list-toggle"><span class="sort-arrow">Name</span></button>
                </div>
                <div class="col-12 col-md-1-5 list-item">
                    <button type="button" class="list-toggle"><span class="sort-arrow">Country</span></button>
                </div>
                <div class="col-12 col-md-1 list-item">

                </div>
                <div class="col-12 col-md-1 list-item">

                </div>
                <div class="col-12 col-md-2 list-item">

                </div>
            </div>
        </div>
    </div>
@endsection
