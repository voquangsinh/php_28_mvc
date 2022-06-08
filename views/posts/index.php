<div class="container">
    <div class="row  d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
        <a href="/posts/create" type="button" class="btn btn-primary">Create Posts</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($posts as $post) : ?>
              <tr>
                <th scope="row"><?php echo $post->id ?></th>
                <td><?php echo $post->title ?></td>
                <td><?php echo $post->content ?></td>
                <td><a href="/posts/update" type="button" class="btn btn-primary">Update Posts</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
    </div>
</div>
