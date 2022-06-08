<div class="container">
    <div class="row  d-flex justify-content-center align-items-center h-100">
        <div class="col-6">
        <form class="w-100 mx-auto" action="/posts" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/posts" type="button" class="btn btn-primary">Back</a>

            </form>
            
        </div>
    </div>
</div>
