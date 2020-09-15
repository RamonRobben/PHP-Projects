<h3 class="mt-4">All books:</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Author</th>
      <th scope="col">Book Link</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($posts as $post) {
            echo <<< EOF
            <tr>
                <th scope="row">$post->id</th>
                <td>$post->author</td>
                <td><a href='?controller=books&action=show&id=$post->id'>View Book Info</a></td>
            </tr>
EOF;
        }
    ?>
  </tbody>
</table>