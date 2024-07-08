<!DOCTYPE html>
<html lang="en">

<head>
  <title>TO-DO List</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="todo-container">
    <div id="header">
      <h1>To Do List</h1>
    </div>
    <form action="data.php" method="post" autocomplete="off">

      <div class="todo-form">
        <label for="title">Title</label> <br>
        <input class="form-control" type="text" name="title" id="title" placeholder="Type todos here" Required>

      </div><br>
      <button>Add To ToDo'S</button>

    </form>

    <h2>Task List</h2>
    <ul id="list-container">
      <?php
      include "database.php";
      $sql = "SELECT * FROM todos";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($rows = mysqli_fetch_assoc($result)) {
          $id = $rows["id"];
          $title = $rows["Title"];
      ?>
          <li> <?php echo $title ?></li> <a href="delete.php?id=<?php echo $id ?>" role="button"><button class="ui-btn">Completed</button></a>
      <?php
        }
      }
      ?>
    </ul>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>