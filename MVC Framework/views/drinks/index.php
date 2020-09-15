<h3 class="mt-4">All drinks:</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Drink Info</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($posts as $post) {
            echo <<< EOF
            <tr>
                <th scope="row">$post->id</th>
                <td>$post->name</td>
                <td><a href='?controller=drinks&action=show&id=$post->id'>View Drink Info</a></td>
            </tr>
EOF;
        }
    ?>
  </tbody>
</table>